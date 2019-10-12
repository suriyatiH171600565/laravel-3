@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
              <div class=card>
               <div class="card-header">"List Kategori Galeri"</div>
               
               <div class="card-body">
<a href="{!! route('Kategori_Galeri.create') !!}" class="btn btn-primary">Tambah Data</a>
<table border="2">
               	<tr>
               		<td>id</td>
               		<td>nama</td>
               		<td>users id</td>
               		<td>create</td>
                  <td>update</td>
               		<td>Aksi</td>

               		
               	</tr>
               	@foreach($Kategori_Galeri as $item)
               	<tr>
					     <td>{!! $item->id !!}</td>
					     <td>{!! $item->nama !!}</td>
					     <td>{!! $item->users_id!!}</td>}
					     <td>{!! $item->created_at !!}</td>
               <td>{!! $item->update_at !!}</td>
					     <td>

				

               	<a href="{!! route('Kategori_Galeri.show',[$item->id]) !!}" class="btn btn-sm btn-success">
               		lihat </a>
                <a href="{!! route('Kategori_Galeri.edit',[$item->id]) !!}" class="btn btn-sm btn-warning">
                  Edit </a>
                {!! Form::open(['route'=>['Kategori_Galeri.destroy', $item->id],'method'=>'delete']) !!}

                {!! Form::submit('Hapus',['class'=>'btn btn-sn btn-danger','onclick'=>"return confirm('Apakah anda yakin menghapus data ini?')"]) !!}

                {!! Form::close() !!}

               	</td>
               </tr>
               @endforeach
               		
           </div>
        </div>
    </div>
 </div>
 </body>
</html>
               
@endsection