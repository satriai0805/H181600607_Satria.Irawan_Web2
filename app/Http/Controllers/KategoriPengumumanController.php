<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\KategoriPengumuman;

class KategoriPengumumanController extends Controller
{
    public function index(){
        //Eloquent
        $listKategoriPengumuman=KategoriPengumuman::all();

        //return view('kategori_pengumuman.index',compact('listKategoriPengumuman'));
        return view('kategori_pengumuman.index')->with('data',$listKategoriPengumuman);
    }

    public function show($id){
        //Eloquent
        //$kategoriPengumuman=KategoriPengumuman::where('id',$id)->first;
        $kategoriPengumuman=KategoriPengumuman::find($id);

        return view('kategori_pengumuman.show',compact('kategoriPengumuman'));
    }

    public function create(){
        $kategoriPengumuman=KategoriPengumuman::pluck('nama');

        return view('kategori_pengumuman.create',compact('kategoriPengumuman'));
    }

    public function store(request $request){
        $input = $request->all();

        KategoriPengumuman::create($input);

        return redirect(route('kategori_pengumuman.index'));
    }
}
