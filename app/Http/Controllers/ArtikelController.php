<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\artikel;
use App\Kategori_Artikel;

class ArtikelController extends Controller
{
    public function index(){
    	$artikel=artikel::all();
    	return view('artikel.index', compact('artikel'));
   }
   public function show($id){
   	$artikel=artikel::find($id);
   	return view('artikel.show', compact('artikel'));
   }
   public function create(){
   	$Kategori_Artikel=Kategori_Artikel::pluck('nama','id');
   	return view('artikel.create', compact('Kategori_Artikel'));
   }
   public function store(Request $request){
      $input= $request->all();
     
      artikel::create($input);
      return redirect(route('artikel.index'));

   }
    public function edit($id){
     $artikel=artikel::find($id);
      if (empty($Artikel)){
        return redirect(route('Artikel.index'));
      }
      return view('Artikel.edit', compact('Artikel'));
  }
  public function update($id,Request $request){
    $artikel=artikel::find($id);
    $input= $request->all();

    if (empty($Artikel)){
      return redirect(route('Artikel.index'));
    }
    $Artikel->update($input);
    return redirect(route('Artikel.index'));

  }

   public function destroy($id){
     $artikel=artikel::find($id);


    if (empty($Artikel)){
      return redirect(route('Artikel.index'));
    }
    $Artikel->delete();
    return redirect(route('Artikel.index'));
   }
}
