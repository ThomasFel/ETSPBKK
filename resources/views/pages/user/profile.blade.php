@extends('layouts.layout')

@section('title', 'Blockdev - Profile')
@section('desc', 'Profile of BlockDev')
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
<section id="vision-mission">
    <div class="row">
        <div class="col-sm-6">
            <div class="text-center">
                <h1 class="display-3 fw-bold">Our Vision</h1>
                <hr class="bg-white mb-5 mt-0 d-inline-block mx-auto" style="width: 100px; height:3px;">
            </div>
            <h5 class="text-white h5">A company with innovative produtcts, innovative management, and
                innovative ideas which can be helpful a customer to improve his business,
                improving overall life of all team members and give this world something
                which can be memorable forever</h5>
        </div>
        <div class="col-sm-6">
            <div class="text-center">
                <h1 class="display-3 fw-bold">Our Mission</h1>
                <hr class="bg-white mb-5 mt-0 d-inline-block mx-auto" style="width: 100px; height:3px;">
            </div>
            <li class="post-item text-white h5">Provide world class services, and quality products.</li>
            <li class="post-item text-white h5">Provide the products with great technical and commercial values to the customer.</li>
            <li class="post-item text-white h5">Spread our points of sales and service in all major cities of Surabaya and all countries of the world.</li>
        </div>
    </div>
</section>
<section id="contact-us">
    <div class="row">
        <div class="col-sm-6">
            <div class="text-center">
                <h1 class="display-3 fw-bold">Get in Touch</h1>
                <hr class="bg-white mb-3 mt-0 d-inline-block mx-auto" style="width: 100px; height:3px;">
            </div>
            <div class="text-white mt-4">
                <p class="h3">
                    <i class="fas fa-envelope mt-1 mb-1"></i> Email<p class="h6 mt-1 mb-5">
                        <a class="icon-cyan" href="mailto:md15ev@gmail.com">md15ev@gmail.com</a>
                    </p>
                </p>
                <p class="h3">
                    <i class="fas fas fa-phone mt-1 mb-1"></i> Telephone<p class="h6 mt-1 mb-5">
                        <a class="icon-cyan" href="tel:621234567890">+621234567890</a>
                    </p>
                </p>
                <p class="h3">
                    <i class="fas fas fa-map-marker-alt mt-1 mb-1"></i> Address<p class="h6 mt-1 mb-5 icon-cyan">Jalan Teknik Computer, ITS, Jawa Timur</p>
                </p>
            </div>
        </div>
        <div class="col-sm-6">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2353.2381059386958!2d112.79639851116656!3d-7.279588252698573!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd7fa1210bad633%3A0xa2205c1a620a0936!2sInformatika+ITS!5e0!3m2!1sen!2sid!4v1538446659359" width="600" height="500" frameborder="0" style="border:0" allowfullscreen></iframe>
        </div>
    </div>
</section>
@stop