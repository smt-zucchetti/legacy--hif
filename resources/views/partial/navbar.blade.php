
<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container">
    <div class="row">        
  			<div class="col-xs-5 align_center">
              <a href="http://verticalbookingusa.com">
                <img src="{{ URL::to('/public/images/logo.png') }}" class="pull-left logo" />
              </a>
              <?php if($formType === "budgetel"): ?>
                <div class="logo_box">
                    <img src="{{ URL::to('/public/images/budgetel_logo.jpg') }}" />
                    <img src="{{ URL::to('/public/images/haven_logo.jpg') }}" />
                    <img src="{{ URL::to('/public/images/amerivu_logos.png') }}" />
                </div>
                <?php endif; ?>
            </div>
    		<div class="col-xs-4">
            <?php if(!empty($UserData)): ?>
                @include('partial/pageSelDropdown')
                {{--@include('partial/paginator', ['viewType' => $viewType, 'formType' => $formType])--}}
            <?php endif; ?>
    		</div>
    		<div class="col-xs-3">
          <div class="right-content">
              <?php if(!empty($UserData)): ?>
                  <p>Welcome, {{$userName}}<br>
                  Form Type: {{$formType}}</p>
            			<a href="{{ URL::to('/logout') }}">Log Out</a>
              <?php endif; ?>
            </div>
    		</div>
    	</div>
  </div>
</nav>
<div id="navbar-spacer"></div>
<?php 
  if(!empty($UserData)){
    $arr = [];// json_decode($UserData->emptyReqFieldsArr, true);
  }else{
    $arr = array();
  }
  if(!empty($arr)): ?>
<div class="alert alert-warning alert-dismissible show" id="myModal" role="alert">
      <div class="container">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        <strong>Warning! The following fields need to be filled out before the form is submitted: </strong> 
        <br>
        <?php 
              foreach($arr as $key => $valueArr){
                  echo "Page ".$key.": ";
                  $i = 0;
                  foreach($valueArr as $value){
                      echo $i > 0?", ":"";
                      $i++;
                      $c = 0;
                      $configStuff = config($viewType.'.'.$key); 
                      if(!empty($configStuff['requiredFields'])){
                        foreach($configStuff['requiredFields'] as $field){
                            if($value == $field){
                                echo $configStuff['requiredFieldLabels'][$c];
                            }
                            $c++;
                        }
                    }
                  } 
            } 
        ?>
    </div>
  </div>
<?php endif; ?>