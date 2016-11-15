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
    </style>

    <div id="enquiry_window">
        <form id="enquiry_form" target="_self" class="form-horizontal" role="form" method="POST">
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
    <div class="container" id="package-container"></div>


        <div class="container" id="package-fixed">
            <div>
                <p style="text-align: center"><img src="static/images/academy.png" style="max-width:100%; height:auto"></p>
            </div>
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
                            <button class="quick-enquiry-btn enquiry">ENQUIRY</button>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

@stop