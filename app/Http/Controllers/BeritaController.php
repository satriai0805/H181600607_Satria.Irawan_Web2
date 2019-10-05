<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Berita;

class BeritaController extends Controller
{
    public function index(){
        //Eloquent
        $listBerita=Berita::all();

        //return view('berita.index',compact('listBerita'));
        return view('berita.index')->with('data',$listBerita);
    }

    public function show($id){
        //Eloquent
        //$Berita=Berita::where('id',$id)->first;
        $listBerita=Berita::find($id);

        return view('berita.show',compact('Berita'));
    }

    public function create(){
        $Berita=Berita::pluck('judul','isi','kategori_berita_id');

        return view('berita.create',compact('Berita'));
    }

    public function store(request $request){
        $input = $request->all();

        Berita::create($input);

        return redirect(route('berita.index'));
    }
}
