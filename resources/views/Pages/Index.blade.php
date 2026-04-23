@extends('Layouts.App')

@section('title', 'Premier Property Consultancy in Kolkata - 360 Properties Hub')
@section('meta_description', 'Leading property consultancy in Kolkata offering legal compliance, RERA support, investment advisory, tax planning, and comprehensive real estate services across West Bengal, India.')
@section('meta_keywords', 'property consultancy Kolkata, real estate advisory West Bengal, property legal services Kolkata, RERA compliance Bengal, property investment Kolkata, tax advisory West Bengal, property consultants Kolkata')
@section('canonical_url', url()->current())
@section('og_title', 'Premier Property Consultancy in Kolkata - 360 Properties Hub')
@section('og_description', 'Expert property consultancy services in Kolkata - Legal compliance, investment advisory, tax planning, and comprehensive real estate solutions across West Bengal.')
@section('og_image', asset('assets/images/home-hero.jpg'))

@section('content')

<!-- start: Hero Section -->
<section class="tj-hero-section-four">
    <div class="container">
        <div class="row">
            <div class="hero-wrapper-three">
                <div class="hero-content-area">
                    <div class="hero-content-three">
                        <h2 class="hero-title text-anim">Complete Property Compliance —
                            <span class="pb-3">From Due Diligence to Development</span>
                        </h2>
                        <div class="desc wow fadeInUp" data-wow-delay="0.1s">
                            <p>We offer complete property compliance and licensing solutions—from due diligence to development and dispute resolution—through coordinated engagement with HIDCO, UD, WEBEL, NKDA, NDITA, KMC, and other statutory authorities across India, ensuring smooth and legally compliant operations.</p>
                        </div>
                        <div class="btn-area wow fadeInUp" data-wow-delay="0.3s">
                            <a href="{{ route('about') }}" class="tj-primary-btn hero-button">
                                <div class="btn_inner">
                                    <div class="btn_icon">
                                    <span>
                                       <i class="tji-arrow-right"></i>
                                       <i class="tji-arrow-right"></i>
                                    </span>
                                    </div>
                                    <div class="btn_text">
                                        <span>About Us</span>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <span class="shape-1 zoominout">
                           <img src="{{ asset('assets/images/shapes/h4-hero-shape-2.svg') }}" alt="Shapes">
                        </span>
                    </div>
                    <div class="hero-funfact d-lg-flex d-none" data-bg-image="assets/images/hero/h4-hero-2.webp">
                        <div class="counter-item">
                            <div class="number"><span class="odometer" data-count="98">0</span>%</div>
                            <span class="sub-title">Success Rate</span>
                        </div>
                        <div class="counter-item">
                            <div class="number"><span class="odometer" data-count="3">0</span>K+</div>
                            <span class="sub-title">Clients Served</span>
                        </div>
                        <div class="circle-wrap-item">
                            <div class="circle-wrap">
                                <img class="rotate-image" src="{{ asset('assets/images/shapes/h4-circle.webp') }}" alt="image">
                                <a class="circle" href="{{ route('services') }}">
                                    <i class="tji-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="hero-images-box-three wow fadeInRight" data-wow-delay="0.3s">
                    <img src="{{ asset('assets/images/hero/h4-hero.jpg') }}" alt="Images">
                </div>
                <div class="hero-funfact d-lg-none" data-bg-image="{{ asset('assets/images/hero/h4-hero-2.webp') }}">
                    <div class="counter-item">
                        <div class="number"><span class="odometer" data-count="8">0</span>.5x</div>
                        <span class="sub-title">Faster growth</span>
                    </div>
                    <div class="counter-item">
                        <div class="number"><span class="odometer" data-count="20">0</span>M</div>
                        <span class="sub-title">Reach worldwide</span>
                    </div>
                    <div class="circle-wrap-item">
                        <div class="circle-wrap">
                            <img class="rotate-image" src="{{ asset('assets/images/shapes/h4-circle.webp') }}" alt="image">
                            <a class="circle" href="{{ route('services') }}">
                                <i class="tji-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="hero-three-bg" data-bg-image="{{ asset('assets/images/hero/h4-hero-bg.webp') }} "></div>
</section>
<!-- end: Hero Section -->

<!-- start: Brand Section -->
<section class="tj-brand-section">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <p class="text-white">Trusted by 3000+ companies, who wrote success stories with us </p>
                <div class="tj-brand-slider">
                    <div class="swiper brand-slider-1 swiper-container">
                        <div class="swiper-wrapper brand_wrapper">
                            <div class="swiper-slide">
                                <div class="brand-logo">
                                    <img src="{{ asset('assets/images/brand/brand-thumb-1.png') }}" alt="Brand">
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="brand-logo">
                                    <img src="{{ asset('assets/images/brand/brand-thumb-2.png') }}" alt="Brand">
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="brand-logo">
                                    <img src="{{ asset('assets/images/brand/brand-thumb-3.png') }}" alt="Brand">
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="brand-logo">
                                    <img src="{{ asset('assets/images/brand/brand-thumb-4.png') }}" alt="Brand">
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="brand-logo">
                                    <img src="{{ asset('assets/images/brand/brand-thumb-5.png') }}" alt="Brand">
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="brand-logo">
                                    <img src="{{ asset('assets/images/brand/brand-thumb-6.png') }}" alt="Brand">
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="brand-logo">
                                    <img src="{{ asset('assets/images/brand/brand-thumb-7.png') }}" alt="Brand">
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="brand-logo">
                                    <img src="{{ asset('assets/images/brand/brand-thumb-8.png') }}" alt="Brand">
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="brand-logo">
                                    <img src="{{ asset('assets/images/brand/brand-thumb-9.png') }}" alt="Brand">
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="brand-logo">
                                    <img src="{{ asset('assets/images/brand/brand-thumb-10.png') }}" alt="Brand">
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="brand-logo">
                                    <img src="{{ asset('assets/images/brand/brand-thumb-11.png') }}" alt="Brand">
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="brand-logo">
                                    <img src="{{ asset('assets/images/brand/brand-thumb-12.png') }}" alt="Brand">
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="brand-logo">
                                    <img src="{{ asset('assets/images/brand/brand-thumb-13.png') }}" alt="Brand">
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="brand-logo">
                                    <img src="{{ asset('assets/images/brand/brand-thumb-13.png') }}" alt="Brand">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- end: Brand Section -->

