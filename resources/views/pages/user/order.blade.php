@extends('layouts.layout')

@section('title', 'Blockdev - Order')
@section('desc', 'Order our services')
@section('detail', 'form-orders')

@section('content')
<section id="form-orders">
   <div class="text-center">
      <h1 class="display-3 fw-bold">Order</h1>
      <hr class="bg-white mb-3 mt-0 d-inline-block mx-auto" style="width: 100px; height:3px;">
      <h4 class="p-text text-white mb-5">Order Our Services</h4>
   </div>
   <div class="container">
      <div class="row justify-content-center">
         <div class="col-md-8">
               <div class="card bg-dark text-white">
                  <div class="card-body">
                     <form method="POST" action="{{ route('customer.add') }}">
                        @csrf

                        <div class="form-group">
                           <label class="mt-2 mb-3">Full Name</label>
                           <input type="text" class="form-control bg-dark text-white" name="name" value="{{ old('name') }}" required>
                        </div>
                        <div class="form-group">
                           <label class="mt-2 mb-3">Company Name</label>
                           <input type="text" class="form-control bg-dark text-white" name="company_name" value="{{ old('company_name') }}" required>
                        </div>
                        <div class="form-group">
                           <label class="mt-2 mb-3">Country</label>
                           <input type="text" class="form-control bg-dark text-white" name="country" value="{{ old('country') }}" required>
                        </div>
                        <div class="form-group">
                           <label class="mt-2 mb-3">Address</label>
                           <textarea class="form-control bg-dark text-white" name="address" cols="5" rows="5" required>{{ old('address') }}</textarea>
                        </div>
                        <div class="form-group">
                           <label class="mt-2 mb-3">Post Code</label>
                           <input type="number" class="form-control bg-dark text-white" name="post_code" value="{{ old('post_code') }}" required>
                        </div>
                        <div class="form-group">
                           <label class="mt-2 mb-3">Email</label>
                           <input type="email" class="form-control bg-dark text-white" name="email" value="{{ old('email') }}" required>
                        </div>
                        <div class="form-group">
                           <label class="mt-2 mb-3">Phone Number</label>
                           <input type="number" class="form-control bg-dark text-white" name="phone_number" value="{{ old('phone_number') }}" required>
                        </div>
                        <div class="form-group">
                           <label class="mt-2 mb-3">Services</label>
                           <select class="form-select bg-dark text-white" name="service_id" required>
                              <option value="1" selected>Custom Plugin WordPress</option>
                              <option value="2">Custom Theme WordPress</option>
                              <option value="3">WordPress Design</option>
                              <option value="4">Deploy WordPress</option>
                              <option value="5">Backup and Restore WordPress</option>
                              <option value="6">Pentest WordPress</option>
                           </select>
                        </div>
                        <div class="form-group">
                           <button class="btn btn-outline-light btn-md mt-5">Submit</button>
                        </div>
                     </form>
                  </div>
               </div>
         </div>
      </div>
   </div>
</section>

<!-- @if (session('success'))
   <script>
      Swal.fire({
         icon: 'success',
         title: 'Success',
         text: 'Your request has been sent!'
      })
   </script>

@elseif (session('error'))
<div class="alert alert-danger">
   {{ session('error') }}
   </div>
@endif -->
@stop