@extends('template.frontend')
@section('content')


<section class="page-title style-two"
    style="background-image:url({{url ('public/frontend')}}/images/background/bgSP.jpg)">
    {{-- <div class="auto-container">
        <h1> RUANG MANAJEMEN <br> JURUSAN & PRODI </h1>
        <ul class="page-breadcrumb">
            <li><a href="index.html">Home</a></li>
            <li>Services</li>
        </ul>
    </div> --}}
</section>
<!--End Page Title-->

<!--Services Page Section-->
<section class="consulting-section-two">
    <div class="auto-container">
        <div class="inner-container">

            <div class="sec-title centered">
                <div class="title"></div> 
                <h2> Ruang Penunjang Manajemen Jurusan dan Program Studi <br> <br>Jurusan Teknik Sipil dan Pertambangan <br>Program Studi Teknologi Rekayasa Konstruksi Jalan dan Jembatan</h2>
            </div>
            <div class="row clearfix">

                <div class="services-page-section">
                    <div class="auto-container">
                        <div class="row clearfix">

                            <!--Services Block Four-->
                            @foreach ($list_ruang_manajemen_sipil as $ruang_manajemen_sipil)
                            <div class="services-block-four col-md-4 col-sm-6 col-xs-12">
                                <div class="inner-box">
                                    <div class="image">
                                        <a href="{{url("frontend/detail_ruang_sipil/$ruang_manajemen_sipil->id")}}"> <img src="{{url ("public/$ruang_manajemen_sipil->foto")}}" style="object-fit: cover; position: static; width: 100%; height: 240px;" /></a>
                                        {{-- <div class="icon-box">
                                            <span class="icon flaticon-book"></span>
                                        </div> --}}
                                        <div class="overlay">
                                            <div class="overlay">
                                                {{-- <span class="icon flaticon-book"></span> --}}
                                            </div>
                                        </div>
                                    </div>
                                    <div class="lower-content">
                                        <h3 style="color: black">
                                            {{$ruang_manajemen_sipil->nama}}
                                        </h3>
                                        <a href="{{url("frontend/detail_ruang_sipil/$ruang_manajemen_sipil->id")}}" class="read-more">Detail</a>
                                    </div>
                                </div>
                            </div>
                                
                            @endforeach
                           
                            </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>            
@endsection