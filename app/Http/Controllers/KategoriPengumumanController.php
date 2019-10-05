<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Kategori_Pengumuman;



class KategoriPengumumanController extends Controller
{
    public function index(){
    	$Kategori_Pengumuman=Kategori_Pengumuman::all();
    	return view('Kategori_Pengumuman.index', compact('Kategori_Pengumuman'));
   }
   public function show($id){
   	$Kategori_Pengumuman=Kategori_Pengumuman::find($id);
   	return view('Kategori_Pengumuman.show', compact('Kategori_Pengumuman'));
   }
  
   public function create(){
    	return view('Kategori_Pengumuman.create');
   }
   public function store(Request $request){
      $input= $request->all();
     
      Kategori_Pengumuman::create($input);
      return redirect(route('Kategori_Pengumuman.index'));

   }
}