
@extends('layouts.mobile')

@section('content')

    <style>
        body {
            /*background-image: url("../static/images/map-bg.jpg");*/
            background-color: black;
            font-family: 'work-sans-regular';

        }

        #header {
            border-bottom: 1px solid #cfb154;
        }

        #footer2 {
            border-top: 1px solid #cfb154;
        }

        .contactus .title-block{
            border-bottom: 1px solid #cfb154;
            color: #cfb154;
            font-size: 12px;
            padding-bottom: 10px;
        }
        .contactus .quick-enquiry-button{
            font-size: 15px;
            padding: 10px 15px;
            background-color: transparent;
            color: #cfb154;
            border: 1px solid #cfb154;
        }

    </style>

    <div class="container-fluid contactus">
        <div id="contact-info-container">
            <div class="title-block">CONTACT US</div>
            <div style="margin-top: 10px;">
                <img id="map-img" src="static/images/map.jpg"/>
            </div>
            <div id="info-block" style="width:300px;margin: 8% auto;">
                <div id="text-info-block" class="" style="color: white;text-align:left;">
                    <!--top -->
                    <div class="" style="font-size: 12px;">
                        <div>
                            <div class="one-line icon-block"><i class="fa fa-map-marker"></i></div>
                            <div class="one-line">280 KING STREET, MELBOURNE, VIC 3000</div>
                        </div>
                        <div>
                            <div class="one-line icon-block"></div>
                            <div class="one-line">
                                <button type="button" class="btnCustom info-btn">OPEN HOUR</button>
                            </div>
                        </div>
                        <div>
                            <div class="one-line icon-block"></div>
                            <div class="one-line">11:00AM - 11:00PM MON.TO THUR.</div>
                        </div>
                        <div>
                            <div class="one-line icon-block"></div>
                            <div class="one-line">11:00AM - LATE FRI.TO SAT.</div>
                        </div>
                        <div>
                            <div class="one-line icon-block"></div>
                            <div class="one-line">11:00AM - 5:00PM SUN.</div>
                        </div>

                    </div>

                    <!--bottom-->
                    <div class="" style="vertical-align: top;">
                        <div>
                            <div class="one-line icon-block">
                                <i class="fa fa-bus" aria-hidden="true"></i>
                            </div>
                            <div class="one-line">
                                <div style="margin-top: 0px;">
                                    <button type="button" class="btnCustom info-btn" style="font-size: 8px;padding: 2px 2px;">Stop2</button>
                                    <span style="margin-left: 5px;">King Street</span>
                                    <span style="margin-left: 5px;">Trams: 12/30/35/109</span>
                                </div>
                                <div>
                                    <button type="button" class="btnCustom info-btn" style="font-size: 8px;padding: 2px 2px;">Stop3</button>
                                    <span style="margin-left: 5px;">William Street</span>
                                    <span style="margin-left: 5px;">Trams: 12/30/35/109</span>
                                </div>

                                <div>
                                    <button type="button" class="btnCustom info-btn" style="font-size: 8px;padding: 2px 2px;">Stop4</button>
                                    <span style="margin-left: 5px;">Lonsdale Street</span>
                                    <span style="margin-left: 5px;">Trams: 55</span>
                                </div>
                            </div>
                        </div>

                        <div>
                            <div class="one-line icon-block"><i class="fa fa-subway" aria-hidden="true"></i></div>
                            <div class="one-line">Flagstaff Station</div>
                        </div>
                        <div style="margin-top: 10px;">
                            <div class="one-line icon-block"><i class="fa fa-product-hunt" aria-hidden="true"></i></div>
                            <div class="one-line">
                                <div style="margin-top: 3px">Flagstaff Parking</div>
                                <div style="margin-top: 3px">6 Healeys Ln, Melbourne, VIC 3000</div>
                            </div>
                        </div>
                        <div style="color: white;font-size: 20px; margin-top: 15px;">
                            <div class="pointer icon" style="margin-bottom: 10px;">
                                <a target="_blank" style="color:white;text-decoration: none;" href="https://www.facebook.com/golfplusbar/"><i class="fa fa-facebook-square"></i>
                                    <span style="font-size: 14px;">@golfplusbar</span></a>
                            </div>
                            <div class="pointer icon" style="margin-bottom: 10px;">
                                <a target="_blank" style="color:white;text-decoration: none;" href="https://twitter.com/GolfplusBar"><i class="fa fa-tumblr-square"></i>
                                    <span style="font-size: 14px;">@GolfplusBar</span></a>
                            </div>
                            <div class="pointer icon" style="margin-bottom: 10px;">
                                <a target="_blank" style="color:white;text-decoration: none;" href="https://www.instagram.com/golfplusbar/"><i class="fa fa-instagram" aria-hidden="true"></i>
                                    <span style="font-size: 14px;">golfplusbar</span></a>
                            </div>
                        </div>
                    </div>


                </div>

            </div>
            <div id="right-btn-block">
                <button type="button"class="quick-enquiry-button info-btn" value="contact_us">QUICK ENQUIRY</button>
            </div>
        </div>

    </div>

@stop
