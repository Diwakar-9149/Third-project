@extends('layout.app')

@section('css')
    <link rel="stylesheet" href="{{ asset('css/log.css') }}">
@endsection

@section('header-content')
    <h1 class="header-title">About Us</h1>
@endsection
@section('content')
    <section class="about-us">
        <div class="row">
            <div class="about-col">
                <h1>We are the best university of the country</h1>
                <p>Our university offers a dynamic learning environment with state-of-the-art facilities. 
                    We have recently upgraded our campus-wide fiber-optic network, connecting all departments and colleges 
                    to ensure seamless access to resources. Our faculty comprises experienced teachers and esteemed research 
                    scholars who are passionate about mentoring the next generation of leaders. We pride ourselves on hands-on learning, 
                    cutting-edge research opportunities, and academic rigor.</p>
                <a href="" class="hero-btn red-btn">EXPLORE NOW</a>
            </div>
            <div class="about-col">
                <img src="{{asset('image/about.jpg')}}">
            </div>
        </div>
    </section>
@endsection
