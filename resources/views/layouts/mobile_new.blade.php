<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Golf</title>
        <link rel="stylesheet" href="static/css/bootstrap.css">
        <link rel="stylesheet" href="static/css/font-awesome/css/font-awesome.min.css">
        <link rel="stylesheet" href="static/css/jquery-ui.min.css">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.11.2/css/bootstrap-select.min.css" rel="stylesheet">
        <link rel="stylesheet" href="static/css/bootstrap-theme.min.css">
        <link rel="stylesheet" href="static/css/animation.css">
        <link rel="stylesheet" href="static/css/reset.css">
        <link rel="stylesheet" href="static/css/frame.css">
        <link rel="stylesheet" href="static/css/main_mobile.css">
        @yield('extracss')
    </head>
    <body>
        <!--------nav start-------->
        <div class="black-container" id="header">
            <div class="container-fluid">
                <div class="logo">
                    <a href="home"><img src="static/images/logo.png" class="img-responsive" alt="Cinque Terre" /></a>
                </div>
                <div class="dropdown">
                    <button id="dLabel" class="dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <span class="fa fa-bars" aria-hidden="true"></span>
                    </button>
                    <ul class="dropdown-menu" aria-labelledby="dLabel">
                        <li><a href="tournament">TOURNAMENT</a></li>
                        <li><a href="academy">ACADEMY</a></li>
                        <li><a href="coming_events">EVENT</a></li>
                        <li><a href="cocktail">GOLF&COCKTAIL BAR</a></li>
                        <li><a href="price">PRICING</a></li>
                        <li><a href="#" onclick="showBookWindow()">BOOKING</a></li>
                        <li><a href="contactus">ENQUIRY</a></li>
                        <li><a href="contactus">CONTACT US</a></li>
                    </ul>
                </div>
            </div>
        </div>

        <!--------nav end-------->

        <div id="main" class="container-fluid">
            @yield('content')
        </div>

        <!--------footer start-------->
        <div id="footer2" class="black-container">
            <div class="container-fluid">
                <span><i class="fa fa-map-marker"></i>&nbsp;03 9600 0988</span>
                <span><i class="fa fa-phone"></i>&nbsp;280 KING STREET MELBOURNE, VIC 3000</span>
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