@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">List Pengumuman</div>

                <div class="container">
                    <div class="card-body">
                        <div class="form-group row">

                        <label class="col-md-4 col-form-label text-md-right">ID</label>
                        <label class="col-md-8 col-form-label text-md-left">{!! $Pengumuman->id !!}</label>

                        <label class="col-md-4 col-form-label text-md-right">Judul</label>
                        <label class="col-md-8 col-form-label text-md-left">{!! $Pengumuman->judul !!}</label>

                        <label class="col-md-4 col-form-label text-md-right">Isi</label>
                        <label class="col-md-8 col-form-label text-md-left">{!! $Pengumuman->isi !!}</label>

                        <label class="col-md-4 col-form-label text-md-right">Kategori Pengumuman Id</label>
                        <label class="col-md-8 col-form-label text-md-left">{!! $Pengumuman->kategori_pengumuman_id !!}</label>

                        <label class="col-md-4 col-form-label text-md-right">Users ID</label>
                        <label class="col-md-8 col-form-label text-md-left">{!! $Pengumuman->users_id !!}</label>

                        <label class="col-md-4 col-form-label text-md-right">Created At</label>
                        <label class="col-md-8 col-form-label text-md-left">{!! $Pengumuman->created_at->format('d/m/Y H:i:s') !!}</label>

                        <label class="col-md-4 col-form-label text-md-right">Updated At</label>
                        <label class="col-md-8 col-form-label text-md-left">{!! $Pengumuman->updated_at->format('d/m/Y H:i:s') !!}</label>

                        <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                            <a href="{!! $url = route('pengumuman.index') !!}" class="btn btn-primary">Kembali</a>        
                            </div>
                        </div>

                        </div>   
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection