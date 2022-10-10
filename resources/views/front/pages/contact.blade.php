@extends('front.layouts.master')
@section('content')
  <!-- Banner Begin -->
    <section class="breadcrumb-section set-bg" data-setbg="{{ asset('front_assets/img/hero-1.jpg') }}" style="background-image: url(&quot;front-assets/img/breadcrumb-bg.jpg&quot;);">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="bs-text">
                        <h2>Contact Us</h2>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Banner End -->

    <!-- Login Begin -->
    <section class="login spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 col-md-5">
                    <div class="login__form">
                        <h3>Your Message</h3>
                        <form  action="{{ url('/create') }}" method="post">
                        @csrf

                            <div class="input__item">
                                <input type="text" placeholder="Full Name" name="name">
                                <span class="fa fa-user"></span>
                            </div>
                            <div class="input__item">
                                <input type="email" placeholder="Email Address" name="email">
                                <span class="fa fa-envelope"></span>
                            </div>
                            <div class="input__item">
                                <input type="text"  name="subject" placeholder="Subject*">
                           
                            </div>
                            <div class="input__item textarea-item">
                                <textarea name="message" id="" rows="5" placeholder="Message..." class="form-control"></textarea>
                            </div>
                            <button type="submit" class="site-btn">Submit</button>
                        </form>
                    </div>
                </div>
                
                <div class="col-lg-3 col-md-3"></div>
                <div class="col-lg-4 col-md-4">
                    <div class="contact__info">
                        <h3>Contact Info</h3>
                        
                        <ul>
                            <li><i class="fa fa-envelope mr-3"></i> bayjing@funolympics.com </li>
                            <li><i class="fa fa-phone mr-3"></i> +977 9861323432 </li>
                            <li><i class="fa fa-map-marker mr-3"></i> Kathmandu, Nepal</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Login End -->


@endsection