@extends('adminlte::page')
@section('title', 'Blockdev - List Customer')
@section('content_header')
    <h1 class="m-0 text-dark">List Customer</h1>
@stop
@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <a href="{{route('admin.news.create')}}" class="btn btn-primary mb-2">
                        Tambah
                    </a>
                    <table class="table table-hover table-bordered table-stripped">
                        <thead>
                        <tr>
                            <th>No.</th>
                            <th>Judul Berita</th>
                            <th>Isi Berita</th>
                            <th>Opsi</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($news as $key => $list_news)
                            <tr>
                                <td>{{$key + 1}}</td>
                                <td>{{$list_news->title}}</td>
                                <td>{{$list_news->description}}</td>
                                <td>
                                    <a href="{{ route('admin.news.update', ['id' => $list_news->id]) }}" class="btn btn-primary btn-sm mb-2">
                                        Edit
                                    </a>
                                    <form onsubmit="return confirm('Apakah Anda Yakin ingin menghapusnya?');" action="{{ route('admin.news.delete', $list_news->id) }}" method="POST">
                                        @csrf
                                        <button type="submit" class="btn btn-danger btn-sm">
                                            Delete
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@stop