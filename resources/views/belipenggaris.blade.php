@extends('master')

@section('title','Tambah Pembelian')

@section('konten')
    <h2>Created By: Muhammad Fauzan</h2>
	<h3>Beli Penggaris</h3>

	<br/>
	<br/>

	<form action="/penggaris/store" method="post" class="form-horizontal">
		{{ csrf_field() }}
        {{-- <div class="form-group">
            <label for="id">Kode Pembelian:</label>
            <input type="text" class="form-control" placeholder="Masukkan Kode Pembelian" id="id" name="id">
        </div> --}}

        <div class="form-group">
            <label for="merkepnggaris">Merk Penggaris:</label>
            <input type="text" class="form-control" style="width: 400px" placeholder="Masukkan Merk Penggaris" id="merkepenggaris" name="merkpenggaris">
        </div>

        <div class="form-group">
            <label for="stockpenggaris">Jumlah Penggaris:</label>
            <input type="number" class="form-control" style="width: 400px" placeholder="Masukkan Jumlah Penggaris" id="stockpenggaris" name="stockpenggaris">
        </div>

        <div class="row">
            <label for="tersedia" class="col-sm-1 col-form-label mr-2">SKS:</label>
        </div>
        <div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" name="tersedia" id="tersedia" value="1">
                <label class="form-check-label" for="sks3">Tersedia</label>
            </div>

            <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" name="tidaktersedia" id="tersedia" value="0">
                <label class="form-check-label" for="sks3">Tidak Tersedia</label>
            </div>
        </div>
        <br>

		<input type="submit" value="Simpan Data" class="btn btn-primary">
	</form>
    <br>

@endsection
