    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>HIF Forms - @yield('title')</title>

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css">

    <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

    <script>
        /*Submit form when paginator is clicked*/
        $(document).ready(function(){
            $('.paginator a').click(function(e){
                e.preventDefault();
                var myForm = $("#myForm");

                if(myForm.attr('action') !== ''){
                    myForm.attr('action', $(this).attr('href') );
                    myForm.submit(); 
                }else{
                    window.location.href = $(this).attr('href');
                }
            });
        
            /*Sticky header*/
            var distance = $('.sticky-header').offset().top,
                $window = $(window);

            $window.scroll(function() {
                console.log($(document).scrollTop());
                if($(document).scrollTop() < 104){
                    $('.sticky-header').removeClass('fixed');
                    $('.sticky-header + .form-container').removeClass('pushDown');
                }else{
                    $('.sticky-header').addClass('fixed');  
                    $('.sticky-header + .form-container').addClass('pushDown'); 
                }
            });

        }); 
    </script>

    <!-- Styles -->
    <style>
        html, body {background-color: #fff;color: #636b6f;font-family: 'Raleway', sans-serif;font-weight: 100;height: 100vh;margin: 0;word-break: break-word;}
        .full-height {height: 100vh;}
        .flex-center {align-items: center;display: flex;justify-content: center;}
        .position-ref {position: relative;}
        .top-right {position: absolute;right: 10px;top: 18px;}
        .content {text-align: center;}
        .title {font-size: 84px;}
        .links > a {color: #636b6f;padding: 0 25px;font-size: 12px;font-weight: 600;letter-spacing: .1rem;text-decoration: none;text-transform: uppercase;}
        .m-b-md {margin-bottom: 30px;}
        .myGrid{clear:both;}
        .myGrid [class^='col']{padding: 0;}
        .small-text{font-size:13px;}
        .form-row {clear: both;overflow: auto;margin-bottom:12px;}
        .form-row.myGrid {margin-bottom:0px;}
        .short-input-box{width: 200px !important; display:inline;}
        .very-short-input-box{width: 100px !important; display: inline;}
        .form-container{border: solid 1px #CCC;overflow: auto;padding: 10px}
        .inner-borders [class^='col']{border: solid 1px #CCC;}
        .table{display: table;height:12px;}
        .table-row{display: table-row;height:100%;}
        .table-cell{display: table-cell;height:100%;padding:10px !important;}
        .textarea{width: 100%;height: 100px !important;resize: none;padding: 5px 0 0 10px;}
        .inline {display: inline;}
        .bold{font-weight: 700}
        .text-center{text-align: center;}
        .row-margins [class^='col']{margin:10px 0}
        .form-row [class^='col'] input[type='text'] {width:100%;}
        body {font-family: Arial;}
        .paginator a{margin:0 7px}
        .paginator a.active {text-decoration: underline;font-weight: 700;font-size: 21px}
        .flex{display: flex;}
        .margin-center{margin-left: auto !important; margin-right: auto !important}
        .large-checkbox{height: 30px; width: 30px}
        .flex-valign{align-items: center;}
        .col-left, .col-right {width: 49%;display: inline-block;}
        .col-right {height: 100%;}
        .top-row{width: 100%}
        .checkbox-label{vertical-align: text-bottom;}
        .navbar-header{float: none}
        .no-margin{margin:0;}
        .push-down{padding-top: 40px}
        .navbar .container .row{display: flex; align-items: center}
        .navbar h3 {line-height: inherit}
        .btn-primary.top-button {position: absolute;top: 0;right: 0}
        #myForm{position: relative;}
        img.logo {width: 260px;margin-right: 20px;margin-top: 2px;padding: 10px 0}
        .container{background: white}
        .roomTypeContainer{display: none;}
        .roomTypeContainer.active{display: block;}
        .fa-arrow-alt-circle-right, .fa-arrow-alt-circle-left {font-size: 40px;position: relative;top: 5px;left: 20px;}
        #rtright {margin-left: 12px;}
        .alert.alert-warning {width: 100%;z-index: 200;}
        .required {font-weight: 700;color: #b33a3a;}
        .alert-warning .container{color: #8a6d3b;background-color: #fcf8e3;border-color: #faebcc;}
        .valign-checkbox{vertical-align: text-bottom;}
        #navbar-spacer{height:100px;}
        .super-short{width:100px !important;}
        .labels [class^='col'] {padding-right: 5px;}
        .margin-left-negative{margin-left: -32px;}
        .inline-text {display: inline}
        .short-text{width: 20% !important;}
        .container,form{height: 100%}
        .sticky-header{height: 114px;z-index: 1;width: 1141px;top:100px;}
        .header-row{height:100%;}
        .sticky-header + .form-container{position: relative;}
        .fixed{position: fixed;top: 101px;}
        .pushDown{margin-top: 114px;}
        .table-row {max-height: 0px !important;height: 0px !important;}
        .text-center{text-align: center}
        .text-left{text-align: left}
        .flex-center{display: flex;align-items: center;}
        .height200{height:200px;}
        .logo_box {
            display: inline-grid;
            grid-template-columns: 1fr 1fr;
            justify-items: center;
            align-items: center;
            width: 150px;
        }
        .logo_box > img{
            width: 100%;
        }
        .logo_box > img:nth-child(3){
                grid-column: 1/3;
        }
        .col-xs-5.align_center {
            display: flex;
            align-items: center;
        }
        input[data-required_field=true] {
            -webkit-transition: all 0.30s ease-in-out;
            -moz-transition: all 0.30s ease-in-out;
            -ms-transition: all 0.30s ease-in-out;
            -o-transition: all 0.30s ease-in-out;
            border: 1px solid #DDDDDD;
        }

        input[data-required_field=true].highlight {
            box-shadow: 0 0 5px tomato;
            border: 1px solid tomato;
        }
        .rtarrow{
            color: #337ab7;
            cursor: pointer;
        }
        .rtarrow:hover{
            color: #23527c;
        }
    </style>