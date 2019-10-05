<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\KategoriArtikel;

class KategoriArtikelController extends Controller
{
    public function index(){
        //Eloquent
        $listKategoriArtikel=KategoriArtikel::all();

        //return view('kategori_artikel.index',compact('listKategoriArtikel'));
        return view('kategori_artikel.index')->with('data',$listKategoriArtikel);
    }

    public function show($id){
        //Eloquent
        //$kategoriArtikel=KategoriArtikel::where('id',$id)->first;
        $kategoriArtikel=KategoriArtikel::find($id);

        return view('kategori_artikel.show',compact('kategoriArtikel'));
    }
}
