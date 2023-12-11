@extends('master')

@section('title', 'Data Pegawai')

@section('konten')
@php
    function Tersedia($nilai){
        if ($nilai ==1){
            return 'Tersedia';
        } elseif ($nilai ==0){
            return 'Tidak Tersedia';
        } else {
            return 'Tidak Diketahui';
        }
    }
@endphp

    <h2>Created By: Muhammad Fauzan</h2>
	<h3>Data Penggaris</h3>

	<a href="/penggaris/tambah" class="btn btn-primary"> + Beli Penggaris</a>

	<br/>
    <p>Cari Penggaris :</p>
	<form action="/penggaris/cari" method="GET">
		<input class="form-control" type="text" name="cari" placeholder="Cari Penggaris .."
        value="{{ old('cari', isset($cari) ? $cari : '') }}">
		<input class="btn btn-primary" type="submit" value="CARI">
	</form>
	<br/>

	<table class="table table-striped table-hover">
		<tr>
			<th>Kode</th>
			<th>Merk</th>
			<th>Stock</th>
			<th>Tersedia</th>
            <th>Opsi</th>
		</tr>
		@foreach($penggaris as $p)
		<tr>
			<td>{{ $p->kodepenggaris }}</td>
			<td>{{ $p->merkpenggaris }}</td>
			<td>{{ $p->stockpenggaris }}</td>
			<td>{{ Tersedia($p->tersedia) }}</td>
			<td>
				<a href="/penggaris/view/{{ $p->kodepenggaris }}" class="btn btn-success">View</a>

                <a href="/penggaris/edit/{{ $p->kodepenggaris }}" class="btn btn-warning">Edit</a>
				|
				<a href="/penggaris/hapus/{{ $p->kodepenggaris }}" class="btn btn-danger">Hapus</a>
			</td>
		</tr>
		@endforeach
	</table>
    {{$penggaris->links()}}
@endsection
