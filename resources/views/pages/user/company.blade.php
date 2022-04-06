@extends('layouts.layout')

@section('title', 'Blockdev - Company')
@section('desc', 'Brief description of BlockDev')
@section('detail', 'startup-profile')

@section('content')
<section id="startup-profile">
    <div class="text-center">
        <h1 class="display-3 fw-bold">About Us</h1>
        <hr class="bg-white mb-3 mt-0 d-inline-block mx-auto" style="width: 100px; height:3px;">
        <h4 class="p-text text-white mb-5">Profile of BlockDev</h4>
    </div>
    <div class="row">
        <div class="text-center mt-4 text-light" style="font-size: 20px">BlockDev is a startup that specializes in creating WordPress plugins and themes. Hundreds of well-known clients such as SemenGresik, Desa Oro-Oro Ombo and many others choose us as partners to improve their websites to achieve the best results. BlockDev is able to meet your expectations in perfecting the features of your start-up web development including planning, system design, content, prototypes, UI/UX, neat code implementation, infrastructure and testing. Everything will work according to your expectations to provide features in your startup website.</div>
    </div>
</section>
<section id="our-partners">
    <div class="text-center">
        <h1 class="display-3 fw-bold">Our Partners</h1>
        <hr class="bg-white mb-3 mt-0 d-inline-block mx-auto" style="width: 100px; height:3px;">
        <h4 class="p-text text-white mb-5">Pleasure to work with them</h4>
    </div>
    <div class="container h-100">
        <div class="row align-items-center h-100">
            <div class="container rounded">
                    <div class="slider text-white mt-5">
                        <div class="logos">
                            <i class="fab fa-linkedin-in fa-4x"></i>
                            <i class="fab fa-dribbble fa-4x"></i>
                            <i class="fab fa-medium-m fa-4x"></i>
                            <i class="fab fa-github fa-4x"></i>
                            <i class="fab fa-facebook fa-4x"></i>
                        </div>
                        <div class="logos">
                            <i class="fab fa-linkedin-in fa-4x"></i>
                            <i class="fab fa-dribbble fa-4x"></i>
                            <i class="fab fa-medium-m fa-4x"></i>
                            <i class="fab fa-github fa-4x"></i>
                            <i class="fab fa-facebook fa-4x"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</section>
<section id="our-people">
    <div class="text-center">
        <h1 class="display-3 fw-bold">Meet Our Team</h1>
        <hr class="bg-white mb-3 mt-0 d-inline-block mx-auto" style="width: 100px; height:3px;">
        <h4 class="p-text text-white mb-5">These are the people that make the magic happen</h4>
    </div>
    <div class="container mt-4">
        <div class="row">
            <div class="col-md-4">
                <div class="card bg-dark">
                <img src='{{ asset("/image/daffa.jpg") }}' class="card-img-top" alt="...">
                    <div class="card-body">
                        <h4 class="card-title text-white">Muhammad Daffa</h4>
                        <h6 class="card-subtitle mb-2 text-muted">Chief Technology Officer</h6>
                        <div class="text-center mt-4">
                            <a href="https://www.linkedin.com/in/muhdaffa/" class="btn btn-outline-light btn-rounded"><i class="fab fa-linkedin"></i> LinkedIn</a>
                            <a href="https://github.com/daffainfo" class="btn btn-outline-light btn-rounded"><i class="fab fa-github"></i> Github</a>
                        </div>
                    </div>
                </div>
            </div>    
            <div class="col-md-4">
                <div class="card bg-dark">
                <img src='{{ asset("/image/felix.jpg") }}' class="card-img-top" alt="...">
                    <div class="card-body">
                        <h4 class="card-title text-white">Thomas Felix Brilliant</h4>
                        <h6 class="card-subtitle mb-2 text-muted">Chief Executive Officer</h6>
                        <div class="text-center mt-4">
                            <a href="https://www.linkedin.com/in/thomasfelix10/" class="btn btn-outline-light btn-rounded"><i class="fab fa-linkedin"></i> LinkedIn</a>
                            <a href="https://github.com/thomasfel" class="btn btn-outline-light btn-rounded"><i class="fab fa-github"></i> Github</a>
                        </div>
                    </div>
                </div>
            </div>    
            <div class="col-md-4">
                <div class="card bg-dark">
                <img src='{{ asset("/image/daffa.jpg") }}' class="card-img-top" alt="...">
                    <div class="card-body">
                        <h4 class="card-title text-white">Muhammad Daffa</h4>
                        <h6 class="card-subtitle mb-2 text-muted">Chief Marketing Officer</h6>
                        <div class="text-center mt-4">
                            <a href="https://www.linkedin.com/in/muhdaffa/" class="btn btn-outline-light btn-rounded"><i class="fab fa-linkedin"></i> LinkedIn</a>
                            <a href="https://github.com/daffainfo" class="btn btn-outline-light btn-rounded"><i class="fab fa-github"></i> Github</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row text-center mt-5">
        <h1>Interested working on BlockDev?</h1>
        <div class="d-flex justify-content-center">
            <div class="col-md-4 mt-4">
                <a href="#" class="btn btn-lg btn-outline-light btn-rounded">Check it out!</a>
            </div>
        </div>
    </div>
</section>
@stop