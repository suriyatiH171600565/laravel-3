@extends('layouts.app')
@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
              <div class=card>
               <div class="card-header">"Berita"</div>
               <div class="card-body">
               	{!! Form::model($berita,['route'=>['berita.update',$berita->id],'method'=>'patch']) !!}
                @include('berita.form')
                {!! Form::close() !!}
               		
                </form>
               		
               </div>
             </div>
        </div>
    </div>
 </div>
               
@endsection