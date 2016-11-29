<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Golf</title>
    <link rel="stylesheet" href="static/css/bootstrap.css">
    <link rel="stylesheet" href="static/css/mobile_main.css">
    <link rel="stylesheet" href="static/css/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="static/css/jquery-ui.min.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.11.2/css/bootstrap-select.min.css" rel="stylesheet">
    <link rel="stylesheet" href="static/css/bootstrap-theme.min.css">
    <link rel="stylesheet" href="static/css/animation.css">
    <link rel="stylesheet" href="static/css/reset.css">
    <link rel="stylesheet" href="static/css/mobile_frame.css">
    <link rel="stylesheet" href="static/css/mobile_contactus.css">
    @yield('extracss')

    <style>
        body {
            overflow-x:hidden;
        }

        #enquiry_window{
            background: white;
            width: 100%;
            height: 100%;
            padding:10px 20px;
            position: fixed; /* or absolute */
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

        .filter-option{
            text-transform: uppercase;
        }
    </style>
</head>

<body>
<!--------float window start-------->

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

<div id="book_window">
    <form id="order-form" target="_self" class="form-horizontal" role="form" method="POST">
        <div id="form_container">
            <div>
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
            </div>
            <div id="title_block" class="row" style="overflow: hidden;">
                <div class="col-xs-10" style="padding-top: 7%;">
                    TOURNAMENT BOOKING
                </div>
                <div class="col-xs-2" style="padding-top: 10px;text-align: right">
                    <a href="#" rel="external" onClick="hideBookWindow();">
                        <i style="padding:0px;font-size: 20px;font-weight: normal;color:#cfb154" class="fa fa-times" aria-hidden="true"></i>
                    </a>

                </div>
            </div>
            <div id="info-container">
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
                                    <div class="" data-toggle="buttons">
                                        <fieldset data-role="controlgroup">
                                            <div class="row" style="font-size: 15px;">
                                                <div class="col-xs-6 ui-radio">
                                                    <input type="radio" name="hand" value="lefthand" id="left-hand" checked="">
                                                    <label style="vertical-align: middle" class="btn active" for="left-hand">LEFT HAND</label>
                                                </div>
                                                <div class="col-xs-6 ui-radio">
                                                    <input type="radio" name="hand" id="right-hand" value="righthand">
                                                    <label style="vertical-align: middle" class="btn" for="right-hand">RIGHT HAND</label>
                                                </div>
                                            </div>
                                        </fieldset>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="row" style="margin-top:20px;margin-bottom: 20px;font-size:13px;">
                            <div class="col-xs-12">
                                Please enter your name and contact detail to confirm the booking session.
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
        </div>

    </form>
</div>

<div id="fd-window">
    <div id="fd-title-block" class="row">
        <div id="title" class="col-xs-10">
            <label>TOURNAMENT BOOKING</label>
        </div>
        <div class="col-xs-2" style="text-align: right;padding: 0px;margin-top: 0px;">
            <a href="#" rel="external" onClick="hideFdWindowAndRefresh()">
                <i style="font-size: 20px;font-weight: normal;color:#cfb154" class="fa fa-times" aria-hidden="true"></i>
            </a>
        </div>
    </div>
    <div id="info-block" style="text-align: center;padding:8% 0px 12%;">
        <p style="padding: 10px 0px;font-weight: bold">THANK YOU!</p><br/>
        <p>YOUR BOOKING INFORMATION IS CONFIRMED</p><br/>
        <p>THE COMFIRMATION WILL SENT TO YOUR EMAIL ADDRESS</p><br/>
        <p>FOR MORE DETAILS. PLEASE CONTACT US ON</p><br/>
        <p style="border-bottom: 1px solid #cfb154">03 9600 0988</p><br/>
        <div style="margin-top: 30px;"><a type="button" rel="external" class="btnCustom gold-btn" onclick="hideFdWindowAndRefresh()">CLOSE</a></div>
    </div>

</div>
<!--------float window end-------->

<!--------nav start-------->
<div class="black-container" id="header">
    <div class="container-fluid">
        <div class="logo">
            <a href="home" rel="external"><img src="static/images/logo.png" class="img-responsive" alt="Cinque Terre" /></a>
        </div>
        <div class="dropdown">
            <button id="dLabel" class="dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="fa fa-bars" aria-hidden="true"></span>
            </button>
            <ul class="dropdown-menu" aria-labelledby="dLabel">
                <li><a href="tournament" rel="external">TOURNAMENT</a></li>
                <li><a href="academy" rel="external">ACADEMY</a></li>
                <li><a href="coming_events" rel="external">EVENT</a></li>
                <li><a href="cocktail" rel="external">GOLF&COCKTAIL BAR</a></li>
                <li><a href="price" rel="external">PRICING</a></li>
                <li><a href="#" rel="external" onclick="showBookWindow()">BOOKING</a></li>
                <li><a href="contactus" rel="external">ENQUIRY</a></li>
                <li><a href="contactus" rel="external">CONTACT US</a></li>
            </ul>
        </div>
    </div>
</div>
<!--------nav end-------->
<div id="main">
    @yield('content')
</div>

<div id="footer2" class="black-container">
    <div class="container-fluid">
        <div style="margin-right: 5%;display: inline-block"><i class="fa fa-phone"></i>&nbsp;03 9600 0988</div>
        <div style="display: inline-block"><i class="fa fa-map-marker"></i>&nbsp;280 KING STREET MELBOURNE, VIC 3000</div>
    </div>
</div>
<!--------nav end-------->

<!--------footer end-------->
<script src="static/js/jquery-1.11.3.js"></script>
<script src="static/js/jquery_mobile-1.4.5.min.js"></script>

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
<script>
    $(document).ready(function () {
        $.mobile.loading().hide();

        var screenH = $(window).outerHeight();
        var headerH = $('#header').outerHeight();
        var footerH = $('#footer2').outerHeight();

        function getMinHeight(){
            return screenH - (headerH + footerH);
        }

        $('#main').css("min-height", getMinHeight());

        getOrder();

        $('#info-container').scroll(function(e) {
            clearTimeout($.data(this, 'scrollTimer'));
            $.data(this, 'scrollTimer', setTimeout(function() {
                // do something
                $('[data-toggle="tooltip"]').tooltip({trigger: 'manual'}).tooltip('show');
            }, 250));

            if ($(this).is(':animated')) {
                console.log('scroll happen by animate');
            } else if (e.originalEvent) {
                // scroll happen manual scroll
                $('[data-toggle="tooltip"]').tooltip({trigger: 'manual'}).tooltip('hide');
            } else {
                // scroll happen by call
                console.log('scroll happen by call');
            }
        });
    })
</script>
</body>
</html>