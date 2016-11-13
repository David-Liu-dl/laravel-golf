@extends('layouts.default')

@section('content')
    <style>
        .casual_container {
            background: url("static/images/slider3.png") 0 0 no-repeat;
            filter: Alpha(opacity=20);
            opacity: 0.2;
            height: 100%;
            width: 100%;
            right: 0;
            top: 0;
            background-size: cover;
            position: fixed;
        }

        #fixed-frame {
            height: 80%;
            max-height: 80%;
            bottom: 40px;
            top: 10%;
            right: 17%;
            left: 13%;
            width: 70%;
            overFlow-x:hidden;
            overFlow-y:scroll;
            position: fixed;

        }

        #fixed-frame a {
            color: white;
            line-height: 30px;
            font-size: 12px;
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
        #book_window{
            position: fixed; /* or absolute */
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            z-index: 999;
            display:none;
        }
        .ui-state-default {
            border: 0px !important;
            text-align: center;
        }

        .ui-datepicker td span, .ui-datepicker td a{
            padding:.5em;
            margin:.6em;
        }

        .ui-datepicker {
            width: 22em;
            /*background: transparent;*/
            color: #cfb154;
            margin:0 auto;
        }

        .ui-datepicker .ui-datepicker-calendar td span {
            text-align: center;
        }

        .ui-datepicker .ui-datepicker-calendar td {
            background: transparent;
        }

        .ui-datepicker .ui-datepicker-calendar td a {
            background: transparent;
            text-align: center;
            text-decoration: none;
            color: #cfb154;
        }

        .ui-state-disabled .ui-state-default {
            background: transparent;
            color: dimgray;
        }

        .ui-datepicker .ui-datepicker-calendar{
            margin-top: 10px;
        }

        .ui-datepicker-prev  {
            background-image: url("static/images/prev_arrow.png") !important;
            background-size: cover;
        }

        .ui-datepicker-next {
            background-image: url("static/images/next_arrow.png") !important;
            background-size: cover;
        }

        .ui-datepicker .ui-datepicker-calendar .ui-state-active {
            background: rgb(207, 177, 84);
            /* Fall-back for browsers that don't
                                               support rgba */
            background: rgba(207, 177, 84, .5);
            border-radius: 50%;
        }

        .ui-datepicker-header {
            background: #cfb053;
            color: black;
        }

        .ui-datepicker thead {
            font-weight: normal;
            background: rgba(207, 177, 84, .8);
        }

        .ui-datepicker th{
            color: black;
            font-weight: normal;
        }

        /* rest */

        ::-webkit-scrollbar {
            width:10px;
        }
        ::-webkit-scrollbar-track {
            -webkit-box-shadow: inset 0 0 6px rgba(0,0,0,0.3);
            /*border:1px solid #cfb154;*/
            background-color: #41391d;
        }
        ::-webkit-scrollbar-thumb {
            background: #cfb154;
            -webkit-box-shadow: inset 0 0 6px rgba(0,0,0,0.5);
        }
        ::-webkit-scrollbar-thumb:window-inactive {
            background: #cfb154;
        }

        #block_container{
            border-top:1px solid #cfb154;
            padding: 10px 5px;
        }

        #blocks{
            width:100%;
            max-width: 100%;
            height:100px;
            overFlow-x:hidden;
            overFlow-y:auto;
            font-size: 13px;
        }


        .block{
            display: inline-block;
            width: 45%;
            margin: 5px 2%;
            padding:5px 1%;
            text-align: center;
            color: #cfb154;
        }

        #blocks .selected{
            background: #cfb053;
            color:black;
        }

        #blocks .disable{
            background: transparent;
            color:gray;
        }

        #title_block{
            height:2.1em;
            line-height: 2.1em;
            margin:0px 20px;
            padding-left: 40px;
            border-bottom: 1px solid #cfb154;
            color: #cfb154;
            font-size: 20px;
        }

        #form_container{
            border:1px solid #cfb154;display: inline-block;background: black;
        }

        #datepicker_block{
            float:left;
            width:450px;
            padding: 0px 30px;
            border-right: 1px solid #cfb154;
        }

        #user_info_block{
            margin: 50px 20px;
            float:right;
            width:350px;
            color:#cfb154;
            font-weight: normal;

        }

        input.transparent-input{
            background-color:rgba(0,0,0,0) !important;
            border:none;
            border-bottom: 1px dashed #cfb154;
            color:white;
        }

        label.btn span {
            font-size: 1.5em ;
        }

        label input[type="radio"] ~ i.fa.fa-circle-o{
            color: #cfb154;    display: inline;
        }
        label input[type="radio"] ~ i.fa.fa-dot-circle-o{
            display: none;
        }
        label input[type="radio"]:checked ~ i.fa.fa-circle-o{
            display: none;
        }
        label input[type="radio"]:checked ~ i.fa.fa-dot-circle-o{
            color: #cfb154;    display: inline;
        }
        label:hover input[type="radio"] ~ i.fa {
            color: #cfb154;
        }

        label input[type="checkbox"] ~ i.fa.fa-square-o{
            color: #cfb154;    display: inline;
        }
        label input[type="checkbox"] ~ i.fa.fa-check-square-o{
            display: none;
        }
        label input[type="checkbox"]:checked ~ i.fa.fa-square-o{
            display: none;
        }
        label input[type="checkbox"]:checked ~ i.fa.fa-check-square-o{
            color: #cfb154;    display: inline;
        }
        label:hover input[type="checkbox"] ~ i.fa {
            color: #cfb154;
        }

        div[data-toggle="buttons"] label.active{
            color: #cfb154;
        }

        div[data-toggle="buttons"] label {
            /*margin:0 auto;*/
            display: inline-block;
            padding: 6px 12px;
            /*margin-bottom: 0;*/
            font-size: 10px;
            font-weight: normal;
            line-height: 2em;
            text-align: left;
            white-space: nowrap;
            vertical-align: top;
            cursor: pointer;
            background-color: none;
            border: 0px solid
            #cfb154;
            border-radius: 3px;
            color: #cfb154;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            -o-user-select: none;
            user-select: none;
        }

        div[data-toggle="buttons"] label:hover {
            color: #cfb154;
        }

        div[data-toggle="buttons"] label:active, div[data-toggle="buttons"] label.active {
            -webkit-box-shadow: none;
            box-shadow: none;
        }

        .tooltip.top .tooltip-inner {
            background-color:#cfb154;
            color:black;
        }

        .tooltip.top .tooltip-arrow {
            border-top-color: #cfb154;
        }

        #selected_blocks {
            height:0px;
            padding:0px;
            visibility:hidden;
        }

        label.error {
            color: #a94442;
        }

        input.error {
            color: red;
        }

        #book_window{
            position: fixed; /* or absolute */
            width: 850px;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            z-index: 999;
            /*display:none;*/

        }

    </style>

    <div class="casual_container container-fluid">
    </div>

    <div id="fixed-frame" class="container">
        <div>
            <a href="#"><img src="static/images/cocktail_bar.png" style="max-width:100%; height:auto"></a>

            <a href="static/images/price_drink.jpg"><img src="static/images/price_drink.jpg" width="100%"></a>
            <a href="static/images/price_food.jpg"><img src="static/images/price_food.jpg" width="100%"></a>
            {{--<a><img src="static/images/price_food.jpg" style="max-width:100%; height:auto"></a>--}}

        </div>

        <div style="margin:20px auto;text-align: center">
            <button id="bookBtn" type="button" class="btnCustom gold-btn"
                    style="padding: 10px 20px;background: #cfb154;color: black;font-weight: normal" onclick="showBookWindow()">BOOKING</button>

            <button id="bookBtn" type="button" class="btnCustom gold-btn"
                    style="padding: 10px 20px;background: #cfb154;color: black;font-weight: normal" onclick="">MORE ACTIVITIES</button>
        </div>
    </div>

    <script type="text/javascript" src="{!! asset('static/js/jquery-1.11.3.js') !!}"></script>
    <script type="text/javascript" src="{!! asset('static/js/jquery.jqzoom.js') !!}"></script>
@stop
