<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Golf</title>
    <link rel="stylesheet" href="static/css/bootstrap.css">
    <link rel="stylesheet" href="static/css/main.css">
    <link rel="stylesheet" href="static/css/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="static/css/jquery-ui.min.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.11.2/css/bootstrap-select.min.css" rel="stylesheet">
    <link rel="stylesheet" href="static/css/bootstrap-theme.min.css">
    <link rel="stylesheet" href="static/css/animation.css">
    <link rel="stylesheet" href="static/css/reset.css">

    <link rel="stylesheet" href="static/css/frame.css">

    <link href="static/css/contactus.css" rel="stylesheet">
    <style>
        body {
            overflow-x:hidden;
        }

        #enquiry_window{
            -moz-border-radius: 6px;
            border-radius: 6px;
            background: white;
            width: 20%;
            max-width: 700px;
            min-width: 400px;
            padding:10px 20px;

            position: fixed; /* or absolute */
            top: 40%;
            left: 50%;
            transform: translate(-50%, -50%);
            z-index: 999;
            display: none;
            font-family: 'work-sans-light';
        }

        #enquiry_window .input-group-addon,#enquiry_window input.transparent-input{
            background-color:rgba(0,0,0,0) !important;
            border:none;
            /*color:black;*/
        }

        .input-group-addon{
            color: #cfb154;
        }

        label.btn span {
            font-size: 1.5em ;
        }

        #enquiry_form_title{
            text-align: center;
            font-size: 20px;
            color:#b5a37e;
            font-family: 'work-sans-regular';
        }

        .input_container{
            width:100%;
            padding:5px 5px;
            margin:10px 0px;
            border:1px solid #cfb154;
            border-radius: 6px;
        }

        .bootstrap-select:not([class*=col-]):not([class*=form-control]):not(.input-group-btn) {
            width: 100%;
        }

        .btn-full{
            width:100%;
            background: #cfb154;
            font-weight: normal;
            color: white;
        }

        .input-group-addon{
            width: 23%;
        }

        .bootstrap-select.btn-group .dropdown-toggle .filter-option{
            text-overflow:ellipsis;
            width: 95%;
        }

        label.error {
            color: red;
            font-weight: normal;
            font-size: 12px;
        }

        input.error {
            color: red;
        }

        /*.navbar-nav > li > a{*/
            /*padding:0px;*/
        /*}*/
    </style>
</head>
<body>
<!--------nav start-------->
<div class="black-container container-fluid" id="header">
    <div class="container">
        <div class="row">
            <div id="header-logo2" style="height: 50px;padding: 5px 0px;" class="col-md-3 col-sm-3 col-xs-3">
                <div class="row" style="height: 100%">
                    <div class="col-md-6" style="height: 100%">
                        <a href="home"><img src="static/images/logo.png" class="" alt="Cinque Terre" /></a>
                    </div>
                </div>
            </div>
            <div class="col-md-9 col-sm-9 col-xs-9 hidden-nav-xs">
                <ul class="nav navbar-nav navbar-right">
                    <li class="main-menu"><a href="cocktail">GOLF&COCKTAIL BAR</a></li>
                    <li class="main-menu"><a href="coming_events">MEMBERSHIP&ACTIVITIES</a></li>
                    <li class="main-menu"><a href="academy">ACADEMY</a></li>
                    <li class="main-menu"><a href="tournament">TOURNAMENT</a></li>
                    <li class="main-menu"><a href="price">PRICING</a></li>
                    <li class="dropdown main-menu">
                        <button type="button" class="dropdown-toggle btn" data-toggle="dropdown" id="dropdown-show">
                            <span class="fa fa-bars" aria-hidden="true"></span>
                        </button>
                        <ul class="dropdown-menu" aria-labelledby="dropdown-show">
                            <li><a href="cocktail">GOLF&COCKTAIL BAR</a></li>
                            <li><a href="coming_events">MEMBERSHIP&ACTIVITIES</a></li>
                            <li><a href="academy">ACADEMY</a></li>
                            <li><a href="tournament">TOURNAMENT</a></li>
                            <li><a href="price">PRICING</a></li>
                            <li><a href="#" onclick="showBookWindow()">BOOKING</a></li>
                            <li><a href="#" onclick="showEnquiryWindow()">ENQUIRY</a></li>
                            <li><a href="contactus">CONTACT US</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>

