@extends('Layouts.App')

@section('title', 'Frequently Asked Questions - Property Consultancy Kolkata - 360 Properties Hub')
@section('meta_description', 'Get answers to frequently asked questions about property consultancy services in Kolkata. Expert guidance on legal compliance, RERA, and real estate services in West Bengal.')
@section('meta_keywords', 'property consultancy FAQ Kolkata, real estate questions West Bengal, property legal FAQ Kolkata, RERA compliance questions Bengal, property advisory FAQ Kolkata')
@section('canonical_url', url()->current())
@section('og_title', 'Frequently Asked Questions - Property Consultancy Kolkata - 360 Properties Hub')
@section('og_description', 'Find answers to common questions about property consultancy, legal compliance, and real estate services in Kolkata and West Bengal.')
@section('og_image', asset('assets/images/faq-property.jpg'))

@section('content')
<!-- start: Breadcrumb Section -->
<section class="tj-page-header" data-bg-image="{{ asset('assets/images/bg/pheader-bg.png') }}">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="tj-page-header-content text-center">
                    <h1 class="tj-page-title text-anim">Frequently Asked Questions</h1>
                    <div class="tj-page-link wow fadeInUp" data-wow-delay="0.1s">
                        <span>
                            <a href="{{ route('home')}}">
                                <span>Home</span>
                            </a>
                        </span>
                        <span>/</span>
                        <span>
                            <span>FAQs</span>
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- end: Breadcrumb Section -->

