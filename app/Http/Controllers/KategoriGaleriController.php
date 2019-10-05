<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\KategoriGaleri;

class KategoriGaleriController extends Controller
{
    public function index(){
        //Eloquent
        $listKategoriGaleri=KategoriGaleri::all();

        //return view('kategori_galeri.index',compact('listKategoriGaleri'));
        return view('kategori_galeri.index')->with('data',$listKategoriGaleri);
    }

    public function show($id){
        //Eloquent
        //$kategoriGaleri=KategoriGaleri::where('id',$id)->first;
        $kategoriGaleri=KategoriGaleri::find($id);

        return view('kategori_galeri.show',compact('kategoriGaleri'));
    }
}
