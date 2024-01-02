<x-app>
    <div class="card">
        <div class="card-header">
            <div class="card-title">
                Visi & Misi Program Studi Teknologi Pertambangan
            </div>
            <a href="{{ url('admin/misitambang/create') }}" class="btn btn-primary float-right">
                <i class="fas fa-plus"> Tambah Data</i>
            </a>
        </div>
        <div class="card-body">
            <table id="example2" class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th width ="100px">No</th>
                        <th width ="150px">Aksi</th>
                        <th>Deskripsi</th>
                        <th>Jenis</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($list_misitambang as $misitambang)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>
                                <div class="btn-group">
                                    <a href="{{ url('admin/misitambang/show', $misitambang->id) }}" class="btn btn-info">
                                        <i class="fas fa-info"></i>
                                    </a>
                                    <a href="{{ url('admin/misitambang/edit', $misitambang->id) }}" class="btn btn-warning">
                                        <i class="fas fa-edit"></i>
                                    </a>
                                    <a href="{{ url("admin/misitambang/delete/$misitambang->id") }}"
                                        onclick="return confirm('Yakin Akan Menghapus Data Ini')"
                                        class="btn btn-danger">
                                        <i class="fas fa-trash"></i>
                                    </a>
                                </div>
                            </td>
                            <td> {{ $misitambang->deskripsi }} </td>
                            <td> {{ $misitambang->jenis }} </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</x-app>
