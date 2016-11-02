<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Golf</title>
    <!-- Latest compiled and minified CSS -->


    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="static/css/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="static/css/animation.css">
    <link rel="stylesheet" href="static/css/jquery-ui.min.css">
    <link rel="stylesheet" href="static/css/main.css">
    <link rel="stylesheet" href="static/css/reset.css">
    <link rel="stylesheet" href="static/css/style.css">
    <link rel="stylesheet" href="static/css/bootstrap-theme.min.css">
    <style>
        .casual_container {
            background: url("static/images/slider3.png") 0 0 no-repeat;
            filter: Alpha(opacity=20);
            opacity: 0.5;
            height: 100%;
            width: 100%;
            right: 0;
            top: 0;
            background-size: cover;
            position: fixed;
        }

        #fixed-frame {
            height: 70%;
            max-height: 70%;
            bottom: 40px;
            top: 16%;
            right: 15%;
            left: 15%;
            width: 70%;
            overFlow-x:hidden;
            overFlow-y:scroll;
            position: fixed;

        }

        #fixed-frame p {
            color: white;
            line-height: 30px;
            font-size: 12px;
            filter: Alpha(opacity=60);
            opacity: 0.6;
        }

        ::-webkit-scrollbar {
            width:10px;
        }
        ::-webkit-scrollbar-track {
            -webkit-box-shadow: inset 0 0 6px rgba(0,0,0,0.3);
            border:1px solid #cfb154;
        }
        ::-webkit-scrollbar-thumb {
            background: #cfb154;
            -webkit-box-shadow: inset 0 0 6px rgba(0,0,0,0.5);
        }
        ::-webkit-scrollbar-thumb:window-inactive {
            background: #cfb154;
        }
    </style>

    <style>
        /*
         * Row with equal height columns
         * --------------------------------------------------
         */
        .row-eq-height {
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display:         flex;
        }

        .row-eq-height [class*="col-"] {
            padding-top: 15px;
            padding-bottom: 15px;
        }

        /* end */

        #events_block_title{
            padding:15px 0px;
            text-align: center;
            color:#cfb154;
            font-size: 17px;
            font-weight: normal;
            border-bottom: 1px solid #cfb154;
        }

        .event_container{
            margin:20px 0px;
        }

        .event_img_container{
            margin: 0px 0px;
            padding:0px 0px;

        }

        .event_img{
            object-fit: contain;
        }

        .event_info_container{
            color: white;
            font-size: 13px;
            font-weight: normal;
            margin-left: 5%;
            padding: 10px 10px;
        }
        .event_title{
            margin: 20px auto;
            font-size: 20px;
            font-weight:bold;
            color: #cfb154;
        }
        .event_description{
            margin:30px 0px;
            line-height:25px;
            word-wrap: break-word;
        }
        .event_date{
            margin:15px 0px;
        }
        .event_location{
            margin:15px 0px;

        }
        .event_price{
            margin:15px 0px;

        }

        .entry_btn{
            background: #cfb154;
            color: black;
            position: absolute;
            bottom: 20px;
            right:0;
            font-size: 1.2em;
            font-weight: 500;
        }

    </style>

    <style>




    </style>
</head>
<body>
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

<div id="fixed-frame" class="container">
    <div style="margin-right: 5%;">
        <div id="events_block_title">
            <span>COMING EVENTS</span>
        </div>

        <div id="event_block">
        </div>
    </div>
</div>

<!--------footer start-------->
<div id="footer2" class="black-container container-fluid">
    <div class="container">
        <ul class="nav navbar-nav navbar-right">
            <li class="pointer" onClick="window.open('contactus.html')"><i class="fa fa-map-marker"></i>&nbsp;03 9600
                0988
            </li>
            <li class="pointer"><i class="fa fa-phone"></i>&nbsp;280 KING STREET MELBOURNE, VIC 3000</li>
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

<script src="static/js/jquery.min.js"></script>
<script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.11.1/jquery.validate.min.js"></script>
<script src="static/js/jquery-ui.min.js"></script>
{{--<script src="static/js/bootstrap.min.js"></script>--}}
<script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script src="static/js/moment.min.js"></script>

<script src="static/js/vidbg.js"></script>
<script src="static/js/slider.js"></script>

<script type="text/template">
    <div class="row row-eq-height event_container" id="">
        <div class="col-md-4 col-xs-4 event_img_container">
            <img src={picture} class="img-responsive event_img" alt="Cinque Terre"/>
        </div>
        <div class="col-md-8 col-xs-8">
            <div class="event_info_container">
                <div class="event_title">{title}</div>
                <div class="event_description">{introduction}</div>
                <div class="event_date"><label>DATE:&nbsp;</label><span >{date}</span></div>
                <div class="event_location"><label>PLACE:&nbsp;</label><span >{address}</span></div>
                <div class="event_price"><label>ENTRY FEE:&nbsp;</label><span class="event_location">{price}</span></div>
            </div>

            <div><button class="entry_btn btnCustom info-btn">ENTRY NOW</button></div>
        </div>
    </div>
</script>

<script>

    $(document).ready(function () {
        getEvents();
    });

    function getEvents() {
        $.ajax({
            url: '/getAllAvailableEvents',
            method: 'GET',
            dataType: 'json',
            success: function (dta) {
                if (!dta) {
                    return;
                }

                //获取模板上的HTML
                var html = $('script[type="text/template"]').html();
                //定义一个数组，用来接收格式化合的数据
                var arr = [];

                //对数据进行遍历
                $.each(dta, function(i, o) {
                    //这里取到o就是上面rows数组中的值, formatTemplate是最开始定义的方法.
                    arr.push(formatTemplate(o, html));
                });
                //好了，最后把数组化成字符串，并添加到table中去。
                $('#event_block').append(arr.join(''));
                //走完这一步其实就完成了，不会吧，这么简单，不错，就是这么简单!! 不信就自己动手去试试!
            }

        });
    }

    function formatTemplate(dta, tmpl) {
        var format = {
            name: function(x) {
                return x;
            }
        };
        return tmpl.replace(/{(\w+)}/g, function(m1, m2) {

            if (!m2)
                return "";
            return (format && format[m2]) ? format[m2](dta[m2]) : dta[m2];
        });
    }

</script>

</body>
</html>