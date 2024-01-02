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
                <h2> Dosen <br> <br>Jurusan Teknik Sipil dan Pertambangan <br> Program Studi Teknologi Rekayasa Konstruksi Jalan dan Jembatan</h2>
            </div>
            <div class="row clearfix">

                <div class="services-page-section">
                    <div class="auto-container">
                        <div class="row clearfix">

                            <!--Services Block Four-->
                            @foreach ($list_dosen_sipil as $dosen_sipil)
                            <div class="services-block-four col-md-4 col-sm-6 col-xs-12">
                                <div class="inner-box">
                                    <div class="image">
                                        <img src="{{url("public/$dosen_sipil->foto")}}" style="object-fit: cover; position: static; width: 100%; height: 400px;" />                                        
                                    </div>
                                    <div class="lower-content">
                                        <h3 style="text-align: center; color: black" > 
                                            <strong>

                                                {{$dosen_sipil->nama}}
                                            </strong>
                                        </h3>
                                        <div style="text-align: center; color: gray; text-transform: uppercase;">
                                            {{$dosen_sipil->jabatan}}
                                        </div>
                                        <div style="text-align: center; color: black">
                                            NIDN : {{$dosen_sipil->nidn}} <br> NIP : {{$dosen_sipil->nip}}
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