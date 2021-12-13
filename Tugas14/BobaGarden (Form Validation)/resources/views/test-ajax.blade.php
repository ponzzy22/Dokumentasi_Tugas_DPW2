@extends('layout.v_template_notiv')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12 mt-5">
                <div class="card">
                    <div class="card-header">
                        ALAMAT
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-3">
                                <label for="" class="control-label">Prov</label>
                                <select name="" class="form-controll" onchange="gantiProvinsi(this.value)">
                                    <option value="">Pilih Provinsi</option>
                                    @foreach ($list_provinsi as $provinsi)
                                        <option value="{{ $provinsi->id }}">{{ $provinsi->nama }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-md-3">
                                <label for="" class="control-label">Kab</label>
                                <select name="" class="form-controll" id="kabupaten" onchange="gantiKabupaten(this.value)">
                                    <option value="">Pilih Provinsi Terlebih dahulu</option>
                                </select>
                            </div>
                            <div class="col-md-3">
                                <label for="" class="control-label">Kec</label>
                                <select name="" class="form-controll" id="kecamatan" onchange="gantiKecamatan(this.value)">
                                    <option value="">Pilih Kabupaten Terlebih dahulu</option>
                                </select>
                            </div>
                            <div class="col-md-3">
                                <label for="" class="control-label">Desa</label>
                                <select name="" class="form-controll" id="desa">
                                    <option value="">Pilih Kecamatan Terlebih dahulu</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
