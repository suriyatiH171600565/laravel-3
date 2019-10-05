@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
              <div class=card>
               <div class="card-header">"tambah kategori berita"</div>
               <div class="card-body">
               	<form method="post" action="{!! route('Kategori_Berita.store') !!}">
               		@include('Kategori_Berita.form')
                </form>
               		
               </div>
             </div>
        </div>
    </div>
 </div>
               
@endsection