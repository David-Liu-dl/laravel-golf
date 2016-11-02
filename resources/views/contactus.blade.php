<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CockDetail</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="static/css/bootstrap.css">
    <link rel="stylesheet" href="static/css/bootstrap-theme.min.css">
    <!--<link rel="stylesheet" href="static/css/main.css">-->
    <link rel="stylesheet" href="static/css/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="static/css/animation.css">
    <link rel="stylesheet" href="static/css/jquery-ui.min.css">
    <link rel="stylesheet" href="static/css/reset.css">
    <link rel="stylesheet" href="static/css/style.css">
    <link rel="stylesheet" href="static/css/main.css">
    <link rel="stylesheet" href="static/css/contactus.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.11.2/css/bootstrap-select.min.css">
    <link rel="stylesheet" href="static/css/frame.css">
    <style>

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
    </style>
</head>

<body id = "contact-body">

<div id="enquiry_window">
    <form id="enquiry_form" target="_self" class="form-horizontal" role="form" method="POST">
        <div id="form_container" >
            <div id="enquiry_form_title">ENQUIRY</div>

            <div>
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
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
                <select class="selectpicker text-uppercase" name="types[]" title="WHICH PART WOULD YOU LIKE TO ENQUIRE" multiple>
                    <option value="tournament">tournament</option>
                    <option value="event">event</option>
                    <option value="academy">academy</option>
                    <option value="four">Four</option>
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

<div class="black-container container-fluid" id="header">
    <div class="container">
        <div class="row">
            <div id="header-logo2" class="col-md-6">
                <div class="row">
                    <div class="col-md-6">
                        <a href="home"><img src="static/images/logo.png" class="img-responsive" alt="Cinque Terre" /></a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 hidden-nav-xs">
                <ul class="nav navbar-nav navbar-right">
                    <li class="main-menu"><a href="tournament">TOURNAMENT</a></li>
                    <li class="main-menu"><a href="academy">ACADEMY</a></li>
                    <li class="main-menu"><a href="cocktail">GOLF&COCKTAIL BAR</a></li>
                    <li class="main-menu"><a href="price">PRICING</a></li>
                    <li class="dropdown main-menu">
                        <button type="button" class="dropdown-toggle btn" data-toggle="dropdown" id="dropdown-show">
                            <span class="fa fa-bars" aria-hidden="true"></span>
                        </button>
                        <ul class="dropdown-menu text-uppercase" aria-labelledby="dropdown-show">
                            <li><a href="tournament">TOURNAMENT</a></li>
                            <li><a href="academy">ACADEMY</a></li>
                            <li><a href="coming_events">EVENT</a></li>
                            <li><a href="cocktail">GOLF&COCKTAIL BAR</a></li>
                            <li><a href="price">PRICING</a></li>
                            <li><a href="#" onclick="showBookWindow()">BOOKING</a></li>
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
                        <button style="margin-top:20px;float:right;font-size:15px;padding:10px 10px;" id="submit" type="submit" class="btnCustom gold-btn">REQUEST BOOKING</button>
                    </div>
                </div>
                <div style="clear: both"></div>
            </div>
        </div>

    </form>
</div>