<!-- start: Feature Section -->
<section class="tj-feature-section with-shape" id="scroll-hero">
    <div class="tj-feature-section-wrap section-space">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="sec-heading text-center">
                        <span class="sub-title wow fadeInUp" data-wow-delay="0.1s">TRUSTED PROPERTY LEGAL PARTNER</span>
                        <h2 class="sec-title text-anim">Explore our core Expertise</h2>
                        <div class="desc wow fadeInUp" data-wow-delay="0.3s">
                            <p>Our mission is to simplify property transactions through reliable legal, compliance, and regulatory solutions.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row rg-30 ">
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="feature-item hover-bg">
                        <div class="feature-icon svg-animate">
                            <svg width="81" height="81" viewbox="0 0 81 81" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path stroke="currentcolor" stroke-width="1.01408" d="M5.00704 5.00704 L75.99294 5.00704 L75.99294 75.99294 L5.00704 75.99294 Z" class="bQDqtfGb_0"></path>
                                <path d="M29.8525 5.00684H75.9932V51.1475C75.9932 64.869 64.869 75.9932 51.1475 75.9932H5.00684V29.8525C5.00684 16.131 16.131 5.00684 29.8525 5.00684Z" stroke="currentcolor" stroke-width="1.01408" class="bQDqtfGb_1"></path>
                                <path transform="rotate(-90 21.2258 43.0137)" stroke="currentcolor" stroke-width="1.01408" d="M21.2258 43.0137 L41.9925 43.0137 L41.9925 63.7804 L21.2258 63.7804 Z" class="bQDqtfGb_2"></path>
                                <path transform="rotate(-90 29.6067 51.3907)" stroke="currentcolor" stroke-width="1.01408" d="M29.6067 51.3907 L50.373400000000004 51.3907 L50.373400000000004 72.1574 L29.6067 72.1574 Z" class="bQDqtfGb_3"></path>
                                <path transform="rotate(-90 37.9875 59.7679)" stroke="currentcolor" stroke-width="1.01408" d="M37.9875 59.7679 L58.7542 59.7679 L58.7542 80.5346 L37.9875 80.5346 Z" class="bQDqtfGb_4"></path>
                                <style data-made-with="vivus-instant">
                                    .bQDqtfGb_0 {
                                        stroke-dasharray: 284 286;
                                        stroke-dashoffset: 285;
                                        animation: bQDqtfGb_draw 2000ms ease-in-out 0ms forwards;
                                    }

                                    .bQDqtfGb_1 {
                                        stroke-dasharray: 263 265;
                                        stroke-dashoffset: 264;
                                        animation: bQDqtfGb_draw 2000ms ease-in-out 250ms forwards;
                                    }

                                    .bQDqtfGb_2 {
                                        stroke-dasharray: 84 86;
                                        stroke-dashoffset: 85;
                                        animation: bQDqtfGb_draw 2000ms ease-in-out 500ms forwards;
                                    }

                                    .bQDqtfGb_3 {
                                        stroke-dasharray: 84 86;
                                        stroke-dashoffset: 85;
                                        animation: bQDqtfGb_draw 2000ms ease-in-out 750ms forwards;
                                    }

                                    .bQDqtfGb_4 {
                                        stroke-dasharray: 84 86;
                                        stroke-dashoffset: 85;
                                        animation: bQDqtfGb_draw 2000ms ease-in-out 1000ms forwards;
                                    }

                                    @keyframes bQDqtfGb_draw {
                                        100% {
                                            stroke-dashoffset: 0;
                                        }
                                    }

                                    @keyframes bQDqtfGb_fade {
                                        0% {
                                            stroke-opacity: 1;
                                        }

                                        94.44444444444444% {
                                            stroke-opacity: 1;
                                        }

                                        100% {
                                            stroke-opacity: 0;
                                        }
                                    }
                                </style>
                            </svg>

                        </div>
                        <div class="feature-content">
                            <h5 class="title">Property Law Expertise</h5>
                            <div class="desc">
                                <p>We deliver end-to-end legal and compliance solutions backed by deep expertise in Indian real estate laws and a proven record of successful cases—ensuring every transaction is secure, transparent, and risk-free.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="feature-item hover-bg">
                        <div class="feature-icon svg-animate">
                            <svg width="80" height="81" viewbox="0 0 80 81" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M55.9566 12.5783L48.228 7.7002L40.0008 2.9502L7.0918 21.9502V59.9502L40.0008 78.9502L72.9097 59.9502V21.9502L64.6825 17.2002L60.5689 14.8252" stroke="currentcolor" stroke-width="0.997241" class="GZoqilTp_0"></path>
                                <path d="M29.9767 66.0692L33.319 67.9975L40.0037 71.854L66.7422 56.4279V25.5758L40.0037 10.1497L13.2651 25.5758V56.4279L19.9498 60.2844L25.5437 63.4383" stroke="currentcolor" stroke-width="0.997241" class="GZoqilTp_1"></path>
                                <path d="M45.2607 37.9136V43.9868L40.001 47.022L34.7432 43.9868V37.9136L40.001 34.8774L45.2607 37.9136Z" stroke="currentcolor" stroke-width="0.997241" class="GZoqilTp_2"></path>
                                <path d="M40.0009 38.4575L42.16 39.7041V42.1972L40.0009 43.4437L37.8418 42.1972V39.7041L40.0009 38.4575Z" fill="currentcolor" class="GZoqilTp_3"></path>
                                <path stroke="currentcolor" stroke-width="0.997241" d="M39.5053,35.1326L39.5053,21.005" class="GZoqilTp_4"></path>
                                <path stroke="currentcolor" stroke-width="0.997241" d="M45.8203,40.4516L59.9479,40.4516" class="GZoqilTp_5"></path>
                                <path stroke="currentcolor" stroke-width="0.997241" d="M20.0527,40.4516L34.1803,40.4516" class="GZoqilTp_6"></path>
                                <path stroke="currentcolor" stroke-width="0.997241" d="M40.3295,60.895L40.3295,46.7674" class="GZoqilTp_7"></path>
                                <style data-made-with="vivus-instant">
                                    .GZoqilTp_0 {
                                        stroke-dasharray: 223 225;
                                        stroke-dashoffset: 224;
                                        animation: GZoqilTp_draw 2000ms ease-in-out 0ms forwards;
                                    }

                                    .GZoqilTp_1 {
                                        stroke-dasharray: 181 183;
                                        stroke-dashoffset: 182;
                                        animation: GZoqilTp_draw 2000ms ease-in-out 142ms forwards;
                                    }

                                    .GZoqilTp_2 {
                                        stroke-dasharray: 37 39;
                                        stroke-dashoffset: 38;
                                        animation: GZoqilTp_draw 2000ms ease-in-out 285ms forwards;
                                    }

                                    .GZoqilTp_3 {
                                        stroke-dasharray: 15 17;
                                        stroke-dashoffset: 16;
                                        animation: GZoqilTp_draw 2000ms ease-in-out 428ms forwards;
                                    }

                                    .GZoqilTp_4 {
                                        stroke-dasharray: 15 17;
                                        stroke-dashoffset: 16;
                                        animation: GZoqilTp_draw 2000ms ease-in-out 571ms forwards;
                                    }

                                    .GZoqilTp_5 {
                                        stroke-dasharray: 15 17;
                                        stroke-dashoffset: 16;
                                        animation: GZoqilTp_draw 2000ms ease-in-out 714ms forwards;
                                    }

                                    .GZoqilTp_6 {
                                        stroke-dasharray: 15 17;
                                        stroke-dashoffset: 16;
                                        animation: GZoqilTp_draw 2000ms ease-in-out 857ms forwards;
                                    }

                                    .GZoqilTp_7 {
                                        stroke-dasharray: 15 17;
                                        stroke-dashoffset: 16;
                                        animation: GZoqilTp_draw 2000ms ease-in-out 1000ms forwards;
                                    }

                                    @keyframes GZoqilTp_draw {
                                        100% {
                                            stroke-dashoffset: 0;
                                        }
                                    }

                                    @keyframes GZoqilTp_fade {
                                        0% {
                                            stroke-opacity: 1;
                                        }

                                        94.44444444444444% {
                                            stroke-opacity: 1;
                                        }

                                        100% {
                                            stroke-opacity: 0;
                                        }
                                    }
                                </style>
                            </svg>

                        </div>
                        <div class="feature-content">
                            <h5 class="title">Government Liaison Network</h5>
                            <div class="desc">
                                <p>Our strong relationships with key government and regulatory authorities help fast-track approvals, resolve compliance challenges, and secure critical clearances with minimal delays.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="feature-item hover-bg">
                        <div class="feature-icon svg-animate">
                            <svg width="80" height="81" viewbox="0 0 80 81" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path stroke="currentcolor" d="M 40.5,5.5 L 40.5,5.5 A 35,35,0,0,1,75.5,40.5 L 75.5,40.5 A 35,35,0,0,1,40.5,75.5 L 40.5,75.5 A 35,35,0,0,1,5.5,40.5 L 5.5,40.5 A 35,35,0,0,1,40.5,5.5" class="GAqZQeDS_0"></path>
                                <path stroke="currentcolor" d="M 40.5,13.5 L 40.5,13.5 A 27,27,0,0,1,67.5,40.5 L 67.5,40.5 A 27,27,0,0,1,40.5,67.5 L 40.5,67.5 A 27,27,0,0,1,13.5,40.5 L 13.5,40.5 A 27,27,0,0,1,40.5,13.5" class="GAqZQeDS_1"></path>
                                <path stroke="currentcolor" d="M 40.5,22.5 L 40.5,22.5 A 18,18,0,0,1,58.5,40.5 L 58.5,40.5 A 18,18,0,0,1,40.5,58.5 L 40.5,58.5 A 18,18,0,0,1,22.5,40.5 L 22.5,40.5 A 18,18,0,0,1,40.5,22.5" class="GAqZQeDS_2"></path>
                                <path stroke="currentcolor" d="M 40.5,37.5 L 40.5,37.5 A 19,19,0,0,1,59.5,56.5 L 59.5,56.5 A 19,19,0,0,1,40.5,75.5 L 40.5,75.5 A 19,19,0,0,1,21.5,56.5 L 21.5,56.5 A 19,19,0,0,1,40.5,37.5" class="GAqZQeDS_3"></path>
                                <style data-made-with="vivus-instant">
                                    .GAqZQeDS_0 {
                                        stroke-dasharray: 220 222;
                                        stroke-dashoffset: 221;
                                        animation: GAqZQeDS_draw 2000ms ease-in-out 0ms forwards;
                                    }

                                    .GAqZQeDS_1 {
                                        stroke-dasharray: 170 172;
                                        stroke-dashoffset: 171;
                                        animation: GAqZQeDS_draw 2000ms ease-in-out 333ms forwards;
                                    }

                                    .GAqZQeDS_2 {
                                        stroke-dasharray: 114 116;
                                        stroke-dashoffset: 115;
                                        animation: GAqZQeDS_draw 2000ms ease-in-out 666ms forwards;
                                    }

                                    .GAqZQeDS_3 {
                                        stroke-dasharray: 120 122;
                                        stroke-dashoffset: 121;
                                        animation: GAqZQeDS_draw 2000ms ease-in-out 1000ms forwards;
                                    }

                                    @keyframes GAqZQeDS_draw {
                                        100% {
                                            stroke-dashoffset: 0;
                                        }
                                    }

                                    @keyframes GAqZQeDS_fade {
                                        0% {
                                            stroke-opacity: 1;
                                        }

                                        94.44444444444444% {
                                            stroke-opacity: 1;
                                        }

                                        100% {
                                            stroke-opacity: 0;
                                        }
                                    }
                                </style>
                            </svg>

                        </div>
                        <div class="feature-content">
                            <h5 class="title">NRI & Domestic Experience</h5>
                            <div class="desc">
                                <p>Experienced in NRI and domestic property transactions, FEMA compliance, and regulatory processes—delivering seamless, hassle-free outcomes.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="feature-item hover-bg">
                        <div class="feature-icon svg-animate">
                            <svg width="80" height="81" viewbox="0 0 80 81" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M64 10L77.5 39L64 70.5H35L48.5 39L35 10H14.5L2 39L14.5 70.5H25" stroke="currentcolor" class="idsUcHxq_0"></path>
                                <path d="M32 39.1488L27.9355 48H21.7634L18 39.1488L21.7634 31H27.9355L32 39.1488Z" stroke="currentcolor" class="idsUcHxq_1"></path>
                                <path d="M54.7559 39.4811L63.9362 39.4361L49.9626 70.6671" stroke="currentcolor" class="idsUcHxq_2"></path>
                                <style data-made-with="vivus-instant">
                                    .idsUcHxq_0 {
                                        stroke-dasharray: 258 260;
                                        stroke-dashoffset: 259;
                                        animation: idsUcHxq_draw 2000ms ease-in-out 0ms forwards;
                                    }

                                    .idsUcHxq_1 {
                                        stroke-dasharray: 50 52;
                                        stroke-dashoffset: 51;
                                        animation: idsUcHxq_draw 2000ms ease-in-out 500ms forwards;
                                    }

                                    .idsUcHxq_2 {
                                        stroke-dasharray: 44 46;
                                        stroke-dashoffset: 45;
                                        animation: idsUcHxq_draw 2000ms ease-in-out 1000ms forwards;
                                    }

                                    @keyframes idsUcHxq_draw {
                                        100% {
                                            stroke-dashoffset: 0;
                                        }
                                    }

                                    @keyframes idsUcHxq_fade {
                                        0% {
                                            stroke-opacity: 1;
                                        }

                                        94.44444444444444% {
                                            stroke-opacity: 1;
                                        }

                                        100% {
                                            stroke-opacity: 0;
                                        }
                                    }
                                </style>
                            </svg>

                        </div>
                        <div class="feature-content">
                            <h5 class="title">Dispute Resolution Expertise</h5>
                            <div class="desc">
                                <p>We handle property disputes, title conflicts, and litigation matters with strategic precision, protecting client interests while minimizing financial and legal risk.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- end: Feature Section -->

