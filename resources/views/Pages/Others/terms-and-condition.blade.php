@extends('Layouts.App')

@section('title', 'Terms and Conditions - 360 Properties Hub Kolkata')
@section('meta_description', 'Terms and Conditions for 360 Properties Hub property consultancy services in Kolkata. Understand our service terms, conditions, and policies for West Bengal clients.')
@section('meta_keywords', 'terms and conditions 360 properties hub, service terms Kolkata, property consultancy terms West Bengal, legal terms conditions Kolkata, service agreement Bengal')
@section('canonical_url', url()->current())
@section('og_title', 'Terms and Conditions - 360 Properties Hub Kolkata')
@section('og_description', 'Review our terms and conditions for property consultancy services in Kolkata. Clear guidelines for our professional services across West Bengal.')
@section('og_image', asset('assets/images/terms-conditions.jpg'))

@section('content')
<!-- start: Breadcrumb Section -->
<section class="tj-page-header" data-bg-image="{{ asset('assets/images/bg/pheader-bg.png') }}">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="tj-page-header-content text-center">
                    <h1 class="tj-page-title text-anim">Terms & Condition</h1>
                    <div class="tj-page-link wow fadeInUp" data-wow-delay="0.1s">
                        <span>
                            <a href="{{ route('home') }}">
                                <span>Home</span>
                            </a>
                        </span>
                        <span>/</span>
                        <span>
                            <span>Terms & Condition</span>
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- end: Breadcrumb Section -->

