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
      @forelse($news->sortBy('created_at')->reverse()->take(6) as $list_news)
      <div class="col-lg-4 col-sm-4 mt-5">
         <div class="card bg-dark border-0 shadow rounded-xs pt-2">
            <div class="card-body text-white">
               <img src="{{ asset('photos/' . $list_news->photo) }}" class="mb-2 mx-auto d-block card-img-top">
               <h4 class="mt-3 icon-cyan">
                  <a href="{{ route('news.show', $list_news->slug) }}" class="icon-cyan">{{ $list_news->title }}</a>
               </h4>
               <p class="mt-2 mb-4">
                  <i class="fas fa-users" style="padding-right: 10px;"></i>{{ $list_news->admin->name }}
                  <i class="fas fa-clock" style="padding: 0 10px 0 20px;"></i>{{ date('d F Y', strtotime($list_news->created_at)) ?? '' }}
               </p>
               <div class="float-left mb-5">
                  {!! substr(strip_tags($list_news->body), 0, 100) !!}{!! strlen(strip_tags($list_news->body)) > 100 ? " ..." : "" !!}
               </div>

               <a href="{{ route('news.show', $list_news->slug) }}" class="btn btn-outline-light btn-rounded">Read More</a>
            </div>
         </div>
      </div>
      @endforeach
   </div>
</section>
@stop