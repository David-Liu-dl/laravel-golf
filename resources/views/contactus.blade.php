@extends('layouts.default')

@section('content')
    <link href="{{ asset('https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.11.2/css/bootstrap-select.min.css') }}" rel="stylesheet">
    <link href="{{ asset('static/css/contactus.css') }}" rel="stylesheet">
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

    <div class="container-fluid">
        <div id="info-container">
            <div style="height: 100%">
                <img id="map-img" src="static/images/map.jpg"/>
            </div>
            <div id="info-block" style="width:100%;text-align: left;position: relative;">
                <div id="text-info-block" style="color: white;">
                    <!--left -->
                    <div class="one-line" style="font-weight: bold;font-size: 10px;">
                        <p>
                        <div class="one-line icon-block"><i class="fa fa-map-marker"></i></div>
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

                    <div id="right-btn-block"  class="one-line" style="position:absolute;right:0px; top:0px;">
                        <button id="quick-enquiry-btn" type="button" class="btnCustom info-btn">QUICK ENQUIRY</button>
                    </div>
                </div>

            </div>

        </div>

    </div>

    <script type="text/javascript" src="{!! asset('static/js/jquery-1.11.3.js') !!}"></script>
    <script type="text/javascript" src="{!! asset('static/js/contactus.js') !!}"></script>
    <script type="text/javascript" src="{!! asset('https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.11.2/js/bootstrap-select.min.js') !!}"></script>
@stop
