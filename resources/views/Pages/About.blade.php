@extends('Layouts.App')

@section('title', 'About Us - Leading Property Consultants in Kolkata - 360 Properties Hub')
@section('meta_description', 'Learn about 360 Properties Hub - Kolkata\'s trusted property consultancy with expertise in legal compliance, RERA support, and comprehensive real estate services across West Bengal.')
@section('meta_keywords', 'about 360 properties hub, property consultants Kolkata, real estate experts West Bengal, property advisory team Kolkata, legal compliance specialists Bengal, RERA consultants Kolkata')
@section('canonical_url', url()->current())
@section('og_title', 'About Us - Leading Property Consultants in Kolkata - 360 Properties Hub')
@section('og_description', 'Discover 360 Properties Hub - Your trusted partner for property consultancy, legal compliance, and real estate advisory services in Kolkata and West Bengal.')
@section('og_image', asset('assets/images/about-us.jpg'))

@section('content')

<!-- start: Breadcrumb Section -->
<section class="tj-page-header" data-bg-image="{{ asset('assets/images/bg/pheader-bg.png') }}">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="tj-page-header-content text-center">
                    <h1 class="tj-page-title text-anim">About</h1>
                    <div class="tj-page-link wow fadeInUp" data-wow-delay="0.1s">
                        <span>
                            <a href="{{ route('home')}}">
                                <span>Home</span>
                            </a>
                        </span>
                        <span>/</span>
                        <span>
                            <span>About</span>
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- end: Breadcrumb Section -->

<!-- start: About Section -->
<section class="tj-about-info section-space bg-white">
    <div class="container">
        <div class="row rg-30 justify-content-between">
            <div class="col-lg-6 col-md-12">
                <div class="pricing-left-content">
                    <div class="sec-heading mb-0">
                        <span class="sub-title wow fadeInUp" data-wow-delay="0.1s">India's Premier Property Legal Firm</span>
                        <h2 class="sec-title text-anim">Transforming Complex Property Laws Into Strategic Business Success
                        </h2>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-12">
                <div class="desc mb-30 wow fadeInUp" data-wow-delay="0.3s">
                    <p>Our mission is to empower property investors, developers, and businesses across India to navigate complex legal landscapes with confidence. From our strategic Sector V, Kolkata headquarters, we deliver exceptional value through expert regulatory compliance, innovative legal solutions, and deep authority relationships across HIDCO, NKDA, WEBEL, and NDITA.</p>
                    <p>Trusted by Fortune 500 companies including Godrej Properties and Ambuja Neotia, we are committed to delivering seamless property legal services that transform regulatory challenges into profitable opportunities for our 500+ satisfied clients nationwide.</p>
                </div>
                <div class="about-btn wow fadeInUp" data-wow-delay="0.5s">
                    <a href="{{ route('services') }}" class="tj-primary-btn">
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
</section>
<!-- end: About Section -->

<!-- start: Feature Section -->
<section class="tj-feature-section py-5 bg-white">
    <div class="container">
        <div class="row rg-30">
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
                        <h5 class="title">Rapid Legal Solutions</h5>
                        <div class="desc">
                            <p>Fast-track property approvals and urgent legal documentation with our expedited processes across HIDCO, NKDA, and WEBEL authorities</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="feature-item hover-bg ">
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
                        <h5 class="title">Expert Legal Guidance</h5>
                        <div class="desc">
                            <p>Seasoned property law expertise trusted by Fortune 500 clients like Godrej Properties for complex regulatory challenges and compliance solutions</p>
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
                        <h5 class="title">Strategic Compliance</h5>
                        <div class="desc">
                            <p>Comprehensive regulatory strategies for NRI property investment, business mall setup, and corporate real estate across India's complex legal landscape</p>
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
                        <h5 class="title">Guaranteed Result</h5>
                        <div class="desc">
                            <p>Streamlined digital workflows with transparent case tracking, secure documentation, and real-time progress updates for seamless property transactions</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- end: Feature Section -->

