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

    public function create(){
        $kategoriArtikel=KategoriArtikel::pluck('nama');

        return view('kategori_artikel.create',compact('kategoriArtikel'));
    }

    public function store(request $request){
        $input = $request->all();

        KategoriArtikel::create($input);

        return redirect(route('kategori_artikel.index'));
    }
}
