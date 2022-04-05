@extends('layouts.layout', ['title' => $news[0]->title ])

@section('title', 'Blockdev - News')
@section('detail', 'news-title')

@section('content')
   <section id="news-title">
      <div class="row">
         <h6 class="text-center mt-4 text-light h6">{!! $news[0]->body !!}</h5>
      </div>
   </section>
@stop