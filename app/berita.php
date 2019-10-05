<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class berita extends Model
{

	protected $table='berita';
    protected $fillable=['judul','isi','kategori_berita_id','users_id',];

   
}
