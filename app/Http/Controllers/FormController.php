<?php


namespace App\Http\Controllers;

//use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use App\User;
use App\HIFData;
use App\CMFData;
use Illuminate\Routing\UrlGenerator;

class FormController extends Controller
{
    const FORM_START = 'form_start';
    const FORM_FINISH = 'form_finish';

    public function createNewUser(Request $request, $formType)
    {
        if(empty(Input::post()))
        {
            return view('newUserForm')->with([
                'formType' => $formType,
                'viewType' => self::_getViewType($formType)
            ]);
        }
        else
        {
            $clientName = Input::post('clientName');
            $userToken = self::_generateUserToken($clientName);
            self::_createNewDBRecords($clientName, $userToken, $formType);

            self::_populateSessionVars($request, $userToken);
            self::_sendMail(self::FORM_START);

            return view('showUserToken', [
                'clientName' => $clientName, 
                'userToken' => $userToken, 
                'formType' => $formType, 
                'viewType' => self::_getViewType($formType),
                'tokenUrl' => url('/').'/startNewSession/'.$userToken
            ]);
        }
    }    

    public function startNewSession(Request $request, $userToken)
    {
        $request->session()->flush();

        if(self::_userExists($userToken))
        {
            self::_populateSessionVars($request, $userToken);

            return redirect()->route('getPage', [1]);             
        }
        else
        {
            die('Token not found');
        }
    }

    public function showFormPage(Request $request, $page_no)
    {
        if(session()->get('userToken') === null)
        {
            return view('loggedOut');
        }

        self::_savePreviousPage($request, $page_no-1);
        
        session()->put('prev_page_no', $page_no);
        $viewType = session()->get('viewType');
        

        $dbData = self::_getDBDataByUserId($request, session()->get('userId'));
        $userData = self::_DBDataToForm($dbData, $page_no);

        return view('forms/'.$viewType.'/'.$viewType.$page_no)->with([
            'UserData'  => $userData,
            'formType'  => session()->get('formType'),
            'viewType'  => $viewType,
            'pageCount' => self::_getFormPageCount($viewType),
            'userName'  => session()->get('clientName'),
            'page_no' => $page_no
        ]);
    }

    public function showThankYouPage(Request $request)
    {
        self::_savePreviousPage($request);

        //if(!self::_required_fields_empty())
        //{
            

            if(self::_sendMail(self::FORM_FINISH))
            {
                return view('formComplete')->with([
                    'formType' => session()->get('formType'), 
                    'viewType' => session()->get('viewType')
                ]);
            }
            else
            {
                die('mail not sent');
            }   
        //}
        //else
        //{
            //return to form with error message
        //}
    }

    public function logout()
    {
        session()->flush();
        return view('loggedOut');
    }


    /* helper functions */

    public function _DBDataToForm($dbData, $page_no)
    {
        $field_arr = self::_getFieldNamesFromConfigFile($page_no);
        $form_obj = new \stdClass;

        //dd($field_arr);
        foreach($field_arr as $key => $value)
        {
            if(!is_array($value))
            {
                $result = $dbData->$value;

                $result = self::_clean_output($result);

                $form_obj->$value = $result; 
            }
            else
            {
                //dd($dbData);
                $db_values = explode(',', $dbData->$key);
                $i = 0;
                foreach($value as $prop)
                {
                    $result = isset($db_values[$i]) ? $db_values[$i] : '';
                    $result = self::_clean_output($result);
                    $form_obj->$prop = $result;
                    $i++;
                }
            }
        }

        return $form_obj;
    }

    public function _formDataToDB(Request $request, $page_no)
    {
        $user_form_data = self::_getDBDataByUserId($request, session()->get('userId'));
        $field_arr = self::_getFieldNamesFromConfigFile($page_no);

        foreach($field_arr as $key => $value)
        {
            if(is_array($value))
            {
                $user_form_data->$key = '';

                foreach($value as $val)
                {
                    $result = self::_clean_input($request[$val]);

                    $user_form_data->$key .= $result.',';
                }
            }
            else
            {
                $result = self::_clean_input($request[$value]);

                $user_form_data->$value = $result;
            }
        }

        return $user_form_data;
    }

