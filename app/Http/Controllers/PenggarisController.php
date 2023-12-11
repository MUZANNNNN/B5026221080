<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class PenggarisController extends Controller
{
	public function index()
	{
    	// mengambil data dari table penggaris
		$penggaris = DB::table('penggaris')->get();
        $penggaris = DB::table('penggaris')
                    ->orderBy('merkpenggaris', 'asc')
                    ->paginate(10);

    	// mengirim data penggaris ke view index
		return view('indexpenggaris',['penggaris' => $penggaris]);

	}

	// method untuk menampilkan view form tambah pegawai
	public function tambah()
	{

		// memanggil view tambah
		return view('belipenggaris');

	}

	// method untuk insert data ke table pegawai
	public function store(Request $request)
	{
		// insert data ke table pegawai
		DB::table('penggaris')->insert([
			'kodepenggaris' => $request->kodepenggaris,
			'merkpenggaris' => $request->merkpenggaris,
			'stockpenggaris' => $request->stockpenggaris,
			'tersedia' => $request->tersedia
		]);
		// alihkan halaman ke halaman penggaris
		return redirect('/penggaris');

	}

	// method untuk edit data penggaris
	public function edit($id)
	{
		// mengambil data penggaris berdasarkan id yang dipilih
		$pegawai = DB::table('penggaris')->where('kodepenggaris',$id)->get();
		// passing data penggaris yang didapat ke view edit.blade.php
		return view('editpenggaris',['penggaris' => $penggaris]);

	}

	// update data penggaris
	public function update(Request $request)
	{
		// update data penggaris
		DB::table('penggaris')->where('kodepenggaris',$request->id)->update([
			'kodepenggaris' => $request->kodepenggaris,
			'merkpenggaris' => $request->merkpenggaris,
			'stockpenggaris' => $request->stockpenggaris,
			'tersedia' => $request->tersedia
		]);
		// alihkan halaman ke halaman penggaris
		return redirect('/penggaris');
	}

	// method untuk hapus data penggaris
	public function hapus($id)
	{
		// menghapus data penggaris berdasarkan kode yang dipilih
		DB::table('penggaris')->where('kodepenggaris',$id)
                            ->delete();

		// alihkan halaman ke halaman penggaris
		return redirect('/penggaris');
	}

    public function cari(Request $request)
	{
		// menangkap data pencarian
		$cari = $request->cari;

    	// mengambil data dari table penggaris sesuai pencarian data
		$penggaris = DB::table('penggaris')
		            ->where('merkpenggaris','like',"%".$cari."%")
		            ->paginate();

        // mengirim data pegawai ke view index
		return view('indexpenggaris',['penggaris' => $penggaris, 'cari' => $cari]);
    }

    public function view($id){
        // mengambil data penggaris berdasarkan kode yang dipilih
        $penggaris = DB::table('penggaris')
                    ->where('kodepenggaris', $id)
                    ->get();

        // passing data pegawai yang didapat ke view edit.blade.php
        return view('viewpenggaris', ['penggaris' => $penggaris]);
	}
}
