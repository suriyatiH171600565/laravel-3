<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kategori_Galeri extends Model
{
    protected $table="Kategori_Galeri";

    protected $fillable=['id','nama','users_id',];
}
