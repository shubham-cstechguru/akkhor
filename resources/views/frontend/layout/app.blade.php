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

    @yield('script')
</body>

</html>