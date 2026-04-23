<!DOCTYPE html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Site Title - Optimized for "360" Brand Dominance -->
    <title>@yield('title', '360 Properties Hub | 360 Degree Property Solutions Kolkata | 360° Real Estate Services West Bengal')</title>


    <!-- Place favicon.ico in the root directory -->
    <link rel="apple-touch-icon" href="{{asset('assets/images/favicon.ico')}}">
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('assets/images/favicon.ico')}}">

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

    <!-- Performance Optimization -->
    <link rel="preload" href="{{ asset('assets/css/main.css') }}" as="style">
    <link rel="preload" href="{{ asset('assets/js/main.js') }}" as="script">
    <link rel="dns-prefetch" href="//fonts.googleapis.com">
    <link rel="dns-prefetch" href="//www.googletagmanager.com">
    <meta name="theme-color" content="#1a365d">
    <meta name="msapplication-TileColor" content="#1a365d">

    <!-- CSS here -->
    <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/font-awesome-pro.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/animate.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/solvior-icons.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/swiper.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/odometer-theme-default.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/nice-select.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/venobox.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/meanmenu.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/main.css')}}">

    <!-- SEO Meta Tags - 360 Brand Focused -->
    <meta name="description" content="@yield('meta_description', '360 Properties Hub - 360 degree property solutions in Kolkata. Complete 360° real estate services including legal compliance, investment advisory, tax planning across West Bengal. Your trusted 360 property partner.')">
    <meta name="keywords" content="@yield('meta_keywords', '360 properties, 360 degree property solutions, 360 real estate services, 360 property hub, property consultancy Kolkata, 360° property advisory, complete property solutions, 360 degree real estate, RERA compliance, property investment')">
    <meta name="author" content="360 Properties Hub">
    <meta name="robots" content="@yield('meta_robots', 'index, follow')">
    <meta name="revisit-after" content="7 days">
    <meta name="language" content="English">
    <meta name="distribution" content="global">
    <meta name="rating" content="general">

    <!-- Canonical URL -->
    <link rel="canonical" href="@yield('canonical_url', url()->current())">

    <!-- Open Graph Meta Tags (Facebook) - 360 Brand Optimized -->
    <meta property="og:title" content="@yield('og_title', '360 Properties Hub - 360 Degree Property Solutions Kolkata')">
    <meta property="og:description" content="@yield('og_description', '360 Properties Hub offers complete 360° property solutions in Kolkata. From legal compliance to investment advisory - your one-stop 360 degree real estate partner in West Bengal.')">
    <meta property="og:type" content="@yield('og_type', 'website')">
    <meta property="og:url" content="@yield('og_url', url()->current())">
    <meta property="og:image" content="@yield('og_image', 'https://360propertieshub.com/public/assets/images/logos/og-image.jpg')">
    <meta property="og:image:width" content="500">
    <meta property="og:image:height" content="500">
    <meta property="og:image:alt" content="@yield('og_image_alt', '360 Properties Hub - Property Consultancy Services')">
    <meta property="og:site_name" content="360 Properties Hub">
    <meta property="og:locale" content="en_IN">
    <meta property="fb:app_id" content="@yield('fb_app_id', '')">

    <!-- LinkedIn Meta Tags -->
    <meta property="linkedin:owner" content="@yield('linkedin_owner', '')">

    <!-- Additional SEO Meta Tags -->
    <meta name="geo.region" content="IN-WB">
    <meta name="geo.placename" content="Kolkata">
    <meta name="geo.position" content="22.5726;88.3639">
    <meta name="ICBM" content="22.5726, 88.3639">

    <!-- Search Engine Verification -->
    <meta name="google-site-verification" content="@yield('google_verification', '')" />
    <meta name="msvalidate.01" content="8A30D8B3CF29E0E2B1D36BF4F0E071E4" />

    <!-- IndexNow API Key -->
    <meta name="indexnow-key" content="df0ddf476b9f4431ada77cafac88d086" />

    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-177Q7NRH8S"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());
        gtag('config', 'G-177Q7NRH8S');
    </script>
    
    <!-- Clarity tracking code for https://360propertieshub.com/ -->
    <script type="text/javascript">
        (function(c,l,a,r,i,t,y){
                c[a]=c[a]||function(){(c[a].q=c[a].q||[]).push(arguments)};
                t=l.createElement(r);t.async=1;t.src="https://www.clarity.ms/tag/"+i;
                y=l.getElementsByTagName(r)[0];y.parentNode.insertBefore(t,y);
            })(window, document, "clarity", "script", "sq9k20ji7o");
    </script>

    <!-- Google reCAPTCHA v3 -->
    <script src="https://www.google.com/recaptcha/api.js?render={{ env('RECAPTCHA_SITE_KEY') }}"></script>
    <script>
        // Global reCAPTCHA helper
        window.RecaptchaHelper = {
            siteKey: '{{ env('RECAPTCHA_SITE_KEY') }}',
            
            execute: function(action) {
                return new Promise((resolve, reject) => {
                    if (typeof grecaptcha === 'undefined') {
                        reject(new Error('reCAPTCHA not loaded'));
                        return;
                    }
                    
                    grecaptcha.ready(function() {
                        grecaptcha.execute(window.RecaptchaHelper.siteKey, {action: action})
                            .then(resolve)
                            .catch(reject);
                    });
                });
            },
            
            // Helper for form submissions
            submitFormWithRecaptcha: function(form, action, submitUrl, options = {}) {
                return new Promise((resolve, reject) => {
                    this.execute(action).then(token => {
                        let formData = new FormData(form);
                        formData.append('g-recaptcha-response', token);
                        
                        // Allow custom form data modification
                        if (options.beforeSubmit && typeof options.beforeSubmit === 'function') {
                            formData = options.beforeSubmit(formData) || formData;
                        }
                        
                        const fetchOptions = {
                            method: 'POST',
                            body: formData,
                            headers: {
                                'X-Requested-With': 'XMLHttpRequest',
                                'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content'),
                                ...options.headers
                            }
                        };
                        
                        fetch(submitUrl, fetchOptions)
                            .then(response => {
                                if (!response.ok) {
                                    return response.json().then(err => Promise.reject(err));
                                }
                                return response.json();
                            })
                            .then(resolve)
                            .catch(reject);
                    }).catch(reject);
                });
            }
        };
    </script>

    @include('Partials.structured-data')
