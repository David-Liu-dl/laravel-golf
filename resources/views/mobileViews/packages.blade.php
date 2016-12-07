@extends('layouts.mobile')
@section('extracss')
<style>
    .package-content{
        color: #cfb154;
        margin-top: 20px;
    }
    .package-content .title{
        font-size: 10px;
        text-transform:uppercase;
        text-align: center;
        padding-bottom: 10px;
        border-bottom: 1px solid #cfb154;
    }

    .package-content .sub-title{
        color: rgb(191, 155, 58);
        text-transform:uppercase;
        font-weight: bold;
        font-size: 12px;
        line-height: 30px;
        margin-top: 20px;
    }

    .package-content .mini-title{
        color: rgb(176, 122, 41);
        text-transform:uppercase;
        font-weight: bold;
        font-size: 10px;
        line-height: 30px;
    }

    .package-content .mini-title span{
        border-bottom: 1px solid rgb(176, 122, 41);
        padding-bottom: 5px;
    }
    
    .package-content .people{
        width: 100%;
        text-align: center; 
    }
    
    .package-content .people img{
        width: 100%;
        margin: 0px auto;
    }

    .package-content .desc{
        /*color: white;*/
        color: gray;
        line-height: 20px;
        margin-bottom: 20px;
    }

    .package-content .desc p{
        margin-top: 10px;
        margin-bottom: 10px;
        text-align: justify;
    }

    .package-content .intro{
        border-bottom: 1px dotted #cfb154;
    }
    .package-content .intro img{
        width: 100%;
        height: auto;
    }

    .package-item-container{
        padding-top: 20px;
        padding-bottom: 20px;
        color: #cfb154;
        border-bottom: 1px dotted #cfb154;
    }

    .package-item-container:last-of-type{
        border-bottom: none;
    }

    .package-item-container p, .package-item-container div{
        line-height: 20px;
    }

    .package-item-container .title{
        font-weight: bold;
        font-size: 13px;
        text-transform:uppercase;
    }

    .package-item-container .desc{
        color: rgb(173,140,71);
    }

    .package-item-container .content{
        margin-top: 20px;
        color: #fff;
    }

    .package-item-container .enquiry{
        border: 1px solid #cfb154;
        background: transparent;
        padding: 5px 15px 5px 15px;
        margin-top: 10px;
        margin-bottom: 20px;
    }

</style>
@stop
@section('content')
<div class="package-content">

    <div class="intro">
        <p class="title">INTRODUCTION</p>
        <div class='desc'>
            <p>In Golf Plus Academy we believe the game of golf is never just about swing, we are trying help different levels golfers to gain maximal improvement from different aspects, We have a serious emphasis on each student reaching their maximum potential. The GPlus academy in conjunction with Golfzon Simulation is the forefront in modern day golf coaching and training. The combination of specific biomechanical analysis during the driving range mode and the ability to enhance game play on one of the 200 golf courses around the world makes all lessons more efficient and effective.</p>
            <p>If you are seeking to take your game to the next level, we strongly recommend getting involved in our extensive range of specific programs. We have devised a series of formulated packages that are guaranteed to enhance all aspects of your game.</p>
            <p>Click on each link to learn more about the respective package and book in today. The first step to unlocking your true potential is one click away!!!</p>
        </div>

        <p class="sub-title">COACHING INTRODUCTION</p>
        <p class="mini-title"><span>BRANDON RAVE</span></p>
        <div class='people'><img src='static/images/coach_rave.jpg' class="img-responsive"></div>
        <div class='desc'>
            <p>As a PGA certified professional coach, Brandon is well versed with the latest concepts in golf analysis, biomechanics and strength and conditioning.</p>
            <p>Brandon has a wealth of experience coaching all levels of golfers given his previous coaching roles at The Yarra Valley Country Club and GolfTec Melbourne.</p>
            <p>Brandon gets the most out of every student by understanding their body patterns and formulating the best regimen for them. Furthermore, all of his packages include constant consulting and all of his students receive their swings and analysis via email.</p>
            <p>“We are truly blessed as coaches to have GPlus Academy at our disposal as it is simply the best technology and regimented training tool in the world”</p>
        </div>

        <p class="mini-title"><span>MATT JAGER</span></p>
        <div class='people'><img src='static/images/coach.jpg' class="img-responsive"></div>
        <div class='desc'>
            <p>Matt turned professional in 2010 as one of the most exciting talents in the country. Born in Perth, Western Australia, Matt was an Australian Amateur and Dual New Zealand Amateur Champion and represented Australia in the World Amateur Team Championship. As a student of the game, Matt has since moved to Melbourne to further his golfing career.</p>
            <p>From the word championship....As an elite professional, Matt has learned from the best players and coaches in the golf industry. His experience as a tour player and knowledge of the modern swing make him a  great asset to our team at GPlus.</p>
        </div>
    </div>

</div>

@foreach( $packages as $package)

<div class="package-item-container">
    <p class="title">{{ $package['title'] }}</p>
    <p class="desc">{{ $package['description'] }}</p>
    <div class="content">
        <p>PACKAGE INCLUDES: {{ implode(', ', $package['features']) }} </p>
        <p>PRICE: ${{ $package['price'] }}</p>
    </div>
    <p><button class="quick-enquiry-btn enquiry" value={{"Lesson:" . $package['title']}}>ENQUIRY</button></p>
    <div class="video">
        <div class="embed-responsive embed-responsive-4by3">
            <iframe class="embed-responsive-item" src="{{ $package['video_url'] }}"></iframe>
        </div>
    </div>

</div>
@endforeach
@stop