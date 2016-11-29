@extends('layouts.mobile')

@section('content')
    <style>
        body{
            /*overflow-y: hidden;*/
            background-image: url("../images/background.jpg");
            background-position: center center;
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-size: cover;
            background-color: #464646;
            min-height: 100%;
            height: auto;
            background-size: cover;
            -webkit-background-size: cover;
            -moz-background-size: cover;
            -o-background-size: cover;
        }

        #main {
            padding: 0px;
            height:100%;
        }

        .gold-btn{
            padding: 5px 15px;
            font-size: 16px;
        }

        .slide-item{

        }

    </style>

    <section class="cd-hero">
        <ul class="cb-slideshow">

            <li class="slide-item" ><span class="bg"></span>
                {{--<div id="div-video" class="bg">--}}
                    {{--<video autoplay loop width="100%" height="auto" poster="static/images/polina.jpg" id="bgvid">--}}
                        {{--<source src="static/images/polina.mp4" type="video/mp4">--}}
                    {{--</video>--}}
                {{--</div>--}}
            </li>

            <li class="slide-item"><span class="bg"></span>
                <div class="text-part">
                    <div class="text-fst-part">
                        <div class="white-text-big">GOLF</div>
                        <div class="white-text-big">COCKTAIL BAR</div>
                    </div>

                    <div class="text-snd-part">
                        <div class="white-text-small">MONDAY-WEDNESDAY: 12PM-9PM</div>
                        <div class="white-text-small">THURSDAY-SATURDAY: 12PM-LATE</div>
                        <div class="white-text-small">SUNDAY: BOOKING ONLY</div>
                    </div>

                    <div class="btn-block">
                        <a type="button" class="btnCustom gold-btn left" href="cocktail" rel="external">DETAILS</a >
                        <a type="button" class="btnCustom gold-btn right" onClick="showBookWindow()" rel="external">BOOKING</a >
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
                        <div class="white-text-small">THE GAME OF GOLF IS NEVER JUST ABOUT SWING,</div>
                        <div class="white-text-small">WE HELP GOLFERS TO GAIN MAXIMAL</div>
                        <div class="white-text-small">IMPROVEMENT FROM DIFFERENT ASPECTS</div>
                    </div>

                    <div class="btn-block">
                        <a type="button" class="btnCustom gold-btn right" href="academy" rel="external">MORE INFORMATION</a >
                    </div>
                </div>
            </li>

            <li class="slide-item"><span class="bg"></span>
                <div class="text-part">
                    <div class="text-fst-part">
                        <div class="white-text-big">GOLF</div>
                        <div class="white-text-big">TOURNAMENT</div>
                    </div>

                    <div class="text-snd-part">
                        <div class="white-text-small">WE HAVE PIONEERED THE PERFECT</div>
                        <div class="white-text-small">SETUP FOR COMPETITIVE GOLF,</div>
                        <div class="white-text-small">TUITION AND ENTERTAINMENT</div>
                    </div>

                    <div class="btn-block">
                        <a type="button" class="btnCustom gold-btn right" href="tournament" rel="external">DETAILS</a >
                        <a type="button" class="btnCustom gold-btn left" href="coming_events" rel="external">OTHER ACTIVITY</a >
                    </div>

                </div>
            </li>
        </ul>

    </section>

    <script type="text/javascript" src="{!! asset('static/js/jquery-1.11.3.js') !!}"></script>
    <script type="text/javascript" src="{!! asset('static/js/mobile_home.js') !!}"></script>
    <script type="text/javascript" src="{!! asset('static/js/vidbg.js') !!}"></script>
    <script type="text/javascript" src="{!! asset('static/js/slider.js') !!}"></script>
@stop