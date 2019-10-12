@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Pengumuman') }}</div>
                    <div class="card-body">
<a href="{!! route('pengumuman.create') !!}" class="btn btn-primary">Tambah Data</a>
<table border="2">
    <tr>

        <td>Judul</td>
        <td>ISI</td>
        <td>User ID</td>
        <td>Kategori Pengumuman</td>
        <td>Aksi</td>
    </tr>

    @foreach($pengumuman as $item)


    <tr>
    <td> {!! $item->judul !!}</td>
    <td> {!! $item->isi!!}</td>
    <td> {!! $item->users_id !!}</td>
    <td> {!! $item->kategori_pengumuman_id!!}</td>

    <td>
        <a href="{!! route('pengumuman.show',[$item->id]) !!}" class="btn btn-success">
            Lihat
        </a>
        <a href="{!! route('pengumuman.edit',[$item->id]) !!}" class="btn btn-sm btn-warning">
        Edit </a>
                {!! Form::open(['route'=>['pengumuman.destroy', $item->id],'method'=>'delete']) !!}

                {!! Form::submit('Hapus',['class'=>'btn btn-sn btn-danger','onclick'=>"return confirm('Apakah anda yakin menghapus data ini?')"]) !!}

                {!! Form::close() !!}
</tr>
@endforeach

</table>

                   
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
