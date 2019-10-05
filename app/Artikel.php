<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Artikel extends Model
{
    protected $table='artikel';

    protected $fillable=[
        'judul', 'isi', 'users_id', 'created_at', 'update_at','kategori_artikel_id',
    ];

    protected $casts=[
        
    ];
}
