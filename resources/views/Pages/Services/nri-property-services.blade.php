@extends('Layouts.App')

@section('title', 'NRI Property Services in Kolkata - 360 Properties Hub')
@section('meta_description', 'Specialized NRI property services in Kolkata - Investment advisory, legal compliance, documentation, and property management for Non-Resident Indians across West Bengal.')
@section('meta_keywords', 'NRI property services Kolkata, non-resident Indian property West Bengal, NRI investment Kolkata, overseas property investment Bengal, NRI legal compliance Kolkata, property management NRI West Bengal')
@section('canonical_url', url()->current())
@section('og_title', 'NRI Property Services in Kolkata - 360 Properties Hub')
@section('og_description', 'Comprehensive NRI property services in Kolkata including investment advisory, legal compliance, and property management for Non-Resident Indians.')
@section('og_image', asset('assets/images/nri-property-services.jpg'))

@section('content')

<!-- start: Breadcrumb Section -->
<section class="tj-page-header" data-bg-image="{{ asset('assets/images/bg/pheader-bg.png') }}">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="tj-page-header-content text-center">
                    <h1 class="tj-page-title text-anim">NRI Property Services</h1>
                    <div class="tj-page-link wow fadeInUp" data-wow-delay="0.1s">
                        <span>
                            <a href="{{ route('home') }}">
                                <span>Home</span>
                            </a>
                        </span>
                        <span>/</span>
                        <span>
                            <a href="{{ route('services') }}">
                                <span>Services</span>
                            </a>
                        </span>
                        <span>/</span>
                        <span>
                            <span>NRI Property Services</span>
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- end: Breadcrumb Section -->

