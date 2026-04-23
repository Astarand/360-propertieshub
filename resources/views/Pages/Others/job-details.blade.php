@extends('Layouts.App')

@section('content')
<!-- start: Breadcrumb Section -->
<section class="tj-page-header" data-bg-image="{{ asset('assets/images/bg/pheader-bg.png') }}">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="tj-page-header-content text-center">
                    <h1 class="tj-page-title text-anim">Job Details</h1>
                    <div class="tj-page-link wow fadeInUp" data-wow-delay="0.1s">
                        <span>
                            <a href="{{ route('home') }}">
                                <span>Home</span>
                            </a>
                        </span>
                        <span>/</span>
                        <span>
                            <span>Careers</span>
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- end: Breadcrumb Section -->

<!-- start: Careers Section -->
<section class="tj-careers-details section-space bg-white">
    <div class="container">
        <div class="row rg-50">
            <div class="col-lg-8">
                <div class="tj-post-wrapper">
                    <div class="tj-post-single-post">
                        <!-- top content -->
                        <div class="tj-careers-top mb-30">
                            <div class="tj-careers-top-icon">
                                <i class="tji-manage"></i>
                            </div>
                            <div class="tj-careers-top-content">
                                <div class="tj-careers-tag">
                                    <span>Full time job/on site</span> <span>Urgent</span>
                                </div>
                                <h3 class="tj-careers-top-title text-anim">Management consultant</h3>
                                <span class="location"><i class="tji-location"></i>Kolkata, West Bengal, India</span>
                            </div>
                        </div>
                        <!-- content -->
                        <div class="tj-entry-content">
                            <h4 class="text-anim">Job Description</h4>
                            <p class="wow fadeInUp" data-wow-delay="0.1s">
                                Our mission is to empowers businesses size to thrive in an businesses ever changing
                                marketplace. We are committed to the delivering exceptionals the value through strategic
                                inset, innovative approaches. Our consulting of our missing empower businesses of all
                                sizes to thrive. Committed to the delivering exceptional in the values through our
                                strategic inset, i approaches empower. Our mission is to empowers businesses
                            </p>
                            <p class="wow fadeInUp" data-wow-delay="0.3s">
                                Our mission is to empowers businesses size to thrive in an businesses ever changing
                                marketplace. We are committed to the delivering exceptionals the value through strategic
                                inset
                            </p>
                            <div class="tj-check-list">
                                <h4 class="text-anim">Requirements</h4>
                                <p class="wow fadeInUp" data-wow-delay="0.1s">
                                    Formulating and implementing business goals. We begin with an in-depth analysis of your
                                    business and market to identify opportunities and challenges. From there, we work with
                                    you to define clear, actionable.
                                </p>
                            </div>
                            <div class="service-check-list mt-4 mb-4 wow fadeInUp" data-wow-delay="0.3s">
                                <ul>
                                    <li><i class="tji-double-check"></i><span>Clear vision and direction for your business
                                            for consultings.</span></li>
                                    <li><i class="tji-double-check"></i><span>Enhanced ability to anticipate and respond to
                                            market changes.</span></li>
                                    <li><i class="tji-double-check"></i><span>Data-driven decision-making for strategic
                                            planning execution.</span></li>
                                    <li><i class="tji-double-check"></i><span>Structured approach to achieving your
                                            business goals.</span></li>
                                </ul>
                            </div>
                            <p class="wow fadeInUp" data-wow-delay="0.3s">Our mission is to empowers businesses size to
                                thrive in an businesses ever changing marketplace. We are committed to the delivering
                                exceptionals the value through strategic inset, innovative approaches. Our consulting of
                                our missing empower businesses of all sizes to delivering delivering exceptional.</p>
                            <div class="tj-check-list">
                                <h4 class="text-anim">Responsibilities</h4>
                                <p class="wow fadeInUp" data-wow-delay="0.1s">
                                    Our mission is to empowers businesses size to thrive in an businesses ever changing
                                    marketplace. We are committed to the delivering exceptionals the value through
                                    strategic inset. Committed to the delivering exceptional in the values through our
                                    strategic inset, i approaches empower.
                                </p>
                                <ul class="wow fadeInUp" data-wow-delay="0.3s">
                                    <li><i class="tji-double-check"></i> Discover our expertise</li>
                                    <li><i class="tji-double-check"></i> Journey and commitment to explained</li>
                                    <li><i class="tji-double-check"></i> Meet our team and learn</li>
                                    <li><i class="tji-double-check"></i> Meet our team</li>
                                </ul>
                            </div>
                        </div>
                        <!-- post tag and share -->
                        <div class="tj-post-details_tags_share wow fadeInUp" data-wow-delay="0.1s">
                            <div class="tj-tags tagcloud">
                                <span class="tag__title">Tags:</span>
                                <a href="#">Business</a>
                                <a href="#">Consulting</a>
                                <a href="#">Insights</a>
                            </div>
                        </div>
                    </div>

                    <!-- post navigation -->
                    <div class="tj-post__navigation mb-0 wow fadeInUp" data-wow-delay="0.3s">
                        <!-- previous post -->
                        <div class="tj-nav__post previous">
                            <div class="tj-nav-post__nav prev_post">
                                <a href="careers-details.html"><span><i class="tji-arrow-left"></i></span>Previous</a>
                            </div>
                        </div>
                        <div class="tj-nav-post__grid">
                            <i class="tji-square-cube"></i>
                        </div>
                        <!-- next post -->
                        <div class="tj-nav__post next">
                            <div class="tj-nav-post__nav next_post">
                                <a href="careers-details.html">Next<span><i class="tji-arrow-right"></i></span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <aside class="tj-blog-sidebar">
                    <!-- Job information  -->
                    <div class="tj-sidebar-widget wow fadeInUp" data-wow-delay="0.1s">
                        <h5 class="tj-sidebar-widget-title">Job information</h5>
                        <div class="project_catagory">
                            <ul>
                                <li><span class="first-child">Category</span><span>Business consultant</span></li>
                                <li><span class="first-child">Number</span><span>8080UO</span></li>
                                <li><span class="first-child">Company</span><span>360 Properties Hub</span></li>
                                <li><span class="first-child">Website</span><span>www.example.com</span></li>
                                <li><span class="first-child">Salary</span><span>$400-$550 / week</span></li>
                                <li><span class="first-child">Vacancy</span><span>03 Available</span></li>
                                <li><span class="first-child">Apply on</span><span>OCT 22, 2024</span></li>
                            </ul>
                        </div>
                    </div>
                    <!-- apply form -->
                    <div class="tj-sidebar-widget wow fadeInUp" data-wow-delay="0.3s">
                        <h5 class="tj-sidebar-widget-title">Apply online</h5>
                        <div class="tj-careers-form">
                            <form action="#">
                                <div class="form-input">
                                    <input type="text" name="cr_name" placeholder="Full name*">
                                </div>
                                <div class="form-input">
                                    <input type="email" name="cr_email" placeholder="Enter email*">
                                </div>
                                <div class="form-input">
                                    <input type="text" name="cr_phone" placeholder="Phone number*">
                                </div>
                                <div class="form-input">
                                    <textarea name="cr_cover_letter" placeholder="Cover letter*"></textarea>
                                </div>
                                <div class="form-input reduce">
                                    <label class="label" for="inputFile">Attach resume*</label>
                                    <input type="file" id="inputFile">
                                </div>
                                <div class="tj-careers-button">
                                    <button type="submit" class="tj-primary-btn">
                                        <span class="btn_inner">
                                            <span class="btn_icon">
                                                <span>
                                                    <i class="tji-arrow-right"></i>
                                                    <i class="tji-arrow-right"></i>
                                                </span>
                                            </span>
                                            <span class="btn_text">
                                                <span>Submit now</span>
                                            </span>
                                        </span>
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </aside>
            </div>
        </div>
    </div>
</section>
<!-- end: Careers Section -->

@endsection

@section('script')
@endsection