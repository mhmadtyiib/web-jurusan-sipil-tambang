@extends('template.frontend')
@section('content')

<section class="page-title style-two"
    style="background-image:url({{url ('public/frontend')}}/images/background/bgSP.jpg)">
    {{-- <div class="auto-container">
        <h1> PIMPINAN <br></h1>
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
                <h2>Pimpinan <br> <br>Jurusan Teknik Sipil dan Pertambangan <br>Politeknik Negeri Ketapang</h2>
            </div>

            <div class="row clearfix">

                <div class="services-page-section">
                    <div class="auto-container">
                        <div class="row clearfix">

                            <!--Services Block Four-->
                            @foreach ($list_pimpinan as $pimpinan)
                            <div class="services-block-four col-md-4 col-sm-6 col-xs-12">
                                <div class="inner-box"> 
                                    <div class="image">
                                        <img src="{{url("public/$pimpinan->foto")}}"style="object-fit: cover; position: static; width: 100%; height: 400px" />
                                        
                                        <div class="overlay">
                                            <div class="overlay">
                                                {{-- <span class="icon flaticon-book"></span> --}}
                                            </div>
                                        </div>
                                    </div>
                                    <div class="lower-content">
                                        <h3 style="text-align: center; color:black"> 
                                            {{$pimpinan->nama}} <br> 
                                        </h3>
                                        <div style="text-align: center; color:gray; text-transform: uppercase;">
                                            {{$pimpinan->jabatan}}
                                        </div>
                                        <div style="text-align: center; color:black">
                                            NIDN : {{$pimpinan->nidn}} <br> NIP : {{$pimpinan->nip}}
                                        </div>
                                        <br>
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

