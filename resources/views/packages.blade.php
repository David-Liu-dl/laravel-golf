@extends('layouts.default')
@section('content')
    <link href="{{ asset('https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.11.2/css/bootstrap-select.min.css') }}" rel="stylesheet">
    <link href="{{ asset('/static/css/package.css') }}" rel="stylesheet">
    <style>
        body {
            overflow-x:hidden;
        }

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

        #events_block_title{
            padding:15px 0px;
            text-align: center;
            color:#cfb154;
            font-size: 17px;
            font-weight: normal;
            border-bottom: 1px solid #cfb154;
        }
    </style>

    <div class="container" id="package-container"></div>
        <div class="container" id="package-fixed">
            <div id="events_block_title">
                <span style="text-transform: uppercase;font-family: work-sans-regular">Introduction</span>
            </div>
            <div>
                <p style="text-align: center"><img src="static/images/academy-1.png" style="max-width:100%; height:auto"></p>
            </div>
            <div style="border-bottom: 2px dotted #cfb154"></div>
            <div>
                <p style="text-align: center"><img src="static/images/academy-2.png" style="max-width:100%; height:auto"></p>
            </div>
            <div style="border-bottom: 2px dotted #cfb154"></div>

            @foreach( $packages as $package)
                <div class="package-item-container">
                    <div>
                        <p class="title">{{ $package['title'] }}</p>
                        <p class="desc">{{ $package['description'] }}</p>
                    </div>
                    <div class="row row-eq-height" style="margin-top: 20px;">
                        <div class="col-md-8">
                            <div class="embed-responsive embed-responsive-4by3">
                                <iframe class="embed-responsive-item" src="{{ $package['video_url'] }}"></iframe>
                            </div>
                        </div>
                        <div class="col-md-4" id="package-content">
                            <p>PACKAGE INCLUDE</p>
                            @foreach( $package['features'] as $feature)
                                <p> {{ $feature }}</p>
                            @endforeach
                            <p>${{ $package['price'] }}</p>
                            <button class="quick-enquiry-btn enquiry" value="{{"Lesson:" . $package['title']}}">ENQUIRY</button>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

@stop