<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->
    <head>
    	<title>Today Lift</title>

    	<!-- Meta -->
    	<meta charset="utf-8">
    	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    	<meta name="description" content="Today Lift: Making better living off membership and partnership">
    	<meta name="author" content="Emmanuel N">
        <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
        <meta name="theme-color" content="#f75a5a" />

        <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
        <meta property="og:url"           content="https://www.todaylift.com" />
        <meta property="og:type"          content="website" />
        <meta property="og:title"         content="TodayLift" />
        <meta property="og:description"   content="Apart from daily earnings, getting loan has never been so easy" />
        <meta property="og:image"         content="#" />

    	<!-- Favicon -->
    	<link rel="shortcut icon" href="favicon.ico">

    	<!-- Web Fonts -->
    	<link rel='stylesheet' type='text/css' href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,600&amp;subset=cyrillic,latin'>

    	<!-- CSS Global Compulsory -->
    	<link rel="stylesheet" href="/assets/plugins/bootstrap/css/bootstrap.min.css">
    	<link rel="stylesheet" href="/assets/css/style.css">

    	<!-- CSS Header and Footer -->
    	<link rel="stylesheet" href="/assets/css/headers/header-default.css">
    	<link rel="stylesheet" href="/assets/css/footers/footer-v1.css">

    	<!-- CSS Implementing Plugins -->
    	<link rel="stylesheet" href="/assets/plugins/animate.css">
    	<link rel="stylesheet" href="/assets/plugins/line-icons/line-icons.css">
    	<link rel="stylesheet" href="/assets/plugins/font-awesome/css/font-awesome.min.css">
    	<link rel="stylesheet" href="/assets/plugins/fancybox/source/jquery.fancybox.css">
    	<link rel="stylesheet" href="/assets/plugins/owl-carousel/owl-carousel/owl.carousel.css">
    	<link rel="stylesheet" href="/assets/plugins/revolution-slider/rs-plugin/css/settings.css" type="text/css" media="screen">
    	<!--[if lt IE 9]><link rel="stylesheet" href="/assets/plugins/revolution-slider/rs-plugin/css/settings-ie8.css" type="text/css" media="screen"><![endif]-->

    	<!-- CSS Theme -->
    	<link rel="stylesheet" href="/assets/css/theme-colors/default.css" id="style_color">
    	<link rel="stylesheet" href="/assets/css/theme-skins/dark.css">

    	<!-- CSS Customization -->
    	<link rel="stylesheet" href="/assets/css/custom.css">

        <!-- Scripts -->
        <script>
            window.Laravel = <?php echo json_encode([
                'csrfToken' => csrf_token(),
            ]); ?>;
        </script>
    </head>

    <body>
    	<?php echo $__env->yieldContent('content'); ?>
        <!-- JS Global Compulsory -->
        <script type="text/javascript" src="/assets/plugins/jquery/jquery.min.js"></script>
        <script type="text/javascript" src="/assets/plugins/jquery/jquery-migrate.min.js"></script>
        <script type="text/javascript" src="/assets/plugins/bootstrap/js/bootstrap.min.js"></script>
        <!-- JS Implementing Plugins -->
        <script type="text/javascript" src="/assets/plugins/back-to-top.js"></script>
        <script type="text/javascript" src="/assets/plugins/smoothScroll.js"></script>
        <script type="text/javascript" src="/assets/plugins/jquery.parallax.js"></script>
        <script type="text/javascript" src="/assets/plugins/fancybox/source/jquery.fancybox.pack.js"></script>
        <script type="text/javascript" src="/assets/plugins/owl-carousel/owl-carousel/owl.carousel.js"></script>
        <script type="text/javascript" src="/assets/plugins/revolution-slider/rs-plugin/js/jquery.themepunch.tools.min.js"></script>
        <script type="text/javascript" src="/assets/plugins/revolution-slider/rs-plugin/js/jquery.themepunch.revolution.min.js"></script>
        <!-- JS Customization -->
        <script type="text/javascript" src="/assets/js/custom.js"></script>
        <!-- JS Page Level -->
        <script type="text/javascript" src="/assets/js/app.js"></script>
        <script type="text/javascript" src="/assets/js/plugins/fancy-box.js"></script>
        <script type="text/javascript" src="/assets/js/plugins/owl-carousel.js"></script>
        <script type="text/javascript" src="/assets/js/plugins/revolution-slider.js"></script>
        <script type="text/javascript" src="/assets/js/plugins/style-switcher.js"></script>
        <script type="text/javascript">
            jQuery(document).ready(function() {
                App.init();
                App.initParallaxBg();
                FancyBox.initFancybox();
                OwlCarousel.initOwlCarousel();
                StyleSwitcher.initStyleSwitcher();
                RevolutionSlider.initRSfullWidth();
            });
        </script>
        <!--[if lt IE 9]>
        <script src="/assets/plugins/respond.js"></script>
        <script src="/assets/plugins/html5shiv.js"></script>
        <script src="/assets/plugins/placeholder-IE-fixes.js"></script>
        <![endif]-->

    </body>
</html>
