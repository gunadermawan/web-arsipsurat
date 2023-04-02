@extends('temp.v_temp')
@section('breadcumb', 'Edit Arsip Surat')
@section('title', 'Edit Arsip Surat')
@section('isicontent')
    <!-- general form elements -->
    <form action="/surat/update/{{ $surat->id }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="card col-sm-10 mx-auto">
            <div class="card-header bg-success">
                <div align="center">
                    <h4>Form Edit Arsip Surat</h4>
                </div>
            </div>
            @if (session('pesan'))
                <div class="alert alert-success alert-dimissible">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                    <h5><i class="icon fas fa-check"></i> Success!</h5>
                    {{ session('pesan') }}.
                </div>
            @endif
            <div class="card-body">
                <form>
                    <div class="form-group row ">
                        <label for="tanggal" class="col-sm-5 col-form-label col-form-label-sm">Tanggal Laporan</label>
                        <div class="col-sm-6">
                            <input type="date" class="form-control form-control-sm" name="tanggal" id="tanggal"
                                value="{{ $surat->tanggal }}" readonly>
                        </div>
                        <div class="text-danger">
                            @error('tanggal')
                                {{ $message }}
                            @enderror
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="NomorSurat" class="col-sm-5 col-form-label col-form-label-sm">Nomor Surat</label>
                        <div class="col-sm-6">
                            <input type="text" name="NomorSurat" class="form-control" value="{{ $surat->NomorSurat }}"
                                readonly>
                            <div class="text-danger">
                                @error('NomorSurat')
                                    {{ $message }}
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="NamaSurat" class="col-sm-5 col-form-label col-form-label-sm">Nama Surat</label>
                        <div class="col-sm-6">
                            <input type="text" name="NamaSurat" class="form-control" value="{{ $surat->NamaSurat }}">
                            <div class="text-danger">
                                @error('NamaSurat')
                                    {{ $message }}
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="JenisSurat" class="col-sm-5 col-form-label col-form-label-sm">Jenis Surat</label>
                        <div class="col-sm-6">
                            <select name="JenisSurat" class="form-control custom-select" value="{{ $surat->JenisSurat }}">
                                <option selected disabled>--Pilih Jenis Surat--</option>
                                <option>Surat Masuk</option>
                                <option>Surat Keluar</option>
                            </select>
                            <div class="text-danger">
                                @error('JenisSurat')
                                    {{ $message }}
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="pengirim" class="col-sm-5 col-form-label col-form-label-sm">Pengirim</label>
                        <div class="col-sm-6">
                            <input type="text" name="pengirim" class="form-control" value="{{ $surat->pengirim }}">
                            <div class="text-danger">
                                @error('pengirim')
                                    {{ $message }}
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="tujuan" class="col-sm-5 col-form-label col-form-label-sm">Tujuan</label>
                        <div class="col-sm-6">
                            <input type="text" name="tujuan" class="form-control" value="{{ $surat->tujuan }}">
                            <div class="text-danger">
                                @error('tujuan')
                                    {{ $message }}
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="surat" class="col-sm-5 col-form-label col-form-label-sm">Surat</label>
                        <div class="col-sm-6">
                            <iframe class="col-sm-12 mx-auto" src="{{ url('folder_surat/' . $surat->surat) }}"
                                width="150px" height="150px">
                            </iframe>
                        </div>
                        <br>
                        <label for="surat" class="col-sm-5 col-form-label col-form-label-sm">Ganti Surat</label>
                        <div class="col-sm-6">
                            <input name="surat" type="file" class="form-control">
                            <div class="text-danger">
                                @error('surat')
                                    {{ $message }}
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="form-group col-sm-12">
                        <div class="card-footer col-sm-12">
                            <button class="btn btn-primary">Update</button>
                            <button type="reset" class="btn btn-danger">Batal</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </form>
@endsection
