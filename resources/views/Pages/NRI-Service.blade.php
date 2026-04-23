@extends('Layouts.App')

@section('title', 'NRI Property Services in Kolkata - 360 Properties Hub')
@section('meta_description', 'Specialized NRI property services in Kolkata and West Bengal. FEMA compliance, power of attorney documentation, inheritance support, and remote execution workflows for seamless property transactions from anywhere in the world.')
@section('meta_keywords', 'NRI property services Kolkata, FEMA compliance India, NRI power of attorney, NRI property inheritance, NRI repatriation services, remote property transaction India, NRI legal services Bengal')
@section('canonical_url', url()->current())
@section('og_title', 'NRI Property Services in Kolkata - 360 Properties Hub')
@section('og_description', 'Expert NRI property solutions with FEMA compliance, POA documentation, inheritance support, and complete remote execution workflows for property transactions in India.')
@section('og_image', asset('assets/images/nri-services.jpg'))

@section('content')

<!-- start: Breadcrumb Section -->
<section class="tj-page-header" data-bg-image="{{ asset('assets/images/bg/pheader-bg.png') }}">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="tj-page-header-content text-center">
                    <h1 class="tj-page-title text-anim">NRI Services</h1>
                    <div class="tj-page-link wow fadeInUp" data-wow-delay="0.1s">
                        <span>
                            <a href="{{ route('home') }}">
                                <span>Home</span>
                            </a>
                        </span>
                        <span>/</span>
                        <span>
                            <span>NRI Services</span>
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
                            Comprehensive NRI Property Solutions: Your Trusted Partner in India
                        </h3>
                        <div class="tj-entry-content">
                            <p class="wow fadeInUp" data-wow-delay="0.1s">
                                Our NRI Services provide end-to-end property solutions for Non-Resident Indians managing real estate transactions across Kolkata and West Bengal from anywhere in the world. From FEMA compliance and fund repatriation to power of attorney documentation and inheritance management, we simplify complex cross-border property processes with complete transparency and regulatory adherence.
                            </p>
                            <p class="wow fadeInUp" data-wow-delay="0.3s">
                                Leveraging specialized expertise in Foreign Exchange Management Act (FEMA) regulations, Indian succession laws, and remote execution protocols, our team ensures your property transactions are legally compliant, tax-optimized, and executed seamlessly without requiring your physical presence in India. Whether you're buying, selling, inheriting, or managing property remotely, we provide dedicated support tailored to NRI requirements.
                            </p>
                            <div class="tj-check-list">
                                <h4 class="text-anim">Specialized NRI Services</h4>
                                <p class="wow fadeInUp" data-wow-delay="0.1s">
                                    We empower NRIs, OCIs, and PIOs with comprehensive property solutions that eliminate geographical barriers while ensuring full compliance with Indian regulations and international standards.
                                </p>
                            </div>
                            <div class="service-check-list mt-4 wow fadeInUp" data-wow-delay="0.3s">
                                <ul>
                                    <li><i class="tji-double-check"></i>FEMA & Repatriation: Complete guidance on foreign exchange regulations and fund repatriation processes</li>
                                    <li><i class="tji-double-check"></i>POA & Documentation: Power of attorney preparation, notarization, and attestation for property transactions</li>
                                    <li><i class="tji-double-check"></i>Inheritance/Succession: Legal support for property inheritance, probate, and succession certificates</li>
                                    <li><i class="tji-double-check"></i>Remote Execution Workflow: Complete digital transaction management with KYC, documentation, and tracking</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <x-service-sidebar></x-service-sidebar>

            <div class="col-12">
                <div class="check-list mb-40">
                    <h4>Remote Execution Made Simple: Step-by-Step Process</h4>
                    <p>
                        Our streamlined remote execution workflow eliminates the friction of managing property transactions from abroad, providing complete transparency and control at every stage.
                    </p>
                </div>
                <div class="row rg-30 mb-40">
                    <div class="col-md-4">
                        <div class="tj-feature wow fadeInUp" data-wow-delay="0.1s">
                            <div class="tj-feature-icon">
                                <i class="tji-optimization"></i>
                            </div>
                            <h5 class="tj-feature-title">KYC Verification</h5>
                            <div class="desc">
                                <p>Digital KYC completion with passport, visa copies, and overseas address proof verification through secure channels.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="tj-feature wow fadeInUp" data-wow-delay="0.3s">
                            <div class="tj-feature-icon">
                                <i class="tji-results"></i>
                            </div>
                            <h5 class="tj-feature-title">Notarization & Attestation</h5>
                            <div class="desc">
                                <p>Guidance for consular attestation, apostille certification, and Indian embassy notarization in your country of residence.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="tj-feature wow fadeInUp" data-wow-delay="0.5s">
                            <div class="tj-feature-icon">
                                <i class="tji-personalization"></i>
                            </div>
                            <h5 class="tj-feature-title">Document Courier Tracking</h5>
                            <div class="desc">
                                <p>International courier coordination with real-time tracking for POA documents, agreements, and registered deeds.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="tj-feature wow fadeInUp" data-wow-delay="0.7s">
                            <div class="tj-feature-icon">
                                <i class="tji-optimization"></i>
                            </div>
                            <h5 class="tj-feature-title">Progress Updates</h5>
                            <div class="desc">
                                <p>Regular status reports via email, WhatsApp, and video calls with photographic evidence at critical milestones.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="tj-feature wow fadeInUp" data-wow-delay="0.9s">
                            <div class="tj-feature-icon">
                                <i class="tji-results"></i>
                            </div>
                            <h5 class="tj-feature-title">Fund Transfer Support</h5>
                            <div class="desc">
                                <p>NRE/NRO account guidance, SWIFT transfer coordination, and FEMA-compliant payment routing.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="tj-feature wow fadeInUp" data-wow-delay="1.1s">
                            <div class="tj-feature-icon">
                                <i class="tji-personalization"></i>
                            </div>
                            <h5 class="tj-feature-title">Registration & Handover</h5>
                            <div class="desc">
                                <p>Sub-registrar coordination, document registration, and property handover with comprehensive digital documentation.</p>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="alert alert-info wow fadeInUp" data-wow-delay="0.1s">
                    <strong>Advisory Note:</strong> All tax and compliance guidance provided is strictly within Indian law frameworks and FEMA regulations. We recommend consulting qualified chartered accountants and tax advisors in both India and your country of residence for comprehensive cross-border tax planning.
                </div>

                <h4 class="text-anim pt-4">FEMA & Repatriation Guidelines</h4>
                <div class="check-list mb-30">
                    <p>
                        Understanding FEMA regulations is critical for NRIs managing property transactions in India. We ensure complete compliance with RBI guidelines for acquisition, holding, and repatriation.
                    </p>
                </div>
                <div class="row rg-30 justify-content-center mb-40">
                    <div class="col-md-4">
                        <div class="tj-feature wow fadeInUp" data-wow-delay="0.5s">
                            <div class="tj-feature-icon">
                                <i class="tji-optimization"></i>
                            </div>
                            <h5 class="tj-feature-title">Acquisition Rules</h5>
                            <div class="desc">
                                <p>NRIs can purchase residential and commercial property freely, but agricultural land and farmhouses require RBI approval.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="tj-feature wow fadeInUp" data-wow-delay="0.7s">
                            <div class="tj-feature-icon">
                                <i class="tji-results"></i>
                            </div>
                            <h5 class="tj-feature-title">Repatriation Rights</h5>
                            <div class="desc">
                                <p>Sale proceeds from up to two residential properties can be repatriated abroad subject to documentation and tax clearance.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="tj-feature wow fadeInUp" data-wow-delay="0.9s">
                            <div class="tj-feature-icon">
                                <i class="tji-personalization"></i>
                            </div>
                            <h5 class="tj-feature-title">Inheritance Freedom</h5>
                            <div class="desc">
                                <p>NRIs can inherit any property type including agricultural land without restrictions, though repatriation rules apply.</p>
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
                                    Can NRIs buy and sell property in India, and what are the FEMA restrictions?
                                </button>
                            </h2>
                            <div id="collapseOne-1" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    Yes, NRIs can freely purchase residential and commercial properties in India using NRE, NRO, or foreign funds.However, agricultural land, plantation property, and farmhouses require prior RBI approval. Sale proceeds from up to two residential properties purchased by NRIs can be repatriated abroad after tax compliance and proper documentation.
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item wow fadeInUp" data-wow-delay="0.3s">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#collapseOne-2" aria-expanded="false">
                                    How does Power of Attorney (POA) work for NRI property transactions?
                                </button>
                            </h2>
                            <div id="collapseOne-2" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    NRIs can execute a Special Power of Attorney to authorize a trusted representative in India to handle property transactions on their behalf. The POA must be signed before a consulate officer or notary public in the country of residence, apostilled or attested by the Indian embassy, and then registered in India under the Registration Act, 1908 to be legally valid and enforceable.
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item wow fadeInUp" data-wow-delay="0.5s">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#collapseOne-3" aria-expanded="false">
                                    What are the rules for NRIs inheriting property in India?
                                </button>
                            </h2>
                            <div id="collapseOne-3" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    NRIs can inherit any type of immovable property in India—residential, commercial, or agricultural—from residents or non-residents through valid wills (testamentary succession) or intestate succession laws. Unlike purchase restrictions, there are no limitations on inheritance. However, obtaining probate or succession certificates may be required for clear title transfer, and FEMA repatriation rules apply when selling inherited property.
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item wow fadeInUp" data-wow-delay="0.7s">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#collapseOne-4" aria-expanded="false">
                                    What is the process for repatriating property sale proceeds abroad?
                                </button>
                            </h2>
                            <div id="collapseOne-4" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    NRIs can repatriate sale proceeds from up to two residential properties by submitting Form FC-TRS to authorized dealer banks along with tax clearance certificates, property documents, and FEMA compliance declarations. The property must have been purchased with foreign funds or through NRE/FCNR accounts, and all capital gains taxes and TDS obligations must be settled before repatriation.
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item wow fadeInUp" data-wow-delay="0.9s">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#collapseOne-5" aria-expanded="false">
                                    How does 360 Properties Hub support NRI property transactions remotely?
                                </button>
                            </h2>
                            <div id="collapseOne-5" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    We provide complete remote execution support including digital KYC verification, POA document preparation and attestation guidance, international courier coordination with tracking, regular progress updates via video calls and photographic evidence, FEMA-compliant fund transfer assistance, tax compliance support, and complete property registration. Our dedicated NRI desk ensures seamless transactions without requiring your physical presence in India.
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
