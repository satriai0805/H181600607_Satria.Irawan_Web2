<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pengumuman;
use App\KategoriPengumuman;

class PengumumanController extends Controller
{
    public function index()
    {
    	$Pengumuman = \App\Pengumuman::all();

    	return view('pengumuman.index',compact('Pengumuman'));    
    }
    
    public function show($id)
    {
    	$Pengumuman = \App\Pengumuman::find($id);

    	return view('pengumuman.show',compact('Pengumuman'));    
    }

    public function create(){

        $KategoriPengumuman= \App\KategoriPengumuman::pluck ('nama','id');

        return view('pengumuman.create',compact('KategoriPengumuman'));
    }
     public function store(Request $request){
        $input=$request->all();
       Pengumuman::create($input);
       return redirect(route('pengumuman.index'));
       
    }
    
}  
