@extends('layouts.app')
@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
              <div class=card>
               <div class="card-header">"Tambah Artikel"</div>
               <div class="card-body">
               	{!! Form::model($artikel,['route'=>['artikel.update',$artikel->id],'method'=>'patch']) !!}
                @include('artikel.form')
                {!! Form::close() !!}
               		
                </form>
               		
               </div>
             </div>
        </div>
    </div>
 </div>
               
@endsection