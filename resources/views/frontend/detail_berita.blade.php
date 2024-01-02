@extends('template.frontend')
@section('content')
@csrf
<!--Page Title / Style Two-->
<section class="page-title style-two"
    style="background-image:url({{url ('public/frontend')}}/images/background/bgTSP.jpg)">
    <div class="auto-container">
        <h1>BERITA <br> SELENGKAPNYA</h1>
        {{-- <ul class="page-breadcrumb">
            <li><a href="index.html">Home</a></li>
            <li><a href="about.html">Blog</a></li>
            <li>Blog Large Image</li>
        </ul> --}}
    </div>
</section>
<!--End Page Title-->

<!--Sidebar Page Container-->
<div class="sidebar-page-container">
    <div class="auto-container">
        <div class="row clearfix"> 

            <!--Content Side / Our Blog-->
            <div class="content-side col-lg-8 col-md-8 col-sm-12 col-xs-12">
                <div class="blog-large">

                    <!--News Block Four-->
                    <div class="news-block-four">
                        <div class="inner-box">
                            <div class="image">
                                <a><img src="{{url ("public/$berita->foto")}}" style="object-fit: cover; position:
                                    static; width: 100%; height: 400px;" /></a>
                            </div>
                            <div class="lower-content">
                                <ul class="post-info">
                                    <br>
                                    <li>{{ date('d-M-y', strtotime($berita->created_at)) }}</li>
                                </ul>
                                <h3><a>{{$berita->keterangan}}</a></h3>
                                <div class="text">
                                    {!! nl2br(e($berita->deskripsi)) !!}  
                                </div>
                            </div>
                        </div>
                    </div>


                </div>
            </div>

            <!--Sidebar Side-->
            <div class="sidebar-side col-lg-4 col-md-4 col-sm-12 col-xs-12">
                <aside class="sidebar">

                    <!-- Popular Post Widget -->
                    <div class="sidebar-widget-three popular-posts-widget">
                        <div class="sidebar-title-three">
                            <h2>Berita Terbaru</h2>
                        </div>
                        <div class="widget-content">
                            @foreach ($list_berita->sortByDesc('created_at') as $berita) 
                            <article class="post-two">
                                <div class="icon-box">
                                    <span class="icon flaticon-edit-1"></span>
                                </div>
                                <div class="post-info">{{ date('d-M-Y', strtotime($berita->created_at)) }}</div>
                                <div class="text">
                                    <a href="{{url("frontend/detail_berita/$berita->id")}}">
                                        {{$berita->keterangan}}
                                    </a>
                                </div>
                            </article>
                            @endforeach
                        </div>
                    </div>

                </aside>
            </div>

        </div>
    </div>
</div>
<!--End Blog Small Section-->



@endsection

</div>