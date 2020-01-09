<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<!-- Tieu Long Lanh Kute -->

<head>
    <title>Book Store</title>
    <!--[if lt IE 9]>
	<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->
    <!--[if lt IE 9]>
	<script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>
<![endif]-->
    <base href="{{asset('')}}">
    <meta http-equiv="cache-control" content="no-cache">
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <meta charset="UTF-8">
    <meta name="viewport" content="initial-scale=1, maximum-scale=1">
    <meta name="viewport" content="width=device-width">

    <link href="assets/home/css/style.css" rel="stylesheet" type="text/css" />
    <link href="assets/home/css/bs.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" type="text/css" href="assets/home/css/main-slider.css" />
    <!--[if lte IE 10]><link rel="stylesheet" type="text/css" href="css/customIE.css" /><![endif]-->
    <link href="assets/home/css/font-awesome.css" rel="stylesheet" type="text/css" />
    <link href="assets/home/css/font-awesome-ie7.css" rel="stylesheet" type="text/css" />

    <link href="assets/home/css/jquery.booklet.latest.css" type="text/css" rel="stylesheet" media="screen, projection, tv" />
    <noscript>
        <link rel="stylesheet" type="text/css" href="assets/home/css/noJS.css" />
    </noscript>

    <link href="assets/home/css/switcher.css" rel="stylesheet" type="text/css" />

    <link rel="stylesheet" name="skins" href="assets/home/css/default.css" type="text/css" media="all">

</head>

<body>

    <div class="wrapper">

        @include('home.layouts.header')

        @yield('content')

       @include('home.layouts.footer')

    </div>

    <script type="text/javascript" src="assets/home/js/lib.js"></script>
    <script type="text/javascript" src="assets/home/js/modernizr.js"></script>
    <script type="text/javascript" src="assets/home/js/easing.js"></script>
    <script type="text/javascript" src="assets/home/js/bs.js"></script>
    <script type="text/javascript" src="assets/home/js/bxslider.js"></script>
    <script type="text/javascript" src="assets/home/js/input-clear.js"></script>
    <script src="assets/home/js/range-slider.js"></script>
    <script src="assets/home/js/jquery.zoom.js"></script>
    <script type="text/javascript" src="assets/home/js/bookblock.js"></script>
    <script type="text/javascript" src="assets/home/js/social.js"></script>
    <script src="assets/home/js/jquery.booklet.latest.js" type="text/javascript"></script>
    <script type="text/javascript">
        $(function() {
            $("#mybook").booklet({
                width: '100%',
                height: 430,
                auto: true,
                //speed: 250,
            });
        });
    </script>

    <noscript>
        <style>
            #socialicons>a span {
                top: 0px;
                left: -100%;
                -webkit-transition: all 0.3s ease;
                -moz-transition: all 0.3s ease-in-out;
                -o-transition: all 0.3s ease-in-out;
                -ms-transition: all 0.3s ease-in-out;
                transition: all 0.3s ease-in-out;
            }
            
            #socialicons>ahover div {
                left: 0px;
            }
        </style>
    </noscript>
    <script type="text/javascript">
        /* <![CDATA[ */
        $(document).ready(function() {
                $('.social_active').hoverdir({});
            })
            /* ]]> */
    </script>
    <div class="switcher"></div>

    <script type="text/javascript" src="assets/home/js/cookie.js"></script>
    <script type="text/javascript" src="assets/home/js/colorswitcher.js"></script>

    <script type="text/javascript" src="assets/home/js/custom.js"></script>
</body>

<!-- Tieu Long Lanh Kute -->

</html>