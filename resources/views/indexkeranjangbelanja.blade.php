@extends('master')

@section('title','Keranjang Belanja')

@section('konten')
    <h2>Created By: Muhammad Fauzan</h2>
	<h3>Data Keranjang Belanja</h3>

	<a href="/keranjangbelanja/beli" class="btn btn-primary"> + Beli</a>

	<br/>
    <br/>

    {{-- <p>Cari Data Pegawai berdasarkan Nama:</p> --}}
	{{-- <form action="/pegawai/cari" method="GET">
		<input class="form-control"  type="text" name="cari" placeholder="Cari Pegawai .."
        value="{{ old("cari", isset($cari) ? $cari : '') }}">
        <br/>
		<input class="btn btn-primary"  type="submit" value="CARI">
	</form> --}}
	<br/>

	<table class="table table-striped table-hover">
		<tr>
			<th>Kode Pembelian</th>
			<th>Kode Barang</th>
			<th>Jumlah Pembelian</th>
			<th>Harga per item</th>
			<th>Total</th>
            <th>Action</th>
		</tr>
		@foreach($keranjangbelanja as $p)
		<tr>
			<td>{{ $p->ID }}</td>
			<td>{{ $p->KodeBarang }}</td>
			<td>{{ $p->Jumlah }}</td>
			<td>{{ number_format($p->Harga,0,',','.') }}</td>
            <td>{{ number_format(($p->Jumlah * $p->Harga),0,',','.') }}</td>
			<td>
                {{-- <a href="/pegawai/views/{{ $p->pegawai_id }}" class="btn btn-success">View</a>
                |
				<a href="/pegawai/edit/{{ $p->pegawai_id }}" class="btn btn-warning">Edit</a>
				| --}}
				<a href="/keranjangbelanja/hapus/{{ $p->ID }}" class="btn btn-danger">Batal</a>
			</td>
		</tr>
		@endforeach
	</table>
    <br>

    {{-- {{ $pe->links() }} --}}
@endsection
