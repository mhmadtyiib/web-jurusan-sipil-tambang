<footer class="main-footer">
    <div class="auto-container">
        <!--Upper Box-->
        <div class="upper-box">
            <div class="row clearfix">
                <!--Footer Logo-->
                <div class="logo-column col-md-6 col-sm-6 col-xs-12">
                    <div class="logo">
                        <a><img src="{{url('public/frontend')}}/images/logo.politappp.PNG" alt="" /></a>
                    </div>
                </div>
                <!--Nav Column-->
                <div class="nav-column col-md-6 col-sm-6 col-xs-12">
                    <div class="inner-column">
                        {{-- <ul class="footer-nav">
                            <li><a href="#">Private Policy</a></li>
                            <li><a href="#">Terms & Condition</a></li>
                            <li><a href="#">Legal</a></li>
                        </ul> --}}
                        <!--Search Box-->
                        {{-- <div class="search-box-outer">
                            <div class="dropdown">
                                <button class="search-box-btn dropdown-toggle" type="button" id="dropdownMenu3" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="fa fa-search"></span></button>
                                <ul class="dropdown-menu pull-right search-panel" aria-labelledby="dropdownMenu3">
                                    <li class="panel-outer">
                                        <div class="form-container">
                                            <form method="post" action="blog.html">
                                                <div class="form-group">
                                                    <input type="search" name="field-name" value="" placeholder="Search Here" required>
                                                    <button type="submit" class="search-btn"><span class="fa fa-search"></span></button>
                                                </div>
                                            </form>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div> --}}
                    </div>
                </div>
            </div>
        </div>
        
        <!--Widgets Section-->
        <div class="widgets-section">
            <div class="row clearfix">
            
                <!--Network Column-->
                <div class="column network-column col-md-5 col-sm-6 col-xs-12">
                    <!--Network Info Tabs-->
                    <div class="network-info-tabs">
                        <!--Network Tabs-->
                        <div class="network-tabs tabs-box">
                        
                            <!--Tab Btns-->
                            {{-- <ul class="tab-btns tab-buttons clearfix">
                                <li class="our-branches dropdown"><a class="btn btn-default dropdown-toggle" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true" href="#"><span class="icon flaticon-international"></span> <span class="toggle-text">Newyork</span> <span class="arrow fa fa-caret-down"></span></a>
                                    <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                                        <li data-tab="#network-one" class="tab-btn active-btn" data-toggle-text="Newyork">Newyork</li>
                                        <li data-tab="#network-two" class="tab-btn" data-toggle-text="London">London</li>
                                        <li data-tab="#network-three" class="tab-btn" data-toggle-text="Peris">Peris</li>
                                    </ul>
                                </li>
                            </ul> --}}
                            
                            <!--Tabs Container-->
                            <div class="tabs-content">
                                
                                <!--Tab / Active Tab-->
                                <div class="tab active-tab" id="network-one">
                                    <div class="content">
                                        <div class="row clearfix">
                                            <div class="column col-md-12 col-sm-12 col-xs-12">
                                                <div class="text"> Jurusan Teknik Sipil dan Pertambangan <br> Politeknik Negeri Ketapang</div>
                                                <br>
                                                <div class="text"> Jl. Rangge Sentap, Dalong, Sukaharja, Kec. Delta Pawan, Kabupaten Ketapang, Kalimantan Barat 78112</div>
                                            </div>
                                            <div class="column col-md-12 col-sm-12 col-xs-12">
                                                <div class="text">Telp : 0812-5807-9827 <br> Email : humas@politap.ac.id</div>
                                            </div>

                                            <div class="social-column col-md-12 col-sm-12 col-xs-12">
                                                <ul class="social-icon-four">
                                                    <li><a href="https://www.youtube.com/@PolitapOfficial"><span class="fa fa-youtube" style="color: white; font-size: 24px;"></span></a></li>
                                                    <li><a href="https://instagram.com/politekniknegeriketapang?igshid=OGQ5ZDc2ODk2ZA=="><span class="fa fa-instagram" style="color: white; font-size: 24px;"></span></a></li>
                                                </ul>
                                            </div>

                                        </div>
                                    </div>
                                </div>                               
                            </div>
                        </div>
                    </div>
                </div>
                
                <!--Links Column-->
                <div class="column links-column col-md-3 col-sm-6 col-xs-12">
                    <ul class="links-footer">
                        <li>Menu Utama</li>
                        <li><a href="{{url('frontend/pimpinan')}}">PROFIL PIMPINAN JURUSAN</a></li>
                        <li><a href="{{url('frontend/berita')}}">PUBLIKASI JURUSAN</a></li>
                        <li>Website Terkait</li>
                        <li><a href="https://politap.ac.id/" target="_blank">POLITAP</a></li>
                        <li><a href="https://baak.politap.ac.id/" target="_blank">BAAK POLITAP</a></li>
                        <li><a href="https://siakad.politap.ac.id/gate/login" target="_blank">SIAKAD POLITAP</a></li>
                        
                    </ul>

                </div>
                
                <!--Appointment Column-->
                <div class="column appointment-column col-md-4 col-sm-6 col-xs-12">
                    <div class="btns-box text-center"> 
                        <a class="theme-btn btn-style-one" href="{{url('frontend/kontak')}}" class="read-more">Hubungi Kami</a>
                    </div>                   
                </div>
            </div>
        </div>        
    </div>
    
    <!--Footer Bottom-->
    <div class="footer-bottom">
        <div class="auto-container">
            <div class="row clearfix">
                
                <!--Column-->
                <div style="text-align: center">
                    <div class="copyright">&copy; 2023 <a style="color: orange">JURUSAN TEKNIK SIPIL & PERTAMBANGAN,</a> POLITAP.</div>
                </div>
                
                <!--Social Column-->
                {{-- <div class="social-column col-md-6 col-sm-12 col-xs-12">
                    <ul class="social-icon-one">
                        <li><a href="#"><span class="fa fa-facebook"></span></a></li>
                        <li><a href="#"><span class="fa fa-twitter"></span></a></li>
                        <li><a href="#"><span class="fa fa-linkedin"></span></a></li>
                        <li><a href="#"><span class="fa fa-rss"></span></a></li>
                        <li><a href="#"><span class="fa fa-google-plus"></span></a></li>
                        <li><a href="#"><span class="fa fa-vimeo"></span></a></li>
                    </ul>
                </div> --}}
                
            </div>
        </div>
    </div>
    
</footer>
