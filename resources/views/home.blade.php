<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Golf</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="static/css/bootstrap.css">
    <link rel="stylesheet" href="static/css/main.css">
    <link rel="stylesheet" href="static/css/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="static/css/animation.css">
    <link rel="stylesheet" href="static/css/reset.css">
    <link rel="stylesheet" href="static/css/style.css">
    <link rel="stylesheet" href="static/css/bootstrap-theme.min.css">

</head>
<body onmousemove="hide_show(event)">
<!--------nav start-------->
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

<!--------nav end-------->
<section class="cd-hero">
    <ul class="cb-slideshow">
        <li class="slide-item" ><span></span>
            <div id="div-video" class="bg">
                <video autoplay loop width="100%" height="auto" poster="static/images/polina.jpg" id="bgvid">
                    <!--<source src="static/images/polina.webm" type="video/webm">-->
                    <source src="static/images/polina.mp4" type="video/mp4">
                </video>
            </div>
        </li>

        <li class="slide-item"><span class="bg"></span>
            <div class="text-part">
                <div class="text-fst-part">
                    <div class="white-text-big">GOLF</div>
                    <div class="white-text-big">TOURNAMENT</div>
                </div>

                <div class="text-snd-part">
                    <div class="white-text-small">THE PERFECT SETUP FOR</div>
                    <div class="white-text-small">COMPETITIVE GOLF</div>
                    <div class="white-text-small">TUITION AND ENTERTAINMENT</div>
                </div>

                <div class="btn-block">
                    <button type="button" class="btnCustom gold-btn">DETAILS</button>
                    <button type="button" class="btnCustom gold-btn">OTHER EVENT</button>
                </div>

                <div class="thumb event-block">
                    <img src="static/images/event-frame.png" class="img-responsive" alt="Cinque Terre" />
                </div>
            </div>
        </li>

        <li class="slide-item" ><span class="bg"></span>
            <div class="text-part">
                <div class="text-fst-part">
                    <div class="white-text-big">GOLF</div>
                    <div class="white-text-big">ACADEMY</div>
                </div>

                <div class="text-snd-part">
                    <div class="white-text-small">PGA PROFESSIONAL</div>
                    <div class="white-text-small">COACHING LESSION</div>
                </div>

                <div class="btn-block">
                    <button type="button" class="btnCustom gold-btn">COURSES</button>
                </div>

                <div class="thumb event-block">
                    <img src="static/images/event-frame.png" class="img-responsive" alt="Cinque Terre"/>
                </div>
            </div>
        </li>
        <li class="slide-item"><span class="bg"></span>
            <div class="text-part">
                <div class="text-fst-part">
                    <div class="white-text-big">GOLF&</div>
                    <div class="white-text-big">COCKTAIL BAR</div>
                </div>

                <div class="text-snd-part">
                    <div class="white-text-small">FULLY LICENSE & PROFESSIONAL BAR</div>
                    <div class="white-text-small">ALL GOLF RELATED COCKTAILS</div>
                </div>

                <div class="btn-block">
                    <button type="button" class="btnCustom gold-btn" onClick="window.open('cockdetail.html')">DETAILS</button>
                    <button type="button" class="btnCustom gold-btn">BOOKING</button>
                </div>

                <div class="thumb event-block">
                    <img src="static/images/event-frame.png" class="img-responsive" alt="Cinque Terre" />
                </div>
            </div>
        </li>
    </ul>

</section>

<div id="control-icon">
    <span class="left" id="btn-left"><i class="fa fa-chevron-left" aria-hidden="true"></i></span>
    <span class="right" id="btn-right"><i class="fa fa-chevron-right" aria-hidden="true"></i></span>
</div>


<!--------footer start-------->
<div id="footer2" class="black-container container-fluid">
    <div class="container">
        <ul class="nav navbar-nav navbar-right">
            <li class="pointer" onClick="window.open('contactus.blade.php')"><i class="fa fa-phone" ></i>&nbsp;03 9600 0988</li>
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
<!--------footer end-------->
<script src="static/js/jquery-1.11.3.js"></script>
<!-- Optional theme -->
<!-- Latest compiled and minified JavaScript -->
<script src="static/js/bootstrap.min.js"></script>

<script src="static/js/vidbg.js"></script>
<script src="static/js/slider.js"></script>

<script src="static/js/main.js"></script>

<script>
    var timer;

    function show_control(){
        $('#control-icon span').css('visibility','visible');
    }

    function hide_control(){
        $('#control-icon span').css('visibility','hidden');
    }
    function hide_show(){
        show_control();
        clearTimeout(timer);
        timer = setTimeout(hide_control,2000);
    }
</script>

</body>
</html>