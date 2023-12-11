<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class EASController extends Controller
{
	public function index()
	{
    	// mengambil data dari table pegawai
		$chats = DB::table('chat')->get();

    	// mengirim data pegawai ke view index
		return view('EASView',['chats' => $chats]);

	}
}
