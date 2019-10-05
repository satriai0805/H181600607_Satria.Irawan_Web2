<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\KategoriBerita;

class KategoriBeritaController extends Controller
{
    public function index(){
        //Eloquent
        $listKategoriBerita=KategoriBerita::all();

        //return view('kategori_berita.index',compact('listKategoriBerita'));
        return view('kategori_berita.index')->with('data',$listKategoriBerita);
    }

    public function show($id){
        //Eloquent
        //$kategoriBerita=KategoriBerita::where('id',$id)->first;
        $kategoriBerita=KategoriBerita::find($id);

        return view('kategori_berita.show',compact('kategoriBerita'));
    }
}
