<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Berita extends Model
{
    protected $table='berita';

    protected $fillable=[
        'judul', 'isi', 'users_id', 'created_at', 'update_at','kategori_berita_id',
    ];

    protected $casts=[
        
    ];
}
