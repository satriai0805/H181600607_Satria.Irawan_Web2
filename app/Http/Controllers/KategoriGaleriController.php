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
        //$kategoriGaleri=KategoriGaleri::where('id',$id);
        $kategoriGaleri=KategoriGaleri::find($id);

        return view('kategori_galeri.show',compact('kategoriGaleri'));
    }

    public function create(){
        $kategoriGaleri=KategoriGaleri::pluck('nama');

        return view('kategori_galeri.create',compact('kategoriGaleri'));
    }

    public function store(request $request){
        $input = $request->all();

        KategoriGaleri::create($input);

        return redirect($url = route('kategori_galeri.index'));
    }
}
