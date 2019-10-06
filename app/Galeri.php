<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Galeri extends Model
{
    protected $table='galeri';

    protected $fillable=[
        'nama','keterangan','path','kategori_galeri_id','users_id',
    ];

    protected $casts=[
        
    ];
}