    public function _getDBDataByUserId(Request $request, $user_id){

        switch($request->session()->get('formType'))
        {
            case 'longForm': 
            case 'shortForm': 
            case 'budgetel':
                $userFormData = HIFData::where('userId', '=', $user_id)->first();
            break;

            case 'CMForm': 
            case 'BE':
                $userFormData = CMFData::where('userId', '=', $user_id )->first();
            break;

            default:
                $userFormData = [];
            break;
        }
        
        return $userFormData;
    }

    public function _savePreviousPage(Request $request)
    {
        if(Input::post())
        {
            $prev_page_no = session()->get('prev_page_no') !== null ? session()->get('prev_page_no') : 1;
            $user_form_data = self::_formDataToDB($request, $prev_page_no);
            $user_form_data->save();
        }
    }

    public function _getViewType($formType)
    {
        switch($formType)
        {
            case 'BE':
                return 'CMForm';
                break;
         
            case 'budgetel':
                return 'shortForm';
                break;
         
            default:
                return $formType;
        }
    }

    public function _sendMail($message_type)
    {
        switch($message_type)
        {
            case self::FORM_START:
                $subject = "Client ".session()->get("clientName")." Has Created an HIF Account";
                $tokenUrl = \App::make('url')->to('/')."/startNewSession/".session()->get("userToken");
                $message = "Client ".session()->get("clientName")." has created an HIF account. Their info can now be accessed at: ".$tokenUrl;
                break;

            case self::FORM_FINISH:
                $subject = session()->get("clientName")." Has Completed the HIF Form";
                $tokenUrl = $_SERVER['HTTP_HOST']."/startNewSession/".session()->get("userToken");
                $message = session()->get("clientName")." has completed the HIF Form. The form can be accessed at : <a href='".$tokenUrl."'>".$tokenUrl."</a>.";
                break;
        }

        $to = [];
        $to[] = "steven@verticalbookingusa.com";    

        if(\App::environment() === "production")
        {
            $to[] = "imp@verticalbookingusa.com";
            
            if(session()->get("formType") === 'budgetel')
            {
                $to[] = "wendy@verticalbookingusa.com";
            }
        }
        else if(\App::environment() === "development")
        {
            $to[] = "testing_dev@verticalbookingusa.com";
        }
        
        $headers = "From: info@verticalbookingusa.com" . "\r\n";
        $headers  .= "MIME-Version: 1.0" . "\r\n";
        $headers .= "Content-type: text/html; charset=iso-8859-1" . "\r\n";

        $mail = mail(implode(",", $to), $subject, $message, $headers);
        
        return $mail;
    }

    public function _createNewDBRecords($clientName, $userToken, $formType)
    {
        $userId = self::_createNewUserRecord($clientName, $userToken, $formType);

        self::_createNewFormRecord($formType, $userId);
    }

    public function _createNewUserRecord($clientName, $userToken, $formType)
    {
        $userId = DB::table('User')->insertGetId([
            'clientName' => $clientName, 
            'userToken' => $userToken, 
            'formType' => $formType, 
            'created_at'=> date('Y-m-d H:i:s') 
        ]);

        return $userId;
    }

    public function _createNewFormRecord($formType, $userId)
    {
        switch ($formType) 
        {
            case 'shortForm': 
            case 'longForm': 
            case 'budgetel':
                $table = 'HIFData';
                break;
            
            case 'CMForm': 
            case 'BE':
                $table = 'CMFData';
                break;
        }

        DB::table($table)->insert([
            'userId' => $userId, 
            'created_at' => date('Y-m-d H:i:s') 
        ]);
    }

