@extends('master')

@section('title', 'View Data Pegawai')

@section('judul')
    <h2><a href="https://www.malasngoding.com">www.malasngoding.com</a></h2>
    <h3>View Pegawai</h3>

    <a href="/pegawai"> Kembali</a>

    <br />
    <br />
@endsection

@section('konten')
    <div class="row">
        <div class="col-6"></div>
        <div class="col-6">
            @foreach ($pegawai as $p)
            <fieldset disabled>
                <form action="/pegawai/update" method="post" class="form-horizontal " role="form">
                    {{ csrf_field() }}
                    <input type="hidden" name="id" value="{{ $p->pegawai_id }}">
                    <div class ="form-group row">
                        <label for ="nama" class ="col-sm-2 control-label align-self-center mr-2">Nama:</label>
                        <div class ="col-sm-7">
                            <input type="text" required="required" name="nama" value="{{ $p->pegawai_nama }}" class="form-label" style="border: 0; background-color: white" readonly>
                        </div>
                    </div>
                    <div class ="form-group row">
                        <label for ="jabatan" class ="col-sm-2 control-label align-self-center mr-2">Jabatan:</label>
                        <div class ="col-sm-5">
                            <input type="text" required="required" name="jabatan" value="{{ $p->pegawai_jabatan }}" class="form-label"  style="border: 0; background-color: white" readonly>
                        </div>
                    </div>
                    <div class ="form-group row">
                        <label for ="umur" class ="col-sm-2 control-label align-self-center mr-2">Umur:</label>
                        <div class ="col-sm-5">
                            <input type="number" required="required" name="umur" value="{{ $p->pegawai_umur }}" class="form-label"  style="border: 0; background-color: white" readonly>
                        </div>
                    </div>
                    <div class ="form-group row">
                        <label for ="alamat" class ="col-sm-2 control-label align-self-center">Alamat:</label>
                        <div class ="col-sm-10">
                            <textarea required="required" name="alamat" class="form-control"  style="border: 0; background-color: white" readonly>{{ $p->pegawai_alamat }}</textarea>
                        </div>
                    </div>
                </form>
            </fieldset>
            @endforeach
            <div class="text-center" >
                <a href="/pegawai" class="btn btn-primary w-25">Ok</a>
            <br>
            <br>
            <br>
            </div>
        </div>
    </div>

@endsection