<div id="book_window">
    <form id="order-form" target="_self" class="form-horizontal" role="form" method="POST">
        <div id="form_container">
            <div>
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
            </div>
            <div id="title_block" class="row">
                <div class="col-xs-10 vcenter">
                    <label>TOURNAMENT BOOKING</label>
                </div>
                <div class="col-xs-2 vcenter" style="text-align: right;padding: 0px;">
                    <a href="#" onClick="hideBookWindow();">
                        <i style="padding:0px;font-size: 20px;font-weight: normal;color:#cfb154" class="fa fa-times" aria-hidden="true"></i>
                    </a>

                </div>
            </div>
            <div style="margin:20px 0px;">
                {{--left--}}
                <div id="datepicker_block">
                    <div class="form-group">
                        <input id="selected-date" name="selected-date" type="hidden" class="form-control"
                               value="<?php echo date('Y-m-d'); ?>">
                        <div id="datepicker"></div>
                    </div>

                    <div class="form-group">
                        <input id="selected_blocks" name="selected_blocks" type="text" class="form-control">
                        <div id="block_container">
                            <div id="blocks"></div>
                        </div>
                    </div>
                </div>
                {{--right--}}
                <div id="user_info_block">
                    <div class="form-group">
                        <div class="row">
                            <div class="col-xs-12" style="text-align: center;margin-top: 10px;" >
                                <div class="btn-group" data-toggle="buttons">
                                    <label class="btn active">
                                        <input type="radio" name="hand" value="lefthand" checked=""><i class="fa fa-circle-o fa-2x"></i><i class="fa fa-dot-circle-o fa-2x"></i><span> LEFT HAND</span>
                                    </label>
                                    <label class="btn">
                                        <input type="radio" name="hand" value="righthand"><i class="fa fa-circle-o fa-2x"></i><i class="fa fa-dot-circle-o fa-2x"></i><span> RIGHT HAND</span>
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="row" style="margin-top:20px;margin-bottom: 20px;font-size:13px;">
                        <div class="col-xs-12">
                            Please enter your name and contact detail to confirm the booking senssion.
                        </div>
                    </div>

                    <div class="form-group row">
                        <label name="name" class="col-xs-2 col-form-label">Name:</label>
                        <div class="col-xs-10">
                            <input type="text" name="name" class="form-control transparent-input">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-xs-2 col-form-label">Phone:</label>
                        <div class="col-xs-10">
                            <input name="phone" type="text" class="form-control transparent-input">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-xs-2 col-form-label">Email:</label>
                        <div class="col-xs-10">
                            <input name="email" type="email" class="form-control transparent-input" aria-describedby="emailHelp">

                        </div>
                    </div>

                    <div>
                        <button style="margin-top:20px;float:right;font-size:15px;padding:10px 10px;" id="submit" type="submit" class="btnCustom gold-btn">BOOKING</button>
                    </div>
                </div>
                <div style="clear: both"></div>
            </div>
        </div>

    </form>
</div>

