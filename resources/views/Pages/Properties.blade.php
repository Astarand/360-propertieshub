@extends('Layouts.App')

@section('title', 'Properties for Rent in Kolkata - 360 Properties Hub')
@section('meta_description', 'Find premium properties for rent in Kolkata with 360 Properties Hub. Expert property rental services with legal compliance and documentation support across West Bengal.')
@section('meta_keywords', 'properties for rent Kolkata, rental properties West Bengal, property rental services Kolkata, commercial rent Kolkata, residential rent Bengal, property leasing Kolkata')
@section('canonical_url', url()->current())
@section('og_title', 'Properties for Rent in Kolkata - 360 Properties Hub')
@section('og_description', 'Discover premium rental properties in Kolkata with complete legal compliance and documentation support from West Bengal\'s trusted property consultancy.')
@section('og_image', asset('assets/images/properties-rent.jpg'))

@section('content')

<!-- start: Breadcrumb Section -->
<section class="tj-page-header" data-bg-image="{{ asset('assets/images/bg/pheader-bg.png') }}">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="tj-page-header-content text-center">
                    <h1 class="tj-page-title text-anim">Portfolios</h1>
                    <div class="tj-page-link wow fadeInUp" data-wow-delay="0.1s">
                        <span>
                            <a href="index.html">
                                <span>Home</span>
                            </a>
                        </span>
                        <span>/</span>
                        <span>
                            <span>Portfolios</span>
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- end: Breadcrumb Section -->

<!-- start: Marquee Section -->
<section class="h6-marquee-section">
    <div class="swiper swiper-container h6-marquee-slider">
        <div class="swiper-wrapper marquee-wrapper">
            <div class="swiper-slide marquee_item">
                <div class="marquee-title">LATEST PROJECT</div>
                <div class="marquee-icons">//</div>
            </div>
            <div class="swiper-slide marquee_item">
                <div class="marquee-title">LATEST PROJECT</div>
                <div class="marquee-icons">//</div>
            </div>
            <div class="swiper-slide marquee_item">
                <div class="marquee-title">LATEST PROJECT</div>
                <div class="marquee-icons">//</div>
            </div>
            <div class="swiper-slide marquee_item">
                <div class="marquee-title">LATEST PROJECT</div>
                <div class="marquee-icons">//</div>
            </div>
            <div class="swiper-slide marquee_item">
                <div class="marquee-title">LATEST PROJECT</div>
                <div class="marquee-icons">//</div>
            </div>
            <div class="swiper-slide marquee_item">
                <div class="marquee-title">LATEST PROJECT</div>
                <div class="marquee-icons">//</div>
            </div>
            <div class="swiper-slide marquee_item">
                <div class="marquee-title">LATEST PROJECT</div>
                <div class="marquee-icons">//</div>
            </div>
            <div class="swiper-slide marquee_item">
                <div class="marquee-title">LATEST PROJECT</div>
                <div class="marquee-icons">//</div>
            </div>
            <div class="swiper-slide marquee_item">
                <div class="marquee-title">LATEST PROJECT</div>
                <div class="marquee-icons">//</div>
            </div>
            <div class="swiper-slide marquee_item">
                <div class="marquee-title">LATEST PROJECT</div>
                <div class="marquee-icons">//</div>
            </div>
        </div>
    </div>
</section>
<!-- end: Marquee Section -->

<!-- start: Project Section -->
<section class="h6-project-section section-space bg-white">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="h6-project-wrap">
                    <div class="h6-project-item project-stack">
                        <div class="project_image">
                            <img src="assets/images/project/h1-project-1.webp" alt="">
                        </div>
                        <div class="project_content">
                            <div class="project_content_inner">
                                <span class="no">01.</span>
                                <h3 class="title"><a href="project-details.html">Innovate consultancy business solutions</a></h3>
                                <div class="desc">Our consultant specialize in delivering rapid, actionable solutions that address
                                    your most pressing business on challenges. Whether you are facing.</div>

                                <a class="icon-btn project_btn" href="project-details.html">
                                    <i class="tji-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="h6-project-item project-stack">
                        <div class="project_image">
                            <img src="assets/images/project/h1-project-3.webp" alt="">
                        </div>
                        <div class="project_content">
                            <div class="project_content_inner">
                                <span class="no">02.</span>
                                <h3 class="title"><a href="project-details.html">Prime strategy creative solutions group</a></h3>
                                <div class="desc">Our consultant specialize in delivering rapid, actionable solutions that address
                                    your most pressing business on challenges. Whether you are facing.</div>

                                <a class="icon-btn project_btn" href="project-details.html">
                                    <i class="tji-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="h6-project-item">
                        <div class="project_image">
                            <img src="assets/images/project/h1-project-6.webp" alt="">
                        </div>
                        <div class="project_content">
                            <div class="project_content_inner">
                                <span class="no">03.</span>
                                <h3 class="title"><a href="project-details.html">Transformed a Consulting Firm’s Lead Pipeline</a>
                                </h3>
                                <div class="desc">Our consultant specialize in delivering rapid, actionable solutions that address
                                    your most pressing business on challenges. Whether you are facing.</div>

                                <a class="icon-btn project_btn" href="project-details.html">
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
<!-- end: Project Section -->

