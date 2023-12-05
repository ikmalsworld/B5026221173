<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class HarddiskController extends Controller
{
	public function index()
	{
    	// mengambil data dari table harddisk
		//$harddisk = DB::table('harddisk')->get();
        $harddisk = DB::table('harddisk')
                        ->orderBy('merkharddisk', 'asc')
                        ->paginate(10);

    	// mengirim data harddisk ke view index
		return view('index2',['harddisk' => $harddisk]);

	}

	// method untuk menampilkan view form tambah harddisk
	public function tambah()
	{

		// memanggil view tambah
		return view('tambahharddisk');

	}

	// method untuk insert data ke table harddisk
	public function store(Request $request)
	{
		// insert data ke table harddisk
		DB::table('harddisk')->insert([
			'merkharddisk' => $request->merkharddisk,
			'stockharddisk' => $request->stockharddisk,
			'tersedia' => $request->tersedia
		]);
		// alihkan halaman ke halaman harddisk
		return redirect('/harddisk');

	}

	// method untuk edit data harddisk
	public function edit($id)
	{
		// mengambil data harddisk berdasarkan id yang dipilih
		$harddisk = DB::table('harddisk')->where('kodeharddisk',$id)->get();
		// passing data harddisk yang didapat ke view edit.blade.php
		return view('editharddisk',['harddisk' => $harddisk]);

	}

	// update data harddisk
	public function update(Request $request)
	{
		// update data harddisk
		DB::table('harddisk')->where('kodeharddisk',$request->id)->update([
			'merkharddisk' => $request->merkharddisk,
			'stockharddisk' => $request->stockharddisk,
			'tersedia' => $request->tersedia
		]);
		// alihkan halaman ke halaman harddisk
		return redirect('/harddisk');
	}

	// method untuk hapus data harddisk
	public function hapus($id)
	{
		// menghapus data harddisk berdasarkan id yang dipilih
		DB::table('harddisk')->where('kodeharddisk',$id)->delete();

		// alihkan halaman ke halaman harddisk
		return redirect('/harddisk');
	}

    public function cari(Request $request)
	{
		// menangkap data pencarian
		$cari = $request->cari;

    		// mengambil data dari table harddisk sesuai pencarian data
		$harddisk = DB::table('harddisk')
		->where('merkharddisk','like',"%".$cari."%")
        ->orderBy('merkharddisk', 'asc')
		->paginate(10);

    		// mengirim data harddisk ke view index
		return view('index2',['harddisk' => $harddisk, 'cari' => $cari]);
	}

    public function view($id){
        // mengambil data harddisk berdasarkan id yang dipilih
        $harddisk = DB::table('harddisk')
                    ->where('kodeharddisk', $id)
                    ->get();

        // passing data harddisk yang didapat ke view edit.blade.php
        return view('view2', ['harddisk' => $harddisk]);
    }
}
