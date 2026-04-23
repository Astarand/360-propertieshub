@extends('Layouts.App')

@section('title', 'Our Services - Comprehensive Property Consultancy in Kolkata - 360 Properties Hub')
@section('meta_description', 'Explore comprehensive property consultancy services in Kolkata - Legal compliance, RERA support, tax advisory, investment planning, and complete real estate solutions across West Bengal.')
@section('meta_keywords', 'property consultancy services Kolkata, real estate advisory West Bengal, legal compliance services Kolkata, RERA compliance Bengal, property tax advisory Kolkata, investment advisory West Bengal')
@section('canonical_url', url()->current())
@section('og_title', 'Our Services - Comprehensive Property Consultancy in Kolkata - 360 Properties Hub')
@section('og_description', 'Complete range of property consultancy services in Kolkata including legal compliance, investment advisory, tax planning, and regulatory support across West Bengal.')
@section('og_image', asset('assets/images/our-services.jpg'))

@section('content')

<!-- start: Breadcrumb Section -->
<section class="tj-page-header" data-bg-image="{{ asset('assets/images/bg/pheader-bg.png') }}">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="tj-page-header-content text-center">
                    <h1 class="tj-page-title text-anim">Services</h1>
                    <div class="tj-page-link wow fadeInUp" data-wow-delay="0.1s">
                        <span>
                            <a href="{{ route('home') }} ">
                                <span>Home</span>
                            </a>
                        </span>
                        <span>/</span>
                        <span>
                            <span>Services</span>
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- end: Breadcrumb Section -->


