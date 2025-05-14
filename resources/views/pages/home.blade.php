@extends('layout.app')
@section('content')
    <main>
        <section class="home-area">
            <div class="container">
                <div class="row g-4">
                    <div class="col-xl-4">
                        @include('partials.profile-card')
                    </div>
                    <div class="col-xl-8">
                        <div class="row g-4">
                            <div class="col-xl-6">
                                <div class="card">
                                    <div class="card-body work-experiance-card">
                                        <h3 class="card-title">Work Experience</h3>
                                        <div class="work-experiance-main">
                                            <ul class="work-experiance-slider list-unstyled">
                                                @foreach(workExperiences() as $workExperience)
                                                    <li>
                                                        <div class="date" style="width: 110px">
                                                            <p>{{$workExperience['date']}}</p>
                                                        </div>
                                                        <div class="info w-100">
                                                            <div class="text">
                                                                <h4 class="title">{{$workExperience['title']}}</h4>
                                                                <h6 class="subtitle">{{$workExperience['subtitle']}}</h6>
                                                            </div>
                                                        </div>
                                                    </li>
                                                @endforeach
                                            </ul>
                                            <ul class="work-experiance-slider list-unstyled">
                                                @foreach(workExperiences() as $workExperience)
                                                    <li>
                                                        <div class="date" style="width: 110px">
                                                            <p>{{$workExperience['date']}}</p>
                                                        </div>
                                                        <div class="info w-100">
                                                            <div class="text">
                                                                <h4 class="title">{{$workExperience['title']}}</h4>
                                                                <h6 class="subtitle">{{$workExperience['subtitle']}}</h6>
                                                            </div>
                                                        </div>
                                                    </li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-6">
                                <div class="card expertise-card">
                                    <div class="card-body">
                                        <h3 class="card-title">My Expert Area</h3>
                                        <div class="expertise-main mt-24">
                                            <div class="row g-3">
                                                @foreach(expertAreas() as $expertArea)
                                                    <div class="col-xl-4 col-md-4 col-sm-6 col-6">
                                                        <div class="expertise-item">
                                                            <div class="image text-center">
                                                                <img src="{{$expertArea['icon']}}" style="width: 40px;"
                                                                     alt="{{str($expertArea['title'])->snake()}}">
                                                            </div>
                                                            <div class="text">
                                                                <h4 class="title">{{$expertArea['title']}}</h4>
                                                            </div>
                                                        </div>
                                                    </div>
                                                @endforeach
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-12">
                                <div class="card services-card">
                                    <div class="card-body">
                                        <h3 class="card-title">Services I Offer</h3>
                                        <div class="services-main mt-24">
                                            <div class="row g-4">
                                                <div class="col-md-3 col-sm-6 col-6">
                                                    <div class="services-item text-center">
                                                        <div class="image">
                                                            <img src="{{asset('assets/img/icons/app.svg')}}" alt="app">
                                                        </div>
                                                        <div class="text">
                                                            <h3 class="title">Mobile App</h3>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-3 col-sm-6 col-6">
                                                    <div class="services-item text-center">
                                                        <div class="image">
                                                            <img src="{{asset('assets/img/icons/prd-design.svg')}}"
                                                                 alt="prd-design">
                                                        </div>
                                                        <div class="text">
                                                            <h3 class="title">Product Design</h3>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-3 col-sm-6 col-6">
                                                    <div class="services-item text-center">
                                                        <div class="image">
                                                            <img src="{{asset('assets/img/icons/web-development.svg')}}"
                                                                 alt="branding">
                                                        </div>
                                                        <div class="text">
                                                            <h3 class="title">Web Application</h3>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-3 col-sm-6 col-6">
                                                    <div class="services-item text-center">
                                                        <div class="image">
                                                            <img src="{{asset('assets/img/icons/branding.svg')}}"
                                                                 alt="branding">
                                                        </div>
                                                        <div class="text">
                                                            <h3 class="title">IT/Networking</h3>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
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
