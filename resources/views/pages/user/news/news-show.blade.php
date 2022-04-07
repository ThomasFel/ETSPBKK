@extends('layouts.layout', ['title' => 'Our Post'])

@section('title', 'Blockdev - News')
@section('detail', 'news-title')

@section('content')
   <section id="news-title">
      <div class="text-center mb-3">
         <h1 class="display-5 fw-bold">{{ $news->title }}</h1>
         <hr class="bg-white mb-3 mt-0 d-inline-block mx-auto" style="width: 100px; height:3px;">
      </div>
      <div class="row" style="width: 850px; margin: auto">
         <img src="{{ asset('photos/' . $news->photo) }}" class="img-rounded">
         
         <div class="col-sm text-white">
            <h5 class="mt-3">Posted by {{ $news->admin->name }}</h5>
         </div>

         <div class="col-sm text-white" style="text-align: right; font-weight: 500">
            <i class="mt-3 fas fa-clock" style="padding-right: 10px;"></i>{{ date('d F Y', strtotime($news->created_at)) ?? '' }}
         </div>

         <hr class="bg-white mb-2 mt-2 d-inline-block mx-auto" style="width: 825px; height:1px;">
         
         <div class="float-left mt-4 text-white">
            {!! $news->body !!}
         </div>
      </div>
   </section>
@stop