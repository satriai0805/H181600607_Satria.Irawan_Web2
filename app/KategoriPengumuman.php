<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class KategoriPengumuman extends Model
{
    protected $table='kategori_pengumuman';

    protected $fillable=[
        'nama', 'users_id', 'created_at','update_at',
    ];

    protected $casts=[
        
    ];
}
