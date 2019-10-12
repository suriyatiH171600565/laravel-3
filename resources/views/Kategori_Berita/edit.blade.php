@extends('layouts.app')
@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
              <div class=card>
               <div class="card-header">"  Tambah Kategori Berita"</div>
               <div class="card-body">
               	{!! Form::model($Kategori_Berita,['route'=>['Kategori_Berita.update',$Kategori_Berita->id],'method'=>'patch']) !!}
                @include('Kategori_Berita.form')
                {!! Form::close() !!}
               		
                </form>
               		
               </div>
             </div>
        </div>
    </div>
 </div>
               
@endsection