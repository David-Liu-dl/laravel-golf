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
    <link rel="stylesheet" href="static/css/reset.css">
    <link rel="stylesheet" href="static/css/style.css">
    <link rel="stylesheet" href="static/css/main.css">
    <link rel="stylesheet" href="static/css/contactus.css">

</head>

<body id = "contact-body">

<div class="black-container container-fluid" id="header">
    <div class="container">
        <div class="row">
            <div id="header-logo2" class="col-md-6">
                <div class="row">
                    <div class="col-md-6">
                        <img src="static/images/logo.png" class="img-responsive" alt="Cinque Terre"/>
                    </div>
                </div>
            </div>
            <div class="col-md-6 hidden-nav-xs">
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="#">TOURNAMENT</a></li>
                    <li><a href="#">ACADEMY</a></li>
                    <li><a href="#">GOLF&COCKTAIL BAR</a></li>
                    <li class="dropdown">
                        <button type="button" class="dropdown-toggle btn" data-toggle="dropdown" id="dropdown-show">
                            <span class="fa fa-bars" aria-hidden="true"></span>
                        </button>
                        <ul class="dropdown-menu" aria-labelledby="dropdown-show">
                            <li><a href="#">Action</a></li>
                            <li><a href="#">Another action</a></li>
                            <li><a href="#">Something else here</a></li>
                            <li class="divider"></li>
                            <li><a href="#">Separated link</a></li>
                            <li class="divider"></li>
                            <li><a href="#">One more separated link</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>

<div class="container-fluid">
    <div id="info-container">
        <div style="height: 100%">
        <img id="map-img" src="static/images/map.jpg"/>
        </div>
        <div id="info-block">
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
            </div>

        </div>
        <div id="right-btn-block" style="margin-top:20px;float: right">
            <button id="quick-enquiry-btn" type="button" class="btnCustom info-btn">QUICK ENQUIRY</button>
        </div>
    </div>

</div>




<div id="footer2" class="black-container container-fluid">
    <div class="container">
        <ul class="nav navbar-nav navbar-right">
            <li class="pointer">
                <i class="fa fa-envelope" aria-hidden="true"></i>&nbsp;info@golfzon.melbourne
            </li>
            <li class="pointer" onClick="window.open('contactus.html')"><i class="fa fa-phone" ></i>&nbsp;03 9600 0988</li>
            <li class="pointer"><i class="fa fa-map-marker"></i>&nbsp;280 KING STREET MELBOURNE, VIC 3000</li>
            <li class="pointer icon hidden-xs hidden-sm">
                <i class="fa fa-facebook-square"></i>
            </li>
            <li class="pointer icon hidden-xs hidden-sm">
                <i class="fa fa-tumblr-square"></i>
            </li>
            <li class="pointer icon hidden-lg hidden-md">
                <i class="fa fa-facebook-square"></i>&nbsp;&nbsp;
                <i class="fa fa-tumblr-square"></i>
            </li>
        </ul>
    </div>
</div>

<script src="static/js/jquery-1.11.3.js"></script>
<!-- Optional theme -->
<!-- Latest compiled and minified JavaScript -->
<script src="static/js/bootstrap.min.js"></script>

<script src="static/js/carousel.js"></script>

<script src="static/js/vidbg.js"></script>
<script src="static/js/slider.js"></script>

<script src="static/js/main.js"></script>

</body>
</html>