@extends('template.frontend')
@section('content')
<section class="page-title style-two"
    style="background-image:url({{url ('public/frontend')}}/images/background/bgSP.jpg)">
    {{-- <div class="auto-container">
        <h1> TEKNISI <br></h1>
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
                <h2> Teknisi <br> <br>Jurusan Teknik Sipil dan Pertambangan <br>Program Studi Teknologi Pertambangan</h2>
            </div>
            <div class="row clearfix">

                <div class="services-page-section">
                    <div class="auto-container">
                        <div class="row clearfix">

                            <!--Services Block Four-->
                            @foreach ($list_teknisi_pertambangan as $teknisi_pertambangan)
                            <div class="services-block-four col-md-4 col-sm-6 col-xs-12">
                                <div class="inner-box">
                                    <div class="image">
                                        <img src="{{url("public/$teknisi_pertambangan->foto")}}" style="object-fit: cover; position: static; width: 100%; height: 400px;" />
                                        
                                        <div class="overlay">
                                            <div class="overlay">
                                                {{-- <span class="icon flaticon-book"></span> --}}
                                            </div>
                                        </div>
                                    </div>
                                    <div class="lower-content">
                                        <h3 style="text-align: center; color:black">
                                            {{$teknisi_pertambangan->nama}}
                                        </h3>
                                        <div style="text-align: center; color:gray; text-transform: uppercase">
                                            {{$teknisi_pertambangan->jabatan}}
                                        </div>
                                        <div style="text-align: center; color:black; text-transform: uppercase">
                                            NIDN : {{$teknisi_pertambangan->nidn}} <br> NIP : {{$teknisi_pertambangan->nip}}
                                        </div>
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
@endsection