<!-- start: Service Section -->
<section class="tj-service-area section-space bg-white">
    <div class="container">
        <div class="row rg-50">
            <div class="col-lg-8">
                <div class="tj-post-wrapper">
                    <div class="tj-post-single-post mb-0">
                        <h3 class="tj-post-title text-anim">
                            Comprehensive NRI Property Services: Expert Legal Support & Remote Property Management
                        </h3>
                        <div class="tj-entry-content">
                            <p class="wow fadeInUp" data-wow-delay="0.1s">
                                Our NRI Property Services provide specialized assistance to Non-Resident Indians for managing, investing in, buying, and selling properties across West Bengal and India. We offer end-to-end legal support, property management, tax advisory, documentation assistance, and dispute resolution services designed specifically for NRIs who need reliable partners to handle their Indian property interests from abroad.
                            </p>
                            <p class="wow fadeInUp" data-wow-delay="0.3s">
                                Leveraging extensive expertise in FEMA regulations, Indian property law, and remote property management, our specialists deliver comprehensive solutions tailored for NRI clients. Our proven approach encompasses property acquisition support, professional management services, legal compliance, and strategic advisory to ensure NRIs can successfully invest in and manage Indian real estate while living overseas.
                            </p>
                            <div class="tj-check-list">
                                <h4 class="text-anim">Service Highlights</h4>
                                <p class="wow fadeInUp" data-wow-delay="0.1s">
                                    We empower Non-Resident Indians with comprehensive property solutions, enabling secure investments and seamless management through expert legal support, professional property management, tax optimization, and regulatory compliance across residential and commercial properties throughout India.
                                </p>
                            </div>
                            <div class="service-check-list mt-4 wow fadeInUp" data-wow-delay="0.3s">
                                <ul>
                                    <li><i class="tji-double-check"></i>Comprehensive property acquisition and purchase support with FEMA compliance</li>
                                    <li><i class="tji-double-check"></i>Expert property management including tenant screening, rent collection, and maintenance</li>
                                    <li><i class="tji-double-check"></i>Strategic tax planning and compliance assistance for NRI property investments</li>
                                    <li><i class="tji-double-check"></i>Proactive legal dispute resolution, succession planning, and Power of Attorney services</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <x-service-sidebar></x-service-sidebar>

            <div class="col-12">
                <div class="check-list mb-40">
                    <h4>Key Features of Our NRI Property Services</h4>
                    <p>
                        Our specialized expertise ensures comprehensive and reliable NRI property support, including detailed regulatory compliance, professional property management, and expert legal assistance for all types of property transactions requiring specialized knowledge of FEMA guidelines and NRI-specific requirements.
                    </p>
                    <p>
                        We focus on maximizing investment returns, ensuring regulatory compliance, and providing seamless remote management while adhering to Indian property laws, tax regulations, and optimal property maintenance through dedicated NRI-focused services and strategic advisory.
                    </p>
                </div>
                <div class="row rg-30 justify-content-center">
                    <div class="col-md-4">
                        <div class="tj-feature wow fadeInUp" data-wow-delay="0.5s">
                            <div class="tj-feature-icon">
                                <i class="tji-optimization"></i>
                            </div>
                            <h5 class="tj-feature-title">Remote Property Management</h5>
                            <div class="desc">
                                <p>Comprehensive property management services enabling NRIs to manage their Indian properties seamlessly from anywhere in the world.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="tj-feature wow fadeInUp" data-wow-delay="0.7s">
                            <div class="tj-feature-icon">
                                <i class="tji-results"></i>
                            </div>
                            <h5 class="tj-feature-title">FEMA Compliance Expertise</h5>
                            <div class="desc">
                                <p>Expert knowledge of FEMA regulations and NRI property laws to ensure compliant transactions and investment strategies.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="tj-feature wow fadeInUp" data-wow-delay="0.9s">
                            <div class="tj-feature-icon">
                                <i class="tji-personalization"></i>
                            </div>
                            <h5 class="tj-feature-title">Dedicated NRI Support</h5>
                            <div class="desc">
                                <p>Specialized services designed exclusively for NRIs with dedicated relationship managers and transparent communication systems.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <h4 class="text-anim pt-4">General questions</h4>
                <div class="tj-faq mt-30">
                    <div class="accordion tj-faq-style" id="accordionExample">
                        <div class="accordion-item wow fadeInUp" data-wow-delay="0.1s">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#collapseOne-1" aria-expanded="false">
                                    Can NRIs buy property in India and what are the legal requirements?
                                </button>
                            </h2>
                            <div id="collapseOne-1" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    Yes, NRIs can buy residential and commercial properties in India under FEMA guidelines, but cannot purchase agricultural land, plantations, or farmhouses. Required documents include valid passport, PAN card, OCI/PIO card, and funds must be transferred through proper banking channels like NRE, FCNR, or NRO accounts.
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item wow fadeInUp" data-wow-delay="0.3s">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#collapseOne-2" aria-expanded="false">
                                    How can NRIs manage their properties remotely from abroad?
                                </button>
                            </h2>
                            <div id="collapseOne-2" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    NRIs can manage properties remotely through Power of Attorney arrangements, professional property management services, digital platforms for rent collection and maintenance coordination, video call support, and dedicated relationship managers who provide regular updates and handle all operational aspects.
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item wow fadeInUp" data-wow-delay="0.5s">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#collapseOne-3" aria-expanded="false">
                                    What tax implications should NRIs consider for Indian property investments?
                                </button>
                            </h2>
                            <div id="collapseOne-3" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    NRIs must comply with Indian tax laws on rental income (taxed at 30% plus surcharge), capital gains tax on property sales (with indexation benefits for long-term holdings), TDS obligations, and property tax payments. Professional tax planning helps optimize liabilities and maximize returns through legal deductions and exemptions.
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item wow fadeInUp" data-wow-delay="0.7s">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#collapseOne-4" aria-expanded="false">
                                    Can NRIs sell properties without being physically present in India?
                                </button>
                            </h2>
                            <div id="collapseOne-4" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    Yes, NRIs can sell properties without physical presence through legally executed Power of Attorney, professional legal representation, digital documentation processes including Aadhaar eSign, and comprehensive legal support for registration, tax compliance, and fund repatriation procedures.
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item wow fadeInUp" data-wow-delay="0.9s">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#collapseOne-5" aria-expanded="false">
                                    How does 360 Properties Hub provide comprehensive NRI property services?
                                </button>
                            </h2>
                            <div id="collapseOne-5" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    We provide end-to-end NRI property support including property acquisition assistance with FEMA compliance, professional property management with tenant screening and rent collection, comprehensive legal services including dispute resolution and succession planning, tax advisory and compliance support, and dedicated relationship management with transparent communication systems for seamless property ownership from abroad.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- end: Service Section -->

@endsection

@section('script')

@endsection