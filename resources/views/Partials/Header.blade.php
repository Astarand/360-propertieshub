<!-- start: Hamburger Menu -->
<div class="body-overlay"></div>
<div class="hamburger-area" data-lenis-prevent="">
    <div class="hamburger_bg"></div>
    <div class="hamburger_wrapper">
        <div class="hamburger_top d-flex align-items-center justify-content-between">
            <div class="hamburger_logo">
                <a href="{{ route('home') }}" class="mobile_logo">
                    <img src="{{ asset('assets/images/logos/logo-white.png') }}" alt="Logo">
                </a>
            </div>
            <div class="hamburger_close">
                <button class="hamburger_close_btn hamburgerCloseBtn"><i class="fa-thin fa-times"></i></button>
            </div>
        </div>

        <div class="hamburger_menu">
            <div class="mobile_menu"></div>
        </div>

        <div class="hamburger-infos">
            <h4 class="hamburger-title">Contact info</h4>
            <div class="contact-info">
                <div class="contact_item">
                    <span class="subtitle">Email</span>
                    <div class="text"><a class="link"
                            href="mailto:contact@360propertieshub.com">contact@360propertieshub.com</a></div>
                </div>
                <div class="contact_item">
                    <span class="subtitle">Phone</span>
                    <div class="text"><a class="link" href="tel:+918444089530">+91-8444089530</a></div>
                </div>
                <div class="contact_item">
                    <span class="subtitle">Location</span>
                    <div class="text">PS Srijan Corporate Park, GP Block, Sector-V, Kolkata, West Bengal 700091</div>
                </div>
            </div>
        </div>
        <div class="hamburger-socials">
            <h4 class="hamburger-title">Follow us</h4>
            <ul>
                <li>
                    <a href="https://www.facebook.com/profile.php?id=61560585091591"><i
                            class="fa-brands fa-facebook-f"></i></a>
                </li>
                <li>
                    <a href="https://www.instagram.com/360propertieshub/"><i class="fa-brands fa-instagram"></i></a>
                </li>
                <li>
                    <a href="https://www.linkedin.com/company/360-properties-hub/posts/?feedView=all"><i
                            class="fa-brands fa-linkedin-in"></i></a>
                </li>
                <li>
                    <a href="#"><i class="fa-brands fa-twitter"></i></a>
                </li>
            </ul>
        </div>
    </div>
</div>
<!-- end: Hamburger Menu -->

