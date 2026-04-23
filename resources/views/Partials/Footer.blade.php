   <!-- start: Footer Area -->
   <div class="footerStack">
       <footer class="tj-footer-area footer-1">

           <!-- start: Brand Section -->
           {{-- <section class="tj-brand-section">
               <div class="container">
                   <div class="row">
                       <div class="col-12">
                           <div class="tj-brand-slider">
                               <div class="swiper brand-slider-1 swiper-container">
                                   <div class="swiper-wrapper brand_wrapper">
                                       <div class="swiper-slide">
                                           <div class="brand-logo">
                                               <img src="{{ asset('assets/images/brand/brand-thumb-1.png') }}" alt="Brand">
                                           </div>
                                       </div>
                                       <div class="swiper-slide">
                                           <div class="brand-logo">
                                               <img src="{{ asset('assets/images/brand/brand-thumb-2.png') }}" alt="Brand">
                                           </div>
                                       </div>
                                       <div class="swiper-slide">
                                           <div class="brand-logo">
                                               <img src="{{ asset('assets/images/brand/brand-thumb-3.png') }}" alt="Brand">
                                           </div>
                                       </div>
                                       <div class="swiper-slide">
                                           <div class="brand-logo">
                                               <img src="{{ asset('assets/images/brand/brand-thumb-4.png') }}" alt="Brand">
                                           </div>
                                       </div>
                                       <div class="swiper-slide">
                                           <div class="brand-logo">
                                               <img src="{{ asset('assets/images/brand/brand-thumb-5.png') }}" alt="Brand">
                                           </div>
                                       </div>
                                       <div class="swiper-slide">
                                           <div class="brand-logo">
                                               <img src="{{ asset('assets/images/brand/brand-thumb-6.png') }}" alt="Brand">
                                           </div>
                                       </div>
                                       <div class="swiper-slide">
                                           <div class="brand-logo">
                                               <img src="{{ asset('assets/images/brand/brand-thumb-7.png') }}" alt="Brand">
                                           </div>
                                       </div>
                                       <div class="swiper-slide">
                                           <div class="brand-logo">
                                               <img src="{{ asset('assets/images/brand/brand-thumb-8.png') }}" alt="Brand">
                                           </div>
                                       </div>
                                       <div class="swiper-slide">
                                           <div class="brand-logo">
                                               <img src="{{ asset('assets/images/brand/brand-thumb-9.png') }}" alt="Brand">
                                           </div>
                                       </div>
                                       <div class="swiper-slide">
                                           <div class="brand-logo">
                                               <img src="{{ asset('assets/images/brand/brand-thumb-10.png') }}" alt="Brand">
                                           </div>
                                       </div>
                                       <div class="swiper-slide">
                                           <div class="brand-logo">
                                               <img src="{{ asset('assets/images/brand/brand-thumb-11.png') }}" alt="Brand">
                                           </div>
                                       </div>
                                   </div>
                               </div>
                           </div>
                       </div>
                   </div>
               </div>
           </section> --}}
           <!-- end: Brand Section -->

           <div class="footer-top-area fix">
               <div class="container">
                   <div class="row rg-50 line">
                       <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
                           <div class="footer-widget footer1-col-1 footer-contact-infos">
                               <div class="footer-title">
                                   <h4 class="title">Get in Touch</h4>
                               </div>
                               <div class="infos-item">
                                   <span><i class="fa-solid fa-phone"></i> Contact Number </span><br>
                                   <a href="tel:+918334027857">+91-8334027857</a><br>
                                   <a href="tel:+918444089530">+91-8444089530</a>

                               </div>
                               <div class="infos-item">
                                   <span><i class="fa-solid fa-envelope"></i> Email Us</span>
                                   <a href="mailto:contact@360propertieshub.com">contact@360propertieshub.com</a>
                               </div>
                               <div class="infos-item">
                                   <span><i class="fa-solid fa-location-dot"></i> Office Address</span>
                                   <p>11th Floor,Tower-1, PS Srijan Corporate Park, Sector-V, Saltlake, Kolkata-700091.</p>
                               </div>
                           </div>
                       </div>
                       <div class="col-xl-3 col-lg-2 col-md-6 col-sm-6">
                           <div class="footer-widget footer1-col-2 widget_nav_menu">
                               <div class="footer-title">
                                   <h4 class="title">Resources</h4>
                               </div>
                               <div class="widget-menu">
                                   <ul>
                                       <li><a href="{{ route('contact') }}">Contact Us</a></li>
                                       <li><a href="{{ route('about') }}">About Us</a></li>
                                       <li><a href="{{ route('services') }}">Services</a></li>
                                       {{-- <li><a href="{{ route('properties') }}">Rent Properties</a></li> --}}
                                       <li><a href="{{route('approveal')}}">Approvals & NOCs</a></li>
                                        <li><a href="{{route('architecture')}}">Architecture & Structural </a></li>
                                        <li><a href="{{route('nri-service')}}">NRI Services</a></li>
                                       <li><a href="{{ route('career') }}">Careers<span>New</span></a></li>
                                       <li><a href="{{ route('blog') }}">Blog</a></li>
                                        <li><a href="{{ route('faq') }}">FAQs</a></li>
                                   </ul>
                               </div>
                           </div>
                       </div>
                       <div class="col-xl-2 col-lg-3 col-md-6 col-sm-6">
                           <div class="footer-widget footer1-col-3 widget_nav_menu">
                               <div class="footer-title">
                                   <h4 class="title">Property Services</h4>
                               </div>
                               <div class="widget-menu">
                                   <ul>
                                       <li><a href="{{ route('hidco') }}">HIDCO Compliance</a></li>
                                       <li><a href="{{ route('nkda') }}">NKDA Regulatory</a></li>
                                       <li><a href="{{ route('webel') }}">WEBEL Solutions</a></li>
                                       <li><a href="{{ route('ndita') }}">NDITA Compliance</a></li>
                                       <li><a href="{{ route('kmc') }}">KMC Permissions</a></li>
                                       <li><a href="{{ route('ud-development') }}">UD Approvals</a></li>
                                       <li><a href="{{ route('building-plan') }}">Building Plan Approval</a></li>
                                   </ul>
                               </div>
                           </div>
                       </div>
                       <div class="col-xl-2 col-lg-3 col-md-6 col-sm-6">
                           <div class="footer-widget footer1-col-3 widget_nav_menu">
                               <div class="footer-title">
                                   <h4 class="title">Legal Solutions</h4>
                               </div>
                               <div class="widget-menu">
                                   <ul>
                                       <li><a href="{{ route('property-diligence') }}">Property Due Diligence</a></li>
                                       <li><a href="{{ route('title-verification') }}">Title Verification</a></li>
                                       <li><a href="{{ route('property-registration') }}">Registration Support</a></li>
                                       <li><a href="{{ route('legal-drafting') }}">Legal Documentation</a></li>
                                       <li><a href="{{ route('property-dispute') }}">Dispute Resolution</a></li>
                                       <li><a href="{{ route('nri') }}">NRI Property Desk</a></li>
                                       <li><a href="{{ route('mall') }}">Business Mall Setup</a></li>
                                   </ul>
                               </div>
                           </div>
                       </div>
                       <div class="col-xl-2 col-lg-3 col-md-6 col-sm-6">
                           <div class="footer-widget footer1-col-3 widget_nav_menu">
                               <div class="footer-title">
                                   <h4 class="title">Advisory & Support</h4>
                               </div>
                               <div class="widget-menu">
                                   <ul>
                                       <li><a href="{{ route('property-tax') }}">Tax Advisory</a></li>
                                       <li><a href="{{ route('dpr') }}">DPR Preparation</a></li>
                                       <li><a href="{{ route('corporate-property') }}">Corporate Consulting</a></li>
                                       <li><a href="{{ route('property-portfolio') }}">Portfolio Management</a></li>
                                       <li><a href="{{ route('completion-certificate') }}">Completion Certificates</a></li>
                                       <li><a href="{{ route('fire-noc') }}">Fire NOC Assistance</a></li>
                                       <li><a href="{{ route('government-liaison') }}">Government Liaison</a></li>
                                   </ul>
                               </div>
                           </div>
                       </div>

                   </div>
               </div>
           </div>
           <div class="footer-copyright-area">
               <div class="container">
                   <div class="row">
                       <div class="col-12">
                           <div class="copyright-content-area">
                               <div class="copyright-text">
                                   <p>© 2025 <a href="https://360propertieshub.com/" target="_blank"> 360 Properties Hub </a> All right reserved. Developed by <a href="https://clickngotech.in/" target="_blank">ClicknGo</a></p>
                               </div>
                               <div class="copyright-socails">
                                   <ul>
                                       <li><a href="https://www.facebook.com/profile.php?id=61560585091591"><i class="fa-brands fa-facebook-f"></i></a></li>
                                       <li><a href="https://www.instagram.com/360propertieshub/"><i class="fa-brands fa-instagram"></i></a></li>
                                       <li><a href="https://www.linkedin.com/company/360-properties-hub/posts/?feedView=all"><i class="fa-brands fa-linkedin-in"></i></a></li>
                                       <li><a href="https://x.com/"><i class="fa-brands fa-twitter"></i></a></li>
                                   </ul>
                               </div>
                               <div class="copyright-menu">
                                   <ul>
                                       <li><a href="{{ route('privacy-policy')}}">Policy & privacy</a></li>
                                       <li><a href="{{ route('terms-and-condition') }}">Terms & conditions</a></li>
                                   </ul>
                               </div>
                           </div>
                       </div>
                   </div>
               </div>
           </div>

           <!-- start: back to top -->
           <div class="back-to-top-wrapper">
               <button id="back_to_top" type="button" class="back-to-top-btn style-2">
                   <i class="tji-arrow-up"></i>
                   <span>GO TOP</span>
               </button>
           </div>
           <!-- end: back to top -->
       </footer>
   </div>
   <!-- end: Footer Area -->
