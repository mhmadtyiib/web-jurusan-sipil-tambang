@extends('template.frontend')
@section('content')
<section class="page-title style-two"
    style="background-image:url({{url ('public/frontend')}}/images/background/bgSP.jpg)">
    {{-- <div class="auto-container">
        <h1> RUANGAN KELAS <br></h1>
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
                <h2> RUANG KELAS <br> <br>Jurusan Teknik Sipil dan Pertambangan <br>Program Studi Teknologi Pertambangan</h2>
            </div>
            <div class="row clearfix">

                <div class="services-page-section">
                    <div class="auto-container">
                        <div class="row clearfix">

                            <!--Services Block Four-->
                            @foreach ($list_ruang_kelas_pertambangan as $ruang_kelas_pertambangan)
                            <div class="services-block-four col-md-4 col-sm-6 col-xs-12">
                                <div class="inner-box">
                                    <div class="image">
                                        <a href="{{url("frontend/detail_kelas_pertambangan/$ruang_kelas_pertambangan->id")}}"> <img src="{{url ("public/$ruang_kelas_pertambangan->foto")}}" style="object-fit: cover; position: static; width: 100%; height: 240px;" /></a>
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
                                            {{$ruang_kelas_pertambangan->nama}}
                                        </h3>
                                        <a href="{{url("frontend/detail_kelas_pertambangan/$ruang_kelas_pertambangan->id")}}" class="read-more">Detail</a>
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