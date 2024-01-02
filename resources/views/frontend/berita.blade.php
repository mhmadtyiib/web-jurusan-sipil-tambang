@extends('template.frontend')
@section('content')
    <!--Page Title / Style Two-->
    <section class="page-title style-two" style="background-image:url({{url ('public/frontend')}}/images/background/bgSP.jpg)">
    	{{-- <div class="auto-container">
        	<h1>KUMPULAN <br> BERITA</h1>
            <ul class="page-breadcrumb">
            	<li><a href="index.html">Home</a></li>
                <li><a href="about.html">Blog</a></li>
                <li>Blog Small Image</li>
            </ul>
        </div> --}}
    </section>
    <!--End Page Title-->
    
    <!--Blog Small Section-->
    <section class="consulting-section-two">
        <div class="auto-container">
            <div class="inner-container">
    
                <div class="sec-title centered">
                    <div class="title"></div>
                    <h2> Berita <br>Jurusan Teknik Sipil dan Pertambangan</h2>
                </div>
                <div class="title-text">Klik selengkapnya untuk mengetahui berita lebih detail.</div>

                <div class="row clearfix">
               
            	<!--News Block Three-->
                @foreach ($list_berita->sortByDesc('created_at') as $berita)  
                <div class="news-block-three col-md-4 col-sm-6 col-xs-12"> 
                	<div class="inner-box">
                    	<div class="image">
                        	<a href="{{url("frontend/detail_berita/$berita->id")}}"><img src="{{url ("public/$berita->foto")}}" style="object-fit: cover; position: static; width: 100%; height: 290px;" /></a>
                            <ul class="post-info" style="text-align: center">
                            	<li>
                                    {{$berita->keterangan}}  
                                </li>
                            </ul>
                        </div>
                        <div class="lower-content">                           
                            <a href="{{url("frontend/detail_berita/$berita->id")}}">
                                <div class="card">
                                    <h3>
                                        {{ date('d-M-Y', strtotime($berita->created_at)) }}
                                    </h3>
                                </div>
                            </a>

                            <a href="{{url("frontend/detail_berita/$berita->id")}}" class="read-more">Selengkapnya</a>
                        </div>
                    </div>
                </div>
                
                @endforeach
                
                
            </div>          
            
        </div>
    </section>

@endsection