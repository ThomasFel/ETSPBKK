@extends('layouts.layout')

@section('title', 'Blockdev - Service')
@section('desc', 'Services offered by Blockdev')
@section('detail', 'services')

@section('content')
<section id="services">
    <div class="text-center">
        <h1 class="display-3 fw-bold">Our Services</h1>
        <hr class="bg-white mb-3 mt-0 d-inline-block mx-auto" style="width: 100px; height:3px;">
        <p class="p-text text-white mb-5">Services offered by Blockdev</p>
    </div> 
   <div class="row">
        <div class="col-lg-6 col-sm-6 mb-4">
            <div class="card bg-dark border-0 shadow rounded-xs pt-5">
                <div class="card-body"> <i class="fab fa-wordpress icon-lg icon-cyan icon-bg-cyan icon-bg-circle mb-3"></i>
                    <h4 class="mt-4 mb-3 text-white">Custom Plugin WordPress</h4>
                    <p class="text-white">Get help creating your own custom wordpress plugin at an affordable price. Plugins that are made will also be maintained for up to 2 years without having to pay again!</p>
                </div>
            </div>
        </div>
        <div class="col-lg-6 col-sm-6 mb-4">
            <div class="card bg-dark border-0 shadow rounded-xs pt-5">
                <div class="card-body"> <i class="fab fa-wordpress icon-lg icon-cyan icon-bg-cyan icon-bg-circle mb-3" ></i>
                    <h4 class="mt-4 mb-3 text-white">Custom Themes WordPress</h4>
                    <p class="text-white">Get help creating your own custom wordpress themes at an affordable price. Themes that are made will also be maintained for up to 2 years without having to pay again!</p>
                </div>
            </div>
        </div>
        <div class="col-lg-6 col-sm-6 mb-4">
            <div class="card bg-dark border-0 shadow rounded-xs pt-5">
                <div class="card-body"> <i class="fas fa-pen-fancy icon-lg icon-cyan icon-bg-cyan icon-bg-circle mb-3"></i>
                    <h4 class="mt-4 mb-3 text-white">WordPress Design</h4>
                    <p class="text-white">Get help redesigning your website to be more user-friendly. Your WordPress website will also be responsive, which means it can be accessed using a cellphone or computer</p>
                </div>
            </div>
        </div>
        <div class="col-lg-6 col-sm-6 mb-4">
            <div class="card bg-dark border-0 shadow rounded-xs pt-5">
                <div class="card-body"> <i class="fab fa-ubuntu icon-lg icon-cyan icon-bg-cyan icon-bg-circle mb-3"></i>
                    <h4 class="mt-4 mb-3 text-white">Deploy WordPress</h4>
                    <p class="text-white">Confused when deploying wordpress to your server? Or are you confused about installing multiple WordPress CMS on one server? We can help to solve your problem</p>
                </div>
            </div>
        </div>
        <div class="col-lg-6 col-sm-6 mb-4">
            <div class="card bg-dark border-0 shadow rounded-xs pt-5">
                <div class="card-body"> <i class="fas fa-database icon-lg icon-cyan icon-bg-cyan icon-bg-circle mb-3"></i>
                    <h4 class="mt-4 mb-3 text-white">Backup & Restore WordPress</h4>
                    <p class="text-white">We can help your company to move WordPress from one server to another</p>
                </div>
            </div>
        </div>
        <div class="col-lg-6 col-sm-6 mb-4">
            <div class="card bg-dark border-0 shadow rounded-xs pt-5">
                <div class="card-body"> <i class="fas fa-bug icon-lg icon-cyan icon-bg-cyan icon-bg-circle mb-3"></i>
                    <h4 class="mt-4 mb-3 text-white">Pentest WordPress</h4>
                    <p class="text-white">Has your WordPress website been hacked? don't worry, we have a security team to help you or your company to solve this problem</p>
                </div>
            </div>
        </div>
    </div>
</section>
@stop