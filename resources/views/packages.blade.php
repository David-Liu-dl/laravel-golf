<style>
    #package-container{
        background: url('/static/images/slider2.png') no-repeat fixed center;
        filter: Alpha(opacity=20);
        opacity: 0.5;
        height: 100%;
        width: 100%;
        right: 0;
        top: 0;
        background-size: cover;
        position: fixed;
    }
    #package-fixed {
        height: 70%;
        max-height: 70%;
        bottom: 40px;
        top: 16%;
        right: 15%;
        left: 15%;
        width: 70%;
        overFlow-x:hidden;
        overFlow-y:auto;
        position: fixed;
    }
    #package-fixed p {
        color: white;
        line-height: 30px;
        font-size: 14px;
        filter: Alpha(opacity=60);
        opacity: 0.6;
    }
    #package-fixed .title {
        width: 100%;
        color: #cfb154;
        font-weight: bold;
        text-transform: uppercase;
        font-size: 16px;
        margin-bottom: 8px;
        filter: Alpha(opacity=100);
        opacity: 1;
    }
    #package-fixed .desc {
        width: 100%;
        color: #cfb154;
        filter: Alpha(opacity=100);
        opacity: 1;
    }
    
    #package-content{
        padding-left: 3%;
    }
    
    #package-content p {
        line-height: 50px;
    }
    .enquiry{
        width: 120px;
        height: 45px;
        line-height: 45px;
        border: 1px solid #cfb154;
        background: transparent;
        color: #cfb154;
        padding-bottom: 0px;
        font-weight: bold;
        margin-top: 10px;
        position: absolute;
        bottom: 0px;
        right: 5%;
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
@extends('layouts.default')
@section('content')
<div class="container" id="package-container"></div>
<div class="container" id="package-fixed">
    <div>
        <p class="title">{{ $package['title'] }}</p>
        <p class="desc">{{ $package['description'] }}</p>
    </div>
    <div class="row">
        <div class="col-md-9">
            <div class="embed-responsive embed-responsive-4by3">
                <iframe class="embed-responsive-item" src="{{ $package['video_url'] }}"></iframe>
            </div>
        </div>
        <div class="col-md-3" id="package-content">
            <p>PACKAGE INCLUDE</p>
            @foreach( $package['features'] as $feature)
                <p> {{ $feature }}</p>
            @endforeach
        </div>
    </div>
    <button class="enquiry">ENQUIRY</button>
</div>
@stop