    public function _generateUserToken($clientName)
    {
        $value = Hash::make($clientName);
        $value = str_replace("/","", $value);
        $value = str_replace(".", "", $value);

        return $value;
    }

    public function _userExists($userToken)
    {
        $result = User::where('userToken', $userToken)->first();

        return $result == null ? false : true;
    }

    public function _populateSessionVars($request, $userToken)
    {
        $user = User::where('userToken', $userToken)->first();  
        
        $request->session()->put('clientName', $user->clientName);
        $request->session()->put('userToken', $userToken);
        $request->session()->put('formType', $user->formType);
        $request->session()->put('userId', $user->id);
        $request->session()->put('viewType', self::_getViewType($user->formType));

        return $request;
    }

    public function _getFieldNamesFromConfigFile($page_no = null)
    {
        $result_arr = [];

        if($page_no === null)
        {
            $result_arr = config('forms.'.session()->get('viewType'));
        }
        else
        {
            $result_arr = config('forms.'.session()->get('viewType').'.'.$page_no);
        }
       
        return $result_arr;
    }

    public function _getFormPageCount($viewType)
    {
        /*TO DO: remove .bak files and "- 1" from the following line */
        return count(config('forms.'.$viewType)) - 1;
    }

    public function _clean_input($string)
    {
  
        if(strpos($string, ",") > -1)
        {
            $string = urlencode($string);
        }

        return $string;
    }

    public function _clean_output($string)
    {
        $string = urldecode($string);
        $string = htmlspecialchars($string);

        return $string;
    }

 


    /* Rerouted methods */

    public function startSession(Request $request, $formType, $userToken)
    {
        return redirect()->route('startNewSession', [$userToken]);
    }





    /* Version 2.0 functions */
/*
    public function runDBUpdate()
    {
        $HIFTable = HIFData::all();

        foreach($HIFTable as $row){
            print_r($row);
            if($row->userToken)
            {
                $userId = DB::table('User')->insertGetId([
                    'clientName' => $row->clientName, 
                    'userToken' => $row->userToken, 
                    'formType' => $row->formType, 
                    'created_at'=> $row->created_at 
                ]);
            
                $row->userId = $userId;
                $row->save();            
            }
        }
    }

    public function forms_debug()
    {
        $cur_form_type = isset($_GET["form_type"])?$_GET["form_type"]:"longForm";
        $page_num = isset($_GET["page_num"]) ? $_GET["page_num"] : "1";
        $version = isset($_GET["version"]) ? $_GET["version"] : "new";

        $form_type_arr = ["BE", "CMForm", "longForm", "shortForm"];
        $form_data = [];
        foreach($form_type_arr as $form_type_item)
        {
            //$form_type_tmp = $form_type_item === "BE" ? "CMForm" : $form_type_item;
            $file_path = "resources/views/forms_debug/form_models/".$form_type_item.".json";
            $result_str = file_exists($file_path)? file_get_contents($file_path) : "";
            $result_arr = json_decode($result_str, true) ? json_decode($result_str, true) : [];

            $form_counts[$form_type_item] = count($result_arr);

            if($form_type_item === $cur_form_type)
            {
                $inputs = count($result_arr) > 0 ? $result_arr["page".$page_num] : [];
            }
        }

        if($version === "old")
        {
            $cur_form_type = $cur_form_type === "BE" ? "CMForm" : $cur_form_type;
            $config = self::_getConfigArr($page_num); //config('forms.'.$cur_form_type.'.'.$page_num);
        }

        return view("forms_debug/forms_debug")->with([
                    "inputs" => $inputs, 
                    "form_type" => self::_getViewType($cur_form_type),
                    "formType" => self::_getViewType($cur_form_type),
                    "viewType" => self::_getViewType($cur_form_type),
                    "form_counts" => $form_counts, 
                    "version" => $version,
                    "configData" => isset($config)?$config:[],
                    "page_num" => $page_num,
                    "UserData" => []
        ]);
    }*/

}