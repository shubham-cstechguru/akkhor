<script>
    const CONATCT_NO = "{{ $setting->mobile ?? '' }}";
</script>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="description" content="@yield('description')">
    <meta name="keywords" content="@yield('keywords')">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" />
    @if($setting->favicon ?? '' !='')
    <link rel="shortcut icon" href='{{ asset("/storage/favicon/".$setting->favicon) }}' />
    @else
    <link rel="shortcut icon" href='{{ asset("/images/favicon.png") }}' />
    @endif
    <meta name="format-detection" content="telephone=no">
    <title>{{ $setting->title ?? 'Dossier Box' }} | @yield('title')</title>



    <style>
        .fooReveal {
            visibility: hidden;
        }
    </style>
    {{ Html::style('css/stylesheetec92.css?v=') }}
    {{ Html::style('css/images_localec92.css?v=') }}

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
    {{ Html::style('css/flaticonec92.css?v=') }}
    {{ Html::style('css/styleec92.css?v=') }}

    {{ Html::script('js/jquery-1.9.1.min.js') }}

    {{ Html::style('css/screenec92.css?v=') }}

</head>

<body>
    @include('frontend.common.header')
    @yield('content')
    @include('frontend.common.footer')

    {{ Html::script('js/menu_script.js') }}



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
    {{ Html::script('js/wow.min.js') }}

    <script>
        new WOW().init();
    </script>
    {{ Html::script('js/jquery.flexisel.js') }}

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

    <script>
        $(document).ready(function() {
            $('.video-link').click(function() {
                $('.home-page-popup-wrapper').addClass('popupActive');
                $("#video")[0].src += "&autoplay=1";
                ev.preventDefault();
            });
            $('.popupCancel').click(function() {
                $('#video')[0].contentWindow.postMessage('{"event":"command","func":"stopVideo","args":""}', '*');
                $('.home-page-popup-wrapper').removeClass('popupActive');
            });
        });
    </script>
    @yield('script')

    <div class="home-page-popup-wrapper">
        <div class="home-page-popup-container">
            <iframe id="video" width="100%" height="100%" src="https://www.youtube.com/embed/{{ $setting->youtube ?? '' }}?rel=0&amp;enablejsapi=1&amp;version=3&amp;playerapiid=ytplayer&amp;cc_load_policy=1&amp;controls=0&amp;fs=0&amp;rel=0&amp;showinfo=0&amp;color=white" allowscriptaccess="always" frameborder="0" allowfullscreen></iframe>
            <p class="popupCancel"><span class="close thick"></span></p>
        </div>
    </div>
</body>

</html>