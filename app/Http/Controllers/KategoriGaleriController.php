<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Kategori_Galeri;



class KategoriGaleriController extends Controller
{
    public function index(){
    	$Kategori_Galeri=Kategori_Galeri::all();
    	return view('Kategori_Galeri.index', compact('Kategori_Galeri'));
   }
   public function show($id){
   	$Kategori_Galeri=Kategori_Galeri::find($id);
   	return view('Kategori_Galeri.show', compact('Kategori_Galeri'));
   }
  
   public function create(){
    	return view('Kategori_Galeri.create');
   }
   public function store(Request $request){
      $input= $request->all();
     
      Kategori_Galeri::create($input);
      return redirect(route('Kategori_Galeri.index'));

   }
}