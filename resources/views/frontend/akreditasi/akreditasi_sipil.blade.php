@extends('template.frontend')
@section('content')
<section class="page-title style-two"
    style="background-image:url({{url ('public/frontend')}}/images/background/bgSP.jpg)">
    {{-- <div class="auto-container">
        <h1> AKREDITASI <br></h1>
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
                <h2> Akreditasi <br> <br>Jurusan Teknik Sipil dan Pertambangan <br>Program Studi Teknologi Rekayasa Konstruksi Jalan dan Jembatan</h2>
            </div>
            <div class="row clearfix">

                <div class="services-page-section" >
                    <div class="auto-container">
                        <div class="row clearfix">

                            <!--Services Block Four-->
                            @foreach ($list_akreditasi_sipil->sortByDesc('created_at') as $akreditasi_sipil)
                            <div class="services-block-four col-md-4 col-sm-12 col-xs-12">
                                <div class="inner-box">
                                    <div class="image">
                                        <a href="{{url("public/$akreditasi_sipil->foto")}}" style="object-fit: cover; position: static; width: 100%; height: 260px;" class="lightbox-image" ><img src="{{url("public/$akreditasi_sipil->foto")}}" style="object-fit: cover; position: static; width: 100%; height: 260px;" alt=""></a></figure>
                                        <div class="overlay">
                                            <div class="overlay">
                                                {{-- <span class="icon flaticon-book"></span> --}}
                                            </div>
                                        </div>
                                    </div>
                                    <div class="lower-content">
                                        <h3 style="color: black">Masa Berlaku :</h3>
                                        <h3 style="color: black">
                                            {{ $akreditasi_sipil->keterangan }}
                                        </h3>
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
    </div>            
@endsection