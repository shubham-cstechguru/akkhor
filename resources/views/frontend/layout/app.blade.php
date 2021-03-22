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

    <script type="text/javascript" src="js/jquery-1.9.1.min.js"></script>

    <link href="css/screenec92.css?v=" rel="stylesheet" type="text/css" />
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


    <script src="js/menu_script.js"></script>

    <script type="text/javascript">

        $(document).ready(function() {
            $(window).scroll(function() {
                var headheight = $('.container').height();
                console.log(headheight);
                if ($(window).scrollTop() > headheight) {
                    $('#mainnav_bar').addClass('mainnavbar-fixed');
                }
                if ($(window).scrollTop() < headheight) {
                    $('#mainnav_bar').removeClass('mainnavbar-fixed');
                }
            });
            $('#nav-icon4').click(function() {
                $(this).toggleClass('open');
            });
            $('.close_icn').click(function() {
                $("#popup_main").css("display", "none");
            })      
        });
    </script>
    <script type="text/javascript" src="js/wow.min.js"></script>
    <script>
        new WOW().init();
    </script>
    <script type="text/javascript" src="js/jquery.flexisel.js"></script>
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
    @yield('script')
</body>

</html>