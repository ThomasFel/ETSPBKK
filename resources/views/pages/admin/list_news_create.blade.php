@extends('adminlte::page')
@section('title', 'Blockdev - Create News')
@section('content_header')
    <h1 class="m-0 text-dark">Create News</h1>
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
                <form method="POST" action="{{ route('admin.news.create') }}">
                        @csrf

                        <div class="form-group">
                           <label class="mt-2 mb-3">Judul Berita</label>
                           <input type="text" class="form-control" name="name" value="{{ $news->name }}" required>
                        </div>
                        <div class="form-group">
                           <label class="mt-2 mb-3">Isi Berita</label>
                           <textarea class="form-control" name="address" cols="15" rows="15" required>{{ $news->address }}</textarea>
                        </div>
                        <div class="form-group">
                           <button class="btn btn-success btn-md mt-3">Create</button>
                        </div>
                     </form>
                </div>
            </div>
        </div>
    </div>
@stop