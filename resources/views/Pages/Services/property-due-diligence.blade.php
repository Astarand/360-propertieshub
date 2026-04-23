@extends('Layouts.App')

@section('title', 'Property Due Diligence Services in Kolkata - 360 Properties Hub')
@section('meta_description', 'Comprehensive property due diligence services in Kolkata with legal verification, title checks, and risk assessment for real estate investments across West Bengal.')
@section('meta_keywords', 'property due diligence Kolkata, legal verification West Bengal, title verification Kolkata, property risk assessment Bengal, real estate due diligence Kolkata, property investigation West Bengal')
@section('canonical_url', url()->current())
@section('og_title', 'Property Due Diligence Services in Kolkata - 360 Properties Hub')
@section('og_description', 'Expert property due diligence services in Kolkata with comprehensive legal verification and risk assessment for secure real estate investments.')
@section('og_image', asset('assets/images/property-due-diligence.jpg'))

@section('content')

<!-- start: Breadcrumb Section -->
<section class="tj-page-header" data-bg-image="{{ asset('assets/images/bg/pheader-bg.png') }}">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="tj-page-header-content text-center">
                    <h1 class="tj-page-title text-anim">Property Due Diligence</h1>
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
                            <span>Property Due Diligence</span>
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
                            Comprehensive Property Due Diligence: Expert Legal Audit & Risk Assessment
                        </h3>
                        <div class="tj-entry-content">
                            <p class="wow fadeInUp" data-wow-delay="0.1s">
                                Our Property Due Diligence service provides specialized investigation and legal audit of real estate properties across West Bengal and India. From initial title verification to comprehensive risk assessment, we ensure your property investments are legally sound and free from encumbrances. Our thorough examination covers title deeds, ownership history, encumbrance certificates, and regulatory compliance to protect your investments and avoid future legal disputes.
                            </p>
                            <p class="wow fadeInUp" data-wow-delay="0.3s">
                                Leveraging extensive expertise in property law and regulatory frameworks, our specialists deliver detailed due diligence reports and maintain strategic relationships with registration offices, municipal bodies, and legal authorities. Our proven approach identifies potential risks, ensures clear title verification, and positions your property transactions for successful completion while minimizing legal vulnerabilities and financial exposure.
                            </p>
                            <div class="tj-check-list">
                                <h4 class="text-anim">Service Highlights</h4>
                                <p class="wow fadeInUp" data-wow-delay="0.1s">
                                    We empower property buyers, investors, and developers with comprehensive due diligence solutions, enabling informed decision-making through thorough legal verification, title searches, and risk assessment across residential, commercial, and industrial properties throughout India.
                                </p>
                            </div>
                            <div class="service-check-list mt-4 wow fadeInUp" data-wow-delay="0.3s">
                                <ul>
                                    <li><i class="tji-double-check"></i>Comprehensive title verification and ownership history investigation</li>
                                    <li><i class="tji-double-check"></i>Expert encumbrance checks and legal liability assessment</li>
                                    <li><i class="tji-double-check"></i>Strategic document verification and regulatory compliance review</li>
                                    <li><i class="tji-double-check"></i>Proactive risk identification and detailed due diligence reporting</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <x-service-sidebar></x-service-sidebar>

            <div class="col-12">
                <div class="check-list mb-40">
                    <h4>Key Features of Our Property Due Diligence Service</h4>
                    <p>
                        Our specialized expertise ensures comprehensive and efficient property investigation, including detailed legal audits, title verification processes, and strategic risk assessment for all types of real estate transactions requiring thorough due diligence and legal clearance.
                    </p>
                    <p>
                        We focus on identifying potential legal issues, verifying ownership authenticity, and implementing robust investigation strategies while ensuring complete transparency, regulatory compliance, and protection of your property investment interests.
                    </p>
                </div>
                <div class="row rg-30 justify-content-center">
                    <div class="col-md-4">
                        <div class="tj-feature wow fadeInUp" data-wow-delay="0.5s">
                            <div class="tj-feature-icon">
                                <i class="tji-optimization"></i>
                            </div>
                            <h5 class="tj-feature-title">Legal Audit Excellence</h5>
                            <div class="desc">
                                <p>Comprehensive property investigation ensuring thorough title verification and complete legal compliance for secure investments.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="tj-feature wow fadeInUp" data-wow-delay="0.7s">
                            <div class="tj-feature-icon">
                                <i class="tji-results"></i>
                            </div>
                            <h5 class="tj-feature-title">Risk Assessment Expertise</h5>
                            <div class="desc">
                                <p>Deep investigation capabilities to identify potential legal issues and protect your investment from future disputes.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="tj-feature wow fadeInUp" data-wow-delay="0.9s">
                            <div class="tj-feature-icon">
                                <i class="tji-personalization"></i>
                            </div>
                            <h5 class="tj-feature-title">Investment Protection</h5>
                            <div class="desc">
                                <p>Specialized due diligence focused on safeguarding your investments with detailed reporting and ongoing legal support.</p>
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
                                    What is property due diligence and why is it essential before purchasing property?
                                </button>
                            </h2>
                            <div id="collapseOne-1" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    Property due diligence is a comprehensive investigation and legal audit of real estate to verify title authenticity, ownership history, and identify potential legal issues. It's essential to protect investments, avoid disputes, ensure clear ownership, and confirm regulatory compliance before making any property purchase or investment decision.
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item wow fadeInUp" data-wow-delay="0.3s">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#collapseOne-2" aria-expanded="false">
                                    What documents and aspects are covered in comprehensive due diligence?
                                </button>
                            </h2>
                            <div id="collapseOne-2" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    Our due diligence covers title deeds, sale agreements, encumbrance certificates, property tax receipts, building plan approvals, completion certificates, mutation records, court case searches, revenue records verification, and compliance with local regulations including RERA, environmental clearances, and municipal approvals.
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item wow fadeInUp" data-wow-delay="0.5s">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#collapseOne-3" aria-expanded="false">
                                    How long does the property due diligence process typically take?
                                </button>
                            </h2>
                            <div id="collapseOne-3" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    Property due diligence typically takes 7 to 21 days depending on property complexity, documentation availability, and scope of investigation required. Complex commercial properties or those with multiple ownership histories may require additional time for thorough verification and legal clearance confirmation.
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item wow fadeInUp" data-wow-delay="0.7s">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#collapseOne-4" aria-expanded="false">
                                    What are the consequences of skipping property due diligence?
                                </button>
                            </h2>
                            <div id="collapseOne-4" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    Skipping due diligence can result in purchasing disputed properties, inheriting legal liabilities, facing ownership challenges, encountering hidden encumbrances, regulatory non-compliance issues, financial losses, and potential legal disputes that could jeopardize your entire investment and lead to costly litigation.
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item wow fadeInUp" data-wow-delay="0.9s">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#collapseOne-5" aria-expanded="false">
                                    How does 360 Properties Hub conduct comprehensive property due diligence?
                                </button>
                            </h2>
                            <div id="collapseOne-5" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    We provide end-to-end due diligence including document collection and verification, title search and ownership tracing, encumbrance certificate analysis, legal compliance review, court case searches, physical verification, risk assessment, and detailed reporting with recommendations. Our systematic approach ensures complete protection of your property investment interests.
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