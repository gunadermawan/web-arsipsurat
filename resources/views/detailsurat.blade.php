@extends('temp.v_temp')
@section('breadcumb', 'Detail Surat')
@section('title', 'Detail Surat')
@section('isicontent')
    <div class="card col-sm-12 mx-auto">
        <div class="card-header bg-warning">
            <div align="center">
                <h6>Detail Surat</h6>
            </div>
        </div>
        <br>
        <div class="row col-sm-12 mx-auto">
            <div class="card-body col-sm-12 mx-auto">
                <div class="card">
                    <div class="card-body">
                        <ul>
                            <li><b>Tanggal Diarsipkan</b> : <a class="float-right">{{ $surat->tanggal }}</a></li>
                            <li><b>Nomor Surat</b> : <a class="float-right">{{ $surat->NomorSurat }}</a></li>
                            <li><b>Nama Surat</b> : <a class="float-right">{{ $surat->NamaSurat }}</a></li>
                            <div class="form-group">
                                <br>
                                <a href="/surat" class="badge bg-gradient-info"><b>Kembali</b></a>
                            </div>
                        </ul>
                    </div>
                </div>
                <br>
                <iframe class="col-sm-12 mx-auto" src="{{ url('folder_surat/' . $surat->surat) }}" width="500px"
                    height="500px"></iframe>
            </div>
            <!-- /.card-body -->
        </div>
    </div>
@endsection
