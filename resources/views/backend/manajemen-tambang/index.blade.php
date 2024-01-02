<x-app>
    <div class="card">
        <div class="card-header">
            <div class="card-title">
                Ruang Penunjang Manajemen Program Studi Teknologi Pertambangan
            </div>
            <a href="#tambah" data-toggle="modal" class="btn btn-primary float-right">
                <i class="fas fa-plus"> Tambah Foto</i>
            </a>
        </div>
        <div class="card-body table-responsive p-0">
            <table id="example2" class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Aksi</th>
                        <th>Foto</th>
                        <th>Nama</th>
                        <th>Deskripsi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($list_manajementambang as $manajementambang)
                        <tr>
                            <td>
                                <center>{{ $loop->iteration }}</center>
                            </td>

                            <td>
                                <center>
                                    <div class="btn-group">
                                        <a href="#info{{ $manajementambang->id }}" class="btn btn-info" data-toggle="modal">
                                            <i class="fas fa-info"></i>
                                        </a>
                                        <a href="" class="btn btn-warning" data-toggle="modal"
                                            data-target="#edit{{ $manajementambang->id }}">
                                            <i class="fas fa-edit"></i>
                                        </a>
                                        <a href="{{ url("admin/manajementambang/delete/$manajementambang->id") }}" onclick="return confirm('Yakin Akan Menghapus Data Ini')" class="btn btn-danger">
                                            <i class="fas fa-trash"></i>
                                        </a>
                                    </div>
                                </center>
                            </td>
                            <td>
                                <img src="{{ url("public/$manajementambang->foto") }}" alt=""
                                    style="width: 40px;height:40px" class="image-rounded">
                            </td>
                            <td>{{ $manajementambang->nama }}</td>
                            <td>{{ $manajementambang->deskripsi }}</td>
                        </tr>
                        <!-- Modal -->
                        <div class="modal fade" id="info{{ $manajementambang->id }}" tabindex="-1"
                            aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">

                                <div class="modal-content">

                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel"> DETAIL</h5>
                                        <button type="button" class="btn btn-info" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                          </button>
                                    </div>
                                    <div class="modal-body">
                                        <img src="{{ url('public') }}/{{ $manajementambang->foto }}" alt="" width="100%"
                                            height="auto">
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary"
                                            data-dismiss="modal">Close</button>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="modal fade" id="edit{{ $manajementambang->id }}">
                            <div class="modal-dialog modal-lg">
                                <form action="{{ url('admin/manajementambang/edit', $manajementambang->id) }}" enctype="multipart/form-data"
                                    method="POST">
                                    @csrf
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel"> Edit Foto </h5>
                                            <button type="button" class="btn btn-info" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                              </button>
                                        </div>
                                        <div class="modal-body">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="form-group row">
                                                        <label for="" class="control-label col-md-2">Foto</label>
                                                        <div class="col-md-6">
                                                            <img src="{{ url("public/$manajementambang->foto") }}" style="width:50%; height:100%">
                                                        </div>

                                                        <div class="col-md-4">
                                                            <input type="file" name="foto" class="form-control"
                                                            accept=".jpg, .png, .jpeg" value="{{ $manajementambang->foto }}">
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="modal-body">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="form-group row">
                                                        <label for="" class="control-label col-md-2">Nama</label>
                                                        <div class="col-md-10">

                                                            <input type="text" name="nama" class="form-control" required>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="modal-body">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="form-group row">
                                                        <label for="" class="control-label col-md-2">Deskripsi</label>
                                                        <div class="col-md-10">

                                                            <input type="text" name="deskripsi" class="form-control" required>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="submit" class="btn btn-primary"><span class="fa fa-save"></span> Save</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>


    <!-- Modal -->
    <div class="modal fade" id="tambah" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <form action="{{ url('admin/manajementambang') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel"> Tambah Foto </h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group row">
                                    <label for="" class="control-label col-md-2">Foto</label>
                                    <div class="col-md-10">

                                        <input type="file" name="foto" class="form-control" required accept=".jpg, .png, .jpeg">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group row">
                                    <label for="" class="control-label col-md-2">Nama</label>
                                    <div class="col-md-10">

                                        <input type="text" name="nama" class="form-control" required>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group row">
                                    <label for="" class="control-label col-md-2">Deskripsi</label>
                                    <div class="col-md-10">

                                        <input type="text" name="deskripsi" class="form-control" required>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary"><span class="fa fa-save"></span> Simpan</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</x-app>
