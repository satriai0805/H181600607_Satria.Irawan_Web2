<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Galeri;
use App\KategoriGaleri;

class GaleriController extends Controller
{
    public function index()
    {
    	$Galeri = \App\Galeri::all();

    	return view('galeri.index',compact('Galeri'));    
    }
    
    public function show($id)
    {
    	$Galeri = \App\Galeri::find($id);

    	return view('galeri.show',compact('Galeri'));    
    }

    public function create(){

        $KategoriGaleri= \App\KategoriGaleri::pluck ('nama','id');

        return view('galeri.create',compact('KategoriGaleri'));
    }
     public function store(Request $request){
        $input=$request->all();
       Galeri::create($input);
       return redirect(route('galeri.index'));
       
    }
    
}  
