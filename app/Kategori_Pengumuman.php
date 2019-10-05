<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kategori_Pengumuman extends Model
{
   protected $table="Kategori_Pengumuman";

   protected $fillable=['id','nama','users_id'];
}
