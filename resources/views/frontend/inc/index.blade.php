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
<script src="js/menu_script.js"></script>

<script src="js/jquery.accordion.source.js" type="text/javascript" charset="utf-8"></script>

<script type="text/javascript">
    function popitup(url) {
        newwindow = window.open(url, 'name', 'height=400,width=400');
        if (window.focus) {
            newwindow.focus()
        }
        return false;
    }
    $(document).ready(function() {
        $(".login-form-text").focus(function() {
            $(this).parent().addClass("is-active");
        });
        $(".login-form-text").focusout(function() {
            if ($(this).val() === "")
                $(this).parent().removeClass("is-active");
        })
        $(window).scroll(function() {
            var headheight = $('.container').height();
            console.log(headheight);
            if ($(window).scrollTop() > headheight) {
                $('#mainnav_bar').addClass('mainnavbar-fixed');
                //      $('.inrnavbar').addClass('inrnavbar-fixed');
                //                alert(headertop);
            }
            if ($(window).scrollTop() < headheight) {
                $('#mainnav_bar').removeClass('mainnavbar-fixed');
                //      $('.inrnavbar').removeClass('inrnavbar-fixed');
            }
        });
        $('#nav-icon4').click(function() {
            $(this).toggleClass('open');
        });
        $('.close_icn').click(function() {
            $("#popup_main").css("display", "none");
        })
        var urlPattern = /(https?:\/\/(?:www\.|(?!www))[a-zA-Z0-9][a-zA-Z0-9-]+[a-zA-Z0-9]\.[^\s]{2,}|www\.[a-zA-Z0-9][a-zA-Z0-9-]+[a-zA-Z0-9]\.[^\s]{2,}|https?:\/\/(?:www\.|(?!www))[a-zA-Z0-9]\.[^\s]{2,}|www\.[a-zA-Z0-9]\.[^\s]{2,})/;
        $("#send").click(function() {
            // var messagetrim= $.trim($("#message").val());
            if ($.trim($("#name").val()) == '') {
                $("#name").parent('.admin-login').addClass("errorinpt");
                return false;
            } else if ($.trim($("#email").val()) == '') {
                $("#email").parent('.admin-login').addClass("errorinpt");
                return false;
            } else if ($.trim($("#email").val()) != "" && (($("#email").val().indexOf("@")) < 1 || ($("#email").val().indexOf(".")) < 1 || ($.trim($("#email").val()).indexOf(" ")) > -1)) {
                $("#email").parent('.admin-login').addClass("errorinpt");
                return false;
            } else if ($.trim($("#company").val()) == '') {
                $("#company").parent('.admin-login').addClass("errorinpt");
                return false;
            } else if ($.trim($("#phoneno").val()) == '') {
                $("#phoneno").parent('.admin-login').addClass("errorinpt");
                return false;
            } else if ($.trim($("#phoneno").val()).length < '10' || $.trim($("#phoneno").val()).length > '15') {
                $("#phoneno").parent('.admin-login').addClass("errorinpt");
                return false;
            } else if ($.trim($("#designation").val()) == '') {
                $("#designation").parent('.admin-login').addClass("errorinpt");
                return false;
            } else if ($.trim($("#test").val()) == '' || $.trim($("#test").val()) == '0') {
                $("#test").parent('.admin-login').addClass("errorinpt");
                //                alert("Please Select Test In a Month");
                //                $("#test").parent('.admin-login').addClass("errorinpt");
                return false;
            } else if ($.trim($("#daysToFinalize").val()) == '' || $.trim($("#daysToFinalize").val()) == '0') {
                //                alert("Please Select Days To Finalize");
                $("#daysToFinalize").parent('.admin-login').addClass("errorinpt");
                return false;
            } else if ($.trim($("#requestedUrl").val()) == "" || !urlPattern.test($("#requestedUrl").val().toLowerCase())) {
                $("#requestedUrl").parent('.admin-login').addClass("errorinpt");
                return false;
            } else if ($.trim($("#message").val()) == '') {
                $("#message").parent('.admin-login').addClass("errorinpt");
                return false;
            }
            //        else if($.trim($("#test").val()) =='0'){
            //            alert("Please select test.");
            //            $("#test").focus();
            //            return false;
            //        }
            else {
                //alert("sudhir");
                //  return false;
                var email = $("#email").val();
                var name = $("#name").val();
                // var employescount= $("#employescount").val();
                var test = $("#test").val();
                var phoneno = $("#phoneno").val();
                var company = $("#company").val();
                var designation = $("#designation").val();
                var test = $("#test").val();
                var daysToFinalize = $("#daysToFinalize").val();
                var message = $("#message12").val();
                var requestedUrl = $("#requestedUrl").val();
                var zc_gad = $("#zc_gad").val();
                var gclid = localStorage.getItem('gclid');
                if (gclid != '') {
                    var leadType = 'Paid';
                } else {
                    var leadType = 'Organic';
                }
                $("#wait").show();
                $("#send").hide();
                var urldata = "email=" + email + "&name=" + name + "&test=" + test + "&phoneno=" +
                    phoneno + "&company=" + company + "&mode=" + 'reqDemo' + "&designation=" +
                    designation + "&test=" + test + "&daysToFinalize=" + daysToFinalize + "&message=" +
                    message + "&requestedUrl=" + requestedUrl.toLowerCase() + "&zc_gad=" + zc_gad + "&leadType=" + leadType;
                $.ajax({
                    type: "post",
                    url: "ajax",
                    data: urldata,
                    async: false,
                    error: function(data) {
                        // alert(data);
                        console.log(data);
                        //               alert("Internet connection problem.");
                    },
                    success: function(data) {
                        //alert(data);
                        //                 if($.trim(data) == '1'){
                        $("#send").show();
                        $("#wait").hide();
                        //                  alert("Message has been sent successfuly. ");
                        $("#popup_main").hide();
                        //                        location.reload();
                        //                 }
                        //location.reload();
                    }
                });
                //        window.open("demo-request-thankyou");
                $("#popup_main").hide();
                location.href = "demo-request-thankyou.html";
            }
        });
        // for contact us
        $("#sends").click(function() {
            var isProceed = 1;
            // var messagetrim= $.trim($("#message").val());
            if ($.trim($("#names").val()) == '') {
                //            alert("Please enter the name.");
                //           $("#names").focus();
                $("#names").css('border', '1px solid #FF0000');
                $("#names").attr('placeholder', 'Please enter your name.');
                isProceed = 0;
                return false;
            } else if ($.trim($("#emails").val()) == '') {
                //            alert("Please enter the email.");
                $("#emails").css('border', '1px solid #FF0000');
                $("#emails").attr('placeholder', 'Please enter your email.');
                isProceed = 0;
                //            $("#emails").focus();
                return false;
            } else if ($.trim($("#emails").val()) != "" && (($("#emails").val().indexOf("@")) < 1 || ($("#emails").val().indexOf(".")) < 1 || ($.trim($("#emails").val()).indexOf(" ")) > -1)) {
                //            alert("Please enter the correct format of email.");
                $("#emails").css('border', '1px solid #FF0000');
                $("#emails").attr('placeholder', 'Please enter valid email.');
                $("#emails").val('');
                isProceed = 0;
                return false;
            } else if ($.trim($("#phonenos").val()) == '') {
                //            alert("Please enter the phone number.");
                $("#phonenos").css('border', '1px solid #FF0000');
                $("#phonenos").attr('placeholder', 'Please enter your Phone Number.');
                //            $("#phonenos").focus();
                isProceed = 0;
                return false;
            } else if ($.trim($("#phonenos").val()).length != '10') {
                //         alert("Please enter the 10 digit phone number.");
                $("#phonenos").css('border', '1px solid #FF0000');
                $("#phonenos").attr('placeholder', 'Please enter valid 10 digit Phone Number.');
                $("#phonenos").val('');
                isProceed = 0;
                return false;
            } else if ($.trim($("#companys").val()) == '') {
                //            alert("Please enter the company name.");
                $("#companys").css('border', '1px solid #FF0000');
                $("#companys").attr('placeholder', 'Please enter the company name.');
                //            $("#companys").focus();
                isProceed = 0;
                //alert(isProceed);
                return false;
            } else if ($.trim($("#message12").val()) == '') {
                //            alert("Please enter the message.");
                $("#message12").css('border', '1px solid #FF0000');
                $("#message12").attr('placeholder', 'Please enter your message.');
                $("#message12").focus();
                isProceed = 0;
                return false;
            } else {
                //
            }
            if (isProceed == 1) {
                var email = $("#emails").val();
                var name = $("#names").val();
                // var employescount= $("#employescount").val();
                var message = $("#message12").val();
                var phoneno = $("#phonenos").val();
                var company = $("#companys").val();
                var zc_gad = $("#zc_gad").val();
                var gclid = localStorage.getItem('gclid');
                if (gclid != '') {
                    var leadType = 'Paid';
                } else {
                    var leadType = 'Organic';
                }
                $("#waits").show();
                $("#sends").hide();
                var urldata = "email=" + email + "&name=" + name + "&message=" + message + "&phoneno=" + phoneno + "&company=" + company + "&mode=" + 'contact' + "&zc_gad=" + zc_gad + "&leadType" + leadType;
                $.ajax({
                    type: "post",
                    url: "ajax",
                    data: urldata,
                    async: false,
                    error: function(data) {
                        //               alert("Internet connection problem.");
                    },
                    success: function(data) {
                        //                 if($.trim(data) == '1'){
                        $("#sends").show();
                        $("#waits").hide();
                        //                  alert("Message has been sent successfuly. ");
                        location.href = "contact-us-thankyou.html";
                        //                        location.reload();
                        //                 }
                    }
                });
                //         location.href = "contact-us-thankyou";
            }
        });
    });

    function enquiryPopup() {
        $("#popup_main").css("display", "block");
    }
    // -->
