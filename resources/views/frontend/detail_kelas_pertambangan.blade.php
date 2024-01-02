@extends('template.frontend')
@section('content')
@csrf

<!DOCTYPE html>
<html>

<body>
<div class="page-wrapper">

    <section class="page-title style-two"
    style="background-image:url({{url ('public/frontend')}}/images/background/bgSP.jpg)">

    </section>
 	   
    <!--Page Title / Style Two-->
    <section class="consulting-section-two">
        <div class="auto-container">
            <div class="inner-container">
    
                <div class="sec-title centered">
                    <h2>DETAIL RUANG KELAS</h2>
                </div>
                <div class="row clearfix"> 
                       
    <!--End Page Title-->
    
    <!--Case Single Section-->
    <section class="case-single-section">
    	<div class="auto-container">
        	<!--Upper Box-->
            <div class="upper-box">
            	<div class="row clearfix">
                	  
                    <!--Image Column-->
                    <div class="image-column col-md-8 col-sm-12 col-xs-12">
                    	<div class="image">
                        	<img src="{{url("public/$ruang_kelas_pertambangan->foto")}}" style="object-fit: cover; position: static; width: 300%; height: 500px;"/>
                        </div>
                    </div>
                    
                </div>
            </div>
            <!--End Upper Box-->
            
            <!--Description Box-->
            <div class="description-box">
            	<h2>
                    {{$ruang_kelas_pertambangan->nama}}
                </h2>
                <div class="text">{{$ruang_kelas_pertambangan->deskripsi}}</div>
                <div class="row clearfix">
                	 
                </div>
            </div>
            <!--End Description Box-->
            
            
        </div>
        
            
        </div>
    </section>
    <!--End Case Single Section-->
    
    @endsection
</div>
<!--End pagewrapper-->

<!--Scroll to top-->
</body>
</html>