<!-- start: Choose  Section -->
<section id="tj-process" class="h7-process  section-space">
    <div class="container">
        <div class="row rg-50">
            <div class="col-xl-5 col-lg-5">
                <div class="process-left">
                    <div class="sec-heading style-3">
                        <span class="sub-title wow fadeInUp" data-wow-delay="0.2s">WHY CHOOSE 360 PROPERTIES HUB</span>
                        <h2 class="sec-title text-anim">India's Most Trusted Property Legal Partner</h2>
                    </div>
                    <!-- banner img -->
                    <div class="process-banner d-none d-lg-block wow fadeInUp" data-wow-delay=".5s">
                        <div class="process-banner-bg">
                        </div>
                        <img src="{{asset ('assets/images/process/h7-banner.webp') }}" alt="Images">
                        <div class="about-circle h7-process-circle">
                            <div class="circle-wrap">
                                <img class="rotate-image" src="{{ asset('assets/images/shapes/h5-about-circle.png') }}" alt="image">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-7 col-lg-7">
                <div class="row ">
                    <div class="col-12">
                        <div class="process-inner">
                            <div class="process-line">
                                <div class="process-line-active"></div>
                            </div>
                            <div class="process-item style-4 active wow fadeInUp" data-wow-delay=".3s">
                                <div class="process-index">
                                    <span>01</span>
                                </div>
                                <div class="process-content">
                                    <h5 class="title">Fortune 500 Trusted Expertise</h5>
                                    <div class="desc">
                                        <p>Unlike other firms, we're trusted by industry giants like Godrej Properties and Ambuja Neotia. Our proven track record with Fortune 500 companies demonstrates our ability to handle the most complex property legal challenges across India.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="process-item style-4  wow fadeInUp" data-wow-delay=".4s">
                                <div class="process-index">
                                    <span>02</span>
                                </div>
                                <div class="process-content">
                                    <h5 class="title">Unmatched Authority Network</h5>
                                    <div class="desc">
                                        <p>While competitors focus on limited areas, we maintain deep relationships across all major authorities - HIDCO, NKDA, WEBEL, NDITA, and KMC. This comprehensive network ensures faster approvals and seamless compliance across West Bengal and beyond.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="process-item style-4  wow fadeInUp" data-wow-delay=".5s">
                                <div class="process-index">
                                    <span>03</span>
                                </div>
                                <div class="process-content">
                                    <h5 class="title">Technology-Driven Legal Solutions</h5>
                                    <div class="desc">
                                        <p>Our cutting-edge digital platform offers real-time case tracking, secure document management, and transparent communication - features that traditional law firms simply cannot match. Experience property legal services reimagined for the digital age.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- banner img -->
                        <div class="process-banner d-block d-lg-none">
                            <div class="process-banner-bg"></div>
                            <img src="{{ asset ('assets/images/process/h7-banner.webp') }}" alt="Images">
                            <div class="about-circle h7-process-circle">
                                <div class="circle-wrap">
                                    <img class="rotate-image" src="{{ asset ('assets/images/shapes/h5-about-circle.png') }}" alt="image">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- end: Choose Section -->

<!-- start: History Section -->
<section class="tj-history-area section-space  bg-white">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2 class="text-center pb-3">Our Journey</h2>
                <div class="timeline">
                    <div class="timeline-inner wow fadeInUp" data-wow-delay="0.1s">
                        <div class="date">2021</div>
                        <div class="content">
                            <div class="top">
                                <span>01.</span>
                                <h4 class="title">Digital Transformation & Service Expansion</h4>
                                <p>360 Properties Hub embraced cutting-edge digital tools to enhance client engagement and streamline case management. The firm expanded specialized services for NRI property investments, corporate compliance advisory, and introduced online consultation platforms to serve clients across India seamlessly.</p>
                            </div>
                        </div>
                    </div>
                    <div class="timeline-inner wow fadeInUp" data-wow-delay="0.3s">
                        <div class="date">2022</div>
                        <div class="content">
                            <div class="top">
                                <span>02.</span>
                                <h4 class="title">Strategic Partnerships & Regional Growth</h4>
                                <p>Forged strategic alliances with major real estate developers beyond West Bengal, extending our regulatory expertise across Eastern India. Successfully handled complex WEBEL and NDITA compliance projects while establishing strong government liaison networks in multiple states.</p>
                            </div>
                        </div>
                    </div>
                    <div class="timeline-inner wow fadeInUp" data-wow-delay="0.5s">
                        <div class="date">2023</div>
                        <div class="content">
                            <div class="top">
                                <span>03.</span>
                                <h4 class="title">Technology Integration & Process Excellence</h4>
                                <p>Implemented advanced case management software and automated regulatory tracking systems, dramatically improving transparency and reducing turnaround times. Introduced real-time progress updates and secure document sharing platforms, setting new industry standards for client communication.</p>
                            </div>
                        </div>
                    </div>
                    <div class="timeline-inner wow fadeInUp" data-wow-delay="0.7s">
                        <div class="date">2024</div>
                        <div class="content">
                            <div class="top">
                                <span>04.</span>
                                <h4 class="title">National Expansion & Industry Leadership</h4>
                                <p>Expanded operational footprint to serve clients across multiple Indian states while maintaining deep local expertise. Achieved recognition as India's premier property legal firm through successful high-profile cases and sustained partnerships with Fortune 500 companies including Godrej Properties and Ambuja Neotia.</p>
                            </div>
                        </div>
                    </div>
                    <div class="timeline-inner wow fadeInUp" data-wow-delay="0.9s">
                        <div class="date">2025</div>
                        <div class="content">
                            <div class="top">
                                <span>05.</span>
                                <h4 class="title">Innovation Leadership & Future Vision</h4>
                                <p>Pioneering AI-driven legal analytics and predictive compliance tools to anticipate regulatory changes before they impact clients. Positioned as India's most technologically advanced property legal firm, 360 Properties Hub continues to set benchmarks for innovation, client satisfaction, and regulatory excellence nationwide.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- end: History Section -->

