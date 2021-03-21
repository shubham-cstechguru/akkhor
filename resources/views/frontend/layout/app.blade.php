<script>
    const CONATCT_NO = "+91 7972303958";
</script>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" />
    <link rel="shortcut icon" href="images/favicon.png" />
    <meta name="format-detection" content="telephone=no">
    <title>Online School Management – E-School</title>



    <style>
        .fooReveal {
            visibility: hidden;
        }
    </style>
    <link href="css/stylesheetec92.css?v=" rel="stylesheet" type="text/css" />
    <link href="css/images_localec92.css?v=" rel="stylesheet" type="text/css" />

    <style>
        @font-face {
            font-family: "Flaticon";
            src: url("fonts/flaticon.eot");
            src: url("fonts/flaticon.eot#iefix") format("embedded-opentype"),
                url("fonts/flaticon.woff") format("woff"),
                url("fonts/flaticon.ttf") format("truetype"),
                url("fonts/flaticon.svg") format("svg");
            font-weight: normal;
            font-style: normal;
        }
    </style>
    <link href="css/flaticonec92.css?v=" rel="stylesheet" type="text/css" />
    <link href="css/styleec92.css?v=" rel="stylesheet" type="text/css" />
    <link href="css/owl.carousel.minec92.css?v=" rel="stylesheet" type="text/css" />
    <link href="css/owl.theme.default.minec92.css?v=" rel="stylesheet" type="text/css" />

    <script type="text/javascript" src="js/jquery-1.9.1.min.js"></script>
    <script type="text/javascript" src="js/owl.carousel.js"></script>

    <link href="css/screenec92.css?v=" rel="stylesheet" type="text/css" />
    <script>
        (function(i, s, o, g, r, a, m) {
            i['GoogleAnalyticsObject'] = r;
            i[r] = i[r] || function() {
                (i[r].q = i[r].q || []).push(arguments)
            }, i[r].l = 1 * new Date();
            a = s.createElement(o),
                m = s.getElementsByTagName(o)[0];
            a.async = 1;
            a.src = g;
            m.parentNode.insertBefore(a, m)
        })(window, document, 'script', '../www.google-analytics.com/analytics.js', 'ga');

        ga('create', 'UA-96794520-1', 'auto');
        ga('send', 'pageview');
    </script>
</head>

<body>
    @include('frontend.common.header')
    @yield('content')
    @include('frontend.common.footer')
    <div class="home-page-popup-wrapper">
        <div class="home-page-popup-container">
            <iframe id="video" width="100%" height="100%" src="https://www.youtube.com/embed/brT1_NXFZJI?rel=0&amp;enablejsapi=1&amp;version=3&amp;playerapiid=ytplayer&amp;cc_load_policy=1&amp;controls=0&amp;fs=0&amp;rel=0&amp;showinfo=0&amp;color=white" allowscriptaccess="always" frameborder="0" allowfullscreen></iframe>
            <p class="popupCancel"><span class="close thick"></span></p>
        </div>
    </div>


    <script>
        $(document).ready(function() {

            $('#closepopup').click(function() {
                $('#livedemo_popup').css('display', 'none');
            });



            style_switcher = $('.android-ios-btnWrapper');
            $('.android-ios-btnWrapper').mouseover(function() {
                style_switcher.addClass('opened');
            });
            $('.android-ios-btnWrapper').mouseout(function() {
                style_switcher.removeClass('opened');
            });

            style_switcher_mobile = $('.android-ios-mobileWrapper');
            $('.android-ios-mobileWrapper').click(function() {
                style_switcher_mobile.toggleClass('openBox');
            });

        });
    </script>


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

    @yield('script')
</body>

</html>