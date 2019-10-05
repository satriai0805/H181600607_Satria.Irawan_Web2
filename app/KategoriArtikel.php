<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class KategoriArtikel extends Model
{
    protected $table='kategori_artikel';

    protected $fillable=[
        'name', 'users_id', 'created_at','update_at',
    ];

    protected $casts=[
        
    ];
}
