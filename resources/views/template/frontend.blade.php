<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Jurusan Teknik Sipil dan Pertambangan POLITAP</title>
<!-- Stylesheets -->
<link rel="icon" href="{{ url('public/frontend') }}/logo-politap.jpg" type="image/x-icon">
<link href="{{url('public/frontend')}}/css/bootstrap.css" rel="stylesheet">
<link href="{{url('public/frontend')}}/plugins/revolution/css/settings.css" rel="stylesheet" type="text/css"><!-- REVOLUTION SETTINGS STYLES -->
<link href="{{url('public/frontend')}}/plugins/revolution/css/layers.css" rel="stylesheet" type="text/css"><!-- REVOLUTION LAYERS STYLES -->
<link href="{{url('public/frontend')}}/plugins/revolution/css/navigation.css" rel="stylesheet" type="text/css"><!-- REVOLUTION NAVIGATION STYLES -->

<link href="{{url('public/frontend')}}/css/style.css" rel="stylesheet">
<link href="{{url('public/frontend')}}/css/responsive.css" rel="stylesheet">

<link rel="shortcut icon" href="images/favicon.png" type="image/x-icon">
<link rel="icon" href="images/favicon.png" type="image/x-icon">
<!-- Responsive -->
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
<!--[if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script><![endif]-->
<!--[if lt IE 9]><script src="{{url('public/frontend')}}/js/respond.js"></script><![endif]-->
</head>

<body>

<div class="page-wrapper">
 	
    <!-- Preloader -->
    {{-- <div class="preloader"></div> --}}
 	
    <!-- Main Header-->
    @include('layout.frontend.header')
    <!--End Main Header -->
    
    @yield('content')

   
    <!--Main Footer-->
   @include('layout.frontend.footer')
    <!--End Main Footer--> 
    
</div>
<!--End pagewrapper-->

<!--Scroll to top-->
<div class="scroll-to-top scroll-to-target" data-target="html"><span class="fa fa-angle-up"></span></div>

<script src="{{url('public/frontend')}}/js/jquery.js"></script> 
<!--Revolution Slider-->
<script src="{{url('public/frontend')}}/plugins/revolution/js/jquery.themepunch.revolution.min.js"></script>
<script src="{{url('public/frontend')}}/plugins/revolution/js/jquery.themepunch.tools.min.js"></script>
<script src="{{url('public/frontend')}}/plugins/revolution/js/extensions/revolution.extension.actions.min.js"></script>
<script src="{{url('public/frontend')}}/plugins/revolution/js/extensions/revolution.extension.carousel.min.js"></script>
<script src="{{url('public/frontend')}}/plugins/revolution/js/extensions/revolution.extension.kenburn.min.js"></script>
<script src="{{url('public/frontend')}}/plugins/revolution/js/extensions/revolution.extension.layeranimation.min.js"></script>
<script src="{{url('public/frontend')}}/plugins/revolution/js/extensions/revolution.extension.migration.min.js"></script>
<script src="{{url('public/frontend')}}/plugins/revolution/js/extensions/revolution.extension.navigation.min.js"></script>
<script src="{{url('public/frontend')}}/plugins/revolution/js/extensions/revolution.extension.parallax.min.js"></script>
<script src="{{url('public/frontend')}}/plugins/revolution/js/extensions/revolution.extension.slideanims.min.js"></script>
<script src="{{url('public/frontend')}}/plugins/revolution/js/extensions/revolution.extension.video.min.js"></script>
<script src="{{url('public/frontend')}}/js/main-slider-script.js"></script>

<script src="{{url('public/frontend')}}/js/bootstrap.min.js"></script>
<script src="{{url('public/frontend')}}/js/jquery.fancybox.pack.js"></script>
<script src="{{url('public/frontend')}}/js/owl.js"></script>
<script src="{{url('public/frontend')}}/js/wow.js"></script>
<script src="{{url('public/frontend')}}/js/appear.js"></script>
<script src="{{url('public/frontend')}}/js/jquery-ui.js"></script>
<script src="{{url('public/frontend')}}/js/script.js"></script>
</body>
</html>