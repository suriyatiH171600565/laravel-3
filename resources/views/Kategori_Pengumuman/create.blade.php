@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
              <div class=card>
               <div class="card-header">"tambah kategori Pengumuman"</div>
               <div class="card-body">
               	<form method="post" action="{!! route('Kategori_Pengumuman.store') !!}">
               		@include('Kategori_Pengumuman.form')
                </form>
               		
               </div>
             </div>
        </div>
    </div>
 </div>
               
@endsection