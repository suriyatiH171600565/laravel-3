<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Kategori_Berita;



class KategoriBeritaController extends Controller
{
    public function index(){
    	$Kategori_Berita=Kategori_Berita::all();
    	return view('Kategori_Berita.index', compact('Kategori_Berita'));
   }
   public function show($id){
   	$Kategori_Berita=Kategori_Berita::find($id);
   	return view('Kategori_Berita.show', compact('Kategori_Berita'));
   }
  
   public function create(){
    	return view('Kategori_Berita.create');
   }
   public function store(Request $request){
      $input= $request->all();
     
      Kategori_Berita::create($input);
      return redirect(route('Kategori_Berita.index'));

   }
   public function edit($id){
      $Kategori_Berita=Kategori_Berita::find($id);

      if (empty($Kategori_Berita)){
        return redirect(route('Kategori_Berita.index'));
      }
      return view('Kategori_Berita.edit', compact('Kategori_Berita'));
  }
  public function update($id,Request $request){
    $Kategori_Berita=Kategori_Berita::find($id);
    $input= $request->all();

    if (empty($Kategori_Berita)){
      return redirect(route('Kategori_Berita.index'));
    }
    $Kategori_Berita->update($input);
    return redirect(route('Kategori_Berita.index'));

  }

   public function destroy($id){
      $Kategori_Berita=Kategori_Berita::find($id);


    if (empty($Kategori_Berita)){
      return redirect(route('Kategori_Berita.index'));
    }
    $Kategori_Berita->delete();
    return redirect(route('Kategori_Berita.index'));
  }
}