<x-app>
    <div class="card">
        <div class="card-header">
            <a href="{{ url('admin/misitambang') }}" class="btn btn-info"><span class="fa fa-arrow-left"></span> Kembali</a>
            <div class="text-center">
                <h2>Detail Deskripsi</h2>

                </div>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-md-6">
                    <dl>
                        <dd>{{ $misitambang->deskripsi }}</dd>
                    </dl>
                </div>
            </div>
        </div>
    </div>
</x-app>
