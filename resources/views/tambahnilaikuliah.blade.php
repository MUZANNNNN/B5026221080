@extends('master')

@section('title', 'Tambah Data')

@section('konten')
	<h2>Created By: Muhammad Fauzan</h2>
	<h3>Tambah Data</h3>

	<a href="/nilaikuliah"> Kembali</a>

	<br/>
	<br/>

	<form action="/nilaikuliah/store" method="post" class="form-horizontal">
		{{ csrf_field() }}
        <div class="form-group row">
            <label for="NRP" class="col-sm-1 col-form-label mr-2">NRP:</label>
            <div class="col-sm-5">
                <input type="number" class="form-control" id="NRP" name="NRP" placeholder ="Masukan NRP">
            </div>
        </div>

        <div class="form-group row">
            <label for="NilaiAngka" class="col-sm-1  col-form-label mr-2">Nilai Angka:</label>
            <div class="col-sm-5">
                <input type="number" class="form-control" id="NilaiAngka" name="NilaiAngka" placeholder ="Masukan Nilai Angka">
            </div>
        </div>

        <div class="row">
            <label for="SKS" class="col-sm-1 col-form-label mr-2">SKS:</label>
        </div>
        <div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" name="SKS" id="sks2" value="2">
                <label class="form-check-label" for="sks3">2 SKS</label>
            </div>

            <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" name="SKS" id="sks3" value="3">
                <label class="form-check-label" for="sks3">3 SKS</label>
            </div>

            <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" name="SKS" id="sks4" value="4">
                <label class="form-check-label" for="sks4">4 SKS</label>
            </div>
        </div>
        <br>

		<input type="submit" value="Simpan Data" class="btn btn-primary">
	</form>
@endsection
