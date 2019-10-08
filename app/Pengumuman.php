<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pengumuman extends Model
{
	protected $table="galeri";
	protected $fillable=['judul','isi','users_id','kategori_pengumuman_id'];

	protected $casts=[];
}