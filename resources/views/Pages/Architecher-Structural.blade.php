@extends('Layouts.App')

@section('title', 'Architecture & Structural Design Services in Kolkata - 360 Properties Hub')
@section('meta_description', 'Professional architecture and structural engineering services in Kolkata and West Bengal. Complete design solutions, structural analysis, building planning, and construction documentation for residential, commercial, and institutional projects.')
@section('meta_keywords', 'architecture services Kolkata, structural design West Bengal, structural engineering consultancy Kolkata, building design services Bengal, architectural planning Kolkata, construction design consultancy')
@section('canonical_url', url()->current())
@section('og_title', 'Architecture & Structural Design Services in Kolkata - 360 Properties Hub')
@section('og_description', 'Expert architectural planning and structural engineering services for safe, sustainable, and innovative building solutions in Kolkata and West Bengal.')
@section('og_image', asset('assets/images/architecture-structural-services.jpg'))

@section('content')

<!-- start: Breadcrumb Section -->
<section class="tj-page-header" data-bg-image="{{ asset('assets/images/bg/pheader-bg.png') }}">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="tj-page-header-content text-center">
                    <h1 class="tj-page-title text-anim">Architecture & Structural</h1>
                    <div class="tj-page-link wow fadeInUp" data-wow-delay="0.1s">
                        <span>
                            <a href="{{ route('home') }}">
                                <span>Home</span>
                            </a>
                        </span>
                        <span>/</span>
                        <span>
                            <span>Architecture & Structural</span>
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
                            Innovative Architecture & Structural Engineering: Building the Future with Precision
                        </h3>
                        <div class="tj-entry-content">
                            <p class="wow fadeInUp" data-wow-delay="0.1s">
                                Our Architecture & Structural services deliver comprehensive design and engineering solutions for residential, commercial, and institutional projects across Kolkata and West Bengal. From conceptual architectural planning to detailed structural analysis, we combine aesthetic innovation with engineering precision to create safe, sustainable, and cost-effective buildings.
                            </p>
                            <p class="wow fadeInUp" data-wow-delay="0.3s">
                                Leveraging advanced tools like 3D modeling, Building Information Modeling (BIM), and finite element analysis, our team of experienced architects and structural engineers ensures every project meets stringent safety standards, optimizes material efficiency, and complies with local building codes and regulations. Whether you're planning a high-rise tower, residential complex, or industrial facility, we provide end-to-end design documentation and construction support.
                            </p>
                            <div class="tj-check-list">
                                <h4 class="text-anim">Service Highlights</h4>
                                <p class="wow fadeInUp" data-wow-delay="0.1s">
                                    We empower developers, builders, and property owners with integrated architectural and structural solutions that transform visions into reality while ensuring structural integrity, regulatory compliance, and design excellence throughout the project lifecycle.
                                </p>
                            </div>
                            <div class="service-check-list mt-4 wow fadeInUp" data-wow-delay="0.3s">
                                <ul>
                                    <li><i class="tji-double-check"></i>Complete architectural design from concept to construction documentation</li>
                                    <li><i class="tji-double-check"></i>Structural engineering analysis, load calculations, and seismic safety assessments</li>
                                    <li><i class="tji-double-check"></i>3D visualization, BIM modeling, and detailed construction drawings</li>
                                    <li><i class="tji-double-check"></i>Site evaluation, soil stability analysis, and foundation design recommendations</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <x-service-sidebar></x-service-sidebar>

            <div class="col-12">
                <div class="check-list mb-40">
                    <h4>Key Features of Our Architecture & Structural Service</h4>
                    <p>
                        Our integrated approach combines architectural creativity with structural engineering expertise, delivering projects that are not only visually stunning but also structurally sound and built to last. We conduct comprehensive site assessments, evaluate geological and environmental conditions, and develop detailed plans that optimize strength, stability, and construction efficiency.
                    </p>
                    <p>
                        From schematic design and space planning to tender documentation and on-site supervision, we provide complete support at every stage—ensuring your project meets all technical specifications, building bylaws, and quality standards.
                    </p>
                </div>
                <div class="row rg-30 justify-content-center">
                    <div class="col-md-4">
                        <div class="tj-feature wow fadeInUp" data-wow-delay="0.5s">
                            <div class="tj-feature-icon">
                                <i class="tji-optimization"></i>
                            </div>
                            <h5 class="tj-feature-title">Design Excellence</h5>
                            <div class="desc">
                                <p>Innovative architectural solutions blending functionality, aesthetics, and sustainability for modern construction projects.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="tj-feature wow fadeInUp" data-wow-delay="0.7s">
                            <div class="tj-feature-icon">
                                <i class="tji-results"></i>
                            </div>
                            <h5 class="tj-feature-title">Structural Integrity</h5>
                            <div class="desc">
                                <p>Advanced structural analysis ensuring maximum strength, load-bearing capacity, and durability for all building types.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="tj-feature wow fadeInUp" data-wow-delay="0.9s">
                            <div class="tj-feature-icon">
                                <i class="tji-personalization"></i>
                            </div>
                            <h5 class="tj-feature-title">Complete Documentation</h5>
                            <div class="desc">
                                <p>Detailed construction drawings, specifications, and approval-ready documentation for seamless project execution.</p>
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
                                    What is the difference between architecture and structural engineering services?
                                </button>
                            </h2>
                            <div id="collapseOne-1" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    Architecture focuses on the aesthetic design, space planning, functionality, and overall concept of a building, while structural engineering ensures the building's framework can safely support loads, withstand environmental forces, and maintain stability. Both disciplines work together to create buildings that are beautiful, functional, and structurally sound.
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item wow fadeInUp" data-wow-delay="0.3s">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#collapseOne-2" aria-expanded="false">
                                    What services are included in architectural planning?
                                </button>
                            </h2>
                            <div id="collapseOne-2" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    Architectural planning includes concept development, schematic design, space planning, floor plans, elevation drawings, 3D visualization, material selection, interior coordination, landscape planning, building consent documentation, and construction supervision. We provide complete design solutions from initial sketches to final construction documents.
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item wow fadeInUp" data-wow-delay="0.5s">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#collapseOne-3" aria-expanded="false">
                                    Why is structural engineering important for construction projects?
                                </button>
                            </h2>
                            <div id="collapseOne-3" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    Structural engineering ensures buildings can withstand loads, environmental challenges, and seismic activity while maintaining safety and durability. Proper structural design prevents future issues, optimizes material usage, reduces construction costs, and ensures compliance with safety standards and building codes throughout West Bengal.
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item wow fadeInUp" data-wow-delay="0.7s">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#collapseOne-4" aria-expanded="false">
                                    What tools and technologies do you use for design and analysis?
                                </button>
                            </h2>
                            <div id="collapseOne-4" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    We utilize advanced design tools including 3D modeling software, Building Information Modeling (BIM), finite element analysis, load calculation programs, and CAD drafting systems. These technologies enable precise design visualization, structural analysis, and efficient construction documentation for projects of all scales.
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item wow fadeInUp" data-wow-delay="0.9s">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#collapseOne-5" aria-expanded="false">
                                    How does 360 Properties Hub support architecture and structural projects?
                                </button>
                            </h2>
                            <div id="collapseOne-5" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    We provide integrated services including site evaluation, conceptual design, detailed architectural drawings, structural calculations, foundation design, soil stability assessment, construction documentation, building approval support, and on-site supervision. Our team collaborates with you from planning through construction to ensure design excellence and structural integrity.
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
