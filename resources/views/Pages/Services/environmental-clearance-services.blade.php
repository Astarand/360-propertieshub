@extends('Layouts.App')

@section('title', 'Environmental Clearance Services in Kolkata - 360 Properties Hub')
@section('meta_description', 'Expert environmental clearance services in Kolkata with pollution control board approvals, environmental compliance, and clearance documentation for projects in West Bengal.')
@section('meta_keywords', 'environmental clearance Kolkata, pollution control board West Bengal, environmental compliance Kolkata, environmental approval Bengal, eco clearance Kolkata, environmental assessment West Bengal')
@section('canonical_url', url()->current())
@section('og_title', 'Environmental Clearance Services in Kolkata - 360 Properties Hub')
@section('og_description', 'Professional environmental clearance services in Kolkata with complete compliance and approval support for sustainable development projects.')
@section('og_image', asset('assets/images/environmental-clearance-services.jpg'))

@section('content')

<!-- start: Breadcrumb Section -->
<section class="tj-page-header" data-bg-image="{{ asset('assets/images/bg/pheader-bg.png') }}">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="tj-page-header-content text-center">
                    <h1 class="tj-page-title text-anim">Environmental Clearance Services</h1>
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
                            <span>Environmental Clearance Services</span>
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
                            Comprehensive Environmental Clearance Services: Strategic Compliance & Sustainable Development
                        </h3>
                        <div class="tj-entry-content">
                            <p class="wow fadeInUp" data-wow-delay="0.1s">
                                Our Environmental Clearance Services provide specialized guidance for projects requiring environmental approvals from Ministry of Environment and State Pollution Control Board authorities. From initial environmental impact assessments to final clearance certificates, we ensure your developments meet all environmental regulations while facilitating sustainable project execution across West Bengal and nationwide.
                            </p>
                            <p class="wow fadeInUp" data-wow-delay="0.3s">
                                Leveraging extensive expertise in environmental compliance framework, our specialists deliver comprehensive EIA reports and maintain strategic relationships with SEIAA, SEAC, and MoEF officials. Our proven approach accelerates clearance timelines, ensures statutory environmental compliance, and positions your projects for responsible development while minimizing ecological impact.
                            </p>
                            <div class="tj-check-list">
                                <h4 class="text-anim">Service Highlights</h4>
                                <p class="wow fadeInUp" data-wow-delay="0.1s">
                                    We empower developers, industries, and infrastructure projects with efficient environmental clearance solutions, enabling seamless navigation of complex environmental regulations for residential, commercial, industrial, and infrastructure developments across India.
                                </p>
                            </div>
                            <div class="service-check-list mt-4 wow fadeInUp" data-wow-delay="0.3s">
                                <ul>
                                    <li><i class="tji-double-check"></i>Comprehensive environmental compliance roadmap for all project categories</li>
                                    <li><i class="tji-double-check"></i>Expert EIA preparation, public consultation management, and clearance acquisition</li>
                                    <li><i class="tji-double-check"></i>Strategic liaison with SEIAA, SEAC, MoEF, and pollution control authorities</li>
                                    <li><i class="tji-double-check"></i>Proactive environmental monitoring and compliance management support</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <x-service-sidebar></x-service-sidebar>

            <div class="col-12">
                <div class="check-list mb-40">
                    <h4>Key Features of Our Environmental Clearance Services</h4>
                    <p>
                        Our specialized expertise ensures comprehensive and efficient environmental compliance, including detailed impact assessments, scientific data analysis, and strategic authority engagement for projects requiring environmental clearances under various categories and thresholds.
                    </p>
                    <p>
                        We focus on aligning your development projects with environmental guidelines, optimizing clearance workflows, and implementing robust sustainability strategies while ensuring adherence to EIA notifications, pollution control norms, and biodiversity conservation requirements.
                    </p>
                </div>
                <div class="row rg-30 justify-content-center">
                    <div class="col-md-4">
                        <div class="tj-feature wow fadeInUp" data-wow-delay="0.5s">
                            <div class="tj-feature-icon">
                                <i class="tji-optimization"></i>
                            </div>
                            <h5 class="tj-feature-title">EIA Process Excellence</h5>
                            <div class="desc">
                                <p>Comprehensive environmental impact assessment preparation ensuring scientific accuracy and regulatory compliance for all project types.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="tj-feature wow fadeInUp" data-wow-delay="0.7s">
                            <div class="tj-feature-icon">
                                <i class="tji-results"></i>
                            </div>
                            <h5 class="tj-feature-title">Regulatory Authority Expertise</h5>
                            <div class="desc">
                                <p>Deep knowledge of SEIAA, SEAC, MoEF procedures to ensure accurate submissions and faster environmental clearances.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="tj-feature wow fadeInUp" data-wow-delay="0.9s">
                            <div class="tj-feature-icon">
                                <i class="tji-personalization"></i>
                            </div>
                            <h5 class="tj-feature-title">Sustainable Development Focus</h5>
                            <div class="desc">
                                <p>Specialized assistance promoting environmental sustainability with dedicated monitoring and compliance management throughout project lifecycle.</p>
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
                                    What is environmental clearance and why is it mandatory for development projects?
                                </button>
                            </h2>
                            <div id="collapseOne-1" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    Environmental clearance is a statutory approval required for projects that may have significant environmental impact, as mandated under the Environmental Impact Assessment (EIA) Notification. It's mandatory to assess and mitigate potential ecological damage, ensure sustainable development, and comply with environmental protection laws before project commencement.
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item wow fadeInUp" data-wow-delay="0.3s">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#collapseOne-2" aria-expanded="false">
                                    Which projects require environmental clearance under EIA notification?
                                </button>
                            </h2>
                            <div id="collapseOne-2" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    Projects requiring environmental clearance include industrial developments, infrastructure projects (roads, airports, ports), mining activities, thermal power plants, real estate developments above specified thresholds, hotels and resorts, hospitals above certain bed capacity, and educational institutions exceeding defined built-up areas across various categories.
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item wow fadeInUp" data-wow-delay="0.5s">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#collapseOne-3" aria-expanded="false">
                                    What is the difference between Category A and Category B clearances?
                                </button>
                            </h2>
                            <div id="collapseOne-3" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    Category A projects are appraised at national level by MoEF&CC and require more comprehensive assessment for large-scale developments. Category B projects are appraised at state level by SEIAA/SEAC for smaller scale developments. Category B is further divided into B1 (requiring EIA) and B2 (not requiring EIA) based on specific criteria.
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item wow fadeInUp" data-wow-delay="0.7s">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#collapseOne-4" aria-expanded="false">
                                    How long does the environmental clearance process take?
                                </button>
                            </h2>
                            <div id="collapseOne-4" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    Environmental clearance typically takes 105-210 days depending on project category, completeness of documentation, and public consultation requirements. Category A projects generally take longer due to additional scrutiny. Our systematic approach and expert documentation help minimize processing time while ensuring complete compliance.
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item wow fadeInUp" data-wow-delay="0.9s">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#collapseOne-5" aria-expanded="false">
                                    How does 360 Properties Hub facilitate environmental clearance process?
                                </button>
                            </h2>
                            <div id="collapseOne-5" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    We provide comprehensive environmental clearance support including project categorization, EIA report preparation, baseline data collection, impact assessment studies, public consultation management, application submission, authority coordination, and ongoing compliance monitoring to ensure successful and timely environmental approvals.
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