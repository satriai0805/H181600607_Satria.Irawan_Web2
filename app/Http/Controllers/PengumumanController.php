<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pengumuman;

class PengumumanController extends Controller
{
    public function index(){
        //Eloquent
        $listPengumuman=Pengumuman::all();

        //return view('pengumuman.index',compact('listPengumuman'));
        return view('pengumuman.index')->with('data',$listPengumuman);
    }

    public function show($id){
        //Eloquent
        //$Pengumuman=Pengumuman::where('id',$id)->first;
        $Pengumuman=Pengumuman::find($id);

        return view('pengumuman.show',compact('Pengumuman'));
    }

    public function create(){
        $Pengumuman=Pengumuman::pluck('judul','isi','kategori_pengumuman_id');

        return view('pengumuman.create',compact('Pengumuman'));
    }

    public function store(request $request){
        $input = $request->all();

        Pengumuman::create($input);

        return redirect(route('pengumuman.index'));
    }
}
