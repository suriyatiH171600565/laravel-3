<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\berita;
use App\Kategori_Berita;

class BeritaController extends Controller
{
    public function index(){
    	$berita=berita::all();
    	return view('berita.index', compact('berita'));
   }
   public function show($id){
   	$berita=berita::find($id);
   	return view('berita.show', compact('berita'));
   }
   public function create(){
   	$Kategori_Berita=Kategori_Berita::pluck('nama','id');
   	return view('berita.create', compact('Kategori_Berita'));
   }
   public function store(Request $request){
      $input= $request->all();
     
      berita::create($input);
      return redirect(route('berita.index'));

   }
}
