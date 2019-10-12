@extends('layouts.app')
@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
              <div class=card>
               <div class="card-header">"  Tambah Kategori Artikel"</div>
               <div class="card-body">
               	{!! Form::model($Kategori_Artikel,['route'=>['Kategori_Artikel.update',$Kategori_Artikel->id],'method'=>'patch']) !!}
                @include('Kategori_Artikel.form')
                {!! Form::close() !!}
               		
                </form>
               		
               </div>
             </div>
        </div>
    </div>
 </div>
               
@endsection