</script>
<script type="text/javascript">
    function show() {
        $("#dialog").css("display", "block");
        $('#dialog').fadeIn('slow');
    }

    function showhide() {
        $("#dialog").css("display", "none");
    }
</script>
<script type="text/javascript" src="js/wow.min.js"></script>
<script>
    new WOW().init();
</script>
<script type="text/javascript" src="js/jquery.flexisel.js"></script>
<script type="text/javascript" src="js/homefeature.js"></script>
<script type="text/javascript">
    $(window).load(function() {
        $("#flexiselDemo3").flexisel({
            visibleItems: 4,
            itemsToScroll: 1,
            autoPlay: {
                enable: true,
                interval: 5000,
                pauseOnHover: true
            },
            responsiveBreakpoints: {
                portrait: {
                    changePoint: 480,
                    visibleItems: 1,
                    itemsToScroll: 1
                },
                landscape: {
                    changePoint: 640,
                    visibleItems: 2,
                    itemsToScroll: 2
                },
                tablet: {
                    changePoint: 768,
                    visibleItems: 3,
                    itemsToScroll: 1
                }
            }
        });
        $("#flexiselDemo4").flexisel({
            visibleItems: 4,
            itemsToScroll: 1,
            autoPlay: {
                enable: true,
                interval: 5000,
                pauseOnHover: true
            },
            responsiveBreakpoints: {
                portrait: {
                    changePoint: 480,
                    visibleItems: 1,
                    itemsToScroll: 1
                },
                landscape: {
                    changePoint: 640,
                    visibleItems: 2,
                    itemsToScroll: 2
                },
                tablet: {
                    changePoint: 768,
                    visibleItems: 3,
                    itemsToScroll: 1
                }
            }
        });
        $("#flexiselDemo5").flexisel({
            visibleItems: 4,
            itemsToScroll: 1,
            autoPlay: {
                enable: true,
                interval: 5000,
                pauseOnHover: true
            },
            responsiveBreakpoints: {
                portrait: {
                    changePoint: 480,
                    visibleItems: 1,
                    itemsToScroll: 1
                },
                landscape: {
                    changePoint: 640,
                    visibleItems: 2,
                    itemsToScroll: 2
                },
                tablet: {
                    changePoint: 768,
                    visibleItems: 3,
                    itemsToScroll: 1
                }
            }
        });
        $("#flexiselDemo6").flexisel({
            visibleItems: 4,
            itemsToScroll: 1,
            autoPlay: {
                enable: true,
                interval: 5000,
                pauseOnHover: true
            },
            responsiveBreakpoints: {
                portrait: {
                    changePoint: 480,
                    visibleItems: 1,
                    itemsToScroll: 1
                },
                landscape: {
                    changePoint: 640,
                    visibleItems: 2,
                    itemsToScroll: 2
                },
                tablet: {
                    changePoint: 768,
                    visibleItems: 3,
                    itemsToScroll: 1
                }
            }
        });
    });