<!-- start: Faq Section -->
<section class="h7-faq section-bottom-space bg-white">
    <div class="container">
        <div class="row flex-column-reverse flex-lg-row">
            <div class="col-12  col-lg-8">
                <div class="tj-faq ">
                    <div class="accordion tj-faq-style h7-faq-style" id="accordionExample">
                        <div class="accordion-item wow fadeInUp" data-wow-delay="0.1s">
                            <h2 class="accordion-header ">
                                <!-- button -->
                                <button class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#collapseOne-1" aria-expanded="false">
                                    <span>01.</span> What makes 360 Properties Hub different from other property legal firms?
                                </button>
                            </h2>
                            <!-- content -->
                            <div id="collapseOne-1" class="accordion-collapse collapse " data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p>Unlike traditional property legal firms, we combine deep regulatory expertise across all major authorities (HIDCO, NKDA, WEBEL, NDITA) with cutting-edge technology solutions. Our proven track record with Fortune 500 clients like Godrej Properties and Ambuja Neotia, coupled with transparent digital case tracking and real-time updates, sets us apart as India's premier property legal partner.</p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item wow fadeInUp" data-wow-delay="0.3s">
                            <h2 class="accordion-header ">
                                <!-- button -->
                                <button class="accordion-button " data-bs-toggle="collapse" data-bs-target="#collapseOne-2" aria-expanded="false">
                                    <span>02.</span> How long does property legal compliance and approval typically take?
                                </button>
                            </h2>
                            <!-- content -->
                            <div id="collapseOne-2" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p>Timeline varies based on service complexity and authority involved. HIDCO approvals typically take 15-30 days, while NKDA permissions range from 20-45 days. Our streamlined processes and strong government liaison networks often expedite approvals by 30-40% compared to industry standards. We provide realistic timelines upfront and regular progress updates throughout the process.</p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item wow fadeInUp" data-wow-delay="0.5s">
                            <h2 class="accordion-header ">
                                <!-- button -->
                                <button class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#collapseOne-3" aria-expanded="false">
                                    <span>03.</span> Do you handle NRI property investments and FEMA compliance?
                                </button>
                            </h2>
                            <!-- content -->
                            <div id="collapseOne-3" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p>Yes, we specialize in comprehensive NRI property services including FEMA compliance, property investment advisory, inheritance documentation, and repatriation procedures. Our dedicated NRI desk handles power of attorney facilitation, tax optimization strategies, and ensures complete regulatory compliance for overseas Indians investing in Indian real estate markets.</p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item wow fadeInUp" data-wow-delay="0.7s">
                            <h2 class="accordion-header ">
                                <!-- button -->
                                <button class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#collapseOne-4" aria-expanded="false">
                                    <span>04.</span> What are your fee structures for property legal services?
                                </button>
                            </h2>
                            <!-- content -->
                            <div id="collapseOne-4" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p>Our transparent fee structure varies based on service complexity and scope. Property due diligence starts from ₹25,000, regulatory compliance ranges from ₹15,000-₹75,000 depending on authority, and comprehensive business mall setup packages begin at ₹1,50,000. We offer fixed-fee arrangements for most services with no hidden charges, providing detailed cost estimates during initial consultation.</p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item wow fadeInUp" data-wow-delay="0.9s">
                            <h2 class="accordion-header ">
                                <!-- button -->
                                <button class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#collapseOne-5" aria-expanded="false">
                                    <span>05.</span> Which regulatory authorities and geographic areas do you cover?
                                </button>
                            </h2>
                            <!-- content -->
                            <div id="collapseOne-5" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p>We maintain expertise across all major West Bengal authorities including HIDCO, NKDA, WEBEL, NDITA, KMC, and UD departments. Our services extend Pan India with particular strength in Eastern India. We handle property legal matters across residential, commercial, and industrial sectors, ensuring comprehensive regulatory compliance regardless of project location or complexity.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12  col-lg-4">
                <div class="faq-banner">
                    <img src="{{asset ('assets/images/faq/h7-faq-banner.png') }}" alt="Images">
                    <div class="sec-heading h7-section-heading style-4">
                        <h2 class="sec-title text-anim">Your Property Legal Questions Answered</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- end: Faq Section -->

@endsection
@section('scripts')

@endsection