<!-- start: Header Area -->
<header class="tj-header-area header-5 header-absolute">
    <div class="header-topbar">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="header-topbar_wrap">

                        <div class="topbar_note">
                            <i class="tji-check"></i> #1 Trusted Partner: Navigating Every Property Milestone: Legal, Compliance & Development Services.
                        </div>

                        <div class="topbar_infos">
                            <div class="info_item">
                                <span><i class="tji-clock"></i></span>
                                <span>Mon - Saturday : 9:30am - 6:30pm</span>
                            </div>
                            <div class="info_item">
                                <span><i class="tji-email"></i></span>
                                <a href="mailto:contact@360propertieshub.com">contact@360propertieshub.com</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="header-bottom">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="header-wrapper">

                        <!-- logo -->
                        <div class="site-logo">
                            <a class="logo" href="{{ route('home') }}">
                                <img src="{{ asset('assets/images/logos/logo.png') }}" alt="logo">
                            </a>
                        </div>

                        <!-- main navigation -->
                        <div class="mainmenu d-lg-block d-none" id="main-menu">
                            <ul>
                                <li><a href="{{ route('home') }}">Home</a></li>
                                <li><a href="{{ route('about') }}">About Us</a></li>
                                <li class="has-dropdown">
                                    <a href="{{ route('services') }}">Servies</a>
                                    <ul class="sub-menu header__mega-menu mega-menu mega-menu-pages">
                                        <li>
                                            <div class="mega-menu-wrapper">
                                                <div class="mega-menu-pages-single">
                                                    <div class="mega-menu-pages-single-inner">
                                                        <h6 class="mega-menu-title">Regulatory Compliance</h6>
                                                        <div class="mega-menu-list">
                                                            <a href="{{ route('hidco') }}">HIDCO Property
                                                                Compliance<span
                                                                    class="mega-menu-badge mega-menu-badge-hot">HOT</span></a>
                                                            <a href="{{ route('nkda') }}">NKDA Regulatory Support</a>
                                                            <a href="{{ route('webel') }}">WEBEL Property Solutions</a>
                                                            <a href="{{ route('ndita') }}">NDITA Industrial
                                                                Compliance</a>
                                                            <a href="{{ route('kmc') }}">KMC Municipal Services</a>
                                                            <a href="{{ route('ud-development')}}">UD Development
                                                                Permissions</a>
                                                            <a href="{{ route('environmental')}}">Environmental
                                                                Clearance Services</a>
                                                            <a href="{{ route('rera')}}">RERA Compliance Support</a>
                                                            <a href="{{ route('building-plan')}}">Building Plan
                                                                Approval</a>
                                                            <a href="{{ route('fire-noc')}}">Fire NOC Services</a>
                                                            <a href="{{ route ('government-liaison') }}">Government
                                                                Liaison Services</a>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="mega-menu-pages-single">
                                                    <div class="mega-menu-pages-single-inner">
                                                        <h6 class="mega-menu-title">Legal Services</h6>
                                                        <div class="mega-menu-list">
                                                            <a href="{{ route ('property-diligence') }}">Property Due
                                                                Diligence<span
                                                                    class=" mega-menu-badge mega-menu-badge-hot">HOT</span></a>
                                                            <a href="{{ route ('title-verification') }}">Title
                                                                Verification Services</a>
                                                            <a href="{{ route ('property-registration') }}">Property
                                                                Registration Support</a>
                                                            <a href="{{ route ('legal-drafting') }}">Legal Documentation
                                                                Drafting</a>
                                                            <a href="{{ route ('property-dispute') }}">Property Dispute
                                                                Resolution</a>
                                                            <a href="{{ route ('real-estate-litigation') }}">Real Estate
                                                                Litigation</a>
                                                            <a href="{{ route ('legal-audit') }}">Legal Audit
                                                                Services</a>
                                                            <a href="{{ route ('contract-review') }}">Contract Review
                                                                Services</a>
                                                            <a href="{{ route ('property-valuation') }}">Property
                                                                Valuation Services</a>
                                                            <a href="{{ route('joint-venture') }}">Joint Venture
                                                                Documentation</a>
                                                            <a href="{{ route('property-taxation') }}">Property Taxation
                                                                Planning</a>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="mega-menu-pages-single">
                                                    <div class="mega-menu-pages-single-inner">
                                                        <h6 class="mega-menu-title">Business & Corporate</h6>
                                                        <div class="mega-menu-list">
                                                            <a href="{{ route('mall') }}">Business Mall Setup<span
                                                                    class="mega-menu-badge ">NEW</span></a>
                                                            <a href="{{ route('nri') }}">NRI Property Services<span
                                                                    class="mega-menu-badge mega-menu-badge-hot">HOT</span></a>
                                                            <a href="{{ route('trade-license') }}">Trade License
                                                                Registration</a>
                                                            <a href="{{ route('dpr') }}">DPR Preparation Services</a>
                                                            <a href="{{ route('completion-certificate') }}">Completion
                                                                Certificate Services</a>
                                                            <a href="{{ route('corporate-property') }}">Corporate
                                                                Property Consulting</a>
                                                            <a href="{{ route('property-investment') }}">Property
                                                                Investment Advisory</a>
                                                            <a href="{{ route('property-tax') }}">Property Tax
                                                                Advisory</a>
                                                            <a href="{{ route('property-portfolio') }}">Property
                                                                Portfolio Management</a>
                                                            <a href="{{ route('real-estate-structuring') }}">Real Estate
                                                                Structuring</a>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-12 col-lg-3 mega-menu-pages-single">
                                                    <div class="mega-menu-pages-single-inner">
                                                        <div class="tj-sidebar-cta"
                                                            data-bg-image="assets/images/blog/widget-cta.webp">
                                                            <div class="content">
                                                                <h3>Need Expert Legal Help?<br>Get Free Consultation
                                                                </h3>
                                                                <p>
                                                                    Trusted by 500+ clients including Godrej Properties
                                                                    & Ambuja Neotia for comprehensive property
                                                                    solutions.
                                                                </p>
                                                            </div>
                                                            <div class="cta-btn">
                                                                <a href="{{ route('contact') }}"
                                                                    class="tj-primary-btn white-btn">
                                                                    <div class="btn_inner">
                                                                        <div class="btn_icon">
                                                                            <span>
                                                                                <i class="tji-arrow-right"></i>
                                                                                <i class="tji-arrow-right"></i>
                                                                            </span>
                                                                        </div>
                                                                        <div class="btn_text"><span>Get in touch</span>
                                                                        </div>
                                                                    </div>
                                                                </a>
                                                                <img class="shapes move-anim-2"
                                                                    src="assets/images/shapes/carrow.png" alt="shape">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </li>
                                <li><a href="{{route('approveal')}}">Approvals & NOCs</a></li>
                                <li><a href="{{route('architecture')}}">Architecture & Structural </a></li>
{{--                                <li><a href="{{ route('properties') }}">Property Deal</a></li>--}}
                                <li><a href="{{ route('contact') }}">Contact</a></li>
                            </ul>
                        </div>

                        <div class="header_right_info d-none d-md-inline-flex">
                            <!-- button -->
                            <a href="#" class="tj-primary-btn" id="openExpertModal">
                                <div class="btn_inner">
                                    <div class="btn_icon">
                                        <span>
                                            <i class="tji-arrow-right"></i>
                                            <i class="tji-arrow-right"></i>
                                        </span>
                                    </div>
                                    <div class="btn_text">
                                        <span>Get Expert Solution</span>
                                    </div>
                                </div>
                            </a>
                        </div>

                        <!-- menu bar -->
                        <button class="menu_btn d-lg-none hamburgerBtn">
                            Menu
                            <span class="cubes">
                                <span></span>
                                <span></span>
                                <span></span>
                                <span></span>
                            </span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>

