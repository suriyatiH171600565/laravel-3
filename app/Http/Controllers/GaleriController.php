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
   public function edit($id){
      $galeri=galeri::find($id);
      $Kategori_Galeri=Kategori_Galeri::pluck('nama','id');

      if (empty($galeri)){
        return redirect(route('galeri.index'));
      }
      return view('galeri.edit', compact('galeri','Kategori_Galeri'));
  }
  public function update($id,Request $request){
    $galeri=galeri::find($id);
    $input= $request->all();

    if (empty($galeri)){
      return redirect(route('galeri.index'));
    }
    $galeri->update($input);
    return redirect(route('galeri.index'));

  }

  public function destroy($id){
      $galeri=galeri::find($id);


    if (empty($galeri)){
      return redirect(route('galeri.index'));
    }
    $galeri->delete();
    return redirect(route('galeri.index'));
  }
}
