@extends('frontend.layout.app')

@section('title', 'Home')

@section('description', 'Home Page')

@section('keywords', 'Home Page')

@section('content')

<div class="container mainPage-wrapper" id='mainheader' style="clear:both">
    <div class="wrapper-fix">
        <div class='headercopntent'>
            <div class="headerinr1">
                <h1>{{ $home->slider_title ?? '' }}</h1>
                <h3>{{ $home->slider_description ?? '' }}</h3>
                <span class="video-link"><i><img src='images/play-button-2.svg' alt="play-button" /></i>Watch Video</span>
                <a href='http://acc.dossierbox.com/get-started' target="_blank" class="hdrbtn">Get Started</a>
            </div>
        </div>
    </div>
</div>

<div class="main-contenior">
    <div class="wrapper-fix">
        <div class="box-main-heading">
            <h2 class="light_font wow bounceInDown"><span>{{ $home->salient_title ?? 'Salient Keys' }}</span></h2>
            <p>{{ $home->salient_desc ?? '' }}</p>
        </div>

        <div id="hwwrk" class="products-box ">
            <div class="hw_wrk wow bounceInUp bounce1">
                <div class="circleshvr">
                    <div class="que_database sprite3">

                    </div>
                </div>
                <div class="hw_wrk_text">Student Management</div>
            </div>
            <img src="images/arrow.png" class="wrk_nxt wow slideInLeft slideleft" alt="School Management Software" />
            <div class="hw_wrk wow bounceInUp bounce2">
                <div class="circleshvr">
                    <div class="tst_dsgn sprite3">

                    </div>
                </div>
                <div class="hw_wrk_text">Library Management</div>
            </div>
            <img src="images/arrow.png" class="wrk_nxt wow slideInLeft slideleft1" alt="School Management Software" />
            <div class="hw_wrk wow bounceInUp bounce3">
                <div class="circleshvr">
                    <div class="tst_assgn sprite3">

                    </div>
                </div>
                <div class="hw_wrk_text">Timetabling</div>
            </div>
            <img src="images/arrow.png" class="wrk_nxt wow slideInLeft slideleft2" alt="School Management Software">
            <div class="hw_wrk wow bounceInUp bounce4">
                <div class="circleshvr">
                    <div class="sprite3 gen_result">

                    </div>
                </div>
                <div class="hw_wrk_text">Report Cards</div>
            </div>
        </div>
    </div>
</div>
<div class="mobile-content-wrapper">
    <ul id="flexiselDemo4" class='mobile-contentUL'>
        <li>
            <div class="circleshvr">
                <div class="que_database sprite3"></div>
                <div class="hw_wrk_text">Create questions</div>
            </div>
        </li>
        <li>
            <div class="circleshvr">
                <div class="tst_dsgn sprite3"></div>
                <div class="hw_wrk_text">Design Test</div>
            </div>
        </li>
        <li>
            <div class="circleshvr">
                <div class="tst_assgn sprite3"></div>
                <div class="hw_wrk_text">Assign Test</div>
            </div>
        </li>
        <li>
            <div class="circleshvr">
                <div class="sprite3 gen_result"></div>
                <div class="hw_wrk_text">Generate Result</div>
            </div>
        </li>
    </ul>
</div>
<div class="main-features">
    <div class="">
        <div class="box-main-heading wrapper-fix">
            <h3 class="normal_font font_hdng">{{ $home->service_title ?? 'A new innovation in school management' }}</h3>
            <p class="normal_font inrsmall_hdng">
                {{ $home->service_desc ?? 'Smooth registration, swift creation of classes, sections and
synchronized user-interface for you, your teachers, your students and their parents.' }}
            </p>
        </div>
        <div class="features-box home-page-box">
            <div class="slidesofhome" style="margin-top:0px;">
                @foreach($service as $key => $s)
                <article class="fchrs_area" onclick="firstfeature();">
                    <figure class="fchrs_img fchrs_img_8 featuresprite">
                        @if($s->service_image != '')
                        <img class="featurepage_icon" src='{{ asset("/storage/services/".$s->service_image) }}' alt="School Management Software">
                        <img class="featurepage_icon1" src='{{ asset("/storage/services/".$s->service_image) }}' alt="School Management Software">
                        @else
                        @endif
                    </figure>
                    <div>
                        <h3 class="fchrs_hding fchrs_hdng_frst">{{ $s->service_title }}</h3>
                        <p>{!! $s->service_description !!}</p>
                    </div>
                </article>
                @endforeach
            </div>
            <div class="slidesofhome" style='display:none'>
                <div id='feature1' class='homepagefeatures slideInRight festureslide' style='display:block'>
                    <img src="images/featuresscreen/questionbank/questionbank.png" alt="School Management Software">
                </div>
                <div id='feature2' class='homepagefeatures slideInRight festureslide'>
                    <img src="images/featuresscreen/featurespng/studentmanagement.png" alt="School Management Software">
                </div>
                <div id='feature3' class='homepagefeatures slideInRight festureslide'>
                    <img src="images/featuresscreen/testsettings/testcreation.png" alt="School Management Software">
                </div>
                <div id='feature4' class='homepagefeatures slideInRight festureslide'>
                    <img src="images/featuresscreen/monetize/monetize.png" alt="School Management Software">
                </div>
                <div id='feature5' class='homepagefeatures slideInRight festureslide'>
                    <img src="images/featuresscreen/testtaker/test_taker_panel.png" alt="School Management Software">
                </div>
                <div id='feature6' class='homepagefeatures slideInRight festureslide'>
                    <img src="images/featuresscreen/optimumreporting/optimum%20reporting.png" alt="School Management Software">
                </div>
                <div id='feature7' class='homepagefeatures slideInRight festureslide'>
                    <img src="images/featuresscreen/security/security.png" alt="School Management Software">
                </div>
                <div id='feature8' class='homepagefeatures slideInRight festureslide'>
                    <img src="images/featuresscreen/app/apps.png" alt="School Management Software">
                </div>
            </div>
            <div class="slidesofhome" style="margin-top:0px">


            </div>
        </div>
    </div>
</div>

<div class="main-client">
    <div class="clnt_full_wdth wrapper-fix">

        <div class="box-main-heading">
            <h3 class="normal_font font_hdng client-heading">{{ $home->client_title ?? 'A few of the clients who trusted on us' }}</h3>
            <p class="normal_font inrsmall_hdng">
                {{ $home->client_desc ?? '' }}
            </p>
        </div>



        <ul class='company-colr-logos'>
            @foreach($school as $key => $s)
            <li><img alt='{{ $s->logo }}' src='{{ asset("/storage/".$s->logo) }}'></li>
            @endforeach
        </ul>

    </div>
</div>
@endsection

@section('script')
@endsection