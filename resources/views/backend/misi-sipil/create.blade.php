<x-app>
    <div class="card">
        <div class="card-header">
            <div class="card-title">
                Tambah Deskripsi
            </div>
        </div>
        <div class="card-body">
            <form method="post" action="{{url ('admin/misisipil') }}">
                @csrf
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group row">
                                <label for="" class="control-label col-md-2">Jenis Visi Misi</label>
                                <div class="col-md-10">
                                    <select name="jenis" class="form-control">
                                        <option value=""> Pilih Jenis </option>
                                        <option value="Misi"> Misi </option>
                                        <option value="Visi"> Visi </option>
                                        <option value="Tujuan"> Tujuan </option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group row">
                                <label for="" class="control-label col-md-2">Deskripsi</label>
                                <div class="col-md-10">
                                    <textarea name="deskripsi" cols="30" rows="10" class="form-control"></textarea>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <button class="btn btn-primary float-right">
                            <i class="fas fa-save"></i> Simpan
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</x-app>

