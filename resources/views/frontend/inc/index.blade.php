@extends('frontend.layout.app')
@section('content')

<div class="container mainPage-wrapper" id='mainheader' style="clear:both">
    <div class="wrapper-fix">
        <div class='headercopntent'>
            <div class="headerinr1">
                <h1>Your ultimate destination for online school management</h1>
                <h3>Prepare students, teachers and parents to perform extraordinarily with an easy to use highly interactive platform and <br> simplify the assessment cycle.</h3>
                <span class="video-link"><i><img src='images/play-button-2.svg' alt="play-button" /></i>Watch Video</span>
                <a href='http://acc.suncitytechno.com/school-management/get-started' target="_blank" class="hdrbtn">Get Started</a>
            </div>
        </div>
    </div>
</div>

<div class="main-contenior">
    <div class="wrapper-fix">
        <div class="box-main-heading">
            <h2 class="light_font wow bounceInDown"><span>Salient Keys</span></h2>
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
            <h3 class="normal_font font_hdng">A new innovation in school management</h3>
            <p class="normal_font inrsmall_hdng">
                Smooth registration, swift creation of classes, sections and<br> synchronized user-interface for you, your teachers, your students and their parents.
            </p>
        </div>
        <div class="features-box home-page-box">
            <div class="slidesofhome" style="margin-top:0px;">
                <!--    <a class="page activefeature" id='featurehdr1' href="javascript:void(0);" >     -->
                <article class="fchrs_area" onclick="firstfeature();">
                    <figure class="fchrs_img fchrs_img_8 featuresprite">
                        <img class="featurepage_icon" src='svgimages/easylearning.svg' alt="School Management Software">
                        <img class="featurepage_icon1" src='svgimages/easylearning1.svg' alt="School Management Software">
                    </figure>
                    <div>
                        <h3 class="fchrs_hding fchrs_hdng_frst">Easy to Learn and Use</h3>
                        <p>One-stop-destination for examination, preparation, recruitment, and more. Specially designed online examination system to solve all your preparation worries. The platform is smooth to use with a translational flow of information.</p>
                    </div>
                </article>

                <article class="fchrs_area">
                    <figure class="fchrs_img fchrs_img_8 featuresprite">
                        <img class="featurepage_icon" src='svgimages/highlyinteractivedesign.svg' alt="School Management Software">
                        <img class="featurepage_icon1" src='svgimages/highlyinteractivedesign1.svg' alt="School Management Software">
                    </figure>
                    <div>
                        <h3 class="fchrs_hding fchrs_hdng_frst">Highly Interactive Interface</h3>
                        <p>A click to the next trick, simple registration, easy test and quiz creation, signing- in, synchronized processing, secured encoding and decoding of information and more.</p>
                    </div>
                </article>

                <article class="fchrs_area">
                    <figure class="fchrs_img fchrs_img_8 featuresprite">
                        <img class="featurepage_icon" src='svgimages/advancedrporting.svg' alt="School Management Software">
                        <img class="featurepage_icon1" src='svgimages/advancedrporting1.svg' alt="School Management Software">
                    </figure>
                    <div>
                        <h3 class="fchrs_hding fchrs_hdng_frst">Advanced Reporting System</h3>
                        <p>Instant scorecard generation, computational analysis, efficient feedback sharing to boost up your performance and precision. An ultimate combination of detailed and drilled methodologies that will eventually complement your skills and grades.</p>
                    </div>
                </article>

                <article class="fchrs_area">
                    <figure class="fchrs_img fchrs_img_8 featuresprite">
                        <img class="featurepage_icon" src='svgimages/technicalsupport.svg' alt="School Management Software">
                        <img class="featurepage_icon1" src='svgimages/technicalsupport1.svg' alt="School Management Software">
                    </figure>
                    <div>
                        <h3 class="fchrs_hding fchrs_hdng_frst">Splendid Support</h3>
                        <p>Your request and our actions to strive triggered support. A dedicated team is working round the clock to provide 24 X 7 streamlined access to our technical experts.</p>
                    </div>
                </article>

                <article class="fchrs_area">
                    <figure class="fchrs_img fchrs_img_8 featuresprite">
                        <img class="featurepage_icon" src='svgimages/smartsubscription.svg' alt="School Management Software">
                        <img class="featurepage_icon1" src='svgimages/smartsubscription1.svg' alt="School Management Software">
                    </figure>
                    <div>
                        <h3 class="fchrs_hding fchrs_hdng_frst">Smart Subscriptions</h3>
                        <p>Premium selection to the suited subscription that will match your preferences and priorities of using the online assessment platform.
                        </p>
                    </div>
                </article>
                <article class="fchrs_area">
                    <figure class="fchrs_img fchrs_img_8 featuresprite">
                        <img class="featurepage_icon" src='svgimages/activeaccessibility.svg' alt="School Management Software">
                        <img class="featurepage_icon1" src='svgimages/activeaccessibility1.svg' alt="School Management Software">
                    </figure>
                    <div>
                        <h3 class="fchrs_hding fchrs_hdng_frst">Active Accessibility</h3>
                        <p>Go wherever you want to and practice whenever you want, using the next level online exam platform. Create & assign tests and quiz from anywhere at any time. Experience a lag-free synchronized performance of School Management Software on your mobile devices.</p>
                    </div>
                </article>
                <!--        </a>-->
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
            <h3 class="normal_font font_hdng client-heading">A few of the clients who trusted on us</h3>

        </div>



        <ul class='company-colr-logos'>
            <li><img alt='School Management SoftwareClients' src='images/clients/1.png'></li>
            <li><img alt='School Management SoftwareClients' src='images/clients/2.png'></li>
            <li><img alt='School Management SoftwareClients' src='images/clients/1.png'></li>
            <li><img alt='School Management SoftwareClients' src='images/clients/2.png'></li>
            <li><img alt='School Management SoftwareClients' src='images/clients/1.png'></li>
            <li><img alt='School Management SoftwareClients' src='images/clients/2.png'></li>
            <li><img alt='School Management SoftwareClients' src='images/clients/1.png'></li>
            <li><img alt='School Management SoftwareClients' src='images/clients/2.png'></li>
            <li><img alt='School Management SoftwareClients' src='images/clients/1.png'></li>
            <li><img alt='School Management SoftwareClients' src='images/clients/2.png'></li>
            <li><img alt='School Management SoftwareClients' src='images/clients/1.png'></li>
            <li><img alt='School Management SoftwareClients' src='images/clients/2.png'></li>
            <li><img alt='School Management SoftwareClients' src='images/clients/1.png'></li>
            <li><img alt='School Management SoftwareClients' src='images/clients/2.png'></li>
            <li><img alt='School Management SoftwareClients' src='images/clients/1.png'></li>
            <li><img alt='School Management SoftwareClients' src='images/clients/2.png'></li>
        </ul>

    </div>
</div>
@endsection

@section('script')
@endsection