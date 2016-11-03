@extends('layouts.default')
@section('content')
    <link href="{{ asset('/static/css/package.css') }}" rel="stylesheet">

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
                            <button class="enquiry">ENQUIRY</button>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
@stop