<!-- start: About Section -->
<section class="tj-about-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-6"></div>
            <div class="col-lg-6">
                <div class="about-left-content">
                    <div class="sec-heading">
                        <span class="sub-title wow fadeInUp" data-wow-delay="0.1s">India's Premier Property Legal Firm</span>
                        <h3 class="sec-title text-anim">360 Properties Hub - Transforming Property Legal Services Across India</h3>
                        <div class="desc wow fadeInUp" data-wow-delay="0.3s">
                            <p>Headquartered in Sector V, Kolkata, 360 Properties Hub provides comprehensive property legal, regulatory, and compliance services across India. We assist individuals, NRIs, developers, and corporate clients with end-to-end solutions—ranging from title due diligence and statutory approvals to development compliance and dispute resolution.</p>
                            <p>Our team has extensive experience working with authorities such as HIDCO, NKDA, WEBEL, NDITA, KMC, and other regulatory bodies, ensuring smooth approvals and legally secure property transactions. With a practical, solution-oriented approach, we help clients navigate complex property laws while minimizing risk and delays.</p>
                        </div>
                    </div>
                    <div class="about-feature-item wow fadeInUp" data-wow-delay="0.5s">
                        <div class="feature-box">
                            <div class="feature-left">
                                <div class="check-list-one">
                                    <ul>
                                        <li><i class="tji-double-check"></i>Served over 3k+ clients for commercial, and development projects</li>
                                        <li><i class="tji-double-check"></i>Strong regulatory and government liaison expertise</li>
                                        <li><i class="tji-double-check"></i>Technology-enabled processes for faster compliance and approvals</li>
                                        <li><i class="tji-double-check"></i>Pan-India service delivery with deep local market understanding</li>
                                        <li><i class="tji-double-check"></i>Dedicated legal support for NRI property investments</li>
                                    </ul>
                                </div>
                                <div class="about-button">
                                    <a href="{{ route ('about') }}" class="tj-primary-btn">
                                        <div class="btn_inner">
                                            <div class="btn_icon">
                                                <span>
                                                    <i class="tji-arrow-right"></i>
                                                    <i class="tji-arrow-right"></i>
                                                </span>
                                            </div>
                                            <div class="btn_text">
                                                <span>Discover Our Expertise</span>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="about-bg-images">
        <div class="about-shape-1 hover:shine">
            <img src="{{ asset('assets/images/about/h2-shape-1.png') }}" alt="Shapes">
        </div>
        <div class="about-shape-2 hover:shine">
            <img src="{{ asset('assets/images/about/h2-shape-2.png') }}" alt="Shapes">
        </div>
        <div class="about-shape-3 zoominout">
            <img src="{{ asset('assets/images/icons/star.svg') }}" alt="Shapes">
        </div>
    </div>
