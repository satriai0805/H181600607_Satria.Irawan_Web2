<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class KategoriBerita extends Model
{
    protected $table='kategori_berita';

    protected $fillable=[
        'nama', 'users_id', 'created_at','update_at',
    ];

    protected $casts=[
        
    ];
}
