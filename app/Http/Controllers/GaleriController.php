<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\galeri;
use App\Kategori_Galeri;

class GaleriController extends Controller
{
    public function index(){
    	$galeri=galeri::all();
    	return view('galeri.index', compact('galeri'));
   }
   public function show($id){
   	$galeri=galeri::find($id);
   	return view('galeri.show', compact('galeri'));
   }
   public function create(){
   	$Kategori_Galeri=Kategori_Galeri::pluck('nama','id');
   	return view('galeri.create', compact('Kategori_Galeri'));
   }
   public function store(Request $request){
      $input= $request->all();
     
      galeri::create($input);
      return redirect(route('galeri.index'));

   }
}
