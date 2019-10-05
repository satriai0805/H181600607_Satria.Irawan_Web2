<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pengumuman extends Model
{
    protected $table='pengumuman';

    protected $fillable=[
        'judul', 'isi', 'users_id', 'created_at', 'update_at','kategori_berita_id',
    ];

    protected $casts=[
        
    ];
}