</section>
<!-- end: About Section -->

<!-- start: Service Section -->
<section class="h6-project-section section-space tj-service-section">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="sec-heading">
                    <div class="sec-text">
                        <span class="sub-title wow fadeInUp" data-wow-delay="0.1s">India's Most Trusted Property Legal Services</span>
                        <h3 class="sec-title text-anim">Our Premium Legal Solutions That Drive Success</h3>
                    </div>
                    <div class="service-rating wow fadeInRight" data-wow-delay="0.1s">
                        <div class="star-fill">
                            <div class="star-ratings">
                                <div class="fill-ratings" style="width: 96%">
                                    <span>★★★★★</span>
                                </div>
                                <div class="empty-ratings">
                                    <span>★★★★★</span>
                                </div>
                            </div>
                        </div>
                        <div class="review">Client Satisfaction (<strong>4.8</strong>/5.0)</div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <div class="h6-project-wrap">
                    <div class="h6-project-item project-stack">
                        <div class="project_image">
                            <img src="{{ asset('assets/images/service/h1-service-1.png') }}" alt="service-image">
                        </div>
                        <div class="project_content">
                            <div class="project_content_inner">
                                <span class="no">01.</span>
                                <h3 class="title"><a href="{{ route('property-dispute') }}">Salt Lake Lease Violation & Government Notices</a></h3>
                                <div class="desc">We provide expert assistance in handling lease violation notices issued by government authorities in Salt Lake. Our services include legal analysis, compliance rectification, documentation, representation before authorities, and resolution strategies to minimize penalties and restore lease compliance efficiently.</div>

                                <a class="icon-btn project_btn" href="{{ route('property-dispute') }}">
                                    <i class="tji-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="h6-project-item project-stack">
                        <div class="project_image">
                            <img src="{{ asset('assets/images/service/h1-service-2.png') }}" alt="service-image">
                        </div>
                        <div class="project_content">
                            <div class="project_content_inner">
                                <span class="no">02.</span>
                                <h3 class="title"><a href="{{ route('dpr') }}">DPR Preparation (IT & ITES – WEBEL / UD)</a></h3>
                                <div class="desc">Our team specializes in preparing Detailed Project Reports (DPRs) for IT and ITES projects as per WEBEL and Urban Development (UD) guidelines. We ensure technical accuracy, regulatory alignment, and timely submission to support approvals, incentives, and project clearances.</div>

                                <a class="icon-btn project_btn" href="{{ route('dpr') }}">
                                    <i class="tji-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="h6-project-item project-stack">
                        <div class="project_image">
                            <img src="{{ asset('assets/images/service/h1-service-3.png') }}" alt="service-image">
                        </div>
                        <div class="project_content">
                            <div class="project_content_inner">
                                <span class="no">03.</span>
                                <h3 class="title"><a href="{{ route('property-diligence') }}">Land Use / CLU Approval</a></h3>
                                <div class="desc">We offer end-to-end support for Change of Land Use (CLU) approvals, including feasibility assessment, documentation, authority coordination, and compliance management. Our structured approach ensures lawful land-use conversion with minimal delays and regulatory risk.</div>

                                <a class="icon-btn project_btn" href="{{ route('property-diligence') }}">
                                    <i class="tji-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="h6-project-item project-stack">
                        <div class="project_image">
                            <img src="{{ asset('assets/images/service/h1-service-4.png') }}" alt="service-image">
                        </div>
                        <div class="project_content">
                            <div class="project_content_inner">
                                <span class="no">04.</span>
                                <h3 class="title"><a href="{{ route ('hidco') }}">HIDCO Freehold Conversion</a></h3>
                                <div class="desc">We assist leasehold property owners with seamless HIDCO freehold conversion services. From eligibility checks and documentation to authority liaison and final approvals, we ensure a smooth transition from leasehold to freehold ownership in accordance with HIDCO regulations.</div>

                                <a class="icon-btn project_btn" href="{{ route ('hidco') }}">
                                    <i class="tji-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="h6-project-item project-stack">
                        <div class="project_image">
                            <img src="{{ asset('assets/images/service/h1-service-5.png') }}" alt="service-image">
                        </div>
                        <div class="project_content">
                            <div class="project_content_inner">
                                <span class="no">05.</span>
                                <h3 class="title"><a href="{{ route('property-tax') }}">Property Tax Assessment & Mutation</a></h3>
                                <div class="desc">Our services cover property tax assessment, reassessment, and mutation processes with local municipal authorities. We handle documentation, valuation coordination, and procedural compliance to ensure accurate tax records and lawful ownership recognition.</div>

                                <a class="icon-btn project_btn" href="{{ route('property-tax') }}">
                                    <i class="tji-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="h6-project-item project-stack">
                        <div class="project_image">
                            <img src="{{ asset('assets/images/service/h1-service-6.png') }}" alt="service-image">
                        </div>
                        <div class="project_content">
                            <div class="project_content_inner">
                                <span class="no">06.</span>
                                <h3 class="title"><a href="{{ route('property-tax') }}">IT / ITES Property Tax Rebate</a></h3>
                                <div class="desc">We help eligible IT and ITES establishments secure applicable property tax rebates through proper application filing, documentation, and compliance verification. Our team ensures adherence to government norms while maximizing available tax benefits.</div>

                                <a class="icon-btn project_btn" href="{{ route('property-tax') }}">
                                    <i class="tji-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="h6-project-item project-stack">
                        <div class="project_image">
                            <img src="{{ asset('assets/images/service/h1-service-5.png') }}" alt="service-image">
                        </div>
                        <div class="project_content">
                            <div class="project_content_inner">
                                <span class="no">07.</span>
                                <h3 class="title"><a href="{{ route('building-plan') }}">Building Plan Approval (NKDA / NDITA)</a></h3>
                                <div class="desc">We provide comprehensive support for building plan approvals from NKDA and NDITA authorities. Our services include plan scrutiny, regulatory compliance checks, authority coordination, and approval follow-ups to ensure legally sanctioned construction.</div>

                                <a class="icon-btn project_btn" href="{{ route('building-plan') }}">
                                    <i class="tji-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="h6-project-item project-stack">
                        <div class="project_image">
                            <img src="{{ asset('assets/images/service/h1-service-8.png') }}" alt="service-image">
                        </div>
                        <div class="project_content">
                            <div class="project_content_inner">
                                <span class="no">08.</span>
                                <h3 class="title"><a href="{{ route('fire-noc') }}">Fire NOC Services</a></h3>
                                <div class="desc">Our end-to-end Fire NOC services cover application, compliance assessment, system coordination, documentation, renewals, and authority inspections. We ensure that residential, commercial, and industrial properties meet all fire safety regulations for uninterrupted operations and statutory compliance.</div>

                                <a class="icon-btn project_btn" href="{{ route('fire-noc') }}">
                                    <i class="tji-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="h6-project-item project-stack">
                        <div class="project_image">
                            <img src="{{ asset('assets/images/service/h1-service-6.png') }}" alt="service-image">
                        </div>
                        <div class="project_content">
                            <div class="project_content_inner">
                                <span class="no">09.</span>
                                <h3 class="title"><a href="{{ route('webel') }}">Lease Transfer / Assignment (WEBEL & UD)</a></h3>
                                <div class="desc">We manage lease transfer and assignment processes under WEBEL and Urban Development authorities. Our services include eligibility assessment, documentation, authority liaison, and approval coordination to ensure legally valid and transparent lease transfers.</div>

                                <a class="icon-btn project_btn" href="{{ route('webel') }}">
                                    <i class="tji-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="h6-project-item">
                        <div class="project_image">
                            <img src="{{ asset('assets/images/service/h1-service-1.png') }}" alt="service-image">
                        </div>
                        <div class="project_content">
                            <div class="project_content_inner">
                                <span class="no">10.</span>
                                <h3 class="title"><a href="{{route('government-liaison') }}">Commercial Use / Subletting Permission</a>
                                </h3>
                                <div class="desc">We assist property owners and lessees in obtaining approvals for commercial use and subletting permissions. Our team ensures compliance with lease conditions, zoning regulations, and authority requirements to avoid violations and legal exposure.</div>

                                <a class="icon-btn project_btn" href="{{route('government-liaison') }}">
                                    <i class="tji-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- end: Service Section -->

