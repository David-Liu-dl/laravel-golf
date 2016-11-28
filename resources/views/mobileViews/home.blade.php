@extends('layouts.mobile_new')

@section('content')
    <style>
        .event-cover{
            max-width: 200px;
            max-height: 200px;
        }
    </style>

    <section class="cd-hero">
        <ul class="cb-slideshow">

            <li class="slide-item" ><span></span>
                <div id="div-video" class="bg">
                    <video autoplay loop width="100%" height="auto" poster="static/images/polina.jpg" id="bgvid">
                        <source src="static/images/polina.mp4" type="video/mp4">
                    </video>
                </div>
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
                        <a type="button" class="btnCustom gold-btn" href="cocktail">DETAILS</a>
                        <a type="button" class="btnCustom gold-btn" onClick="showBookWindow()">BOOKING</a>
                    </div>

                    <div class="thumb event-block">
                        <a href="#"><img src="" class="img-responsive event-cover" item=""  /></a>
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
                        <a type="button" class="btnCustom gold-btn" href="academy">MORE INFORMATION</a>
                    </div>

                    <div class="thumb event-block">
                        <a href="#"><img src="" class="img-responsive event-cover" item="" /></a>
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
                        <a type="button" class="btnCustom gold-btn" href="tournament">DETAILS</a>
                        <a type="button" class="btnCustom gold-btn" href="coming_events">OTHER ACTIVITY</a>
                    </div>

                    <div class="thumb event-block">
                        <a href="#"><img src="" class="img-responsive event-cover" item=""  /></a>
                    </div>
                </div>
            </li>
        </ul>

    </section>

    <div id="control-icon">
        <span class="left" id="btn-left" style="visibility: hidden;"><i class="fa fa-chevron-left" aria-hidden="true"></i></span>
        <span class="right" id="btn-right" style="visibility: hidden;"><i class="fa fa-chevron-right" aria-hidden="true"></i></span>
    </div>

    <script type="text/javascript" src="{!! asset('static/js/jquery-1.11.3.js') !!}"></script>
    <script type="text/javascript" src="{!! asset('static/js/home.js') !!}"></script>
    <script type="text/javascript" src="{!! asset('static/js/vidbg.js') !!}"></script>
    <script type="text/javascript" src="{!! asset('static/js/slider.js') !!}"></script>
@stop
