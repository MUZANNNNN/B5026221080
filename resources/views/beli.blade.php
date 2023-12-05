@extends('master')

@section('title','Tambah Pembelian')

@section('konten')
    <h2>Created By: Muhammad Fauzan</h2>
	<h3>Data Pembelian Baru</h3>

	<br/>
	<br/>

	<form action="/keranjangbelanja/store" method="post" class="form-horizontal">
		{{ csrf_field() }}
        {{-- <div class="form-group">
            <label for="id">Kode Pembelian:</label>
            <input type="text" class="form-control" placeholder="Masukkan Kode Pembelian" id="id" name="id">
        </div> --}}

        <div class="form-group">
            <label for="KodeBarang">Kode Barang:</label>
            <input type="text" class="form-control" style="width: 400px" placeholder="Masukkan Kode Barang" id="KodeBarang" name="KodeBarang">
        </div>

        <div class="form-group">
            <label for="Jumlah">Jumlah:</label>
            <input type="number" class="form-control" style="width: 400px" placeholder="Masukkan Jumlah Barang" id="Jumlah" name="Jumlah">
        </div>

        <div class="form-group">
            <label for="Harga">Harga:</label>
            <input type="number" class="form-control" style="width: 400px" placeholder="Masukkan Harga Barang " id="Harga" name="Harga">
        </div>

        <div class="d-flex flex-row bg-transparent ">
            <a class="btn btn-dark" href="/keranjangbelanja">Kembali</a>
            <div class="mr-2"></div>
            <button type="submit" class="btn btn-primary mr-4" value="Simpan Data">Beli</button>
        </div>

		{{-- Nama <input type="text" name="nama"> <br/>
		Jabatan <input type="text" name="jabatan"> <br/>
		Umur <input type="number" name="umur"> <br/>
		Alamat <textarea name="alamat"></textarea> <br/>
		<input type="submit" value="Simpan Data"> --}}
	</form>
    <br>

@endsection