<!-- start: Why Choose Us Section -->
<section class="tj-about-section-five h9-about">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="about-wrapper-four h9-about-wrapper">
                    <div class="about-images-group-three hover:shine wow fadeInUp" data-wow-delay="0.3s">
                        <img src="{{ asset('assets/images/about/h9-about-banner.png') }}" alt="Images">
                    </div>
                    <div class="about-content-five h9-about-content">
                        <div class="sec-heading h9-section-heading style-4">
                            <span class="sub-title wow fadeInUp" data-wow-delay="0.3s">[ WHY CHOOSE 360 PROPERTIES HUB ]</span>
                            <h2 class="sec-title text-anim">Transforming Property Legal Challenges Into Strategic Success</h2>
                        </div>
                        <div class="desc wow fadeInUp" data-wow-delay="0.4s">
                            <p>We support property owners, investors, NRIs, and developers across India with comprehensive legal, compliance, and regulatory solutions. From complex HIDCO approvals and land-use clearances to structured NRI property investments, our expertise helps clients navigate India’s evolving property laws with clarity and confidence.</p>
                            <p>With deep regulatory knowledge and hands-on experience across high-value real estate projects, we focus on reducing legal risk, accelerating approvals, and ensuring long-term compliance—so your property decisions are secure, transparent, and future-ready.</p>
                        </div>

                        <div class="h9-about-list wow fadeInUp" data-wow-delay="0.5s">
                            <div class="h9-about-list-item">
                                <h5 class="h9-about-list-title">Compliance Mastery</h5>
                                <p class="h9-about-list-desc">Expert navigation across HIDCO, NKDA, WEBEL, and NDITA authorities with proven success rates</p>
                            </div>
                            <div class="h9-about-list-item">
                                <h5 class="h9-about-list-title">Fortune 3K+ Client Trust</h5>
                                <p class="h9-about-list-desc">Trusted legal partner for premium developers and corporate giants across India's property sector</p>
                            </div>
                        </div>
                        <div class="btn-area wow fadeInUp" data-wow-delay="0.6s">
                            <a href="#" class="tj-primary-btn hero-button">
                                <div class="btn_inner">
                                    <div class="btn_icon">
                                        <span>
                                            <i class="tji-arrow-right"></i>
                                            <i class="tji-arrow-right"></i>
                                        </span>
                                    </div>
                                    <div class="btn_text">
                                        <span>Contact With Our Experts</span>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 pt-4">
                <div class="h9-about-bottom">
                    <div class="h9-about-bottom-left ">
                        <div class="h9-counter-wrapper">
                            <div class="h9-counter-item">
                                <div class="number"><span class="odometer" data-count="98">0</span>%</div>
                                <span class="sub-title">Legal compliance success rate across all authorities</span>
                            </div>
                            <div class="h9-counter-item">
                                <div class="number"><span class="odometer" data-count="3">0</span>K<sup>+</sup></div>
                                <span class="sub-title">Satisfied clients including Fortune 500 companies</span>
                            </div>
                            <div class="h9-counter-item">
                                <div class="number"><span class="odometer" data-count="15">0</span>+</div>
                                <span class="sub-title">Years of specialized property legal expertise</span>
                            </div>
                        </div>
                    </div>
                    <div class="about-statistics h9-about-statistics wow fadeInUp" data-wow-delay=".9s">
                        <img src="{{ asset('assets/images/about/h9-funfact-banner.png') }}" alt="Images">
                        <div class="about-circle h7-process-circle h9-about-circle">
                            <div class="circle-wrap">
                                <img class="rotate-image" src="{{ asset('assets/images/shapes/h9-about-circle.png') }}" alt="image">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- end: Why Choose Us Section -->

