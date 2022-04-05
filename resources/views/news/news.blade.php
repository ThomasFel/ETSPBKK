@extends('layouts.layout')

@section('title', 'Blockdev - News')
@section('desc', 'Latest News from BlockDev')
@section('detail', 'news-list')

@section('content')
<section id="news-list">
   <div class="text-center">
      <h1 class="display-3 fw-bold">Latest News</h1>
      <hr class="bg-white mb-3 mt-0 d-inline-block mx-auto" style="width: 100px; height:3px;">
   </div>
   <div class="row">
   @foreach($news as $key => $list_news)
   <div class="col-lg-4 col-sm-4 mb-4">
      <div class="card bg-dark border-0 shadow rounded-xs pt-2">
         <div class="card-body text-white">
            <img src="/photos/{{ $list_news->photo }}" class="mb-2 mx-auto d-block" height="250" width="375">
            <h2 class="mt-3 icon-cyan" href="news/{{ $list_news->id }}">{{ $list_news->title }}</h2>
            <p><span class="mt-2"><i class="fas fa-users"></i> {{$list_news->admin->name}} <i class="fas fa-clock"></i> {{ date('d F Y', strtotime($list_news->created_at)) ?? '' }}</span></p>
            <div class="float-left">
               {!! \Illuminate\Support\Str::limit($list_news->body, 100, $end='...') !!}
               <br><br>
               <a href="news/{{ $list_news->slug }}" class="btn btn-outline-light btn-rounded">Read More</a>
            </div>
         </div>
      </div>
   </div>
   @endforeach
   </div>
</section>
@stop