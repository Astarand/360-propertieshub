@extends('Layouts.App')

@section('title', 'Approval & NOCs Services in Kolkata - 360 Properties Hub')
@section('meta_description', 'Professional services for obtaining statutory approvals, NOCs, and regulatory permissions for property and construction projects in Kolkata & West Bengal. End-to-end support for compliance, documentation, and authority liaison.')
@section('meta_keywords', 'approval services Kolkata, NOC consultation West Bengal, real estate NOCs Kolkata, KMC approvals, project clearance Bengal, construction regulatory permissions')
@section('canonical_url', url()->current())
@section('og_title', 'Approval & NOCs Services in Kolkata - 360 Properties Hub')
@section('og_description', 'Expert consulting for obtaining all necessary approvals and NOCs, including KMC sanctions and statutory registries, for projects in Kolkata and West Bengal.')
@section('og_image', asset('assets/images/approval-NOC-services.jpg'))

@section('content')

<!-- start: Breadcrumb Section -->
<section class="tj-page-header" data-bg-image="{{ asset('assets/images/bg/pheader-bg.png') }}">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="tj-page-header-content text-center">
                    <h1 class="tj-page-title text-anim">Approval & NOCs</h1>
                    <div class="tj-page-link wow fadeInUp" data-wow-delay="0.1s">
                        <span>
                            <a href="{{ route('home') }}">
                                <span>Home</span>
                            </a>
                        </span>
                        <span>/</span>
                        <span>
                            <span>Approval & NOCs</span>
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
                            Seamless Approvals & NOC Acquisition: 360° Regulatory Consulting
                        </h3>
                        <div class="tj-entry-content">
                            <p class="wow fadeInUp" data-wow-delay="0.1s">
                                Our Approval & NOCs service streamlines statutory permissions for all types of property and construction projects across Kolkata and West Bengal. We handle documentation, regulatory compliance, and direct applications for approvals from municipal bodies (KMC, Panchayat, NKDA, HIDCO), as well as specialist NOCs required for project commencement.
                            </p>
                            <p class="wow fadeInUp" data-wow-delay="0.3s">
                                From land mutation and conversion certificates to fire safety NOCs, environmental clearances, and water supply permissions—our team’s expertise ensures precise submissions and accelerated approval cycles. We guide you through the entire regulatory maze, keeping projects legally sound and construction-ready.
                            </p>
                            <div class="tj-check-list">
                                <h4 class="text-anim">Service Highlights</h4>
                                <p class="wow fadeInUp" data-wow-delay="0.1s">
                                    We support developers, architects, and property owners with a full suite of NOC and approval solutions tailored for residential, commercial, and institutional assets. Our transparent process enables secure project launches, risk mitigation, and statutory adherence.
                                </p>
                            </div>
                            <div class="service-check-list mt-4 wow fadeInUp" data-wow-delay="0.3s">
                                <ul>
                                    <li><i class="tji-double-check"></i>Consulting for mandatory NOCs and regulatory clearances</li>
                                    <li><i class="tji-double-check"></i>Preparation and submission of authority-compliant documents</li>
                                    <li><i class="tji-double-check"></i>Strategic liaison with municipal, fire, and environment bodies</li>
                                    <li><i class="tji-double-check"></i>Real-time tracking and proactive compliance management for fast resolution</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <x-service-sidebar></x-service-sidebar>

            <div class="col-12">
                <div class="check-list mb-40">
                    <h4>Key Features of Our Approval & NOCs Service</h4>
                    <p>
                        Our process includes meticulous assessment of project files, regulatory and environmental compliance checks, and one-on-one engagement with statutory authorities to obtain necessary NOCs and clearances without delay.
                    </p>
                    <p>
                        We help ensure your project is compliant, risk-free, and ready for launch—addressing every official requirement from local body permissions to utility NOCs and occupancy certificates.
                    </p>
                </div>
                <div class="row rg-30 justify-content-center">
                    <div class="col-md-4">
                        <div class="tj-feature wow fadeInUp" data-wow-delay="0.5s">
                            <div class="tj-feature-icon">
                                <i class="tji-optimization"></i>
                            </div>
                            <h5 class="tj-feature-title">Approval Consulting</h5>
                            <div class="desc">
                                <p>Expert guidance on securing required permissions, NOCs, and compliance advisory for your project.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="tj-feature wow fadeInUp" data-wow-delay="0.7s">
                            <div class="tj-feature-icon">
                                <i class="tji-results"></i>
                            </div>
                            <h5 class="tj-feature-title">Multi-NOC Support</h5>
                            <div class="desc">
                                <p>End-to-end NOC facilitation services for fire, environment, land mutation, KMC, and other mandatory clearances.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="tj-feature wow fadeInUp" data-wow-delay="0.9s">
                            <div class="tj-feature-icon">
                                <i class="tji-personalization"></i>
                            </div>
                            <h5 class="tj-feature-title">Authority Coordination</h5>
                            <div class="desc">
                                <p>Direct coordination with all approval bodies to ensure transparent, timely, and compliant project sanctioning.</p>
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
                                    What are statutory approvals & NOCs, and why are they essential?
                                </button>
                            </h2>
                            <div id="collapseOne-1" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    Statutory approvals and NOCs (No Objection Certificates) are mandatory permissions from government and municipal agencies required before any property development or construction. These permissions ensure legal compliance, safeguard against disputes, and validate project legitimacy under applicable laws.
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item wow fadeInUp" data-wow-delay="0.3s">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#collapseOne-2" aria-expanded="false">
                                    What documents are needed for NOCs and approvals in West Bengal?
                                </button>
                            </h2>
                            <div id="collapseOne-2" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    Required documents include the property title deed, sanction plans, site plans, past approvals, municipal receipts, fire safety designs, pollution NOC applications, affidavits, and compliance undertakings. Document lists vary with project type and location.
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item wow fadeInUp" data-wow-delay="0.5s">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#collapseOne-3" aria-expanded="false">
                                    How long does the approval and NOC process take?
                                </button>
                            </h2>
                            <div id="collapseOne-3" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    Processing timelines range from 30 to 120 days, depending on project scale, document completeness, and specific authority requirements. Strategic documentation and expert engagement help avoid delays and streamline clearances.
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item wow fadeInUp" data-wow-delay="0.7s">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#collapseOne-4" aria-expanded="false">
                                    What is the validity period of NOCs and approvals?
                                </button>
                            </h2>
                            <div id="collapseOne-4" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    Most statutory NOCs and approvals are valid for 2–5 years, subject to renewal terms set by authorities. Construction or operation must commence within the validity to avoid re-application.
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item wow fadeInUp" data-wow-delay="0.9s">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#collapseOne-5" aria-expanded="false">
                                    How does 360 Properties Hub assist in approvals & NOC acquisition?
                                </button>
                            </h2>
                            <div id="collapseOne-5" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    Our team provides full-spectrum support: consulting on application requirements, preparing complete document sets, direct submission through online and physical portals, follow-up with approval bodies, real-time tracking, and post-approval compliance validation.
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
