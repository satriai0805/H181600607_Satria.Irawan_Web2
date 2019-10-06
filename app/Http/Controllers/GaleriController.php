<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Galeri;

class GaleriController extends Controller
{
    public function index(){
        //Eloquent
        $listGaleri=Galeri::all();

        //return view('galeri.index',compact('listGaleri'));
        return view('galeri.index')->with('data',$listGaleri);
    }

    public function show($id){
        //Eloquent
        //$Galeri=Galeri::where('id',$id)->first;
        $listGaleri=Galeri::find($id);

        //return view('galeri.show',compact('listGaleri'));
        return view('galeri.show')->with('data',$listGaleri);
    }

    public function create(){
        $listGaleri=Galeri::pluck('nama','keterangan','path','users_id','kategori_galeri_id');

        //return view('galeri.create',compact('listGaleri'));
        return view('galeri.create')->with($listGaleri);
    }

    public function store(request $request){
        $input = $request->all();

        Galeri::create($input);

        return redirect(route('galeri.index'));
    }
}
