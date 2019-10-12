<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Kategori_Artikel;


class KategoriArtikelController extends Controller
{
    public function index(){
    	$Kategori_Artikel=Kategori_Artikel::all();
    	return view('Kategori_Artikel.index', compact('Kategori_Artikel'));
   }
   public function show($id){
   	$Kategori_Artikel=Kategori_Artikel::find($id);
   	return view('Kategori_Artikel.show', compact('Kategori_Artikel'));
   }
  
   public function create(){
    	return view('Kategori_Artikel.create');
   }
   public function store(Request $request){
      $input= $request->all();
     
      Kategori_Artikel::create($input);
      return redirect(route('Kategori_Artikel.index'));

    }

   public function edit($id){
      $Kategori_Artikel=Kategori_Artikel::find($id);

      if (empty($Kategori_Artikel)){
        return redirect(route('Kategori_Artikel.index'));
      }
      return view('Kategori_Artikel.edit', compact('Kategori_Artikel'));
  }
  public function update($id,Request $request){
    $Kategori_Artikel=Kategori_Artikel::find($id);
    $input= $request->all();

    if (empty($Kategori_Artikel)){
      return redirect(route('Kategori_Artikel.index'));
    }
    $Kategori_Artikel->update($input);
    return redirect(route('Kategori_Artikel.index'));

  }

   public function destroy($id){
      $Kategori_Artikel=Kategori_Artikel::find($id);


    if (empty($Kategori_Artikel)){
      return redirect(route('Kategori_Artikel.index'));
    }
    $Kategori_Artikel->delete();
    return redirect(route('Kategori_Artikel.index'));
   }
}