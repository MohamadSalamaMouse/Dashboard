@extends('layouts.front.app')
@section('title', 'Home')
@section('style')
<style>
    * {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    }





    .slide {
    display: flex;
    align-items: center;
    justify-content: center;
    height: 100%;
    position: relative;
    }

    .item {
    width: 200px;
    height: 300px;
    margin: 0 10px;
    border-radius: 20px;
    box-shadow: 0 30px 50px #505050;
    background-position: 50% 50%;
    background-size: cover;
    display: flex;
    align-items: center;
    justify-content: center;
    transition: 0.5s;
    }

    .item .content {
    text-align: center;
    color: #fff;
    font-family: system-ui;
    display: none; /* Hide content by default */
    }

    .item:nth-child(2) .content {
    display: block; /* Display content for the second item */
    }

    .content .name {
    font-size: 20px;
    text-transform: uppercase;
    font-weight: bold;
    }

    .content .des {
    margin-top: 10px;
    margin-bottom: 20px;
    }

    .content button {
    padding: 10px 20px;
    border: none;
    cursor: pointer;
    background-color: #000;
    color: #fff;
    border-radius: 5px;
    }

    .button {
    width: 100%;
    text-align: center;
    position: absolute;
    bottom: 20px;
    }

    .button button {
    width: 40px;
    height: 35px;
    border-radius: 8px;
    cursor: pointer;
    margin: 0 5px;
    border: 1px solid #000;
    transition: 0.3s;
    }

    .button button:hover {
    background: #ababab;
    color: #fff;
    }

    #overall-man {
    z-index: 100;
    position: absolute;
    width: 200px;
    right: 30%;
    top: 50%;
    }
    </style>