<!-- start: Service Section -->
<div class="tj-service-area section-space bg-white">
    <div class="container">
        <div class="row rg-30">
            <!-- Column 1: Regulatory Compliance -->
            <div class="col-lg-4 col-md-6">
                <div class="service-style-2 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="service-content">
                        <span class="number">01</span>
                        <h4 class="title"><a href="{{ route('hidco') }}">HIDCO Property Compliance</a></h4>
                        <div class="desc">
                            <p>End-to-end compliance for New Town properties—building plans, licenses, mutations, and regulatory approvals.</p>
                        </div>
                        <a class="service-button text-btn" href="{{ route('hidco') }}">Get Compliance <i class="tji-arrow-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="service-style-2 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="service-content">
                        <span class="number">02</span>
                        <h4 class="title"><a href="{{ route('nkda') }}">NKDA Regulatory Support</a></h4>
                        <div class="desc">
                            <p>Expert support for Rajarhat/NKDA property permissions, legal clearances, tax mutation, and documentation.</p>
                        </div>
                        <a class="service-button text-btn" href="{{ route('nkda') }}">Start Approval <i class="tji-arrow-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="service-style-2 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="service-content">
                        <span class="number">03</span>
                        <h4 class="title"><a href="{{ route('webel') }}">WEBEL Property Solutions</a></h4>
                        <div class="desc">
                            <p>Compliance and licensing for IT/ITES parks, tax exemptions, and end-to-end regulatory services in WB technology hubs.</p>
                        </div>
                        <a class="service-button text-btn" href="{{ route('webel') }}">Get Webel Support <i class="tji-arrow-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="service-style-2 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="service-content">
                        <span class="number">04</span>
                        <h4 class="title"><a href="{{ route('ndita') }}">NDITA Industrial Compliance</a></h4>
                        <div class="desc">
                            <p>Permissions & regulatory support for NDITA area industrial/commercial units, including mutation, licenses, and audits.</p>
                        </div>
                        <a class="service-button text-btn" href="{{ route('ndita') }}">Get NDITA Service <i class="tji-arrow-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="service-style-2 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="service-content">
                        <span class="number">05</span>
                        <h4 class="title"><a href="{{ route('kmc') }}">KMC Municipal Services</a></h4>
                        <div class="desc">
                            <p>Fast-track KMC permits, tax assessment, trade license, mutation, and urban property compliance solutions.</p>
                        </div>
                        <a class="service-button text-btn" href="{{ route('kmc') }}">Request KMC Help <i class="tji-arrow-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="service-style-2 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="service-content">
                        <span class="number">06</span>
                        <h4 class="title"><a href="{{ route('ud-development') }}">UD Development Permissions</a></h4>
                        <div class="desc">
                            <p>All urban development (UD) project permissions, compliance audits, and building plan approvals handled end-to-end.</p>
                        </div>
                        <a class="service-button text-btn" href="{{ route('ud-development') }}">Get UD Permission <i class="tji-arrow-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="service-style-2 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="service-content">
                        <span class="number">07</span>
                        <h4 class="title"><a href="{{ route('environmental') }}">Environmental Clearance Services</a></h4>
                        <div class="desc">
                            <p>Complete environmental clearance filing and follow-up for residential, commercial & industrial properties.</p>
                        </div>
                        <a class="service-button text-btn" href="{{ route('environmental') }}">Start Filing <i class="tji-arrow-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="service-style-2 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="service-content">
                        <span class="number">08</span>
                        <h4 class="title"><a href="{{ route('rera') }}">RERA Compliance Support</a></h4>
                        <div class="desc">
                            <p>Guidance and execution for all RERA compliance needs—disclosures, registration, and project audit reports.</p>
                        </div>
                        <a class="service-button text-btn" href="{{ route('rera') }}">Consult Now <i class="tji-arrow-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="service-style-2 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="service-content">
                        <span class="number">09</span>
                        <h4 class="title"><a href="{{ route('building-plan') }}">Building Plan Approval</a></h4>
                        <div class="desc">
                            <p>End-to-end support for architectural plans, compliance checks, and authority submissions to ensure fast approvals.</p>
                        </div>
                        <a class="service-button text-btn" href="{{ route('building-plan') }}">Approve Plans <i class="tji-arrow-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="service-style-2 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="service-content">
                        <span class="number">10</span>
                        <h4 class="title"><a href="{{ route('fire-noc') }}">Fire NOC Services</a></h4>
                        <div class="desc">
                            <p>All documentation and coordination for fire NOC acquisition—including operational, occupancy, and renewal cases.</p>
                        </div>
                        <a class="service-button text-btn" href="{{ route('fire-noc') }}">Get Fire NOC <i class="tji-arrow-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="service-style-2 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="service-content">
                        <span class="number">11</span>
                        <h4 class="title"><a href="{{ route('government-liaison') }}">Government Liaison Services</a></h4>
                        <div class="desc">
                            <p>Direct liaison services with city/state bodies for fast-track files, status follow-up, and regulatory problem solving.</p>
                        </div>
                        <a class="service-button text-btn" href="{{ route('government-liaison') }}">Schedule Liaison <i class="tji-arrow-right"></i></a>
                    </div>
                </div>
            </div>
            <!-- Column 2: Legal Services -->
            <div class="col-lg-4 col-md-6">
                <div class="service-style-2 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="service-content">
                        <span class="number">12</span>
                        <h4 class="title"><a href="{{ route('property-diligence') }}">Property Due Diligence</a></h4>
                        <div class="desc">
                            <p>Full legal audit, title check, and risk assessment for properties—protect investments, avoid disputes.</p>
                        </div>
                        <a class="service-button text-btn" href="{{ route('property-diligence') }}">Get Audit <i class="tji-arrow-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="service-style-2 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="service-content">
                        <span class="number">13</span>
                        <h4 class="title"><a href="{{ route('title-verification') }}">Title Verification Services</a></h4>
                        <div class="desc">
                            <p>Advanced title search and verification—confirm legal, inheritance and encumbrance status prior to any transaction.</p>
                        </div>
                        <a class="service-button text-btn" href="{{ route('title-verification') }}">Verify Title <i class="tji-arrow-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="service-style-2 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="service-content">
                        <span class="number">14</span>
                        <h4 class="title"><a href="{{ route('property-registration') }}">Property Registration Support</a></h4>
                        <div class="desc">
                            <p>Complete execution and handholding for property registration, stamp duty payments, and reporting procedures.</p>
                        </div>
                        <a class="service-button text-btn" href="{{ route('property-registration') }}">Register Now <i class="tji-arrow-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="service-style-2 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="service-content">
                        <span class="number">15</span>
                        <h4 class="title"><a href="{{ route('legal-drafting') }}">Legal Documentation Drafting</a></h4>
                        <div class="desc">
                            <p>Sale deed, GPA, lease, gift, power of attorney and JV agreement drafting by expert property lawyers.</p>
                        </div>
                        <a class="service-button text-btn" href="{{ route('legal-drafting') }}">Draft Now <i class="tji-arrow-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="service-style-2 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="service-content">
                        <span class="number">16</span>
                        <h4 class="title"><a href="{{ route('property-dispute') }}">Property Dispute Resolution</a></h4>
                        <div class="desc">
                            <p>Consult on all kinds of property disputes—partition, succession, title, and boundary. Out-of-court or litigation support.</p>
                        </div>
                        <a class="service-button text-btn" href="{{ route('property-dispute') }}">Get Resolution <i class="tji-arrow-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="service-style-2 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="service-content">
                        <span class="number">17</span>
                        <h4 class="title"><a href="{{ route('real-estate-litigation') }}">Real Estate Litigation</a></h4>
                        <div class="desc">
                            <p>Experienced representation for property litigation, tenancy, land acquisition, and RERA tribunal matters.</p>
                        </div>
                        <a class="service-button text-btn" href="{{ route('real-estate-litigation') }}">Book Consultation <i class="tji-arrow-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="service-style-2 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="service-content">
                        <span class="number">18</span>
                        <h4 class="title"><a href="{{ route('legal-audit') }}">Legal Audit Services</a></h4>
                        <div class="desc">
                            <p>Holistic legal health check for properties or portfolios—mitigate compliance and litigation risk proactively.</p>
                        </div>
                        <a class="service-button text-btn" href="{{ route('legal-audit') }}">Audit My Property <i class="tji-arrow-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="service-style-2 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="service-content">
                        <span class="number">19</span>
                        <h4 class="title"><a href="{{ route('contract-review') }}">Contract Review Services</a></h4>
                        <div class="desc">
                            <p>Detailed review and risk assessment of sale deeds, JV contracts, leases for loopholes, obligations and validity.</p>
                        </div>
                        <a class="service-button text-btn" href="{{ route('contract-review') }}">Review Contract <i class="tji-arrow-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="service-style-2 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="service-content">
                        <span class="number">20</span>
                        <h4 class="title"><a href="{{ route('property-valuation') }}">Property Valuation Services</a></h4>
                        <div class="desc">
                            <p>Accurate, unbiased market and government valuations for property buying, selling, court submissions, or audit.</p>
                        </div>
                        <a class="service-button text-btn" href="{{ route('property-valuation') }}">Get Valuation <i class="tji-arrow-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="service-style-2 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="service-content">
                        <span class="number">21</span>
                        <h4 class="title"><a href="{{ route('joint-venture') }}">Joint Venture Documentation</a></h4>
                        <div class="desc">
                            <p>Draft JV, development, or LLP agreements for property projects, investments, or partnership ventures.</p>
                        </div>
                        <a class="service-button text-btn" href="{{ route('joint-venture') }}">Create JV Docs <i class="tji-arrow-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="service-style-2 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="service-content">
                        <span class="number">22</span>
                        <h4 class="title"><a href="{{ route('property-taxation') }}">Property Taxation Planning</a></h4>
                        <div class="desc">
                            <p>Capital gains, stamp duty, TDS, NRI taxation planning for property transactions and investment optimization.</p>
                        </div>
                        <a class="service-button text-btn" href="{{ route('property-taxation') }}">Tax Planning <i class="tji-arrow-right"></i></a>
                    </div>
                </div>
            </div>
            <!-- Column 3: Business & Corporate -->
            <div class="col-lg-4 col-md-6">
                <div class="service-style-2 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="service-content">
                        <span class="number">23</span>
                        <h4 class="title"><a href="{{ route('mall') }}">Business Mall Setup</a></h4>
                        <div class="desc">
                            <p>Total support for business/investor group malls: all permits, licenses, CCs, and advisory under one roof.</p>
                        </div>
                        <a class="service-button text-btn" href="{{ route('mall') }}">Launch Project <i class="tji-arrow-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="service-style-2 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="service-content">
                        <span class="number">24</span>
                        <h4 class="title"><a href="{{ route('nri') }}">NRI Property Services</a></h4>
                        <div class="desc">
                            <p>Dedicated NRI desk for buying, selling, transfer, POA, inheritance, FEMA/Forex compliance, and litigation.</p>
                        </div>
                        <a class="service-button text-btn" href="{{ route('nri') }}">NRI Support <i class="tji-arrow-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="service-style-2 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="service-content">
                        <span class="number">25</span>
                        <h4 class="title"><a href="{{ route('trade-license') }}">Trade License Registration</a></h4>
                        <div class="desc">
                            <p>Get your new trade, GST, and FSSAI licenses; expert coordination with authorities for all document filings.</p>
                        </div>
                        <a class="service-button text-btn" href="{{ route('trade-license') }}">Apply License <i class="tji-arrow-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="service-style-2 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="service-content">
                        <span class="number">26</span>
                        <h4 class="title"><a href="{{ route('dpr') }}">DPR Preparation Services</a></h4>
                        <div class="desc">
                            <p>Comprehensive project reports for IT/ITES, SEZ, industrial units and investment projects — as per authority specs.</p>
                        </div>
                        <a class="service-button text-btn" href="{{ route('dpr') }}">Order DPR <i class="tji-arrow-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="service-style-2 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="service-content">
                        <span class="number">27</span>
                        <h4 class="title"><a href="{{ route('completion-certificate') }}">Completion Certificate Services</a></h4>
                        <div class="desc">
                            <p>Closure and CC procurement for construction, fit-out, or mall projects—liaison until final handover approval.</p>
                        </div>
                        <a class="service-button text-btn" href="{{ route('completion-certificate') }}">Get CC <i class="tji-arrow-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="service-style-2 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="service-content">
                        <span class="number">28</span>
                        <h4 class="title"><a href="{{ route('corporate-property') }}">Corporate Property Consulting</a></h4>
                        <div class="desc">
                            <p>Portfolio strategy, corporate realty risk management, JV advisory, and transaction support for large businesses.</p>
                        </div>
                        <a class="service-button text-btn" href="{{ route('corporate-property') }}">Get Advisory <i class="tji-arrow-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="service-style-2 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="service-content">
                        <span class="number">29</span>
                        <h4 class="title"><a href="{{ route('property-investment') }}">Property Investment Advisory</a></h4>
                        <div class="desc">
                            <p>Real estate investment support: due diligence, yield analysis, financing, and exit strategy planning.</p>
                        </div>
                        <a class="service-button text-btn" href="{{ route('property-investment') }}">Consult Now <i class="tji-arrow-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="service-style-2 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="service-content">
                        <span class="number">30</span>
                        <h4 class="title"><a href="{{ route('property-tax') }}">Property Tax Advisory</a></h4>
                        <div class="desc">
                            <p>Expertise in assessment, re-assessment, mutation, exemptions and property tax dispute resolution for all assets.</p>
                        </div>
                        <a class="service-button text-btn" href="{{ route('property-tax') }}">Request Tax Help <i class="tji-arrow-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="service-style-2 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="service-content">
                        <span class="number">31</span>
                        <h4 class="title"><a href="{{ route('property-portfolio') }}">Property Portfolio Management</a></h4>
                        <div class="desc">
                            <p>Ongoing management, legal audit, risk monitoring, task scheduling and compliance audit for large real estate portfolios.</p>
                        </div>
                        <a class="service-button text-btn" href="{{ route('property-portfolio') }}">Manage Portfolio <i class="tji-arrow-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="service-style-2 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="service-content">
                        <span class="number">32</span>
                        <h4 class="title"><a href="{{ route('real-estate-structuring') }}">Real Estate Structuring</a></h4>
                        <div class="desc">
                            <p>Custom legal structuring for real estate entities, SPCs, succession, JV models, or investment vehicles.</p>
                        </div>
                        <a class="service-button text-btn" href="{{ route('real-estate-structuring') }}">Structure Now <i class="tji-arrow-right"></i></a>
                    </div>
                </div>
            </div>
            <!-- End of 32 services -->
        </div>
    </div>
</div>
<!-- end: Service Section -->

@endsection
@section('script')

@endsection