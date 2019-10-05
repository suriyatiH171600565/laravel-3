<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class galeri extends Model
{
    protected $table='galeri';
    protected $fillable=['id','nama','keterangan','path','users_id','kategori_galeri_id',];
}