<div id="enquiry_window">
    <form id="enquiry_form" action="enquiry-form" class="form-horizontal" role="form" method="POST">
        <div id="form_container" >
            <div class="col-xs-" id="enquiry_form_title">
                ENQUIRY
                <i class="fa fa-times pointer" aria-hidden="true" style="position: absolute;right: 5%;" onclick="hideEnquiryWindow()"></i>
            </div>

            <div>
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
            </div>

            <div>
                <input id="entry_from" type="hidden" name="entry_from" value="">
            </div>

            <div class="input_container input-group">
                <span class="input-group-addon">NAME </span>
                <input type="text" name="name" class="form-control transparent-input">
            </div>

            <div class="input_container input-group">
                <span class="input-group-addon">EMAIL </span>
                <input type="text" name="email" class="form-control transparent-input">
            </div>

            <div class="input_container input-group">
                <span class="input-group-addon">PHONE </span>
                <input type="text" name="phone" class="form-control transparent-input">
            </div>

            <div class="">
                <input id="selected_blocks" name="selected_types" type="hidden" class="form-control">

                <select class="selectpicker text-uppercase" name="types[]" title="WHICH PART WOULD YOU LIKE TO ENQUIRE" multiple>
                    <option value="membership">membership</option>
                    <option value="academy">academy</option>
                    <option value="membership&activities">ACTIVITIES</option>
                    <option value="tournament">tournament</option>
                    <option value="golf & cocktail bar">golf & cocktail bar</option>
                </select>
            </div>

            <div class="input_container">
                <textarea type="text" name="comment" placeholder="COMMENT / REQUEST" class="form-control transparent-input" style="border:none;height: 100px;resize: none;"></textarea>
            </div>

            <div>
                <button type="submit" class="btn btn-default btn-full">Submit</button>
            </div>

        </div>
    </form>
</div>

<div id="fd-window">
    <div id="fd-title-block" class="row">
        <div id="title" class="col-xs-10">
            <label>TOURNAMENT BOOKING</label>
        </div>
        <div class="col-xs-2" style="text-align: right;padding: 0px;margin-top: 0px;">
            <a href="#" onClick="hideFdWindowAndRefresh()">
                <i style="font-size: 20px;font-weight: normal;color:#cfb154" class="fa fa-times" aria-hidden="true"></i>
            </a>
        </div>
    </div>
    <div id="info-block" style="text-align: center;padding:8% 0px 12%;">
        <p style="padding: 10px 0px;font-weight: bold">THANK YOU!</p><br/>
        <p>Dear, Customer</p><br/>
        <p>We have received your booking. You will receive a confirmation email shortly.</p><br/>
        <p>Thank you. Have a nice day.</p><br/>
        <p><a type="button" class="btnCustom gold-btn" onclick="hideFdWindowAndRefresh()">CLOSE</a></p>
    </div>

</div>
<!--------nav end-------->

<div id="main" class="row">
    @yield('content')
</div>

<!--------footer start-------->
<div id="footer2" class="black-container container-fluid">
    <div class="container">
        <ul class="nav navbar-nav navbar-right">
            <li class="pointer" onClick="window.open('contactus')"><i class="fa fa-phone"></i>&nbsp;1300047587</li>
            <li class="pointer"><i class="fa fa-map-marker"></i>&nbsp;280 KING STREET MELBOURNE, VIC 3000</li>
            <li class="pointer icon hidden-xs hidden-sm">
                <a style="padding:10px;text-decoration: none;" href="https://www.facebook.com/golfplusbar/"><i class="fa fa-facebook-square"></i></a>
            </li>
            <li class="pointer icon hidden-xs hidden-sm" style="margin-right:20px;">
                <a style="padding:10px;text-decoration: none;" href="https://twitter.com/GolfplusBar"><i class="fa fa-tumblr-square" href="https://twitter.com/GolfplusBar"></i></a>
            </li>
        </ul>
    </div>
</div>
<!--------footer end-------->
<script src="static/js/jquery-1.11.3.js"></script>
<!-- Optional theme -->
<!-- Latest compiled and minified JavaScript -->
<script src="static/js/bootstrap.min.js"></script>
<script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.11.1/jquery.validate.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.11.2/js/bootstrap-select.min.js"></script>
<script src="static/js/jquery-ui.min.js"></script>
<script src="static/js/moment.min.js"></script>
<script src="/static/js/moment.min.js"></script>
<script src="static/js/book.js"></script>
<script src="static/js/contactus.js"></script>

</body>
</html>