@extends('layouts.layout')

@section('title', 'Blockdev - Order')
@section('desc', 'Order our services')
@section('detail', 'form-orders')

@section('content')
<section id="form-orders">
   <div class="text-center">
      <h1 class="display-3 fw-bold">Order</h1>
      <hr class="bg-white mb-3 mt-0 d-inline-block mx-auto" style="width: 100px; height:3px;">
      <p class="p-text text-white mb-5">Order Our Services</p>
   </div>
   <div class="container">
      <div class="row justify-content-center">
         <div class="col-md-8">
               <div class="card bg-dark text-white">
                  <div class="card-body">
                     <form method="POST" action="/order">
                           @csrf
   
                           <div class="form-group">
                              <label class="mt-2 mb-3">Full Name</label>
                              <input type="text" class="form-control bg-dark text-white" name="name" value="{{ old('name') }}">
                           </div>
                           <div class="form-group">
                              <label class="mt-2 mb-3">Company Name</label>
                              <input type="text" class="form-control bg-dark text-white" name="company" value="{{ old('company') }}">
                           </div>
                           <div class="form-group">
                              <label class="mt-2 mb-3">Country</label>
                              <input type="text" class="form-control bg-dark text-white" name="country" value="{{ old('country') }}">
                           </div>
                           <div class="form-group">
                              <label class="mt-2 mb-3">Address</label>
                              <textarea class="form-control bg-dark text-white" name="address" cols="5" rows="5">{{ old('address') }}</textarea>
                           </div>
                           <div class="form-group">
                              <label class="mt-2 mb-3">Post Code</label>
                              <input type="number" class="form-control bg-dark text-white" name="postcode" value="{{ old('postcode') }}">
                           </div>
                           <div class="form-group">
                              <label class="mt-2 mb-3">Email</label>
                              <input type="email" class="form-control bg-dark text-white" name="email" value="{{ old('email') }}">
                           </div>
                           <div class="form-group">
                              <label class="mt-2 mb-3">Phone Number</label>
                              <input type="number" class="form-control bg-dark text-white" name="phone" value="{{ old('phone') }}">
                           </div>
                           <div class="form-group">
                              <button class="btn btn-outline-light btn-lg mt-4">Read More</button>
                           </div>
                     </form>
                  </div>
               </div>
         </div>
      </div>
   </div>
</section>
@stop