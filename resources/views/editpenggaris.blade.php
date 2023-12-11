@extends('master')

@section('title', 'Edit Data Penggaris')

@section('judul')
    <h2>Created By: Muhammad Fauzan</h2>
    <h3>Edit Penggaris</h3>

    <a href="/penggaris"> Kembali</a>

	<br/>
	<br/>
@endsection

@section('konten')
	@foreach($penggaris as $p)
	<form action="/penggaris/update" method="post">
		{{ csrf_field() }}
		<input type="hidden" name="id" value="{{ $p->id }}">
			<div class = "form-group row">
				<label for = "merkpenggaris" class ="col-sm-1 col-form-label mr-2">Merk:</label>
				<div class = "col-sm-5">
					<input type="text" required="required" name="merkpenggaris" value="{{ $p->merkpenggaris }}" class="form-control">
				</div>
			</div>
			<div class = "form-group row">
				<label for = "stockpenggaris" class ="col-sm-1 col-form-label mr-2">Stock:</label>
				<div class = "col-sm-5">
					<input type="text" required="required" name="stockpenggaris" value="{{ $p->stockpenggaris }}" class="form-control">
				</div>
			</div>
			<div class = "form-group row">
				<label for = "tersedia" class ="col-sm-1 col-form-label mr-2">Tersedia:</label>
				<div class = "col-sm-5">
					<input type="number" required="required" name="tersedia" value="{{ $p->tersedia }}" class="form-control">
				</div>
			</div>
		<input type="submit" value="Simpan Data">
	</form>
	@endforeach
@endsection
