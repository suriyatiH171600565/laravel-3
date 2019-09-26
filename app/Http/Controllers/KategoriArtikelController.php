<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Kategori_Artikel;
class KategoriArtikelController extends Controller
{
    //
    public function index(){
    	$Kategori_Artikel=Kategori_Artikel::all();

    	return view('Kategori_Artikel.index', compact('Kategori_Artikel'));
    }

}
