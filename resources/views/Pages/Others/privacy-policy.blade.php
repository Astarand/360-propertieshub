@extends('Layouts.App')

@section('title', 'Privacy Policy - 360 Properties Hub Kolkata')
@section('meta_description', 'Privacy Policy for 360 Properties Hub - Learn how we protect your personal information and data privacy for our property consultancy services in Kolkata, West Bengal.')
@section('meta_keywords', 'privacy policy 360 properties hub, data protection Kolkata, privacy policy property consultancy, information security West Bengal, client privacy Kolkata')
@section('canonical_url', url()->current())
@section('og_title', 'Privacy Policy - 360 Properties Hub Kolkata')
@section('og_description', 'Read our comprehensive privacy policy to understand how 360 Properties Hub protects your personal information and ensures data security.')
@section('og_image', asset('assets/images/privacy-policy.jpg'))

@section('content')
<!-- start: Breadcrumb Section -->
<section class="tj-page-header" data-bg-image="{{ asset('assets/images/bg/pheader-bg.png') }}">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="tj-page-header-content text-center">
                    <h1 class="tj-page-title text-anim">Privacy Policy</h1>
                    <div class="tj-page-link wow fadeInUp" data-wow-delay="0.1s">
                        <span>
                            <a href="{{ route('home') }}">
                                <span>Home</span>
                            </a>
                        </span>
                        <span>/</span>
                        <span>
                            <span>Privacy Policy</span>
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- end: Breadcrumb Section -->

<!-- start: Careers Section -->
<section class="tj-careers-section section-space bg-white">
    <div class="container">
        <div class="row rg-30">
            <p>At 360 Properties Hub, we are dedicated to safeguarding the privacy and security of our clients' personal information. This Privacy Policy outlines the manner in which we collect, use, disclose, and protect the data entrusted to us in the course of providing property-related legal and compliance services.</p>

            <h3>Information We Collect</h3>
            <p>We may collect the following types of personal and business information:</p>
            <ul>
                <li><strong>Personal Identification Information:</strong> This includes your name, address, email, phone number, and identification documents.</li>
                <li><strong>Property Information:</strong> Details related to property ownership, registration, tax records, and associated legal documents.</li>
                <li><strong>Financial Information:</strong> Bank account details, tax returns, payment history, and other financial data pertinent to property compliance.</li>
                <li><strong>Business Information:</strong> Information such as business registration, compliance records, and corporate property details, particularly for commercial clients.</li>
                <li><strong>Communication Data:</strong> Any information shared during consultations, emails, or other communications with our firm.</li>
            </ul>

            <h3>How We Use the Information</h3>
            <p>The information collected is utilized for the following purposes:</p>
            <ul>
                <li><strong>Service Delivery:</strong> To provide property-related legal, compliance, registration, and taxation services.</li>
                <li><strong>Regulatory Compliance:</strong> To ensure adherence to applicable property laws, RERA regulations, and other statutory frameworks.</li>
                <li><strong>Communication:</strong> To keep you informed about your case, provide updates, and share information relevant to our services.</li>
                <li><strong>Legal Compliance:</strong> To comply with legal obligations and assist in legal proceedings concerning your property and compliance matters.</li>
            </ul>

            <h3>Data Sharing and Disclosure</h3>
            <p>We do not disclose your personal information to third parties except under the following conditions:</p>
            <ul>
                <li><strong>Service Providers:</strong> We may share your information with trusted third-party providers (e.g., auditors, legal advisors) who assist in delivering our services.</li>
                <li><strong>Legal Obligations:</strong> We may disclose your data to regulatory authorities or law enforcement if required by law.</li>
                <li><strong>Client Consent:</strong> With your explicit consent, we may share your information for additional services or partnerships.</li>
            </ul>

            <h3>Data Security</h3>
            <p>We employ robust security measures to protect your personal data from unauthorized access, misuse, or disclosure. Our protective measures include:</p>
            <ul>
                <li>Encryption of sensitive information.</li>
                <li>Access control protocols limiting access to your personal data.</li>
                <li>Regular security assessments and system monitoring for vulnerabilities.</li>
            </ul>

            <h3>Your Rights</h3>
            <p>As a client, you have the following rights regarding your personal data:</p>
            <ul>
                <li><strong>Access:</strong> You may request a copy of the personal data we hold about you.</li>
                <li><strong>Rectification:</strong> You have the right to correct inaccurate or incomplete data.</li>
                <li><strong>Erasure:</strong> You can request the deletion of your personal information, where applicable.</li>
                <li><strong>Restriction:</strong> You may request a limitation on the processing of your data in specific circumstances.</li>
                <li><strong>Objection:</strong> You have the right to object to the use of your personal data for certain purposes.</li>
            </ul>

            <h3>Data Retention</h3>
            <p>Your personal data will be retained only for as long as necessary to fulfill the purposes outlined in this Privacy Policy, or as required by applicable law.</p>

            <h3>Changes to the Privacy Policy</h3>
            <p>We may periodically update this Privacy Policy. Any revisions will be posted on our website, and the updated policy will take effect immediately upon posting.</p>

            <h3>Contact Us</h3>
            <p>For any inquiries regarding this Privacy Policy or our handling of your personal data, please contact us:</p>
            <address>
                360 Properties Hub<br>
                Srijan Corporate Park, Sector-V, Kolkata-700091<br>
                Email: <a href="mailto:contact@360propertieshub.com">contact@360propertieshub.com</a><br>
                Phone: <a href="tel:+918444089530">+91 8444089530</a>
            </address>
        </div>
    </div>
</section>
<!-- end: Careers Section -->
@endsection