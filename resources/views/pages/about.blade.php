@php use Carbon\Carbon; @endphp
@extends('layout.app')
@section('content')
    <main>
        <section class="content-box-area mt-4">
            <div class="container">
                <div class="row g-4">
                    <div class="col-xl-4">
                        @include('partials.profile-card')
                    </div>
                    <div class="col-xl-8">
                        <div class="card content-box-card">
                            <div class="card-body">
                                <div class="top-info">
                                    <div class="text" style="max-width: none">
                                        <h1 class="main-title">Hi, This Is <span>Bilal Khilji</span> 👋</h1>
                                        <p>
                                            Experienced and passionate Computer Engineer
                                            with {{round(Carbon::parse('01-07-2007')->diffInYears(Carbon::now()))}}+
                                            years in designing, building, and testing Web and Android applications. I’m
                                            the founder of <strong>KHALEEJ Infotech</strong>, where I operate as an
                                            independent freelancer delivering high-quality, scalable solutions. <br>

                                            Skilled in <strong>PHP, MySQL</strong>, and proficient in over 5 programming
                                            languages, I have a deep understanding of full-stack development and
                                            application architecture. <br>

                                            <strong>Specialized in building custom software solutions</strong> tailored
                                            to client needs — solving real-world business problems through smart,
                                            efficient, and scalable technology. From concept to deployment, I turn
                                            complex requirements into user-friendly digital products that work.
                                        </p>
                                    </div>
                                </div>
                                <div class="counter-area">
                                    <div class="counter">
                                        <div class="counter-item">
                                            <h3 class="number">{{round(Carbon::parse('01-07-2007')->diffInYears(Carbon::now()))}}</h3>
                                            <p class="subtitle">Year of Experience</p>
                                        </div>
                                        <div class="counter-item">
                                            <h3 class="number">76+</h3>
                                            <p class="subtitle">Project Completed
                                            </p>
                                        </div>
                                        <div class="counter-item">
                                            <h3 class="number">55+</h3>
                                            <p class="subtitle">Happy Client
                                            </p>
                                        </div>
                                    </div>
                                </div>

                                <div class="client-feedback">
                                    <h2 class="main-common-title">Trusted By Clients</h2>
                                    <div class="row client-feedback-slider">
                                        @foreach(reviews() as $review)
                                            <div class="col-lg-6">
                                                <div class="feedback-item">
                                                    <div class="details">
                                                        <p>{!! $review['review'] !!}</p>
                                                    </div>
                                                    <div class="designation">
                                                        <p><span>{{$review['person']}}</span> - {{$review['company']}}
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>

                                <div class="work-together-slider">
                                    <div class="slider-main d-flex gap-4 align-items-center">
                                        <div class="slider-item">
                                            <a href="{{ route('contact') }}">Let's 👋 Work Together</a>
                                            <a href="{{ route('contact') }}">Let's 👋 Work Together</a>
                                        </div>
                                        <div class="slider-item">
                                            <a href="{{ route('contact') }}">Let's 👋 Work Together</a>
                                            <a href="{{ route('contact') }}">Let's 👋 Work Together</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- background shape area start -->
        <div class="background-shapes">
            <div class="shape-1 common-shape">
                <img src="{{asset('assets/img/bg/banner-shape-1.png')}}" alt="banner-shape-1">
            </div>
            <div class="shape-2 common-shape">
                <img src="{{asset('assets/img/bg/banner-shape-1.png')}}" alt="banner-shape-1">
            </div>
            <div class="threed-shape-1 move-with-cursor" data-value="1">
                <img src="{{asset('assets/img/bg/object-3d-1.png')}}" alt="object-3d-1">
            </div>
            <div class="threed-shape-2 move-with-cursor" data-value="1">
                <img src="{{asset('assets/img/bg/object-3d-2.png')}}" alt="object-3d-2">
            </div>
        </div>
        <!-- background shape area end -->
    </main>
@endsection