</head>

<body>

    <div class="mouseCursor cursor-outer"></div>
    <div class="mouseCursor cursor-inner">
        <span><i class="tji-angle-left"></i>Drag<i class="tji-angle-right"></i></span>
    </div>
    @include('Partials.Header')

    <main id="primary" class="site-main">
        @yield('content')
    </main>

    @include('Partials.Footer')
    
    <!-- Expert Solution Modal -->
    @include('components.expert-solution-modal')
    
    <!-- JS here -->
    <script src="{{ asset('assets/js/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>

    <script src="{{ asset('assets/js/gsap.min.js') }}"></script>
    <script src="{{ asset('assets/js/gsap-scroll-to-plugin.min.js') }}"></script>
    <script src="{{ asset('assets/js/gsap-scroll-trigger.min.js') }}"></script>
    <script src="{{ asset('assets/js/gsap-split-text.min.js') }}"></script>
    <script src="{{ asset('assets/js/smooth-scroll.min.js') }}"></script>

    <script src="{{ asset('assets/js/appear.min.js') }}"></script>
    <script src="{{ asset('assets/js/wow.min.js') }}"></script>
    <script src="{{ asset('assets/js/odometer.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery-knob.js') }}"></script>
    <script src="{{ asset('assets/js/swiper.min.js') }}"></script>
    <script src="{{ asset('assets/js/nice-select.js') }}"></script>
    <script src="{{ asset('assets/js/venobox.min.js') }}"></script>
    <script src="{{ asset('assets/js/meanmenu.js') }}"></script>
    <script src="{{ asset('assets/js/main.js') }}"></script>

    <!-- IndexNow API Auto-Submit Script -->
    <script>
        // IndexNow API Configuration
        const indexNowConfig = {
            key: 'df0ddf476b9f4431ada77cafac88d086',
            host: '360propertieshub.com',
            endpoint: 'https://api.indexnow.org/indexnow'
        };

        // Auto-submit current page to IndexNow API
        function submitToIndexNow(url) {
            const data = {
                host: indexNowConfig.host,
                key: indexNowConfig.key,
                urlList: [url]
            };

            fetch(indexNowConfig.endpoint, {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                },
                body: JSON.stringify(data)
            }).then(response => {
                if (response.ok) {
                    console.log('✅ Page submitted to IndexNow API:', url);
                }
            }).catch(error => {
                console.log('IndexNow submission failed:', error);
            });
        }

        // Submit current page when DOM is loaded
        document.addEventListener('DOMContentLoaded', function() {
            const currentUrl = window.location.href;

            // Only submit on important pages (not admin/internal pages)
            const importantPages = [
                '360propertieshub.com/',
                '360propertieshub.com/about-us',
                '360propertieshub.com/our-services',
                '360propertieshub.com/contact-us',
                '360propertieshub.com/our-blogs',
                '360propertieshub.com/properties-for-rent',
                '360propertieshub.com/hidco-property-solution',
                '360propertieshub.com/rera-compliance-supports',
                '360propertieshub.com/property-due-diligence',
                '360propertieshub.com/nri-property-services'
            ];

            const shouldSubmit = importantPages.some(page => currentUrl.includes(page));

            if (shouldSubmit) {
                // Delay submission by 2 seconds to ensure page is fully loaded
                setTimeout(() => {
                    submitToIndexNow(currentUrl);
                }, 2000);
            }
        });

        // Submit sitemap URL for faster discovery
        setTimeout(() => {
            submitToIndexNow('https://360propertieshub.com/sitemap.xml');
        }, 5000);
    </script>

    @yield('script')

</body>

</html>