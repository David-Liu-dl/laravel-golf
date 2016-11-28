@extends('layouts.mobile')

@section('content')
    <style>
        .casual_container {
            background: url("static/images/slider1.png") 0 0 no-repeat;
            filter: Alpha(opacity=20);
            opacity: 0.3;
            height: 100%;
            width: 100%;
            right: 0;
            top: 0;
            /*background-size: cover;*/
            position: fixed;
        }

        #fixed-frame {
            overFlow-x:hidden;
            overFlow-y:scroll;
            /*position: fixed;*/
        }

        #fixed-frame .title {

            width: 100%;
            padding-bottom: 20px;
            text-align: center;
            color: #cfb154;
            font-weight: bold;
            text-transform: uppercase;
            border-bottom: 2px solid #cfb154;
            font-size: 14px;
            /*margin-top: 5%;*/
            margin-bottom: 8px;
            filter: Alpha(opacity=100);
            opacity: 1;
            font-weight: normal;
            font-size: 18px;
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
        .mythumbnail {

            border: none;
            background: transparent;
            position: relative;
            width: 100%;
            height: 150px;
            overflow: hidden;
        }
        .mythumbnail img {
            position: absolute;
            left: 50%;
            top: 50%;
            width: 100%;
            height: auto;
            -webkit-transform: translate(-50%,-50%);
            -ms-transform: translate(-50%,-50%);
            transform: translate(-50%,-50%);
        }

        .portrait {
            width: 100%;
        }

        .item-container {
            padding: 20px 3%;

        }

        .item{
            font-weight: normal;
            height:300px;
            border-bottom: 1px solid #cfb154;
        }
        .item .event_title{
            color:#cfb154;
            margin-top: 20px;
            font-size: 14px;
            text-align: center;
        }
        .item .introduction{
            margin: 15px auto 30px;
            font-size:13px;
            font-weight: normal;
            line-height: 20px;
            color: white;
            word-wrap: break-word;
            display: -webkit-box;
            -webkit-box-orient: vertical;
            -webkit-line-clamp: 4;
            overflow: hidden;
        }
    </style>

    <div class="casual_container container-fluid">
    </div>

    <div id="fixed-frame" class="container">
        <p class="title">TOURNAMENT</p>
        <div style="margin-top: 20px;">
            <div class="row" id="event_block">
            </div>
        </div>
    </div>


    <script id="item" type="text/template">
        <div class="col-md-6 col-xs-6 item-container">
            <div class="item">
                <div class="mythumbnail"><img class="portrait" src={originalImg}></div>
                <div class="event_title">{title}</div>
                <div class="figcaption introduction">{introduction}</div>
            </div>
        </div>
    </script>

    <script type="text/javascript" src="{!! asset('static/js/jquery-1.11.3.js') !!}"></script>

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
                    var html = $('script[id="item"]').html();
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

@stop