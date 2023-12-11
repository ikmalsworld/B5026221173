<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class CCController extends Controller
{
    public function index()
    {
        $kategori = DB::table('kategori')->get();
        return view('indexcc', ['kategori' => $kategori]);
    }

    public function view(Request $request)
    {
        $id = $request->input('selectedCategory');
        $kategori = DB::table('kategori')->where('ID', $id)->first();

        if ($kategori) {
            return view('hasilcombo', ['kategori' => $kategori]);
        } else {
            return abort(404); // Menangani jika kategori tidak ditemukan.
        }
    }
}
