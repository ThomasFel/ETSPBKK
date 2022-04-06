@extends('layouts.layout')

@section('title', 'Blockdev - Home')
@section('desc', 'Indonesian startup focused on developing CMS WordPress')
@section('detail', 'startup-profile')

@section('content')
<section id="startup-profile">
    <div class="text-center">
        <h1 class="display-3 fw-bold">About Us</h1>
        <hr class="bg-white mb-3 mt-0 d-inline-block mx-auto" style="width: 100px; height:3px;">
        <h5 class="text-white mb-5">Profile of BlockDev</h5>
    </div> 
    <div class="row">
        <div class="col-sm-6">
            <img class='border rounded mt-4' style="max-width:70%;" src='{{ asset("/image/BlockDev-Logo.png") }}'>
        </div>
        <div class="col-sm-6">
            <h5 class="text-justify mt-4 text-light" style="font-weight: 200; font-size: 20px">BlockDev is a startup that specializes in creating WordPress plugins and themes. Hundreds of well-known clients such as SemenGresik, Desa Oro-Oro Ombo and many others choose us as partners to improve their websites to achieve the best results. BlockDev is able to meet your expectations in perfecting the features of your start-up web development including planning, system design, content, prototypes, UI/UX, neat code implementation, infrastructure and testing. Everything will work according to your expectations to provide features in your startup website.</h5>
            <div class="text-center">
                <a href="{{ route('company') }}" class="btn btn-outline-light btn-lg mt-5 text-center">View More</a>
            </div>
        </div>
    </div>
</section>

<section id="services">
    <div class="text-center">
        <h1 class="display-3 fw-bold">Our Services</h1>
        <hr class="bg-white mb-3 mt-0 d-inline-block mx-auto" style="width: 100px; height:3px;">
        <h5 class="text-white mb-5">Services offered by Blockdev</h5>
    </div> 
    <div class="row">
        <div class="col-lg-4 col-sm-6 mb-4">
            <div class="card bg-dark border-0 shadow rounded-xs pt-5">
                <div class="card-body"> <i class="fab fa-wordpress icon-lg icon-cyan icon-bg-cyan icon-bg-circle mb-3"></i>
                    <h4 class="mt-4 mb-3 text-white">Custom Plugin WordPress</h4>
                    <p class="text-white">Get help creating your own custom wordpress plugin at an affordable price</p>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-sm-6 mb-4">
            <div class="card bg-dark border-0 shadow rounded-xs pt-5">
                <div class="card-body"> <i class="fab fa-wordpress icon-lg icon-cyan icon-bg-cyan icon-bg-circle mb-3" ></i>
                    <h4 class="mt-4 mb-3 text-white">Custom Themes WordPress</h4>
                    <p class="text-white">Get help creating your own custom wordpress themes at an affordable price</p>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-sm-6 mb-4">
            <div class="card bg-dark border-0 shadow rounded-xs pt-5">
                <div class="card-body"> <i class="fas fa-pen-fancy icon-lg icon-cyan icon-bg-cyan icon-bg-circle mb-3"></i>
                    <h4 class="mt-4 mb-3 text-white">WordPress Design</h4>
                    <p class="text-white">Get help redesigning your website to be more user-friendly</p>
                </div>
            </div>
        </div>
    </div>
    <div class="text-center">
        <a href="{{route('service')}}" class="btn btn-outline-light btn-lg mt-3 text-center">View More</a>
    </div>
</section>

<section id="testimonial">
    <div class="text-center">
        <h1 class="display-3 fw-bold">Testimonial</h1>
        <hr class="bg-white mb-3 mt-0 d-inline-block mx-auto" style="width: 100px; height:3px;">
        <h5 class="p-text text-white mb-5">What our clients are saying</h5>
    </div> 
    <div class="testimonial-slider bg-dark">
        <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner py-5 text-center text-white">
                <div class="carousel-item active">
                    <i class="far fa-envelope fa-2x"></i>
                    <figure class="text-cent col-md-6 offset-md-3 mt-4">
                        <blockquote class="blockquote">
                            <p>I love BlockDev. It's all good. We've seen amazing results already. BlockDev is worth much more than I paid.</p>
                        </blockquote>
                        <figcaption class="blockquote-footer mt-2">Romy W.</figcaption>
                    </figure>
                </div>
                <div class="carousel-item">
                    <i class="far fa-envelope fa-2x"></i>
                    <figure class="col-md-6 offset-md-3 mt-4">
                        <blockquote class="blockquote">
                            <p>BlockDev has got everything I need. I could probably go into sales for you. BlockDev did exactly what you said it does.</p>
                        </blockquote>
                        <figcaption class="blockquote-footer mt-2">Jean-Pierre V.</figcaption>
                    </figure>
                </div>
                <div class="carousel-item">
                    <i class="far fa-envelope fa-2x"></i>
                    <figure class="col-md-6 offset-md-3 mt-4">
                        <blockquote class="blockquote">
                            <p>Great job, I will definitely be ordering again! We've seen amazing results already. BlockDev is great.</p>
                        </blockquote>
                        <figcaption class="blockquote-footer mt-2">Odille U.</figcaption>
                    </figure>
                </div>
            </div>
        </div>
    </div>
</section>
@stop