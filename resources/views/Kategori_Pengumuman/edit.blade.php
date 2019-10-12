@extends('layouts.app')
@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
              <div class=card>
               <div class="card-header">"  Tambah Kategori Pengumuman"</div>
               <div class="card-body">
               	{!! Form::model($Kategori_Pengumuman,['route'=>['Kategori_Pengumuman.update',$Kategori_Pengumuman->id],'method'=>'patch']) !!}
                @include('Kategori_Pengumuman.form')
                {!! Form::close() !!}
               		
                </form>
               		
               </div>
             </div>
        </div>
    </div>
 </div>
               
@endsection