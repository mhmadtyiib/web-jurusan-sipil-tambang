@extends('template.frontend')
@section('content')
<!-- Stylesheets -->
<link href="css/bootstrap.css" rel="stylesheet">
<link href="css/style.css" rel="stylesheet">
<link href="css/responsive.css" rel="stylesheet">

<link rel="shortcut icon" href="images/favicon.png" type="image/x-icon">
<link rel="icon" href="images/icons/icon-cross.png" type="image/x-icon">
<!-- Responsive -->
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
<!--[if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script><![endif]-->
<!--[if lt IE 9]><script src="js/respond.js"></script><![endif]-->
</head>




<!--Page Title-->
<section class="page-title" style="background-image:url({{url ('public/frontend')}}/images/background/bgSP.jpg)">
    {{-- <div class="auto-container">
        <h1>Visi & Misi</h1>
        <ul class="page-breadcrumb">
            <li><a href="index.html">Home</a></li>
            <li>About Us</li>
        </ul>
    </div> --}}
</section>
<!--End Page Title-->

<!--Consulting Section Two-->
<section class="consulting-section-two">
    <div class="auto-container">
        <div class="inner-container">

            <!--Sec Title-->
            <div class="sec-title centered">
                <div class="title"></div>
                <h2>Visi & Misi <br> <br> Jurusan Teknik Sipil dan Pertambangan <br> Program Studi Teknologi Rekayasa
                    Konstruksi Jalan dan Jembatan</h2>
            </div>
            <div class="title-text"></div>
            <div class="row clearfix">

                <!--Content Column-->
                @foreach ($list_visi_misi_sipil as $visi_misi_sipil)
                @if ($visi_misi_sipil->jenis == 'Visi')
                <div class="content-column col-md-12 col-sm-12 col-xs-12">
                    <div class="inner-column">
                        <h2> <span class="theme_color"> {{$visi_misi_sipil->jenis}}</span> <br></h2>
                        <div class="text">"{{$visi_misi_sipil->deskripsi}}"</div>
                        <div class="signature"><img src="images/icons/signature.png" alt="" /></div>
                    </div>
                </div>
                @endif


                <!--Content Column-->
                @if ($visi_misi_sipil->jenis == 'Misi')
                <div class="content-column col-md-12 col-sm-12 col-xs-12">
                    <div class="inner-column">
                        <h2> <span class="theme_color"> {{$visi_misi_sipil->jenis}}</span> <br></h2>
                        <div class="text">"{{$visi_misi_sipil->deskripsi}}"</div>
                        <div class="signature"><img src="images/icons/signature.png" alt="" /></div>
                    </div>
                </div>
                @endif

                @if ($visi_misi_sipil->jenis == 'Tujuan')
                <div class="content-column col-md-12 col-sm-12 col-xs-12">
                    <div class="inner-column">
                        <h2> <span class="theme_color"> {{$visi_misi_sipil->jenis}}</span> <br></h2>
                        <div class="text">"{{$visi_misi_sipil->deskripsi}}"</div>
                        <div class="signature"><img src="images/icons/signature.png" alt="" /></div>
                    </div>
                </div>
                @endif

                @endforeach

                <!--Image Column-->
                <div class="image-column col-md-6 col-sm-12 col-xs-12">
                    <div class="image">
                        <img src="images/resource/consulting.jpg" alt="" />
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>
<!--End Consulting Section Two-->


<!--Scroll to top-->
<div class="scroll-to-top scroll-to-target" data-target="html"><span class="fa fa-angle-up"></span></div>

<script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.fancybox.pack.js"></script>
<script src="js/owl.js"></script>
<script src="js/wow.js"></script>
<script src="js/appear.js"></script>
<script src="js/jquery-ui.js"></script>
<script src="js/script.js"></script>
</body>

</html>

@endsection