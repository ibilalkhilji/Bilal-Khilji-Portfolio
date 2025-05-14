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
                                        <p>Innovative and dedicated computer engineer with over {{round(\Carbon\Carbon::parse('01-07-2007')->diffInYears(\Carbon\Carbon::now()))}} years of
                                            experience in building and testing applications for Web and Android. Founder
                                            of KHALEEJ Infotech, operating as a freelancer under this banner. Skilled in
                                            PHP and MySQL with proficiency in 5+ programming languages.</p>
                                    </div>
                                </div>
                                <div class="counter-area">
                                    <div class="counter">
                                        <div class="counter-item">
                                            <h3 class="number">{{round(\Carbon\Carbon::parse('01-07-2007')->diffInYears(\Carbon\Carbon::now()))}}</h3>
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
                                                        <p><span>{{$review['person']}}</span> - {{$review['company']}}</p>
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