@endsection
@section('content')
    <!-- Content-Section -->
    @if (session()->has('message'))
        <div class="message-container">
            <div class="alert alert-success">
                {{ session()->get('message') }}
            </div>
        </div>
    @endif
    <section class="content-section m-5 p-5 pb-0 mb-0">
        <div class="container">
            <div id="carouselExampleAutoplaying" class="carousel slide d-flex justify-content-center align-items-center"
                data-bs-ride="carousel">
                <div class="carousel-inner">
                    <!-- First carousel item with your existing content -->
                    <div class="carousel-item active">
                        <div style="z-index: 99999" class="row flex-wrap gy-2 align-items-center">
                            <div class="col-md-12 col-sm-12">
                                <div class="content-section__column--primary w-100">
                                    <h1 class="content-section__title ui heading size-heading_1">
                                        We build immersive digital experiences.
                                    </h1>
                                    <div class="content-section__sub-section">
                                        <a class="text-decoration-none text-white" href="#section-projects">
                                            <div class="content-section__column--secondary">
                                                <p class="content-section__button ui text size-btn_text">
                                                    Build Now
                                                </p>
                                                <img src="{{ asset('assets/front_assets/images/img_right_arrow_2.svg') }}"
                                                    alt="right arrow image" class="column__image--right-arrow" />
                                            </div>
                                        </a>
                                        <div class="content-section__column--tertiary">
                                            <div class="content-section__divider"></div>
                                            <div class="content-section__column--quaternary">
                                                <h2 class="content-section__subtitle ui heading size-headingmd">
                                                    Let Us Tell Your Story
                                                </h2>
                                                <p class="content-section__description ui text size-textmd">
                                                    The Creative agency for international and
                                                    local brands
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div style="z-index: 99999" class="row flex-wrap gy-2 align-items-center">
                            <div class="col-md-12 col-sm-12">
                                <div class="content-section__column--primary w-100">
                                    <h1 class="content-section__title ui heading size-heading_1">
                                        We build immersive digital experiences.
                                    </h1>
                                    <div class="content-section__sub-section">
                                        <a class="text-decoration-none text-white" href="#section-projects">
                                            <div class="content-section__column--secondary">
                                                <p class="content-section__button ui text size-btn_text">
                                                    Build Now
                                                </p>
                                                <img src="{{ asset('assets/front_assets/images/img_right_arrow_2.svg') }}"
                                                    alt="right arrow image" class="column__image--right-arrow" />
                                            </div>
                                        </a>
                                        <div class="content-section__column--tertiary">
                                            <div class="content-section__divider"></div>
                                            <div class="content-section__column--quaternary">
                                                <h2 class="content-section__subtitle ui heading size-headingmd">
                                                    Let Us Tell Your Story
                                                </h2>
                                                <p class="content-section__description ui text size-textmd">
                                                    The Creative agency for international and
                                                    local brands
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div style="z-index: 99999" class="row flex-wrap gy-2 align-items-center">
                            <div class="col-md-12 col-sm-12">
                                <div class="content-section__column--primary w-100">
                                    <h1 class="content-section__title ui heading size-heading_1">
                                        We build immersive digital experiences.
                                    </h1>
                                    <div class="content-section__sub-section">
                                        <a class="text-decoration-none text-white" href="#section-projects">
                                            <div class="content-section__column--secondary">
                                                <p class="content-section__button ui text size-btn_text">
                                                    Build Now
                                                </p>
                                                <img src="{{ asset('assets/front_assets/images/img_right_arrow_2.svg') }}"
                                                    alt="right arrow image" class="column__image--right-arrow" />
                                            </div>
                                        </a>
                                        <div class="content-section__column--tertiary">
                                            <div class="content-section__divider"></div>
                                            <div class="content-section__column--quaternary">
                                                <h2 class="content-section__subtitle ui heading size-headingmd">
                                                    Let Us Tell Your Story
                                                </h2>
                                                <p class="content-section__description ui text size-textmd">
                                                    The Creative agency for international and
                                                    local brands
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="d-flex carousel-buttons flex-column">
                    <div>
                        <button style="width: 80px; height: 80px"
                            class="slider-navigation__icon--prev carousel-control-prev" type="button" data-bs-slide="prev"
                            data-bs-target="#carouselExampleAutoplaying">
                            <img src="{{ asset('assets/front_assets/images/img_arrow_left.svg') }}">
                        </button>
                    </div>
                    <br>
                    <div>
                        <button style="width: 80px; height: 80px"
                            class="slider-navigation__icon--next carousel-control-next" type="button" data-bs-slide="next"
                            data-bs-target="#carouselExampleAutoplaying">
                            <img src="{{ asset('assets/front_assets/images/img_arrow_right_blue_gray_100.svg') }}">
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </section>
    </div>
    </div>
    </div>
    <div class="column_one pt-5 mt-5">
        <div class="column_seven">
            <img src="{{ asset('assets/front_assets/images/img_mask_group.png') }}" alt="image" class="image" />
        </div>
        <div class="row_five">
            <div class="row-four">
                {{-- Owl-Carousel-Section --}}
                {{-- @include('front.owl-carousel.index') --}}
            </div>
        </div>
    </div>
    </div>


        <div class="container">
            <div class="slide">

                <div class="item" style="background-image: url(https://i.ibb.co/qCkd9jS/img1.jpg);">
                    <div class="content">
                        <div class="name">Switzerland</div>
                        <div class="des">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ab, eum!</div>
                        <button>See More</button>
                    </div>
                </div>
                <div class="item" style="background-image: url(https://i.ibb.co/jrRb11q/img2.jpg);">
                    <div class="content">
                        <div class="name">Finland</div>
                        <div class="des">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ab, eum!</div>
                        <button>See More</button>
                    </div>
                </div>
                <div class="item" style="background-image: url(https://i.ibb.co/NSwVv8D/img3.jpg);">
                    <div class="content">
                        <div class="name">Iceland</div>
                        <div class="des">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ab, eum!</div>
                        <button>See More</button>
                    </div>
                </div>
                <div class="item" style="background-image: url(https://i.ibb.co/Bq4Q0M8/img4.jpg);">
                    <div class="content">
                        <div class="name">Australia</div>
                        <div class="des">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ab, eum!</div>
                        <button>See More</button>
                    </div>
                </div>
                <div class="item" style="background-image: url(https://i.ibb.co/jTQfmTq/img5.jpg);">
                    <div class="content">
                        <div class="name">Netherland</div>
                        <div class="des">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ab, eum!</div>
                        <button>See More</button>
                    </div>
                </div>
                <div class="item" style="background-image: url(https://i.ibb.co/RNkk6L0/img6.jpg);">
                    <div class="content">
                        <div class="name">Ireland</div>
                        <div class="des">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ab, eum!</div>
                        <button>See More</button>
                    </div>
                </div>
            </div>
            <div class="button">
                <button class="prev"><i class="fa-solid fa-arrow-left"></i></button>
                <button class="next"><i class="fa-solid fa-arrow-right"></i></button>
            </div>
        </div>

    <!-- Section-Projects -->
    @include('front.projects-section.projects')
    <!-- End Section-Projects -->
    <!-- Section-Clients -->
    @include('front.clients-section.clients')
    <!-- End Section-Clients -->
    {{-- Section-Leadership --}}
    @include('front.leaderships.section-leadership')
    {{-- End Section-Leadership --}}
@endsection