<!-- start: Marquee Section -->
<section class="tj-marquee-section">
    <div class="marquee-slider-wrapper">
        <div class="swiper marquee-slider">
            <div class="swiper-wrapper marquee-wrapper">
                <div class="swiper-slide marquee-item">
                    <div class="marquee-title">
                        <h3 class="text">Expert Legal Solutions</h3>
                    </div>
                    <div class="marquee-icons">
                        <img src="{{ asset('assets/images/icons/marquee-icon.png') }}" alt="Icons">
                    </div>
                </div>
                <div class="swiper-slide marquee-item">
                    <div class="marquee-title">
                        <h3 class="text">Regulatory Compliance Masters</h3>
                    </div>
                    <div class="marquee-icons">
                        <img src="{{ asset('assets/images/icons/marquee-icon.png') }}" alt="Icons">
                    </div>
                </div>
                <div class="swiper-slide marquee-item">
                    <div class="marquee-title">
                        <h3 class="text">Fortune 500 Trusted</h3>
                    </div>
                    <div class="marquee-icons">
                        <img src="{{ asset('assets/images/icons/marquee-icon.png') }}" alt="Icons">
                    </div>
                </div>
                <div class="swiper-slide marquee-item">
                    <div class="marquee-title">
                        <h3 class="text">HIDCO NKDA Specialists</h3>
                    </div>
                    <div class="marquee-icons">
                        <img src="{{ asset('assets/images/icons/marquee-icon.png') }}" alt="Icons">
                    </div>
                </div>
                <div class="swiper-slide marquee-item">
                    <div class="marquee-title">
                        <h3 class="text">NRI Property Experts</h3>
                    </div>
                    <div class="marquee-icons">
                        <img src="{{ asset('assets/images/icons/marquee-icon.png') }}" alt="Icons">
                    </div>
                </div>
                <div class="swiper-slide marquee-item">
                    <div class="marquee-title">
                        <h3 class="text">Pan India Services</h3>
                    </div>
                    <div class="marquee-icons">
                        <img src="{{ asset('assets/images/icons/marquee-icon.png') }}" alt="Icons">
                    </div>
                </div>
                <div class="swiper-slide marquee-item">
                    <div class="marquee-title">
                        <h3 class="text">Expert Legal Solutions</h3>
                    </div>
                    <div class="marquee-icons">
                        <img src="{{ asset('assets/images/icons/marquee-icon.png') }}" alt="Icons">
                    </div>
                </div>
                <div class="swiper-slide marquee-item">
                    <div class="marquee-title">
                        <h3 class="text">Regulatory Compliance Masters</h3>
                    </div>
                    <div class="marquee-icons">
                        <img src="{{ asset('assets/images/icons/marquee-icon.png') }}" alt="Icons">
                    </div>
                </div>
                <div class="swiper-slide marquee-item">
                    <div class="marquee-title">
                        <h3 class="text">Fortune 500 Trusted</h3>
                    </div>
                    <div class="marquee-icons">
                        <img src="{{ asset('assets/images/icons/marquee-icon.png') }}" alt="Icons">
                    </div>
                </div>
                <div class="swiper-slide marquee-item">
                    <div class="marquee-title">
                        <h3 class="text">HIDCO NKDA Specialists</h3>
                    </div>
                    <div class="marquee-icons">
                        <img src="{{ asset('assets/images/icons/marquee-icon.png') }}" alt="Icons">
                    </div>
                </div>
                <div class="swiper-slide marquee-item">
                    <div class="marquee-title">
                        <h3 class="text">NRI Property Experts</h3>
                    </div>
                    <div class="marquee-icons">
                        <img src="{{ asset('assets/images/icons/marquee-icon.png') }}" alt="Icons">
                    </div>
                </div>
                <div class="swiper-slide marquee-item">
                    <div class="marquee-title">
                        <h3 class="text">Pan India Services</h3>
                    </div>
                    <div class="marquee-icons">
                        <img src="{{ asset('assets/images/icons/marquee-icon.png') }}" alt="Icons">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- end: Marquee Section -->

<!-- start: process Section -->
<section id="tj-process-2" class="h8-process section-space bg-white">
    <div class="container">
        <div class="row ">
            <div class="col-12">
                <div class="sec-heading h8-section-heading sec-heading-centered style-4">
                    <span class="sub-title wow fadeInUp" data-wow-delay="0.1s">OUR PROVEN LEGAL PROCESS</span>
                    <h2 class="sec-title text-anim">Four Strategic Steps to Property Legal Success</h2>
                </div>
            </div>

            <div class="col-12">
                <div class="h8-process-inner ">
                    <div class="process-line">
                        <div class="process-line-active"></div>
                    </div>
                    <div class="process-item style-4 active wow fadeInLeft" data-wow-delay=".2s">
                        <div class="process-index">
                            <span>01</span>
                        </div>
                        <div class="process-content">
                            <h5 class="title">Legal Assessment & <br> Due Diligence</h5>
                            <div class="desc">
                                <p>We conduct comprehensive property legal analysis, examining title documents, compliance history, and regulatory requirements across HIDCO, NKDA, WEBEL authorities to identify risks and opportunities.</p>
                            </div>
                        </div>
                    </div>
                    <div class="process-item style-4 wow fadeInLeft" data-wow-delay=".4s">
                        <div class="process-index">
                            <span>02</span>
                        </div>
                        <div class="process-content">
                            <h5 class="title">Customized Legal <br> Strategy Development</h5>
                            <div class="desc">
                                <p>Based on our assessment, we create tailored compliance roadmaps and legal strategies—whether for NRI property investment, business mall setup, or corporate real estate transactions.</p>
                            </div>
                        </div>
                    </div>
                    <div class="process-item style-4 wow fadeInLeft" data-wow-delay=".6s">
                        <div class="process-index">
                            <span>03</span>
                        </div>
                        <div class="process-content">
                            <h5 class="title">Regulatory Approval <br> & Documentation</h5>
                            <div class="desc">
                                <p>Our expert team handles all regulatory filings, government liaison, and legal documentation processing while maintaining transparent communication and providing regular progress updates.</p>
                            </div>
                        </div>
                    </div>
                    <div class="process-item style-4 wow fadeInLeft" data-wow-delay=".8s">
                        <div class="process-index">
                            <span>04</span>
                        </div>
                        <div class="process-content">
                            <h5 class="title">Ongoing Support & <br> Compliance Management</h5>
                            <div class="desc">
                                <p>We provide continuous legal support, monitor regulatory changes, and ensure ongoing compliance while offering strategic advisory for future property investments and expansions.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- end: process Section -->

