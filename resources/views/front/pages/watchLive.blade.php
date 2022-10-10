@extends('front.layouts.master')
@section('content')
@php
$liveVideos=App\Models\Video::where('status',1)->get();
@endphp
 <!-- Banner Begin -->
    <section class="breadcrumb-section set-bg" data-setbg="{{ asset('front_assets/img/hero-1.jpg') }}" style="background-image: url(&quot;front-assets/img/breadcrumb-bg.jpg&quot;);">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="bs-text">
                        <h2>Streaming Now</h2>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Banner End -->

    <!-- live Section Begin -->
    <section class="live-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 p-0">
                    <div class="section-title">
                        <h3>Live <span>Now</span></h3>
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
    @endsection