<div class="container-fluid">
    <div id="info-container">
        <div style="height: 100%">
        <img id="map-img" src="static/images/map.jpg"/>
        </div>
        <div id="info-block" style="width:100%;text-align: left;position: relative;">
            <div id="text-info-block" style="color: white;">
                <!--left -->
                <div class="one-line" style="font-weight: bold;font-size: 12px;">
                    <p>
                        <div class="one-line icon-block"><i class="fa fa-map-marker" ></i></div>
                        <div class="one-line">280 KING STREET, MELBOURNE, VIC 3000</div>
                    </p>
                    <p>
                        <div class="one-line icon-block"></div>
                        <div class="one-line">
                            <button type="button" class="btnCustom info-btn">OPEN HOUR</button>
                        </div>
                    </p>
                    <p>
                        <div class="one-line icon-block"></div>
                        <div class="one-line">11:00 AM - 11:00 PM MON.TO THUR.</div>
                    </p>
                    <p>
                        <div class="one-line icon-block"></div>
                        <div class="one-line">11:00 AM - 11:00 PM MON.TO THUR.</div>
                    </p>
                    <p>
                        <div class="one-line icon-block"></div>
                        <div class="one-line">11:00 AM - 11:00 PM MON.TO THUR.</div>
                    </p>

                </div>


                <!--right-->
                <div class="one-line" style="margin-left:10px;padding-left:20px;border-left: 1px solid white; vertical-align: top;">
                    <p>
                        <div class="one-line icon-block">
                            <i class="fa fa-bus" aria-hidden="true"></i>
                        </div>
                        <div class="one-line">
                            <p style="margin-top: 0px;">
                                <button type="button" class="btnCustom info-btn" style="font-size: 8px;padding: 2px 2px;">Stop2</button>
                                <span style="margin-left: 5px;">King Street</span>
                                <span style="margin-left: 5px;">Trams:12/30/35/109</span>
                            </p>

                            <p>
                                <button type="button" class="btnCustom info-btn" style="font-size: 8px;padding: 2px 2px;">Stop3</button>
                                <span style="margin-left: 5px;">William Street</span>
                                <span style="margin-left: 5px;">Trams:12/30/35/109</span>
                            </p>

                            <p>
                                <button type="button" class="btnCustom info-btn" style="font-size: 8px;padding: 2px 2px;">Stop4</button>
                                <span style="margin-left: 5px;">Lonsdale Street</span>
                                <span style="margin-left: 5px;">Trams:12/30/35/109</span>
                            </p>
                        </div>
                    </p>

                    <p>
                        <div class="one-line icon-block"><i class="fa fa-subway" aria-hidden="true"></i></div>
                        <div class="one-line">Flagstaff Station</div>
                    </p>
                    <p>
                        <div class="one-line icon-block"><i class="fa fa-product-hunt" aria-hidden="true"></i></div>
                        <div class="one-line">
                            <p style="margin-top: 3px">Secure Parking</p>
                            <p style="margin-top: 3px">558 Little Bouke Street, Melbourne, VIC 3000</p>
                        </div>
                    </p>
                </div>

                <div id="right-btn-block"  class="one-line" style="position:absolute;right:0px; top:0px;">
                    <button id="quick-enquiry-btn" type="button" class="btnCustom info-btn">QUICK ENQUIRY</button>
                </div>
            </div>

        </div>
        {{-- onClick="showEnquiryWindow()"--}}

    </div>

</div>


<div id="footer2" class="black-container container-fluid">
    <div class="container">
        <ul class="nav navbar-nav navbar-right">
            <li class="pointer" onClick=""><i class="fa fa-phone" ></i>&nbsp;03 9600 0988</li>
            <li class="pointer"><i class="fa fa-map-marker"></i>&nbsp;280 KING STREET MELBOURNE, VIC 3000</li>
            <li class="pointer icon hidden-xs hidden-sm">
                <i class="fa fa-facebook-square"></i>
            </li>
            <li class="pointer icon hidden-xs hidden-sm">
                <i class="fa fa-tumblr-square"></i>
            </li>
        </ul>
    </div>
</div>

<script src="static/js/jquery-1.11.3.js"></script>
<!-- Optional theme -->
<!-- Latest compiled and minified JavaScript -->
<script src="static/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.11.2/js/bootstrap-select.min.js"></script>

<script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.11.1/jquery.validate.min.js"></script>
<script src="static/js/jquery-ui.min.js"></script>
<script src="static/js/moment.min.js"></script>

<script src="static/js/main.js"></script>
<script src="static/js/book.js"></script>

<script>
    $(document).ready(function () {

        $('#quick-enquiry-btn').click(function () {
            if ($('#enquiry_window').is(":visible")){
                hideEnquiryWindow();
            }else{
                showEnquiryWindow();
            }
        });

        $("#enquiry_form .selectpicker").change(function () {
            console.log($(this).val());
            $("#enquiry_form").valid();
        });

        $("#enquiry_form").validate({
            rules: {
                name: {
                    required: true,
                },
                phone: {
                    required: true,
                    number:true
                },
                email: {
                    required: true,
                    email:true
                },
                types:{
                    required: true,
                },
                comment:{
                    required:true,
                }
            },
            messages: {
                name: {
                    required: "Please enter name",
                },
                phone: {
                    required: "Please enter phone",
                    number: "Please enter correct phone"
                },
                email: {
                    required: "Please enter email",
                    email:"Your email address must be in the format of name@domain.com"
                },
                types:{
                    required: "Please at least select one type",
                },
                comment:{
                    required: "Please leave some message",
                }
            },
            submitHandler: function(form) {
//                console.log($(form).serialize());
                $.ajax({
                    url:"/",
                    type:"post",
                    data:$(form).serialize(),
                    success: function(data,status){
//                        alert(data);
                    },
                    error: function () {
                        OnError(cartObject.productID)
                    },
                    complete: function () {
                        // Handle the complete event
                        alert("ajax completed " + cartObject.productID);
                    }
                });
                return false;
            }
        });
    });

    function showEnquiryWindow() {
        if (!$('#enquiry_window').is(":visible")){
            $('#enquiry_window').fadeIn();
        }
    }

    function hideEnquiryWindow(){
        $('#enquiry_window').slideUp(200);
    }
</script>
</body>
</html>