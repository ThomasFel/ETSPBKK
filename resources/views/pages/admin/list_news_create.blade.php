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
                <form method="POST" action="{{ route('admin.news.add') }}" enctype="multipart/form-data">
                    @csrf

                    <div class="form-group">
                        <label class="mt-2 mb-3">Judul Berita</label>
                        <input type="text" class="form-control" name="title" placeholder="Post Title" required>
                    </div>

                    <div class="form-group">
                        <label class="mt-2 mb-3">Foto</label>
                        <input type="file" class="form-control-file" name="photo" id="photo">
                    </div>
                    
                    <div class="form-group">
                        <label class="mt-2 mb-3">Isi Berita</label>
                        <textarea id="body_editor" name="body" class="ckeditor form-control"></textarea>
                    </div>

                    <input type="hidden" name="admin_id" value="{{ Auth::user()->id }}">
                    
                    <div class="form-group">
                        <button class="btn btn-success btn-md mt-3">Create</button>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.ckeditor.com/ckeditor5/23.0.0/classic/ckeditor.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script type="text/javascript">
        ClassicEditor.create( document.querySelector( '#body_editor' ) ).catch(error => {
            console.error(error);
        });
    </script>
    <style>
        .ck-editor__editable_inline {
            min-height: 300px !important;
        }
    </style>
@stop