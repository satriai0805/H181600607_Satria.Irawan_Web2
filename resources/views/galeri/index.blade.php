@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">List Galeri</div>

                <div class="container">
                    <div class="card-body">
                    <a href="{!! $url = route('galeri.create')!!}" class="btn btn-secondary">Tambah Data</a>
                        <table border="1px">
                            <tr>
                                <td>ID</td>
                                <td>Nama</td>
                                <td>Keterangan</td>
                                <td>Path</td>
                                <td>Kategori Galeri Id</td>
                                <td>User ID</td>
                                <td>Created At</td>
                            </tr>

                            @foreach($data as $item)

                            <tr>
                                <td>{!! $item->id !!}</td>
                                <td>{!! $item->nama !!}</td>
                                <td>{!! $item->keterangan !!}</td>
                                <td>{!! $item->path !!}</td>
                                <td>{!! $item->kategori_berita_id !!}</td>
                                <td>{!! $item->users_id !!}</td>
                                <td>{!! $item->created_at->format('d/m/Y H:i:s') !!}</td>
                                <td>
                                <a href="{!! $url = route('galeri.show',($item -> id)) !!}" class="btn btn-primary">Lihat</a>
                                </td>
                            </tr>

                            @endforeach
                        </table>

                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
                        </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
