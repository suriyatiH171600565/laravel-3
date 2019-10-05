@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Galeri') }}</div>

                <div class="card-body">
<a href="{!! route('galeri.create') !!}" class="btn btn-primary">Tambah Data</a>
<table border="2">
    <tr>
        <td>ID</td>
        <td>nama</td>
        <td>Keterangan</td>
        <td>Path</td>
        <td>User ID</td>
        <td> Kategori Galeri</td>
        <td>Aksi</td>
    </tr>

    @foreach($galeri as $item)


    <tr>
    <td> {!! $item->id !!}</td>
    <td> {!! $item->nama !!}</td>
    <td> {!! $item->keterangan!!}</td>
    <td> {!! $item->path!!}</td>
    <td> {!! $item->kategori_galeri_id!!}</td>
    <td> {!! $item->users_id !!}</td>

    <td>
         <a href="{!! route('galeri.show',[$item->id]) !!}" class="btn btn-success">
            Lihat
        </a>
       
</tr>
@endforeach

</table>

                   
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
