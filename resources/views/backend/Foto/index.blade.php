<x-app>
    <div class="card">
        <div class="card-header">
            <div class="card-title">
                Foto Kegiatan Mahasiswa
            </div>
            <a href="#tambah" data-toggle="modal" class="btn btn-primary float-right">
                <i class="fas fa-plus"> Tambah Foto</i>
            </a>
        </div>
        <div class="card-body table-responsive p-0">
            <table id="example2" class="table table-bordered table-striped">
                <thead>
                    <tr class="text-center">
                        <th>No</th>
                        <th>Aksi</th>
                        <th>Foto</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($list_foto as $foto)
                        <tr>
                            <td>
                                <center>{{ $loop->iteration }}</center>
                            </td>
                            <td>
                                <center>
                                    <div class="btn-group">
                                        <a href="#info{{ $foto->id }}" class="btn btn-info" data-toggle="modal">
                                            <i class="fas fa-info"></i>
                                        </a>
                                        <a href="" class="btn btn-warning" data-toggle="modal"
                                            data-target="#edit{{ $foto->id }}">
                                            <i class="fas fa-edit"></i>
                                        </a>
                                        <a href="{{ url("admin/foto/delete/$foto->id") }}" onclick="return confirm('Yakin Akan Menghapus Data Ini')" class="btn btn-danger">
                                            <i class="fas fa-trash"></i>
                                        </a>
                                    </div>
                                </center>
                            </td>
                            <td class="text-center">
                                <img src="{{ url('public') }}/{{ $foto->foto }}" alt=""
                                    style="width: 40%; height:40%" class="image-rounded">
                            </td>
                        </tr>

                        <!-- Modal -->
                        <div class="modal fade" id="info{{ $foto->id }}" tabindex="-1"
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
                                        <img src="{{ url('public') }}/{{ $foto->foto }}" alt="" width="100%"
                                            height="auto">
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary"
                                            data-dismiss="modal">Close</button>
                                    </div>
                                </div>

                            </div>
                        </div>

                        <!-- Modal -->
                        <div class="modal fade" id="edit{{ $foto->id }}">
                            <div class="modal-dialog modal-lg">
                                <form action="{{ url('admin/foto/edit', $foto->id) }}" enctype="multipart/form-data"
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
                                                            <img src="{{ url("public/$foto->foto") }}" style="width:50%; height:100%">
                                                        </div>

                                                        <div class="col-md-4">
                                                            <input type="file" name="foto" class="form-control"
                                                            accept=".jpg, .png, .jpeg" value="{{ $foto->foto }}">
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
        <div class="modal-dialog">
            <form action="{{ url('admin/foto/store') }}" enctype="multipart/form-data" method="POST">
                @csrf
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel"> Tambah Foto </h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="" class="control-label">Foto</label>
                                    <input type="file" name="foto" class="form-control" placeholder="foto"
                                        required autocomplete="off" accept=".jpg, .png, .jpeg">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary"> Simpan</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</x-app>
