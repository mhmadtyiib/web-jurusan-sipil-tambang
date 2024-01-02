<x-app>
    <div class="card">
        <div class="card-header">
            <div class="card-title">
                Edit Deskripsi
            </div>
        </div>
        <div class="card-body">
            <form method="post" action="{{url ('admin/misitambang/update', $misitambang->id) }}">
                @csrf
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group row">
                            <label for="" class="control-label col-md-2">Jenis Visi Misi</label>
                            <div class="col-md-10">
                                <select name="jenis" class="form-control">
                                    <option value=""> Pilih Jenis </option>
                                    <option value="Visi" @if ($misitambang->jenis == 'Visi') selected @endif>Visi
                                    </option>
                                    <option value="Misi" @if ($misitambang->jenis == 'Misi') selected @endif>Misi
                                    </option>
                                    <option value="Tujuan" @if ($misitambang->jenis == 'Tujuan') selected @endif>Tujuan
                                    </option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="" class="control-label">Deskripsi</label>

                            <textarea name="deskripsi" cols="30" rows="10" class="form-control">{{ $misitambang->deskripsi }}</textarea>
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

