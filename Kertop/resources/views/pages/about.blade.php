@extends('layouts.Client.app')
@section('title','About')
@section('breadCrumb')
@parent
<li class="breadcrumb-item active" aria-current="page">About</li>
@endsection
@section('mainContent')
<section class="page-section mt-5 bg-gold text-white mb-0" id="about">
        <div class="container">
            <!-- About Section Heading-->
            <h2 class="page-section-heading text-center text-uppercase text-white">About</h2>
            <!-- Icon Divider-->
            <div class="divider-custom divider-light">
                <div class="divider-custom-line"></div>
                <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                <div class="divider-custom-line"></div>
            </div>
            <!-- About Section Content-->
            <div class="row">
                <div class="col-lg-4 ms-auto">
                    <p class="lead">At 
                        {{ $title }}, we are dedicated to cultivating the finest rapeseed crops,
                        transforming the vibrant yellow fields into a plethora of high-quality products that fuel and
                        nourish the world. Our journey began with a vision to harness the golden glow of nature's bounty
                        and convert it into sustainable, healthy, and versatile solutions. We take pride in our
                        eco-friendly farming practices, ensuring that each seed sown not only nurtures the land but also
                        contributes to a greener, healthier planet. From our nutrient-rich animal feed to the smooth,
                        high-performing bio-based plastics, our commitment to quality and sustainability is unwavering.
                    </p>
                </div>
                <div class="col-lg-4 me-auto">
                    <p class="lead">At 
                        {{ $title }}, we are dedicated to cultivating the finest rapeseed crops,
                        transforming the vibrant yellow fields into a plethora of high-quality products that fuel and
                        nourish the world. Our journey began with a vision to harness the golden glow of nature's bounty
                        and convert it into sustainable, healthy, and versatile solutions. We take pride in our
                        eco-friendly farming practices, ensuring that each seed sown not only nurtures the land but also
                        contributes to a greener, healthier planet. From our nutrient-rich animal feed to the smooth,
                        high-performing bio-based plastics, our commitment to quality and sustainability is unwavering.
                    </p>
                </div>
            </div>
            <!-- About Section Button-->
            <div class="text-center mt-4">
                <a class="btn btn-xl btn-outline-light" href="https://startbootstrap.com/theme/freelancer/">
                    <i class="fas fa-download me-2"></i>
                    Download Catalog
                </a>
            </div>
        </div>
    </section>
@endsection