</script>
<script type="text/javascript">
    if ($(document).width() <= 768) {
        $('.navbarul').addClass('navbarfeature');
    } else {}
    $(".navbarfeature").owlCarousel({
        autoPlay: false,
        //      items : 1, // THIS IS IMPORTANT
        itemsCustom: [
            [0, 3],
            [320, 2],
            [360, 2],
            [480, 3],
            [768, 5]
        ],
        navigation: true
    });
</script>
<script>
    $(document).ready(function() {
        $(document).on('focus', ".chColor", function() {
            $("#enquiry_form_1 input,select,textarea").removeClass('chColor');
        });
        $("#sub_pr_enq").click(function(event) {
            event.preventDefault();
            var name = $.trim($("#enquiry_form_1 input[name=name]").val());
            var companyName = $.trim($("#enquiry_form_1 input[name=companyName]").val());
            var phoneNumber = $.trim($("#enquiry_form_1 input[name=phoneNumber]").val());
            var email = $.trim($("#enquiry_form_1 input[name=email]").val());
            var cName = $.trim($("#enquiry_form_1 input[name=cName]").val());
            var stName = $.trim($("#enquiry_form_1 input[name=stName]").val());
            var CtName = $.trim($("#enquiry_form_1 input[name=CtName]").val());
            var address = $.trim($("#enquiry_form_1 textarea[name=address]").val());
            var purpose = $.trim($("#enquiry_form_1 select[name=purpose]").val());
            var message = $.trim($("#enquiry_form_1 textarea[name=message]").val());
            var zc_gad = $.trim($("#enquiry_form_1 textarea[name=zc_gad]").val());
            var gclid = localStorage.getItem('gclid');
            if (gclid != '') {
                var leadType = 'Paid';
            } else {
                var leadType = 'Organic';
            }
            if (name == '') {
                $("input[name=name]").addClass('chColor');
                return false;
            }
            if (companyName == '') {
                $("input[name=companyName]").addClass('chColor');
                return false;
            }
            if (phoneNumber == '') {
                $("input[name=phoneNumber]").addClass('chColor');
                return false;
            } else if (phoneNumber.length < 10 || phoneNumber.length > 15) {
                $("input[name=phoneNumber]").val('');
                alert('Mobile Number must be 10-15 digit numeric.');
                $("input[name=phoneNumber]").addClass('chColor');
                return false;
            }
            if (email == '') {
                $("input[name=email]").addClass('chColor');
                return false;
            } else if (!isEmail(email)) {
                $("input[name=email]").val('');
                alert('Please enter valid email address');
                $("input[name=email]").addClass('chColor');
                return false;
            }
            if (cName == '') {
                $("input[name=cName]").addClass('chColor');
                return false;
            }
            if (stName == '') {
                $("input[name=stName]").addClass('chColor');
                return false;
            }
            if (CtName == '') {
                $("input[name=CtName]").addClass('chColor');
                return false;
            }
            if (address == '') {
                $("textarea[name=address]").addClass('chColor');
                return false;
            }
            if (purpose == '' || purpose == '0') {
                $("select[name=purpose]").addClass('chColor');
                return false;
            }
            if (message == '') {
                $("textarea[name=message]").addClass('chColor');
                return false;
            }
            var formData = $('#enquiry_form_1').serializeArray();
            formData.push({
                name: "mode",
                value: "priceEnq"
            });
            formData.push({
                name: "leadType",
                value: leadType
            });
            $('#lodrIcon').show();
            $.ajax({
                url: "ajax",
                type: 'POST',
                data: formData,
                success: function(result) {
                    //                    alert(result);
                    console.log(result);
                    //                    $('#enquiryOtr_state11').hide();
                    $('#lodrIcon').hide();
                    $('#stat_div').show();
                    if (result == 'Success')
                        $('#successEnquiry1').show();
                    else
                        $('#failEnquiry1').show();
                    $("#enquiry_form_1 input,select,textarea").val('');
                    setTimeout(function() {
                        location.reload();
                    }, 5000);
                }
            });
        });
        $(".enqNow").click(function() {
            $('#enquiryOtr_state11').show();
        });
        $(".enqClsBtn").click(function() {
            $('#enquiryOtr_state11').hide();
        });
        $('#sub_pr_enq input').focus(function() {
            alert('dfdfd');
            $(this).css('border', 'hsl(210, 100%, 39%)');
        });
    });

    function isEmail(email) {
        var regex = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;
        return regex.test(email);
    }
</script>
<script type="text/javascript" src='../crm.zoho.com/crm/javascript/zcga.js'></script>
@endsection