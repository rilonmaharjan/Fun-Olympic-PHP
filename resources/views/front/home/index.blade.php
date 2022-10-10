@extends('front.layouts.master')
@section('content')
@php

$liveVideos=App\Models\Video::where('status',1)->get();
$Videos=App\Models\Video::all();
@endphp

<!-- Hero Section Begin -->
<!-- <section class="hero-section"> -->
<!-- <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="hs-item">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="hs-text">
                                        <h4>30 september 2019 / 9:00 GMT+0000</h4>
                                        <h2>Airrosten VS Lerenort in London</h2>
                                        <a href="#" class="primary-btn">More Details</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> -->
<div id="carouselExampleControls" class="carousel slide" data-ride="carousel" style="height: 80vh;">
    <div class="carousel-inner">
        <div class="carousel-item active" style="height: 80vh;">
            <img class="d-block w-100" src="https://images.pexels.com/photos/33703/relay-race-competition-stadium-sport.jpg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" alt="First slide" style="object-fit: cover;">
            
        </div>
 
        <div class="carousel-item" style="height: 80vh;">
            <img class="d-block w-100" src="https://images.pexels.com/photos/209977/pexels-photo-209977.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" alt="Third slide" style="object-fit: cover;">
           
        </div>
        <div class="carousel-item" style="height: 80vh;">
            <img class="d-block w-100" src="https://images.pexels.com/photos/46798/the-ball-stadion-football-the-pitch-46798.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" alt="Third slide" style="object-fit: cover;">
            
        </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>
<!-- </section> -->
<!-- Hero Section End -->

<!-- live Section Begin -->
<section class="live-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 p-0">
                <div class="section-title">
                    <h3>Streaming <span>Now</span></h3>
                    <a href="{{ url('/watch_live') }}" class="view-more">View All →</a>
                </div>
            </div>
        </div>
        <div class="row">

            @foreach($liveVideos as $liveVideo)
            <div class="col-lg-3 col-sm-6 p-0">
                <div class="live-item set-bg" data-setbg="{{ url('/') }}/public/storage/posts/{{  $liveVideo->thumbnail  }}">
                    <div class="si-tag">{{ $liveVideo->category }}</div>
                    <div class="si-text">
                        <h5><a href="{{ route('videoDetail',$liveVideo->id) }}">{{ $liveVideo->title }}</a></h5>
                    </div>
                </div>
            </div>
            @endforeach

        </div>
    </div>
</section>
<!-- live Section End -->

<!-- Video Section Begin -->
<section class="video-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title">
                    <h3> <span>Videos</span></h3>
                    <a href="{{ url('/video') }}" class="view-more">View All →</a>
                </div>
            </div>
        </div>
        <div class="row">
            @foreach($Videos as $Video)
            <div class="col-lg-3 mb-4">
                <div class="video-item set-bg" data-setbg="{{ url('/') }}/public/storage/posts/{{  $Video->thumbnail  }}">
                    <div class="black-box">
                <div class="vi-title">
                        <h5>{{ $Video->title }}</h5>
                    </div>
</div>
                    <a href="{{ route('videoDetail',$Video->id) }}" class="play-btn"><img src="{{ asset('front_assets/img/play.png') }}" alt=""></a>
                </div>
            </div>
            @endforeach


        </div>
    </div>
</section>
<!-- Video Section End -->


@endsection