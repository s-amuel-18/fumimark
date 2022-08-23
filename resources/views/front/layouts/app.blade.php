<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- Search Engine -->
    <meta name="description"
        content="Somos una agencia de profesionales experimentados en el exterminio  de todo tipo de plagas, donde nuestra principal objetivo es que tu negocio y local tenga un ambiente saludable libre de plagas de manera efectiva.">
    <meta name="image" content="{{ asset('images/logo/fumimark_logo_blanco.svg') }}">
    <meta name="keywords" content="Fumimark,control plagas, fumigacion, desratizacion, covid, desinfeccion" />
    <meta name="Revisit-after" content="1 days">
    <!-- Schema.org for Google -->
    <meta itemprop="name" content="Fumimark - Control de plagas">
    <meta itemprop="description"
        content="Somos una agencia de profesionales experimentados en el exterminio  de todo tipo de plagas, donde nuestra principal objetivo es que tu negocio y local tenga un ambiente saludable libre de plagas de manera efectiva.">
    <meta itemprop="image" content="{{ asset('images/logo/fumimark_logo_blanco.svg') }}">
    <!-- Twitter -->
    <meta name="twitter:card" content="summary">
    <meta name="twitter:title" content="Fumimark - Control de plagas">
    <meta name="twitter:description"
        content="Somos una agencia de profesionales experimentados en el exterminio  de todo tipo de plagas, donde nuestra principal objetivo es que tu negocio y local tenga un ambiente saludable libre de plagas de manera efectiva.">
    <meta name="twitter:image:src" content="{{ asset('images/logo/fumimark_logo_blanco.svg') }}">
    <!-- Open Graph general (Facebook, Pinterest & Google+) -->
    <meta name="og:title" content="Fumimark - Control de plagas">
    <meta name="og:description"
        content="Somos una agencia de profesionales experimentados en el exterminio  de todo tipo de plagas, donde nuestra principal objetivo es que tu negocio y local tenga un ambiente saludable libre de plagas de manera efectiva.">
    <meta name="og:image" content="{{ asset('images/logo/fumimark_logo_blanco.svg') }}">
    <meta name="og:url" content="https://www.fumimark.fluxelcode.com">
    <meta name="og:site_name" content="Fumimark - Control de plagas">
    <meta name="og:type" content="website">

    <link rel="icon" href="{{ asset('images/logo/fumimark_code.png') }}" type="image/x-icon">
    <title>Fumimark - Control de plagas</title>
    <link href="https://fonts.googleapis.com/css?family=Heebo:300,400,500,700,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('front/css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('front/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('front/css/jquery.bxslider.css') }}">
    <link rel="stylesheet" href="https://cdn.lineicons.com/1.0.1/LineIcons.min.css">
    <!--~~~~~~~~~~~~~~ animate ~~~~~~~~~~~~~~~-->
    <link rel="stylesheet" href="{{ asset('front/css/animate.css') }}">
</head>

<body>

    @yield('content')


    <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
    <script src="{{ asset('front/js/bootstrap.js') }}"></script>
    <script src="{{ asset('front/js/jquery.bxslider.min.js') }}"></script>
    <!--~~~~~~~~~~~~~~~~ wow ~~~~~~~~~~~~~~~~~-->
    <script src="{{ asset('front/js/wow.min.js') }}"></script>
    <script>
        $(document).ready(function() {
            $('.slider').bxSlider({
                minSlides: 1,
                maxSlides: 1,
                captions: false
            });
        });
        var a = 0;
        $(window).scroll(function() {

            var oTop = $('#counter').offset().top - window.innerHeight;
            if (a == 0 && $(window).scrollTop() > oTop) {
                $('.counter-value').each(function() {
                    var $this = $(this),
                        countTo = $this.attr('data-count');
                    $({
                        countNum: $this.text()
                    }).animate({
                            countNum: countTo
                        },

                        {

                            duration: 2000,
                            easing: 'swing',
                            step: function() {
                                $this.text(Math.floor(this.countNum));
                            },
                            complete: function() {
                                $this.text(this.countNum);
                                //alert('finished');
                            }

                        });
                });
                a = 1;
            }

        });
    </script>
    <script>
        var wow = new WOW({
            boxClass: 'wow', // animated element css class (default is wow)
            animateClass: 'animated', // animation css class (default is animated)
            offset: 0, // distance to the element when triggering the animation (default is 0)
            mobile: true, // trigger animations on mobile devices (default is true)
            live: true, // act on asynchronously loaded content (default is true)
            callback: function(box) {
                // the callback is fired every time an animation is started
                // the argument that is passed in is the DOM node being animated
            },
            scrollContainer: null, // optional scroll container selector, otherwise use window,
            resetAnimation: true, // reset animation on end (default is true)
        });
        wow.init();
    </script>

</body>

</html>
