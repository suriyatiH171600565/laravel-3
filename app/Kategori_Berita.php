<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kategori_Berita extends Model
{
   protected $table="Kategori_Berita";

   protected $fillable=['id','nama','users_id','created_at'];
}
