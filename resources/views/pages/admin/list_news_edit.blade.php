@extends('adminlte::page')
@section('title', 'Blockdev - List News')
@section('content_header')
    <h1 class="m-0 text-dark">Edit News</h1>
@stop
@section('content')
    @if (session('success'))
    <div class="alert alert-success">
      {{ session('success') }}
    </div>

    @elseif (session('error'))
    <div class="alert alert-danger">
      {{ session('error') }}
    </div>
    @endif
    
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <form method="POST" action="{{ route('admin.news.update', $news->id) }}">
                        @csrf

                        <div class="form-group">
                           <label class="mt-2 mb-3">Judul Berita</label>
                           <input type="text" class="form-control" name="name" value="{{ $news->title }}" required>
                        </div>
                        <div class="form-group">
                           <label class="mt-2 mb-3">Isi Berita</label>
                           <textarea class="form-control" name="address" cols="15" rows="15" required>{{ $news->description }}</textarea>
                        </div>
                        <div class="form-group">
                           <button class="btn btn-success btn-md mt-3">Update</button>
                        </div>
                     </form>
                </div>
            </div>
        </div>
    </div>
@stop