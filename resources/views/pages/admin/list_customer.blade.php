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
                    <table class="table table-hover table-bordered table-stripped">
                        <thead>
                        <tr>
                            <th>No.</th>
                            <th>Nama Pelanggan</th>
                            <th>Nama Perusahaan</th>
                            <th>Email</th>
                            <th>Nomor Telepon</th>
                            <th>Opsi</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($customers as $key => $customer)
                            <tr>
                                <td>{{$key + 1}}</td>
                                <td>{{$customer->name}}</td>
                                <td>{{$customer->company_name}}</td>
                                <td>{{$customer->email}}</td>
                                <td>{{$customer->phone_number}}</td>
                                <td>
                                    <a href="{{ route('admin.customer.edit', ['id' => $customer->id]) }}" class="btn btn-primary btn-sm mb-2">
                                        Edit
                                    </a>
                                    <form onsubmit="return confirm('Apakah Anda Yakin ingin menghapusnya?');" action="{{ route('admin.customer.delete', $customer->id) }}" method="POST">
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