  <aside class="main-sidebar sidebar-white-primary elevation-4">
      <!-- Brand Logo -->
      {{-- <a href="index3.html" class="brand-link">
          <img src="{{ url('public/frontend') }}/logo-politap.jpg" 
              class="brand-image img-circle elevation-3" style="opacity: .8">
          <span class="brand-text font-weight-light">WEB JURUSAN</span>
      </a> --}}

      <!-- Sidebar -->
      <br>
      <div class="sidebar">
          <!-- Sidebar user panel (optional) -->
          <div class="user-panel mt-3 pb-3 mb-3 d-flex">       
              <div class="image">
                <br>
                  <img src="{{ url('public/frontend') }}/logo-politap.jpg" class="img-circle elevation-2"
                      alt="User Image">
              </div>
              <div class="info">
                  <a href="#" class="d-block" style="color: black">ADMIN WEB JURUSAN <br> TEKNIK SIPIL & <br> PERTAMBANGAN</a>
              </div>
          </div>
          <nav class="mt-2">
              <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                  data-accordion="false">
                  <li class="nav-item">
                      <a href="#" class="nav-link">
                          <i class="nav-icon fas fa-home" style="color: black"></i>
                          <p style="color: black">
                              Beranda
                              <i class="fas fa-angle-left right"></i>
                              <span class="badge badge-info right"></span>
                          </p>
                      </a>
                      <ul class="nav nav-treeview">
                          <x-layout.sidebar.menu-item class="nav-item " url="admin/foto" label="Foto Kegiatan"
                              icon="fas fa-image" />                  
                      </ul>
                  </li>
                  <li class="nav-item">
                      <a href="#" class="nav-link">
                        <i class="fas fa-users p-1" style="color: black"></i>
                          <p style="color: black">Profil
                              <i class="fas fa-angle-left right"></i>
                              <span class="badge badge-info right"></span>
                          </p>
                      </a>
                    <ul class="nav nav-treeview">
                        <x-layout.sidebar.menu-item class="nav-item " url="admin/pimpinan" label="Pimpinan"
                            icon="fas fa-user-tie" />

                          
                        <x-layout.sidebar.menu-item class="nav-item " url="admin/dosensipil" label="Dosen Prodi TRKJJ"
                            icon="fas fa-user-tie" />
                        <x-layout.sidebar.menu-item class="nav-item " url="admin/dosentambang" label="Dosen Prodi T. Pertambangan"
                            icon="fas fa-user-tie" />
                        <x-layout.sidebar.menu-item class="nav-item " url="admin/teknisisipil" label="Teknisi Prodi TRKJJ"
                            icon="fas fa-user-tie" />
                        <x-layout.sidebar.menu-item class="nav-item " url="admin/teknisitambang"
                            label="Teknisi Prodi T. Pertambangan" icon="fas fa-user-tie" />
                        <x-layout.sidebar.menu-item class="nav-item " url="admin/misisipil"
                            label="Visi & Misi Prodi TKKRJ" icon="fas fa-book" />
                        <x-layout.sidebar.menu-item class="nav-item " url="admin/misitambang"
                            label="Visi & Misi Prodi T. Pertambangan" icon="fas fa-book" />
                    </ul>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-landmark" style="color: black"></i>
                        <p style="color: black">
                            Fasilitas
                            <i class="fas fa-angle-left right"></i>
                            <span class="badge badge-info right"></span>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <x-layout.sidebar.menu-item class="nav-item " url="admin/laboratoriumsipil" label="Labolatorium Prodi TRKJJ"
                            icon="fas fa-landmark" />
                        <x-layout.sidebar.menu-item class="nav-item " url="admin/laboratoriumtambang" label="Laboratorium Prodi T. Pertambangan"
                            icon="fa fa-landmark" />
                        <x-layout.sidebar.menu-item class="nav-item " url="admin/ruangsipil" label="Ruang Kelas Prodi TRKJJ"
                            icon="fas fa-landmark" />
                        <x-layout.sidebar.menu-item class="nav-item " url="admin/ruangtambang" label="Ruang Kelas Prodi T. Pertambangan"
                            icon="fas fa-landmark" />
                        <x-layout.sidebar.menu-item class="nav-item " url="admin/manajemensipil" label="Ruang Manajemen Prodi TRKJJ"
                            icon="fas fa-landmark" />
                        <x-layout.sidebar.menu-item class="nav-item " url="admin/manajementambang" label="Ruang Manajemen Prodi T. Pertambangan"
                            icon="fas fa-landmark" />
                    </ul>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-paste" style="color: black"></i>
                        <p style="color: black">
                            Akademik
                            <i class="fas fa-angle-left right"></i>
                            <span class="badge badge-info right"></span>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <x-layout.sidebar.menu-item class="nav-item " url="admin/akreditasisipil" label="Akreditasi Prodi TRKJJ"
                            icon="fas fa-paste" />
                        <x-layout.sidebar.menu-item class="nav-item " url="admin/akreditasitambang" label="Akreditasi Prodi T. Pertambangan"
                            icon="fa fa-paste" />
                    </ul>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-newspaper" style="color: black"></i>
                        <p style="color: black">
                            Berita
                            <i class="fas fa-angle-left right"></i>
                            <span class="badge badge-info right"></span>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <x-layout.sidebar.menu-item class="nav-item " url="admin/berita" label="Berita Jurusan dan Prodi"
                            icon="fas fa-newspaper" />
                    </ul>
                </li>
                  </li>
              </ul>
          </nav>

          <!-- /.sidebar-menu -->
      </div>
      <!-- /.sidebar -->
  </aside>
