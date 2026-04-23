@extends('Layouts.App')

@section('title', 'Property Blog - Real Estate Insights from Kolkata - 360 Properties Hub')
@section('meta_description', 'Read expert property insights, real estate trends, and legal compliance tips from Kolkata\'s leading property consultancy. Stay updated with West Bengal property market news.')
@section('meta_keywords', 'property blog Kolkata, real estate insights West Bengal, property news Kolkata, real estate trends Bengal, property legal tips Kolkata, property market updates West Bengal')
@section('canonical_url', url()->current())
@section('og_title', 'Property Blog - Real Estate Insights from Kolkata - 360 Properties Hub')
@section('og_description', 'Expert property insights and real estate trends from Kolkata\'s leading consultancy. Get the latest updates on West Bengal property market and legal compliance.')
@section('og_image', asset('assets/images/property-blog.jpg'))

@section('content')
<!-- start: Breadcrumb Section -->
<section class="tj-page-header" data-bg-image="{{ asset('assets/images/bg/pheader-bg.png') }}">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="tj-page-header-content text-center">
                    <h1 class="tj-page-title text-anim">Blogs</h1>
                    <div class="tj-page-link wow fadeInUp" data-wow-delay="0.1s">
                        <span>
                            <a href="{{ route('home') }}">
                                <span>Home</span>
                            </a>
                        </span>
                        <span>/</span>
                        <span>
                            <span>Blogs</span>
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- end: Breadcrumb Section -->

<section class="tj-post-area section-space bg-white">
    <div class="container">
        <div class="row rg-30 justify-content-center">

            <div class="col-xl-4 col-md-6">
                <div class="blog-style-2 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="blog-images ">
                        <img src="{{ asset('assets/images/blog/due-diligence.png') }}" alt="Legal Property Checks">
                        <div class="blog-date">
                            <span class="date">20</span>
                            <span class="month">Feb</span>
                        </div>
                    </div>
                    <div class="blog-content">
                        <div class="blog-two-meta">
                            <ul>
                                <li><a class="meta-link" href="{{ route('blog1') }}">Legal Compliance</a></li>
                                <li>08 Comments</li>
                            </ul>
                        </div>
                        <h4 class="title under-line"><a href="{{ route('blog1') }}">Complete Legal Guide for Property Owners and Businesses</a>
                        </h4>
                        <div class="desc">
                            <p>Property ownership in Kolkata, West Bengal, involves more than just
                                purchasing land or a building. </p>
                        </div>
                        <div class="blog-button">
                            <a class="blog-btn text-btn" href="{{ route('blog1') }}">
                                Read more <i class="tji-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xl-4 col-md-6">
                <div class="blog-style-2 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="blog-images ">
                        <img src="{{ asset('assets/images/blog/portfolio.png') }}" alt="Property Portfolio Optimization">
                        <div class="blog-date">
                            <span class="date">27</span>
                            <span class="month">Jul</span>
                        </div>
                    </div>
                    <div class="blog-content">
                        <div class="blog-two-meta">
                            <ul>
                                <li><a class="meta-link" href="{{ route('blog2') }}">Investment Strategy</a></li>
                                <li>05 Comments</li>
                            </ul>
                        </div>
                        <h4 class="title under-line"><a href="{{ route('blog2') }}">How to Optimize Your Property Portfolio for Maximum Returns</a></h4>
                        <div class="desc">
                            <p>Proven diversification strategies, ROI metrics, and cash-flow improvement tactics for Indian real estate investors.</p>
                        </div>
                        <div class="blog-button">
                            <a class="blog-btn text-btn" href="{{ route('blog2') }}">
                                Read more <i class="tji-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xl-4 col-md-6">
                <div class="blog-style-2 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="blog-images ">
                        <img src="{{ asset('assets/images/blog/property-tax.png') }}" alt="West Bengal Property Tax">
                        <div class="blog-date">
                            <span class="date">15</span>
                            <span class="month">Jul</span>
                        </div>
                    </div>
                    <div class="blog-content">
                        <div class="blog-two-meta">
                            <ul>
                                <li><a class="meta-link" href="{{ route('blog3') }}">Tax Advisory</a></li>
                                <li>06 Comments</li>
                            </ul>
                        </div>
                        <h4 class="title under-line"><a href="{{ route('blog3') }}">Understanding Property Taxation in West Bengal: Tips to Stay Compliant</a></h4>
                        <div class="desc">
                            <p>Step-by-step guide to property tax calculations, rebate opportunities, and penalty avoidance in West Bengal.</p>
                        </div>
                        <div class="blog-button">
                            <a class="blog-btn text-btn" href="{{ route('blog3') }}">
                                Read more <i class="tji-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xl-4 col-md-6">
                <div class="blog-style-2 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="blog-images ">
                        <img src="{{ asset('assets/images/blog/dpr.png') }}" alt="DPR Real Estate Financing">
                        <div class="blog-date">
                            <span class="date">02</span>
                            <span class="month">Jul</span>
                        </div>
                    </div>
                    <div class="blog-content">
                        <div class="blog-two-meta">
                            <ul>
                                <li><a class="meta-link" href="{{ route('blog4') }}">Project Development</a></li>
                                <li>04 Comments</li>
                            </ul>
                        </div>
                        <h4 class="title under-line"><a href="{{ route('blog4') }}">The Role of Detailed Project Reports in Securing Real Estate Financing</a></h4>
                        <div class="desc">
                            <p>Essential components of a bank-ready DPR and how it accelerates loan approvals and regulatory clearances.</p>
                        </div>
                        <div class="blog-button">
                            <a class="blog-btn text-btn" href="{{ route('blog4') }}">
                                Read more <i class="tji-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


@endsection
