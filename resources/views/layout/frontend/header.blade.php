<header class="main-header">
    
    <!-- Header Top -->
    <div class="header-top">
        <div class="auto-container">
            <div class="clearfix">
                
                <!--Top-->
                <div class="top-left">
                    <ul class="links clearfix">
                        <li><a href="https://www.youtube.com/@PolitapOfficial"><span class="fa fa-youtube"></span></a></li>
                        <li><a href="https://instagram.com/politekniknegeriketapang?igshid=OGQ5ZDc2ODk2ZA=="><span class="fa fa-instagram"></span></a></li>
                        <li><a><span class="fab fa fa-whatsapp" style="color: black"></span> +62 812-5807-9827</a></li>
                        <li><a><span class="icon flaticon-placeholder" style="color: black"></span>Jl. Rangge Sentap, Dalong, Sukaharja, Delta Pawan, Kabupaten Ketapang, Kalimantan Barat</a></li>                         
                    </ul>     
                </div>  
                
                <div class="top-right" style="color: black">
                    <span id="jam">00</span>
                    <span> : </span>
                    <span id="menit">00</span>
                    <span> : </span>
                    <span id="detik">00</span>

                    <script>
                    let jam = document.getElementById('jam')
                    let menit = document.getElementById('menit')
                    let detik = document.getElementById('detik')

                    setInterval(function() {
                        let waktu = new Date()

                        jam.textContent = waktu.getHours()
                        menit.textContent = waktu.getMinutes()
                        detik.textContent = waktu.getSeconds()
                    })
                    </script>
                </div>
                


            </div>           
        </div>
    </div>
    <!-- Header Top End -->
    
    <!-- Main Box -->
    <div class="main-box">
        <div class="auto-container">
            <div class="outer-container clearfix">
                <!--Logo Box-->
                <div class="logo-box">
                    <div class="logo"><a><img src="{{url('public/frontend')}}/images/logo.politappp.PNG" alt=""></a></div>
                </div>
                
                <!--Nav Outer-->
                <div class="nav-outer clearfix">
                
                    <!-- Main Menu -->
                    <nav class="main-menu">
                        <div class="navbar-header">
                            <!-- Toggle Button -->    	
                            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                        </div>
                        
                        <div class="navbar-collapse collapse clearfix">
                            <ul class="navigation clearfix">
                                <li><a href="{{url('/')}}" >BERANDA</a></li>

                                <li class=" dropdown"><a href="#">PROFIL</a>
                                    <ul>
                                        <li><a href="{{url('frontend/pimpinan')}}">Pimpinan</a></li>
                                        <li class="dropdown"><a href="#">Dosen</a>
                                            <ul>
                                                <li><a href="{{url ('frontend/dosen_sipil')}}">Prodi TRKJJ</a></li>
                                                <li><a href="{{url ('frontend/dosen_pertambangan')}}">Prodi T. Pertambangan</a></li>
                                               
                                            </ul>
                                        </li>

                                        <li class="dropdown"><a href="#">Teknisi</a>
                                            <ul>
                                                <li><a href="{{url ('frontend/teknisi_sipil')}}">Prodi TRKJJ</a></li>
                                                <li><a href="{{url ('frontend/teknisi_pertambangan')}}">Prodi T. Pertambangan</a></li>
                                               
                                            </ul>
                                        </li>

                                        <li class="dropdown"><a href="#">Visi & Misi</a>
                                            <ul>
                                                <li><a href="{{url ('frontend/visi_misi_sipil')}}">Prodi TRKJJ</a></li>
                                                <li><a href="{{url ('frontend/visi_misi_pertambangan')}}">Prodi T. Pertambangan</a></li>
                                               
                                            </ul>
                                        </li>

                                    </ul>
                                </li>

                                <li class=" dropdown"><a href="#">FASILITAS</a>
                                    <ul>                                        
                                        <li class="dropdown"><a href="#">Laboratorium</a>
                                            <ul>
                                                <li><a href="{{url ('frontend/laboratorium_sipil')}}">Prodi TRKJJ</a></li>
                                                <li><a href="{{url ('frontend/laboratorium_pertambangan')}}">Prodi T. Pertambangan</a></li>                                               
                                            </ul>
                                        </li>
                                                                  
                                        <li class="dropdown"><a href="#">Ruang Kelas</a>
                                            <ul>
                                                <li><a href="{{url ('frontend/ruang_kelas_sipil')}}">Prodi TRKJJ</a></li>
                                                <li><a href="{{url ('frontend/ruang_kelas_pertambangan')}}">Prodi T. Pertambangan</a></li>                                               
                                            </ul>
                                        </li>

                                        <li class="dropdown"><a href="#">Ruang Manajemen Jurusan & Prodi</a>
                                            <ul>
                                                <li><a href="{{url ('frontend/ruang_manajemen_sipil')}}">Prodi TRKJJ</a></li>
                                                <li><a href="{{url ('frontend/ruang_manajemen_tambang')}}">Prodi T. Pertambangan</a></li>                                               
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <li class=" dropdown"><a href="#">AKADEMIK</a>
                                    <ul>
                                        <li class="dropdown"><a href="#">Akreditasi</a>
                                            <ul>
                                                <li><a href="{{url ('frontend/akreditasi_sipil')}}">Prodi TRKJJ</a></li>
                                                <li><a href="{{url ('frontend/akreditasi_pertambangan')}}">Prodi T. Pertambangan</a></li>                          
                                            </ul>    
                                        </li>

                                        <li class="dropdown"><a href="#">Prodi TRKJJ</a></li>

                                        <li class="dropdown"><a href="#">Prodi Teknologi Pertambangan</a></li> 
                                    </ul> 
                                </li>
                                <li><a href={{ url('frontend/berita')}}>BERITA</a></li>
                                <li><a href={{ url('frontend/kontak')}}>KONTAK</a></li>
                                <li></li>
                                <li></li>                            
                             </ul>
                        </div>
                    </nav>
                    <!-- Main Menu End-->
                    <div class="outer-box">
                    
                        <!--Cart Box-->
                        <div class="cart-btn">
                            {{-- <a href="shop-single.html"><span class="icon flaticon-shopping-cart"></span></a> --}}
                        </div>
                        
                        <!--Search Box-->
                        <div class="search-form">
                            <form method="post" action="contact.html">
                                <div class="form-group clearfix">
                                    {{-- <input type="email" name="email" value="" placeholder="Search" required>
                                    <button type="submit" class="theme-btn subscribe-btn"><span class="fa fa-search"></span></button> --}}
                                </div>
                            </form>
                        </div>
                        
                    </div>
                </div>
                <!--Nav Outer End-->
                
            </div>    
        </div>
    </div>

</header>