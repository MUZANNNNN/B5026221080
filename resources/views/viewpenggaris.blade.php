@extends('master')

@section('title', 'View Data Penggaris')

@section('judul')
    <h2>Created By: Muhammad Fauzan</h2>
    <h3>View Penggaris</h3>

    <a href="/penggaris"> Kembali</a>

    <br />
    <br />
@endsection

@section('konten')
    <div class="row">
        <div class="col-6"></div>
        <div class="col-6">
            @foreach ($penggaris as $p)
            <fieldset disabled>
                <form action="/penggaris/update" method="post" class="form-horizontal " role="form">
                    {{ csrf_field() }}
                    <input type="hidden" name="id" value="{{ $p->id }}">
                    <div class ="form-group row">
                        <label for ="merkpenggaris" class ="col-sm-2 control-label align-self-center mr-2">Merk:</label>
                        <div class ="col-sm-7">
                            <input type="text" required="required" name="merkpenggaris" value="{{ $p->merkpenggaris }}" class="form-label" style="border: 0; background-color: white" readonly>
                        </div>
                    </div>
                    <div class ="form-group row">
                        <label for ="stockpenggaris" class ="col-sm-2 control-label align-self-center mr-2">Stock:</label>
                        <div class ="col-sm-5">
                            <input type="text" required="required" name="stockpenggaris" value="{{ $p->stockpenggaris }}" class="form-label"  style="border: 0; background-color: white" readonly>
                        </div>
                    </div>
                    <div class ="form-group row">
                        <label for ="tersedia" class ="col-sm-2 control-label align-self-center mr-2">Tersedia:</label>
                        <div class ="col-sm-5">
                            <input type="number" required="required" name="tersedia" value="{{ $p->pegawai_umur }}" class="form-label"  style="border: 0; background-color: white" readonly>
                        </div>
                    </div>
                </form>
            </fieldset>
            @endforeach
            <div class="text-center" >
                <a href="/penggaris" class="btn btn-primary w-25">Ok</a>
            <br>
            <br>
            <br>
            </div>
        </div>
    </div>

@endsection