<!-- start: Testimonials Section -->
<section class="h8-testimonial ">
    <div class="container tj-gap-30">
        <div class="row">
            <div class="col-12 col-lg-8  col-xl-4">
                <div class="h8-testimonial-section-heading-wrapper">
                    <div class="sec-heading h8-section-heading h8-testimonial-section-heading style-4  ">
                        <span class="sub-title wow fadeInUp" data-wow-delay="0.3s">CLIENT SUCCESS STORIES</span>
                        <h2 class="sec-title text-anim">Trusted by Fortune 500 Companies & Property Investors</h2>
                    </div>
                    <div class="h8-testimonial-fanfact">
                        <div class="counter-item">
                            <div class="number"><span class="odometer" data-count="98">0</span>%</div>
                            <span class="sub-title wow fadeInUp" data-wow-delay="0.3s">Client satisfaction rate across India with successful property legal solutions</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6  col-xl-4">
                <div class="h8-testimonial-wrapper">
                    <div class="swiper swiper-container h8-testimonial-slider h8-testimonial-slider-up">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="testimonial-item h8-testimonial-item">
                                    <div class="testimonial-content">
                                        <div class="author-rating">
                                            <div class="star-ratings">
                                                <div class="fill-ratings" style="width: 100%">
                                                    <span>★★★★★</span>
                                                </div>
                                                <div class="empty-ratings">
                                                    <span>★★★★★</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="desc">
                                            <p>"I received reliable and thorough guidance from 360 Properties Hub for our property registration, ensuring a smooth and hassle-free process, making the experience stress-free and efficient."</p>
                                        </div>
                                    </div>
                                    <div class="tj-testimonial-author">
                                        <div class="author-images">
                                            <img src="{{ asset('assets/images/testimonial/testi-3.png') }}" alt="Images">
                                        </div>
                                        <div class="author-content">
                                            <div class="author-text">
                                                <h4 class="author-name">Vivek Agarwal</h4>
                                                <span class="sub-title">Property Investor</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="testimonial-item h8-testimonial-item">
                                    <div class="testimonial-content">
                                        <div class="author-rating">
                                            <div class="star-ratings">
                                                <div class="fill-ratings" style="width: 100%">
                                                    <span>★★★★★</span>
                                                </div>
                                                <div class="empty-ratings">
                                                    <span>★★★★★</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="desc">
                                            <p>"I have known this company for a long time, and they have consistently provided the right direction in property compliance in Kolkata. Today, they are a trusted service provider in the city."</p>
                                        </div>
                                    </div>
                                    <div class="tj-testimonial-author">
                                        <div class="author-images">
                                            <img src="{{ asset('assets/images/testimonial/testi-2.png') }}" alt="Images">
                                        </div>
                                        <div class="author-content">
                                            <div class="author-text">
                                                <h4 class="author-name">Mr. Adrijit Ghosh</h4>
                                                <span class="sub-title">Senior Manager - AWFIS</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="testimonial-item h8-testimonial-item">
                                    <div class="testimonial-content">
                                        <div class="author-rating">
                                            <div class="star-ratings">
                                                <div class="fill-ratings" style="width: 100%">
                                                    <span>★★★★★</span>
                                                </div>
                                                <div class="empty-ratings">
                                                    <span>★★★★★</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="desc">
                                            <p>"We are thrilled that 360 Properties Hub has successfully guided our clients, offering comprehensive end-to-end property services, ensuring seamless compliance and peace of mind throughout the process."</p>
                                        </div>
                                    </div>
                                    <div class="tj-testimonial-author">
                                        <div class="author-images">
                                            <img src="{{ asset('assets/images/testimonial/testi-1.png') }}" alt="Images">
                                        </div>
                                        <div class="author-content">
                                            <div class="author-text">
                                                <h4 class="author-name">Nayan Banerjee</h4>
                                                <span class="sub-title">Deputy Manager - Godrej Properties</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12  col-md-6 col-xl-4 ">
                <div class="h8-testimonial-wrapper">
                    <div class="swiper swiper-container h8-testimonial-slider h8-testimonial-slider-down">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="testimonial-item h8-testimonial-item">
                                    <div class="testimonial-content">
                                        <div class="author-rating">
                                            <div class="star-ratings">
                                                <div class="fill-ratings" style="width: 100%">
                                                    <span>★★★★★</span>
                                                </div>
                                                <div class="empty-ratings">
                                                    <span>★★★★★</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="desc">
                                            <p>"I have known this company for a long time, and they have consistently provided the right direction in property compliance in Kolkata. Today, they are a trusted service provider in the city."</p>
                                        </div>
                                    </div>
                                    <div class="tj-testimonial-author">
                                        <div class="author-images">
                                            <img src="{{ asset('assets/images/testimonial/testi-2.png') }}" alt="Images">
                                        </div>
                                        <div class="author-content">
                                            <div class="author-text">
                                                <h4 class="author-name">Mr. Adrijit Ghosh</h4>
                                                <span class="sub-title">Senior Manager - AWFIS</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="testimonial-item h8-testimonial-item">
                                    <div class="testimonial-content">
                                        <div class="author-rating">
                                            <div class="star-ratings">
                                                <div class="fill-ratings" style="width: 100%">
                                                    <span>★★★★★</span>
                                                </div>
                                                <div class="empty-ratings">
                                                    <span>★★★★★</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="desc">
                                            <p>"I received reliable and thorough guidance from 360 Properties Hub for our property registration, ensuring a smooth and hassle-free process, making the experience stress-free and efficient."</p>
                                        </div>
                                    </div>
                                    <div class="tj-testimonial-author">
                                        <div class="author-images">
                                            <img src="{{ asset('assets/images/testimonial/testi-3.png') }}" alt="Images">
                                        </div>
                                        <div class="author-content">
                                            <div class="author-text">
                                                <h4 class="author-name">Vivek Agarwal</h4>
                                                <span class="sub-title">Property Investor</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="testimonial-item h8-testimonial-item">
                                    <div class="testimonial-content">
                                        <div class="author-rating">
                                            <div class="star-ratings">
                                                <div class="fill-ratings" style="width: 100%">
                                                    <span>★★★★★</span>
                                                </div>
                                                <div class="empty-ratings">
                                                    <span>★★★★★</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="desc">
                                            <p>"We are thrilled that 360 Properties Hub has successfully guided our clients, offering comprehensive end-to-end property services, ensuring seamless compliance and peace of mind throughout the process."</p>
                                        </div>
                                    </div>
                                    <div class="tj-testimonial-author">
                                        <div class="author-images">
                                            <img src="{{ asset('assets/images/testimonial/testi-1.png') }}" alt="Images">
                                        </div>
                                        <div class="author-content">
                                            <div class="author-text">
                                                <h4 class="author-name">Nayan Banerjee</h4>
                                                <span class="sub-title">Deputy Manager - Godrej Properties</span>
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
<!-- end: Testimonials Section -->

