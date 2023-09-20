<!DOCTYPE html>

<html lang="en">

<head>

	<!-- META -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="keywords" content="">
    <meta name="author" content="">
    <meta name="robots" content="">    
    <meta name="description" content="">
    
    <!-- FAVICONS ICON -->
    <link rel="icon" href="images/favicon.html" type="image/x-icon" >
    <link rel="shortcut icon" type="image/x-icon" href="images/favicon.png" >
    
    <!-- PAGE TITLE HERE -->
    <title>Spa Template | Home Page 1</title>
    
    <!-- MOBILE SPECIFIC -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/css/bootstrap.min.css') }}"><!-- BOOTSTRAP STYLE SHEET -->
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend') }}/css/fontawesome/css/font-awesome.min.css"><!-- FONTAWESOME STYLE SHEET -->
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend') }}/css/flaticon.min.css"><!-- FLATICON STYLE SHEET -->
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend') }}/css/animate.min.css"><!-- ANIMATE STYLE SHEET --> 
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend') }}/css/owl.carousel.min.css"><!-- OWL CAROUSEL STYLE SHEET -->
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend') }}/css/bootstrap-select.min.css"><!-- BOOTSTRAP SELECT BOX STYLE SHEET -->
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend') }}/css/magnific-popup.min.css"><!-- MAGNIFIC POPUP STYLE SHEET -->
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend') }}/css/loader.min.css"><!-- LOADER STYLE SHEET -->   
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend') }}/css/style.css"><!-- MAIN STYLE SHEET -->
    <link rel="stylesheet" type="text/css" class="skin" href="{{ asset('frontend') }}/css/skin/skin-1.css"><!-- THEME COLOR CHANGE STYLE SHEET -->
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend') }}/css/switcher.css"><!-- SIDE SWITCHER STYLE SHEET -->

    <!-- REVOLUTION SLIDER CSS -->
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend') }}/plugins/revolution/revolution/css/settings.css">
    <!-- REVOLUTION NAVIGATION STYLE -->
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend') }}/plugins/revolution/revolution/css/navigation.css">

    
    <!-- GOOGLE FONTS -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

</head>

<body id="bg">
 
<div class="page-wraper"> 
       	@include('layout.navbar')

        @yield('content')
</div>
   <!-- STYLE SWITCHER END ==== -->

<!-- JAVASCRIPT  FILES ========================================= --> 
<script   src="{{ asset('frontend') }}/js/jquery-3.6.1.min.js"></script><!-- JQUERY.MIN JS -->
<script   src="{{ asset('frontend') }}/js/popper.min.js"></script><!-- POPPER.MIN JS -->
<script   src="{{ asset('frontend') }}/js/bootstrap.min.js"></script><!-- BOOTSTRAP.MIN JS -->
<script   src="{{ asset('frontend') }}/js/bootstrap-select.min.js"></script><!-- FORM JS -->
<script   src="{{ asset('frontend') }}/js/jquery.bootstrap-touchspin.min.js"></script><!-- FORM JS -->
<script   src="{{ asset('frontend') }}/js/magnific-popup.min.js"></script><!-- MAGNIFIC-POPUP JS -->
<script   src="{{ asset('frontend') }}/js/waypoints.min.js"></script><!-- WAYPOINTS JS -->
<script   src="{{ asset('frontend') }}/js/counterup.min.js"></script><!-- COUNTERUP JS -->
<script   src="{{ asset('frontend') }}/js/waypoints-sticky.min.js"></script><!-- COUNTERUP JS -->
<script   src="{{ asset('frontend') }}/js/isotope.pkgd.min.js"></script><!-- MASONRY  -->
<script   src="{{ asset('frontend') }}/js/imagesloaded.pkgd.min.js"></script><!-- MASONRY  -->
<script   src="{{ asset('frontend') }}/js/owl.carousel.min.js"></script><!-- OWL  SLIDER  -->
<script   src="{{ asset('frontend') }}/js/scrolla.min.js"></script><!-- ON SCROLL CONTENT ANIMTE   --> 
<script   src="{{ asset('frontend') }}/js/custom.js"></script><!-- CUSTOM FUCTIONS  -->
<script   src="{{ asset('frontend') }}/js/shortcode.js"></script><!-- SHORTCODE FUCTIONS  -->
<script   src="{{ asset('frontend') }}/js/switcher.js"></script><!-- SWITCHER FUCTIONS  -->

<!-- SLIDER REVOLUTION -->
<!-- REVOLUTION JS FILES -->
<script  src="{{ asset('frontend') }}/plugins/revolution/revolution/js/jquery.themepunch.tools.min.js"></script>
<script  src="{{ asset('frontend') }}/plugins/revolution/revolution/js/jquery.themepunch.revolution.min.js"></script>
<script  src="{{ asset('frontend') }}/plugins/revolution/revolution/js/extensions/revolution-plugin.js"></script>
<!-- REVOLUTION SLIDER SCRIPT -->

<!-- REVOLUTION SLIDER SCRIPT FILES -->
<script  src="{{ asset('frontend') }}/js/rev-script-1.js"></script>


</body>

</html>
