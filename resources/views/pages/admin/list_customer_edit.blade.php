@extends('adminlte::page')
@section('title', 'Blockdev - List Customer')
@section('content_header')
    <h1 class="m-0 text-dark">Edit Customer</h1>
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
                    <form method="POST" action="{{ route('admin.customer.update', $customer->id) }}">
                        @csrf

                        <div class="form-group">
                           <label class="mt-2 mb-3">Full Name</label>
                           <input type="text" class="form-control" name="name" value="{{ $customer->name }}" required>
                        </div>
                        <div class="form-group">
                           <label class="mt-2 mb-3">Company Name</label>
                           <input type="text" class="form-control" name="company_name" value="{{ $customer->company_name }}" required>
                        </div>
                        <div class="form-group">
                           <label class="mt-2 mb-3">Country</label>
                           <input type="text" class="form-control" name="country" value="{{ $customer->country }}" required>
                        </div>
                        <div class="form-group">
                           <label class="mt-2 mb-3">Address</label>
                           <textarea class="form-control" name="address" cols="5" rows="5" required>{{ $customer->address }}</textarea>
                        </div>
                        <div class="form-group">
                           <label class="mt-2 mb-3">Post Code</label>
                           <input type="number" class="form-control" name="post_code" value="{{ $customer->post_code }}" required>
                        </div>
                        <div class="form-group">
                           <label class="mt-2 mb-3">Email</label>
                           <input type="email" class="form-control" name="email" value="{{ $customer->email }}" required>
                        </div>
                        <div class="form-group">
                           <label class="mt-2 mb-3">Phone Number</label>
                           <input type="number" class="form-control" name="phone_number" value="{{ $customer->phone_number }}" required>
                        </div>
                        <div class="form-group">
                           <label class="mt-2 mb-3">Services</label>
                           <select class="form-control" name="service_id" required>
                              <option value="1" {{ $customer->service_id == 1 ? 'selected':'' }}>Custom Plugin WordPress</option>
                              <option value="2" {{ $customer->service_id == 2 ? 'selected':'' }}>Custom Theme WordPress</option>
                              <option value="3" {{ $customer->service_id == 3 ? 'selected':'' }}>WordPress Design</option>
                              <option value="4" {{ $customer->service_id == 4 ? 'selected':'' }}>Deploy WordPress</option>
                              <option value="5" {{ $customer->service_id == 5 ? 'selected':'' }}>Backup and Restore WordPress</option>
                              <option value="6" {{ $customer->service_id == 6 ? 'selected':'' }}>Pentest WordPress</option>
                           </select>
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