<!-- start: Blog Section -->
<section class="tj-blog-section with-shape">
    <div class="tj-blog-section-wrap">
        <div class="container">

            <!-- Section header -->
            <div class="row">
                <div class="col-12">
                    <div class="sec-heading">
                        <div class="sec-text">
                            <span class="sub-title wow fadeInDown" data-wow-delay="0.1s">Latest insights</span>
                            <h2 class="sec-title text-anim">Smart moves in Indian real estate</h2>
                        </div>

                        <!-- Desktop “Explore more” button -->
                        <div class="blog-button d-none d-lg-inline-flex wow fadeInDown" data-wow-delay="0.3s">
                            <a href="{{ route('blog') }}" class="tj-primary-btn">
                                <div class="btn_inner">
                                    <div class="btn_icon">
                                        <span><i class="tji-arrow-right"></i><i class="tji-arrow-right"></i></span>
                                    </div>
                                    <div class="btn_text"><span>Explore more</span></div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Blog cards -->
            <div class="row">
                <div class="col-12">
                    <div class="blog-wrapper">

                        <!-- Card 1 -->
                        <div class="blog-item wow fadeInUp" data-wow-delay="0.1s">
                            <div class="blog-images hover:shine">
                                <a href="{{ route('blog1') }}">
                                    <img src="{{ asset('assets/images/blog/due-diligence.png') }}" alt="Legal Due Diligence">
                                </a>
                            </div>
                            <div class="blog-content">
                                <div class="blog-meta">
                                    <ul>
                                        <li class="category">
                                            <a href="{{ route('blog1') }}">Compliance</a>
                                        </li>
                                        <li>20 Feb 2026</li>
                                        <li>05 Comments</li>
                                    </ul>
                                </div>
                                <h4 class="blog-title"><a href="{{ route('blog1') }}">Complete Legal Guide for Property Owners and Businesses</a></h4>
                                <div class="desc">
                                    Property ownership in Kolkata, West Bengal, involves more than just
                                    purchasing land or a building.
                                </div>
                                <a class="blog-button text-btn" href="{{ route('blog1') }}">Read more <i class="tji-arrow-right"></i></a>
                            </div>
                        </div>

                        <!-- Card 2 -->
                        <div class="blog-item wow fadeInUp" data-wow-delay="0.3s">
                            <div class="blog-images hover:shine">
                                <a href="{{ route('blog2') }}">
                                    <img src="{{ asset('assets/images/blog/portfolio.png') }}" alt="Portfolio Strategy">
                                </a>
                            </div>
                            <div class="blog-content">
                                <div class="blog-meta">
                                    <ul>
                                        <li class="category"><a href="{{ route('blog2') }}">Investment</a></li>
                                        <li>27 Jul 2025</li>
                                        <li>03 Comments</li>
                                    </ul>
                                </div>
                                <h4 class="blog-title"><a href="{{ route('blog2') }}">How to Optimise Your Property Portfolio for Higher ROI</a></h4>
                                <div class="desc">
                                    Diversification tactics, yield calculators, and refinancing tips that turn underperforming assets into star performers.
                                </div>
                                <a class="blog-button text-btn" href="{{ route('blog2') }}">Read more <i class="tji-arrow-right"></i></a>
                            </div>
                        </div>

                        <!-- Card 3 -->
                        <div class="blog-item wow fadeInUp" data-wow-delay="0.5s">
                            <div class="blog-images hover:shine">
                                <a href="{{ route('blog3') }}">
                                    <img src="{{ asset ('assets/images/blog/property-tax.png') }}" alt="Property Tax West Bengal">
                                </a>
                            </div>
                            <div class="blog-content">
                                <div class="blog-meta">
                                    <ul>
                                        <li class="category"><a href="{{ route('blog3') }}">Taxation</a></li>
                                        <li>15 Jul 2025</li>
                                        <li>04 Comments</li>
                                    </ul>
                                </div>
                                <h4 class="blog-title"><a href="{{ route('blog3') }}">Property Tax in West Bengal: Compliance & Savings Guide</a></h4>
                                <div class="desc">
                                    Step-by-step calculation examples, rebate windows, and appeal tactics every Kolkata owner should know.
                                </div>
                                <a class="blog-button text-btn" href="{{ route('blog3') }}">Read more <i class="tji-arrow-right"></i></a>
                            </div>
                        </div>

                        <!-- Card 4 -->
                        <div class="blog-item wow fadeInUp" data-wow-delay="0.7s">
                            <div class="blog-images hover:shine">
                                <a href="{{ route('blog4') }}">
                                    <img src="{{ asset('assets/images/blog/dpr.png') }}" alt="Detailed Project Report">
                                </a>
                            </div>
                            <div class="blog-content">
                                <div class="blog-meta">
                                    <ul>
                                        <li class="category"><a href="{{ route('blog4') }}">Development</a></li>
                                        <li>02 Jul 2025</li>
                                        <li>06 Comments</li>
                                    </ul>
                                </div>
                                <h4 class="blog-title"><a href="{{ route('blog4') }}">Why a Strong DPR Is the Fast-Track to Real-Estate Funding</a></h4>
                                <div class="desc">
                                    Break down the essential sections of a bank-ready Detailed Project Report and see real examples that unlocked capital quickly.
                                </div>
                                <a class="blog-button text-btn" href="{{ route('blog4') }}">Read more <i class="tji-arrow-right"></i></a>
                            </div>
                        </div>

                    </div>

                    <!-- Mobile “Explore more” button -->
                    <div class="blog-button d-lg-none text-center wow fadeInUp" data-wow-delay="0.9s">
                        <a href="{{ route('blog') }}" class="tj-primary-btn">
                            <div class="btn_inner">
                                <div class="btn_icon"><span><i class="tji-arrow-right"></i><i class="tji-arrow-right"></i></span></div>
                                <div class="btn_text"><span>Explore more</span></div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>
<!-- end: Blog Section -->

@endsection

@section('script')
@endsection
