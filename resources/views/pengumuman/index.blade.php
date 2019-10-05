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
        <td>Aksi</td>
    </tr>

    @foreach($pengumuman as $item)


    <tr>
    <td> {!! $item->judul !!}</td>
    <td> {!! $item->isi!!}</td>
    <td> {!! $item->users_id !!}</td>

    <td>
        <a href="{!! route('pengumuman.show',[$item->id]) !!}" class="btn btn-success">
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