<!-- start: Coming Soon Section -->
{{--<section class="coming-soon-section">--}}
{{--    <div class="container">--}}
{{--        <div class="row justify-content-center">--}}
{{--            <div class="col-12 text-center">--}}
{{--                <h1 class="coming-soon-title">Coming Soon</h1>--}}

{{--                <div class="countdown-timer">--}}
{{--                    <div class="timer-item">--}}
{{--                        <span class="timer-number" id="days">00</span>--}}
{{--                        <span class="timer-label">Days</span>--}}
{{--                    </div>--}}
{{--                    <div class="timer-item">--}}
{{--                        <span class="timer-number" id="hours">00</span>--}}
{{--                        <span class="timer-label">Hours</span>--}}
{{--                    </div>--}}
{{--                    <div class="timer-item">--}}
{{--                        <span class="timer-number" id="minutes">00</span>--}}
{{--                        <span class="timer-label">Minutes</span>--}}
{{--                    </div>--}}
{{--                    <div class="timer-item">--}}
{{--                        <span class="timer-number" id="seconds">00</span>--}}
{{--                        <span class="timer-label">Seconds</span>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</section>--}}

{{--<style>--}}
{{--    .coming-soon-section {--}}
{{--        background: #ffffff;--}}
{{--        min-height: 100vh;--}}
{{--        display: flex;--}}
{{--        align-items: center;--}}
{{--        justify-content: center;--}}
{{--    }--}}

{{--    .coming-soon-title {--}}
{{--        font-size: 5rem;--}}
{{--        font-weight: 800;--}}
{{--        color: #333;--}}
{{--        margin-bottom: 3rem;--}}
{{--        letter-spacing: -2px;--}}
{{--    }--}}

{{--    .countdown-timer {--}}
{{--        display: flex;--}}
{{--        justify-content: center;--}}
{{--        gap: 2rem;--}}
{{--    }--}}

{{--    .timer-item {--}}
{{--        text-align: center;--}}
{{--    }--}}

{{--    .timer-number {--}}
{{--        display: block;--}}
{{--        font-size: 4rem;--}}
{{--        font-weight: 700;--}}
{{--        color: #333;--}}
{{--        line-height: 1;--}}
{{--        margin-bottom: 0.5rem;--}}
{{--    }--}}

{{--    .timer-label {--}}
{{--        font-size: 1rem;--}}
{{--        color: #666;--}}
{{--        text-transform: uppercase;--}}
{{--        letter-spacing: 1px;--}}
{{--        font-weight: 500;--}}
{{--    }--}}

{{--    @media (max-width: 768px) {--}}
{{--        .coming-soon-title {--}}
{{--            font-size: 3rem;--}}
{{--        }--}}

{{--        .countdown-timer {--}}
{{--            gap: 1rem;--}}
{{--        }--}}

{{--        .timer-number {--}}
{{--            font-size: 2.5rem;--}}
{{--        }--}}

{{--        .timer-label {--}}
{{--            font-size: 0.8rem;--}}
{{--        }--}}
{{--    }--}}

{{--    @media (max-width: 480px) {--}}
{{--        .coming-soon-title {--}}
{{--            font-size: 2.5rem;--}}
{{--        }--}}

{{--        .countdown-timer {--}}
{{--            gap: 0.5rem;--}}
{{--        }--}}

{{--        .timer-number {--}}
{{--            font-size: 2rem;--}}
{{--        }--}}
{{--    }--}}
{{--</style>--}}


<!-- end: Coming Soon Section -->



@endsection
@section('script')
<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Set target date to August 15th (current year)
        const targetDate = new Date();
        targetDate.setMonth(7); // August (0-indexed, so 7 = August)
        targetDate.setDate(15);
        targetDate.setHours(23, 59, 59, 999); // End of day

        function updateCountdown() {
            const now = new Date().getTime();
            const distance = targetDate.getTime() - now;

            const days = Math.floor(distance / (1000 * 60 * 60 * 24));
            const hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
            const minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
            const seconds = Math.floor((distance % (1000 * 60)) / 1000);

            document.getElementById('days').textContent = days.toString().padStart(2, '0');
            document.getElementById('hours').textContent = hours.toString().padStart(2, '0');
            document.getElementById('minutes').textContent = minutes.toString().padStart(2, '0');
            document.getElementById('seconds').textContent = seconds.toString().padStart(2, '0');

            if (distance < 0) {
                document.querySelector('.countdown-timer').innerHTML = '<h2>We\'re Live!</h2>';
            }
        }

        // Update countdown immediately and then every second
        updateCountdown();
        setInterval(updateCountdown, 1000);
    });
</script>
@endsection