<!-- start: Terms-and-Conditions Section -->
<section class="tj-careers-section section-space bg-white">
    <div class="container">
        <div class="row rg-30">

            <!-- INTRODUCTION -->
            <h3 class="mb-4">Introduction</h3>
            <p>
                Welcome to <strong>360 Properties Hub</strong>. By accessing or using
                <a href="https://360propertieshub.com">https://360propertieshub.com</a> (the
                “Site”) you agree to be bound by these Terms & Conditions (“Terms”).
                If you do not accept any provision herein, please discontinue use
                of the Site and our services immediately.
            </p>

            <!-- OUR ROLE -->
            <h3 class="mb-4">Our Role</h3>
            <p>
                360 Properties Hub provides end-to-end property-related legal,
                compliance, advisory, and brokerage services. Certain specialised
                deliverables may be fulfilled by vetted third-party professionals
                under our supervision; we remain your single point of contact and
                assume responsibility for service quality.
            </p>
            <p>
                As a licensed property aggregator we facilitate sale, purchase,
                leasing, and rental transactions for residential and commercial
                assets, acting as an intermediary between owners, developers,
                tenants, and investors.
            </p>

            <!-- MODIFICATIONS -->
            <h3 class="mb-4">Modifications to Terms</h3>
            <p>
                We may revise these Terms at any time by posting an updated version
                on the Site. Changes take effect immediately upon posting.
                Continued use of the Site constitutes your acceptance of the revised
                Terms.
            </p>

            <!-- USER RESPONSIBILITIES -->
            <h3 class="mb-4">User Responsibilities</h3>

            <h5>Eligibility</h5>
            <p>
                You must be at least 18 years old—or have verifiable parental
                consent—to use the Site and engage our services.
            </p>

            <h5>Account Security</h5>
            <p>
                You are solely responsible for safeguarding login credentials and
                for all activity conducted under your account. Notify us
                immediately of any unauthorised use.
            </p>

            <h5>Permitted Use</h5>
            <p>
                You agree to use the Site exclusively for lawful purposes and in
                accordance with these Terms and all applicable laws and
                regulations.
            </p>

            <h5>Prohibited Activities</h5>
            <p>
                You may not: (i) attempt to gain unauthorised access to any part of
                the Site or its servers; (ii) introduce viruses, trojans, or other
                malicious code; (iii) engage in data-mining, scraping, or automated
                harvesting of content; (iv) copy, reproduce, or exploit any portion
                of the Site without express written consent.
            </p>

            <!-- PROPERTY INFORMATION -->
            <h3 class="mb-4">Property Information & Compliance</h3>

            <h5>Accuracy of Information</h5>
            <p>
                Property details displayed on the Site are compiled from multiple
                sources and provided in good faith. While we strive for accuracy,
                360 Properties Hub makes no warranty that such information is
                current, complete, or error-free; all listings are subject to
                change or withdrawal without notice.
            </p>

            <h5>Client Responsibility</h5>
            <p>
                We advise on compliance requirements, but final responsibility for
                ensuring that a property satisfies relevant municipal, state, and
                national regulations rests with the owner and/or purchaser.
            </p>

            <!-- PAYMENTS -->
            <h3 class="mb-4">Fees, Payments & Refunds</h3>
            <p>
                Fee structures (fixed, milestone-based, retainer, or success-linked)
                are detailed in individual engagement letters or invoices. All
                payments are due in the currency and on the dates specified therein.
                Amounts unpaid after the due date may attract interest at 2 % per
                month or the maximum rate permitted by law, whichever is lower.
                Consulting fees are non-refundable once services have commenced,
                except where required by applicable consumer-protection statutes.
            </p>

            <!-- INTELLECTUAL PROPERTY -->
            <h3 class="mb-4">Intellectual Property</h3>

            <h5>Ownership</h5>
            <p>
                All Site content—including text, graphics, logos, icons, software,
                and multimedia—is owned by 360 Properties Hub or its licensors and
                protected under Indian and international IP laws.
            </p>

            <h5>Restrictions</h5>
            <p>
                No content may be reproduced, republished, uploaded, posted,
                transmitted, or distributed in any form without our prior written
                permission, except for personal, non-commercial viewing.
            </p>

            <!-- THIRD-PARTY LINKS -->
            <h3 class="mb-4">Third-Party Links</h3>

            <h5>External Websites</h5>
            <p>
                The Site may include links to external websites. We neither control
                nor endorse the content, policies, or practices of these sites and
                accept no responsibility for any loss or damage arising from your
                use of them.
            </p>

            <!-- DISCLAIMERS -->
            <h3 class="mb-4">Disclaimers & Limitation of Liability</h3>

            <h5>General Disclaimer</h5>
            <p>
                The Site and services are provided “as is” and “as available”
                without warranties of any kind, whether express or implied,
                including but not limited to merchantability, fitness for a
                particular purpose, and non-infringement.
            </p>

            <h5>Limitation of Liability</h5>
            <p>
                To the maximum extent permitted by law, 360 Properties Hub shall not
                be liable for any indirect, incidental, special, consequential, or
                punitive damages, or for loss of profits, data, goodwill, or other
                intangible losses resulting from (i) your use of or inability to use
                the Site; (ii) unauthorised access to or alteration of your data;
                or (iii) any third-party content.
            </p>

            <!-- INDEMNITY -->
            <h3 class="mb-4">Indemnification</h3>
            <p>
                You agree to indemnify and hold harmless 360 Properties Hub, its
                directors, employees, and affiliates from any claims, liabilities,
                damages, losses, and expenses (including legal fees) arising out of
                your breach of these Terms or misuse of the Site.
            </p>

            <!-- PRIVACY -->
            <h3 class="mb-4">Privacy Policy</h3>
            <p>
                Personal information is collected and processed in accordance with
                our <a href="/privacy-policy">Privacy Policy</a>. By using the Site
                you consent to such processing.
            </p>

            <!-- TERMINATION -->
            <h3 class="mb-4">Termination</h3>

            <h5>Termination Rights</h5>
            <p>
                We may suspend or terminate your access to the Site without prior
                notice for conduct that we believe violates these Terms or is
                harmful to other users, us, or third parties.
            </p>

            <h5>Effect of Termination</h5>
            <p>
                Upon termination, your right to use the Site ceases immediately and
                you must destroy any materials obtained from it. Clauses regarding
                intellectual property, disclaimers, limitation of liability, and
                indemnity survive termination.
            </p>

            <!-- FORCE MAJEURE -->
            <h3 class="mb-4">Force Majeure</h3>
            <p>
                We shall not be liable for any delay or failure in performance
                resulting from circumstances beyond our reasonable control,
                including acts of God, natural disasters, pandemic, war, or
                governmental action.
            </p>

            <!-- GOVERNING LAW -->
            <h3 class="mb-4">Governing Law & Jurisdiction</h3>
            <p>
                These Terms are governed by the laws of the State of West Bengal,
                India. All disputes shall be subject to the exclusive jurisdiction
                of the competent courts at Kolkata.
            </p>

            <!-- SEVERABILITY -->
            <h3 class="mb-4">Severability</h3>
            <p>
                If any provision of these Terms is held to be unenforceable, such
                provision shall be modified to reflect the parties’ intention or, if
                not possible, deemed severed, and the remaining provisions will
                remain in full force and effect.
            </p>

            <!-- ENTIRE AGREEMENT -->
            <h3 class="mb-4">Entire Agreement</h3>
            <p>
                These Terms, together with our Privacy Policy and any service-level
                agreements you execute with us, constitute the entire agreement
                between you and 360 Properties Hub regarding the Site and services,
                superseding any prior agreements or understandings.
            </p>

            <!-- CONTACT -->
            <h3 class="mb-4">Contact Information</h3>
            <p>
                Questions about these Terms? E-mail us at
                <a href="mailto:contact@360propertieshub.com">contact@360propertieshub.com</a>
                or call <a href="tel:+918444089530">+91 84440 89530</a>.
            </p>

        </div>
    </div>
</section>
<!-- end: Terms-and-Conditions Section -->

@endsection