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
                            <div class="card-body portfolio-card">
                                <div class="top-info">
                                    <div class="text">
                                        <h1 class="main-title">Check Out My Latest <span>Projects</span></h1>
                                        <p>I'm here to help if you're searching for a product designer to bring your
                                            idea to life or a
                                            design partner to help take your business to the next level.</p>
                                    </div>
                                </div>
                                <div class="portfolio-area">
                                    <div class="row g-4 parent-container">
                                        <div class="col-lg-12">
                                            @foreach(projects() as $project)
                                                <div class="portfolio-item">
                                                    <div class="image">
                                                        <img src="{{$project['image']}}" alt="project-1"
                                                             class="img-fluid w-100">
                                                        <a href="{{$project['image']}}"
                                                           class="gallery-popup full-image-preview parent-container">
                                                            <svg class="icon" xmlns="http://www.w3.org/2000/svg"
                                                                 viewBox="0 0 20 20" fill="none"
                                                                 stroke="currentColor" stroke-linecap="round"
                                                                 stroke-linejoin="round" stroke-width="1.5">
                                                                <path d="M10 4.167v11.666M4.167 10h11.666"></path>
                                                            </svg>
                                                        </a>
                                                    </div>
                                                    <div class="text">
                                                        <div class="info">
                                                            <a href="javascript:void(0)" class="title">
                                                                {{$project['title']}}
                                                            </a>
                                                            <p class="subtitle">{{$project['subtitle']}}</p>
                                                            @if(!empty($project['description']))
                                                                <p class="description mt-2">{{$project['description']}}</p>
                                                            @endif
                                                            @if(count($project['tags'])>0)
                                                                <div class="common-button-groups">
                                                                    <span>Technologies:</span><br>
                                                                    <div class="d-flex flex-wrap gap-2 mt-2">
                                                                        @foreach($project['tags'] as $tag)
                                                                            <a class="btn bg-white btn-outline-dark text-black px-2 py-0 me-0"
                                                                               style="border-color: var(--border)">
                                                                                {!! getTagIcon($tag) !!}
                                                                                <small>{{$tag}}</small>
                                                                            </a>
                                                                        @endforeach
                                                                    </div>
                                                                </div>
                                                            @endif
                                                        </div>
                                                        @if(!empty($project['url']))
                                                            <div class="visite-btn flex-shrink-0">
                                                                <a href="{{$project['url']}}" target="_blank">Visit Site
                                                                    <svg class="arrow-up" width="14" height="15"
                                                                         viewBox="0 0 14 15" fill="none"
                                                                         xmlns="http://www.w3.org/2000/svg">
                                                                        <path d="M9.91634 4.5835L4.08301 10.4168"
                                                                              stroke-linecap="round"
                                                                              stroke-linejoin="round"></path>
                                                                        <path d="M4.66699 4.5835H9.91699V9.8335"
                                                                              stroke-linecap="round"
                                                                              stroke-linejoin="round"></path>
                                                                    </svg>
                                                                </a>
                                                            </div>
                                                        @endif
                                                    </div>
                                                </div>
                                            @endforeach
                                        </div>
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