<header class="tj-header-area header-1 header-duplicate header-sticky">
    <div class="header-bottom">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="header-wrapper">

                        <!-- logo -->
                        <div class="site-logo">
                            <a class="logo" href="{{ route('home') }}">
                                <img src="assets/images/logos/logo-white.png" alt="logo">
                            </a>
                        </div>

                        <!-- main navigation -->
                        <div class="mainmenu d-lg-block d-none">
                            <ul>
                                <li><a href="{{ route('home') }}">Home</a></li>
                                <li class="has-dropdown">
                                    <a href="{{ route('services') }}">Servies</a>
                                    <ul class="sub-menu header__mega-menu mega-menu mega-menu-pages">
                                        <li>
                                            <div class="mega-menu-wrapper">
                                                <div class="mega-menu-pages-single">
                                                    <div class="mega-menu-pages-single-inner">
                                                        <h6 class="mega-menu-title">Regulatory Compliance</h6>
                                                        <div class="mega-menu-list">
                                                            <a href="{{ route('hidco') }}">HIDCO Property
                                                                Compliance<span
                                                                    class="mega-menu-badge mega-menu-badge-hot">HOT</span></a>
                                                            <a href="{{ route('nkda') }}">NKDA Regulatory Support</a>
                                                            <a href="{{ route('webel') }}">WEBEL Property Solutions</a>
                                                            <a href="{{ route('ndita') }}">NDITA Industrial
                                                                Compliance</a>
                                                            <a href="{{ route('kmc') }}">KMC Municipal Services</a>
                                                            <a href="{{ route('ud-development')}}">UD Development
                                                                Permissions</a>
                                                            <a href="{{ route('environmental')}}">Environmental
                                                                Clearance Services</a>
                                                            <a href="{{ route('rera')}}">RERA Compliance Support</a>
                                                            <a href="{{ route('building-plan')}}">Building Plan
                                                                Approval</a>
                                                            <a href="{{ route('fire-noc')}}">Fire NOC Services</a>
                                                            <a href="{{ route ('government-liaison') }}">Government
                                                                Liaison Services</a>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="mega-menu-pages-single">
                                                    <div class="mega-menu-pages-single-inner">
                                                        <h6 class="mega-menu-title">Legal Services</h6>
                                                        <div class="mega-menu-list">
                                                            <a href="{{ route ('property-diligence') }}">Property Due
                                                                Diligence<span
                                                                    class=" mega-menu-badge mega-menu-badge-hot">HOT</span></a>
                                                            <a href="{{ route ('title-verification') }}">Title
                                                                Verification Services</a>
                                                            <a href="{{ route ('property-registration') }}">Property
                                                                Registration Support</a>
                                                            <a href="{{ route ('legal-drafting') }}">Legal Documentation
                                                                Drafting</a>
                                                            <a href="{{ route ('property-dispute') }}">Property Dispute
                                                                Resolution</a>
                                                            <a href="{{ route ('real-estate-litigation') }}">Real Estate
                                                                Litigation</a>
                                                            <a href="{{ route ('legal-audit') }}">Legal Audit
                                                                Services</a>
                                                            <a href="{{ route ('contract-review') }}">Contract Review
                                                                Services</a>
                                                            <a href="{{ route ('property-valuation') }}">Property
                                                                Valuation Services</a>
                                                            <a href="{{ route('joint-venture') }}">Joint Venture
                                                                Documentation</a>
                                                            <a href="{{ route('property-taxation') }}">Property Taxation
                                                                Planning</a>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="mega-menu-pages-single">
                                                    <div class="mega-menu-pages-single-inner">
                                                        <h6 class="mega-menu-title">Business & Corporate</h6>
                                                        <div class="mega-menu-list">
                                                            <a href="{{ route('mall') }}">Business Mall Setup<span
                                                                    class="mega-menu-badge ">NEW</span></a>
                                                            <a href="{{ route('nri') }}">NRI Property Services<span
                                                                    class="mega-menu-badge mega-menu-badge-hot">HOT</span></a>
                                                            <a href="{{ route('trade-license') }}">Trade License
                                                                Registration</a>
                                                            <a href="{{ route('dpr') }}">DPR Preparation Services</a>
                                                            <a href="{{ route('completion-certificate') }}">Completion
                                                                Certificate Services</a>
                                                            <a href="{{ route('corporate-property') }}">Corporate
                                                                Property Consulting</a>
                                                            <a href="{{ route('property-investment') }}">Property
                                                                Investment Advisory</a>
                                                            <a href="{{ route('property-tax') }}">Property Tax
                                                                Advisory</a>
                                                            <a href="{{ route('property-portfolio') }}">Property
                                                                Portfolio Management</a>
                                                            <a href="{{ route('real-estate-structuring') }}">Real Estate
                                                                Structuring</a>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-12 col-lg-3 mega-menu-pages-single">
                                                    <div class="mega-menu-pages-single-inner">
                                                        <div class="tj-sidebar-cta"
                                                            data-bg-image="assets/images/blog/widget-cta.webp">
                                                            <div class="content">
                                                                <h3>Need Expert Legal Help?<br>Get Free Consultation
                                                                </h3>
                                                                <p>
                                                                    Trusted by 500+ clients including Godrej Properties
                                                                    & Ambuja Neotia for comprehensive property
                                                                    solutions.
                                                                </p>
                                                            </div>
                                                            <div class="cta-btn">
                                                                <a href="{{ route('contact') }}"
                                                                    class="tj-primary-btn white-btn">
                                                                    <div class="btn_inner">
                                                                        <div class="btn_icon">
                                                                            <span>
                                                                                <i class="tji-arrow-right"></i>
                                                                                <i class="tji-arrow-right"></i>
                                                                            </span>
                                                                        </div>
                                                                        <div class="btn_text"><span>Get in touch</span>
                                                                        </div>
                                                                    </div>
                                                                </a>
                                                                <img class="shapes move-anim-2"
                                                                    src="assets/images/shapes/carrow.png" alt="shape">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </li>
                               <li><a href="{{route('approveal')}}">Approvals & NOCs</a></li>
                                <li><a href="{{route('architecture')}}">Architecture & Structural </a></li>
{{--                                <li><a href="{{ route('properties') }}">Property Deal</a></li>--}}
                                <li><a href="{{ route('contact') }}">Contact</a></li>
                            </ul>
                        </div>

                        <div class="header_right_info d-none d-md-inline-flex">
                            <!-- button -->
                            <a href="#" class="tj-primary-btn header_btn" id="openExpertModalSticky">
                                <div class="btn_inner">
                                    <div class="btn_icon">
                                        <span>
                                            <i class="tji-arrow-right"></i>
                                            <i class="tji-arrow-right"></i>
                                        </span>
                                    </div>
                                    <div class="btn_text">
                                        <span>Get Expert Solution</span>
                                    </div>
                                </div>
                            </a>
                        </div>

                        <!-- menu bar -->
                        <button class="menu_btn d-lg-none hamburgerBtn">
                            Menu
                            <span class="cubes">
                                <span></span>
                                <span></span>
                                <span></span>
                                <span></span>
                            </span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<!-- end: Header Area -->
