<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Artikel;

class ArtikelController extends Controller
{
    public function index(){
        //Eloquent
        $listArtikel=Artikel::all();

        //return view('artikel.index',compact('listArtikel'));
        return view('artikel.index')->with('data',$listArtikel);
    }

    public function show($id){
        //Eloquent
        //$Artikel=Artikel::where('id',$id)->first;
        $Artikel=Artikel::find($id);

        return view('artikel.show',compact('Artikel'));
    }

    public function create(){
        $Artikel=Artikel::pluck('judul','isi','kategori_artikel_id');

        return view('artikel.create',compact('Artikel'));
    }

    public function store(request $request){
        $input = $request->all();

        Artikel::create($input);

        return redirect(route('artikel.index'));
    }
}