<!-- start: Faq Section -->
<section class="tj-faq-area section-space bg-white">
    <div class="container">
        <div class="row">
            <div class="col-xl-12 col-lg-12">
                <div class="sec-heading mb-0 tj-sticky">
                    <h2 class="sec-title text-anim text-center">
                        Answers to the questions our clients ask most.
                    </h2>
                </div>
            </div>

            <div class="col-xl-12 col-lg-12">
                <div class="tj-faq">
                    <div class="accordion tj-faq-style style-2" id="faqMaster">

                        <!-- 1 -->
                        <div class="accordion-item wow fadeInUp" data-wow-delay="0.1s">
                            <h2 class="accordion-header">
                                <button class="accordion-button" data-bs-toggle="collapse"
                                    data-bs-target="#faq1" aria-expanded="false">
                                    Is property mutation mandatory after property purchase in Kolkata?
                                </button>
                            </h2>
                            <div id="faq1" class="accordion-collapse"
                                data-bs-parent="#faqMaster">
                                <div class="accordion-body">
                                   <p>Yes, mutation is mandatory after purchasing a property in Kolkata. Mutation
                                       updates ownership records in municipal tax records maintained by Kolkata
                                       Municipal Corporation.<br> Without mutation:<br>
                                       - You may face issues paying property tax <br>
                                       - Property resale can become difficult<br>
                                       - Utility connections may be delayed
                                   </p>

                                </div>
                            </div>
                        </div>

                        <!-- 2 -->
                        <div class="accordion-item wow fadeInUp" data-wow-delay="0.2s">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" data-bs-toggle="collapse"
                                    data-bs-target="#faq2" aria-expanded="false">
                                    Can I sell property without an Occupancy Certificate in West Bengal?
                                </button>
                            </h2>
                            <div id="faq2" class="accordion-collapse collapse"
                                data-bs-parent="#faqMaster">
                                <div class="accordion-body">
                                    <p>Technically, a property can sometimes be sold without an OC, but it is high-risk
                                    and not recommended. Buyers, banks, and legal authorities usually require OC
                                    to verify that construction follows approved plans and safety norms.</p>
                                </div>
                            </div>
                        </div>

                        <!-- 3 -->
                        <div class="accordion-item wow fadeInUp" data-wow-delay="0.3s">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" data-bs-toggle="collapse"
                                    data-bs-target="#faq3" aria-expanded="false">
                                    How long does property mutation take in Kolkata?
                                </button>
                            </h2>
                            <div id="faq3" class="accordion-collapse collapse"
                                data-bs-parent="#faqMaster">
                                <div class="accordion-body">
                                   <p>
                                       Mutation processing usually takes<br>
                                       - 15–30 days (if documents are correct) <br>
                                       - Longer if inspection or document verification is required <br>
                                       Timelines depend on application accuracy and municipal workload.
                                   </p>
                                </div>
                            </div>
                        </div>

                        <!-- 4 -->
                        <div class="accordion-item wow fadeInUp" data-wow-delay="0.4s">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" data-bs-toggle="collapse"
                                    data-bs-target="#faq4" aria-expanded="false">
                                    Is a trade license mandatory for a home-based business in Kolkata?
                                </button>
                            </h2>
                            <div id="faq4" class="accordion-collapse collapse"
                                data-bs-parent="#faqMaster">
                                <div class="accordion-body">
                                    <p>
                                        Yes, if you run a commercial activity from a residential property, you may
                                        require a trade license from KMC depending on business type, customer
                                        footfall, and zoning permission.<br>
                                        Examples requiring a license:<br>
                                        - Cloud kitchen <br>
                                        - Beauty salon<br>
                                        - Coaching center<br>
                                        - Small office
                                    </p>
                                </div>
                            </div>
                        </div>

                        <!-- 5 -->
                        <div class="accordion-item wow fadeInUp" data-wow-delay="0.5s">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" data-bs-toggle="collapse"
                                    data-bs-target="#faq5" aria-expanded="false">
                                    What happens if building construction is done without plan approval?
                                </button>
                            </h2>
                            <div id="faq5" class="accordion-collapse collapse"
                                data-bs-parent="#faqMaster">
                                <div class="accordion-body">
                                    <p>Construction without municipal approval is considered illegal and may lead to:<br>
                                        - Penalty or heavy fine<br>
                                        - Stop-work notice <br>
                                        - Demolition order <br>
                                        - Difficulty selling property
                                    </p>
                                </div>
                            </div>
                        </div>

                        <!-- 6 -->
                        <div class="accordion-item wow fadeInUp" data-wow-delay="0.6s">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" data-bs-toggle="collapse"
                                    data-bs-target="#faq6" aria-expanded="false">
                                    Who issues a Fire Safety Certificate in West Bengal?
                                </button>
                            </h2>
                            <div id="faq6" class="accordion-collapse collapse"
                                data-bs-parent="#faqMaster">
                                <div class="accordion-body">
                                    <p>
                                        Fire safety clearance is issued by the West Bengal Fire & Emergency Services.<br>
                                        It is mandatory for:<br>
                                        - High-rise buildings <br>
                                        - Commercial complexes <br>
                                        - Hotels <br>
                                        - Hospitals <br>
                                        - Industrial buildings
                                    </p>
                                </div>
                            </div>
                        </div>

                        <!-- 7 -->
                        <div class="accordion-item wow fadeInUp" data-wow-delay="0.7s">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" data-bs-toggle="collapse"
                                    data-bs-target="#faq7" aria-expanded="false">
                                    Is property registration compulsory in West Bengal?
                                </button>
                            </h2>
                            <div id="faq7" class="accordion-collapse collapse"
                                data-bs-parent="#faqMaster">
                                <div class="accordion-body">
                                    <p>
                                        Yes, property registration is compulsory under property laws regulated by the Government of West Bengal.<br>
                                        Without registration:<br>
                                        - Ownership is not legally recognized<br>
                                        - Property cannot be legally transferred<br>
                                        - Loans cannot be obtained
                                    </p>
                                </div>
                            </div>
                        </div>

                        <!-- 8 -->
                        <div class="accordion-item wow fadeInUp" data-wow-delay="0.8s">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" data-bs-toggle="collapse"
                                    data-bs-target="#faq8" aria-expanded="false">
                                    How much property tax is charged in Kolkata?
                                </button>
                            </h2>
                            <div id="faq8" class="accordion-collapse collapse"
                                data-bs-parent="#faqMaster">
                                <div class="accordion-body">
                                    <p>
                                        Property tax depends on:<br>
                                        - Property size<br>
                                        - Location<br>
                                        - Usage type (residential/commercial)<br>
                                        - Annual valuation<br>
                                        Property tax must be paid to KMC annually or quarterly.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <!-- 9 -->
                        <div class="accordion-item wow fadeInUp" data-wow-delay="0.9s">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" data-bs-toggle="collapse"
                                    data-bs-target="#faq9" aria-expanded="false">
                                    Can I convert residential property into commercial property in Kolkata?
                                </button>
                            </h2>
                            <div id="faq9" class="accordion-collapse collapse"
                                data-bs-parent="#faqMaster">
                                <div class="accordion-body">
                                    <p>
                                        Yes, but only with zoning approval from municipal authorities and sometimes
                                        approval from the Department of Urban Development & Municipal Affairs.
                                        Unauthorized conversion may result in penalties.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <!-- 10 -->
                        <div class="accordion-item wow fadeInUp" data-wow-delay="1.0s">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" data-bs-toggle="collapse"
                                    data-bs-target="#faq10" aria-expanded="false">
                                    What is the penalty for not paying property tax in Kolkata?
                                </button>
                            </h2>
                            <div id="faq10" class="accordion-collapse collapse"
                                data-bs-parent="#faqMaster">
                                <div class="accordion-body">
                                    <p>
                                        Penalties may include:<br>
                                        - Late payment fines <br>
                                        - Interest on outstanding tax <br>
                                        - Legal recovery notices <br>
                                        - Restriction on property transfer

                                    </p>
                                </div>
                            </div>
                        </div>

                        <!-- 11 -->
                        <div class="accordion-item wow fadeInUp" data-wow-delay="1.1s">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" data-bs-toggle="collapse"
                                    data-bs-target="#faq11" aria-expanded="false">
                                    Is a Fire NOC required for small commercial buildings?
                                </button>
                            </h2>
                            <div id="faq11" class="accordion-collapse collapse"
                                data-bs-parent="#faqMaster">
                                <div class="accordion-body">
                                    <p>
                                        Depends on building size and risk category. Small shops may not require it,
                                        but multi-floor or high-footfall commercial spaces usually need fire clearance.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <!-- 12 -->
                        <div class="accordion-item wow fadeInUp" data-wow-delay="1.2s">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" data-bs-toggle="collapse"
                                    data-bs-target="#faq12" aria-expanded="false">
                                    What is the difference between Completion Certificate and Occupancy
                                    Certificate?
                                </button>
                            </h2>
                            <div id="faq12" class="accordion-collapse collapse"
                                data-bs-parent="#faqMaster">
                                <div class="accordion-body">
                                    <p>
                                        <strong>Completion Certificate:</strong><br>
                                        - Confirms building is constructed as per approved plan.<br>
                                        <strong>Occupancy Certificate:</strong><br>
                                        - Confirms building is safe and legally ready for use.<br>
                                        Both are important for full legal compliance.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <!-- 13 -->
                        <div class="accordion-item wow fadeInUp" data-wow-delay="1.3s">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" data-bs-toggle="collapse"
                                    data-bs-target="#faq13" aria-expanded="false">
                                    Is environmental clearance required for commercial property?
                                </button>
                            </h2>
                            <div id="faq13" class="accordion-collapse collapse"
                                data-bs-parent="#faqMaster">
                                <div class="accordion-body">
                                    <p>
                                        Yes, for certain businesses and industrial units. Clearance is issued by
                                        West Bengal Pollution Control Board.<br>
                                        Required for:<br>
                                        - Factories <br>
                                        - Manufacturing units <br>
                                        - Large commercial kitchens <br>
                                        - Chemical storage facilities
                                    </p>
                                </div>
                            </div>
                        </div>

                        <!-- 14 -->
                        <div class="accordion-item wow fadeInUp" data-wow-delay="1.4s">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" data-bs-toggle="collapse"
                                    data-bs-target="#faq14" aria-expanded="false">
                                    Do you assist with project-finance syndication?
                                </button>
                            </h2>
                            <div id="faq14" class="accordion-collapse collapse"
                                data-bs-parent="#faqMaster">
                                <div class="accordion-body">
                                    Yes. We prepare the financial model and DPR, pitch banks
                                    and NBFCs, negotiate term-sheets, and close funding
                                    transactions—often blending debt with private-equity
                                    tranches for optimal capital cost.
                                </div>
                            </div>
                        </div>

                        <!-- 15 -->
                        <div class="accordion-item wow fadeInUp" data-wow-delay="1.5s">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" data-bs-toggle="collapse"
                                    data-bs-target="#faq15" aria-expanded="false">
                                    Can property be registered if building plan approval is missing?
                                </button>
                            </h2>
                            <div id="faq15" class="accordion-collapse collapse"
                                data-bs-parent="#faqMaster">
                                <div class="accordion-body">
                                    <p>
                                        Registration of land may happen, but building legality can be challenged later.
                                        Buyers should always verify building approval status before purchase.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <!-- 16 -->
                        <div class="accordion-item wow fadeInUp" data-wow-delay="1.6s">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" data-bs-toggle="collapse"
                                    data-bs-target="#faq16" aria-expanded="false">
                                    Do banks check property compliance before approving home loans?
                                </button>
                            </h2>
                            <div id="faq16" class="accordion-collapse collapse"
                                data-bs-parent="#faqMaster">
                                <div class="accordion-body">
                                    <p>
                                        Yes, banks verify:<br>
                                        - Registration status<br>
                                        - Mutation records<br>
                                        - Building approval<br>
                                        - Occupancy certificate<br>
                                        - Property tax status<br>
                                        Loan approval may be rejected if compliance is incomplete.

                                    </p>
                                </div>
                            </div>
                        </div>

                        <!-- 17 -->
                        <div class="accordion-item wow fadeInUp" data-wow-delay="1.7s">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" data-bs-toggle="collapse"
                                    data-bs-target="#faq17" aria-expanded="false">
                                    Is trade license transferable when business ownership changes?
                                </button>
                            </h2>
                            <div id="faq17" class="accordion-collapse collapse"
                                data-bs-parent="#faqMaster">
                                <div class="accordion-body">
                                    <p>
                                        Usually no. A new trade license application is required when:<br>
                                        - Business ownership changes<br>
                                        - Business activity changes<br>
                                        - Business location changes
                                    </p>
                                </div>
                            </div>
                        </div>

                        <!-- 18 -->
                        <div class="accordion-item wow fadeInUp" data-wow-delay="1.8s">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" data-bs-toggle="collapse"
                                    data-bs-target="#faq18" aria-expanded="false">
                                    Can illegal construction be regularized in Kolkata?
                                </button>
                            </h2>
                            <div id="faq18" class="accordion-collapse collapse"
                                data-bs-parent="#faqMaster">
                                <div class="accordion-body">
                                   <p>
                                       Sometimes, subject to penalty and eligibility under regularization schemes.
                                       However, not all illegal constructions qualify.
                                   </p>
                                </div>
                            </div>
                        </div>
                        <!-- 19 -->
                        <div class="accordion-item wow fadeInUp" data-wow-delay="1.8s">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" data-bs-toggle="collapse"
                                        data-bs-target="#faq18" aria-expanded="false">
                                    What documents should buyers check before purchasing property in
                                    Kolkata?
                                </button>
                            </h2>
                            <div id="faq18" class="accordion-collapse collapse"
                                 data-bs-parent="#faqMaster">
                                <div class="accordion-body">
                                    <p>
                                        Buyers should verify: <br>
                                        - Sale deed <br>
                                        - Mutation certificate <br>
                                        - Building plan approval <br>
                                        - Occupancy certificate <br>
                                        - Property tax receipt <br>
                                        - NOCs (if applicable)
                                    </p>
                                </div>
                            </div>
                        </div>
                        <!-- 20 -->
                        <div class="accordion-item wow fadeInUp" data-wow-delay="1.8s">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" data-bs-toggle="collapse"
                                        data-bs-target="#faq18" aria-expanded="false">
                                    What is the biggest mistake property buyers make in Kolkata?
                                </button>
                            </h2>
                            <div id="faq18" class="accordion-collapse collapse"
                                 data-bs-parent="#faqMaster">
                                <div class="accordion-body">
                                    <p>
                                        Most common mistakes include: <br>
                                        - Not verifying building approval <br>
                                        - Not checking mutation status <br>
                                        - Ignoring property tax dues <br>
                                        - Buying property without OC
                                    </p>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- end: Faq Section -->



@endsection

@section('script')

@endsection
