<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Expert Query Received - 360 Properties Hub</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&family=Montserrat:wght@400;500;600;700&display=swap" rel="stylesheet">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Poppins', Arial, sans-serif;
            line-height: 1.6;
            color: #333333;
            background-color: #f5f5f5;
            margin: 0;
            padding: 20px 0;
        }

        .email-wrapper {
            max-width: 600px;
            margin: 0 auto;
            background-color: #ffffff;
            border-radius: 12px;
            overflow: hidden;
            box-shadow: 0 8px 32px rgba(0, 0, 0, 0.1);
        }

        /* Header Section */
        .header {
            background: linear-gradient(135deg, #1a365d 0%, #2d5a87 100%);
            color: white;
            padding: 40px 30px;
            text-align: center;
        }

        .logo {
            font-family: 'Montserrat', sans-serif;
            font-size: 42px;
            font-weight: 700;
            margin-bottom: 8px;
            letter-spacing: -1px;
        }

        .logo-subtitle {
            font-size: 12px;
            font-weight: 500;
            letter-spacing: 2px;
            opacity: 0.9;
            margin-bottom: 30px;
        }

        .header-title {
            font-family: 'Montserrat', sans-serif;
            font-size: 28px;
            font-weight: 600;
            margin-bottom: 15px;
        }

        .priority-badge {
            display: inline-block;
            background: rgba(255, 255, 255, 0.15);
            padding: 8px 20px;
            border-radius: 20px;
            font-size: 12px;
            font-weight: 600;
            border: 1px solid rgba(255, 255, 255, 0.2);
        }

        /* Content Section */
        .content {
            padding: 40px 30px;
        }

        .greeting {
            font-size: 18px;
            font-weight: 500;
            color: #2c3e50;
            margin-bottom: 25px;
        }

        .thank-you-box {
            background: #f8f9fa;
            border-left: 4px solid #28a745;
            padding: 20px;
            margin: 25px 0;
            border-radius: 0 8px 8px 0;
        }

        .thank-you-box p {
            color: #495057;
            font-weight: 500;
            margin: 0;
        }

        .subject-box {
            background: #e3f2fd;
            padding: 15px 20px;
            border-radius: 8px;
            margin: 25px 0;
            text-align: center;
        }

        .subject-box p {
            color: #1565c0;
            font-weight: 500;
            margin: 0;
        }

        /* Query Details */
        .details-section {
            background: #f8f9fa;
            border-radius: 12px;
            padding: 25px;
            margin: 30px 0;
        }

        .details-title {
            font-family: 'Montserrat', sans-serif;
            font-size: 18px;
            font-weight: 600;
            color: #2c3e50;
            margin-bottom: 20px;
            display: flex;
            align-items: center;
            gap: 8px;
        }

        .details-grid {
            display: grid;
            gap: 12px;
        }

        .detail-row {
            display: flex;
            padding: 8px 0;
            border-bottom: 1px solid #e9ecef;
        }

        .detail-row:last-child {
            border-bottom: none;
        }

        .detail-label {
            font-weight: 600;
            color: #6c757d;
            min-width: 80px;
            flex-shrink: 0;
        }

        .detail-value {
            color: #495057;
            flex: 1;
        }

        /* Timeline Section */
        .timeline-section {
            background: #fff3cd;
            border-radius: 12px;
            padding: 25px;
            margin: 30px 0;
        }

        .timeline-title {
            font-family: 'Montserrat', sans-serif;
            font-size: 18px;
            font-weight: 600;
            color: #856404;
            margin-bottom: 20px;
            display: flex;
            align-items: center;
            gap: 8px;
        }

        .timeline-list {
            list-style: none;
            padding: 0;
        }

        .timeline-item {
            display: flex;
            align-items: flex-start;
            margin-bottom: 15px;
            padding-left: 30px;
            position: relative;
        }

        .timeline-item:before {
            content: '';
            position: absolute;
            left: 0;
            top: 6px;
            width: 20px;
            height: 20px;
            background: #ffc107;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .timeline-item:after {
            content: '✓';
            position: absolute;
            left: 6px;
            top: 6px;
            color: white;
            font-size: 10px;
            font-weight: bold;
        }

        .timeline-text {
            color: #856404;
            font-weight: 500;
        }

        /* Services Section */
        .services-section {
            background: #e8f5e8;
            border-radius: 12px;
            padding: 25px;
            margin: 30px 0;
        }

        .services-title {
            font-family: 'Montserrat', sans-serif;
            font-size: 18px;
            font-weight: 600;
            color: #155724;
            margin-bottom: 20px;
        }

        .services-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 12px;
        }

        .service-item {
            display: flex;
            align-items: center;
            gap: 10px;
            color: #155724;
            font-weight: 500;
        }

        .service-icon {
            width: 6px;
            height: 6px;
            background: #28a745;
            border-radius: 50%;
            flex-shrink: 0;
        }

        /* Contact Section */
        .contact-section {
            text-align: center;
            margin: 30px 0;
            padding: 20px;
            background: #f1f3f4;
            border-radius: 8px;
        }

        .contact-text {
            color: #495057;
            margin-bottom: 10px;
        }

        .phone-number {
            font-family: 'Montserrat', sans-serif;
            font-size: 18px;
            font-weight: 600;
            color: #1a365d;
        }

        /* Signature */
        .signature {
            margin-top: 40px;
            padding-top: 20px;
            border-top: 1px solid #e9ecef;
        }

        .signature-name {
            font-family: 'Montserrat', sans-serif;
            font-weight: 600;
            color: #1a365d;
            font-size: 16px;
        }

        .signature-title {
            color: #6c757d;
            font-style: italic;
            font-size: 14px;
        }

        /* Footer */
        .footer {
            background: #2c3e50;
            color: white;
            padding: 30px;
            text-align: center;
        }

        .footer-brand {
            font-family: 'Montserrat', sans-serif;
            font-size: 24px;
            font-weight: 700;
            margin-bottom: 8px;
        }

        .footer-tagline {
            font-size: 14px;
            opacity: 0.8;
            margin-bottom: 20px;
        }

        .footer-contact {
            font-size: 14px;
            margin-bottom: 15px;
        }

        .footer-note {
            font-size: 12px;
            opacity: 0.7;
        }

        /* Responsive */
        @media (max-width: 600px) {
            body {
                padding: 10px;
            }

            .email-wrapper {
                margin: 0;
            }

            .header,
            .content,
            .footer {
                padding: 25px 20px;
            }

            .logo {
                font-size: 36px;
            }

            .header-title {
                font-size: 24px;
            }

            .services-grid {
                grid-template-columns: 1fr;
            }
        }
    </style>
</head>

<body>
    <div class="email-wrapper">
        <!-- Header -->
        <div class="header">
            <div class="logo">360</div>
            <div class="logo-subtitle">Properties Hub</div>
            <h1 class="header-title">Expert Query Received!</h1>
            <span class="priority-badge">🎯 PRIORITY CONSULTATION</span>
        </div>

        <!-- Content -->
        <div class="content">
            <p class="greeting">Dear {{ $data['name'] }},</p>

            <div class="thank-you-box">
                <p>Thank you for reaching out to 360 Properties Hub for expert consultation! Your query has been received and our property experts are reviewing it.</p>
            </div>

            <div class="subject-box">
                <p>We understand you're seeking professional guidance regarding: <strong>{{ $data['subject'] }}</strong></p>
            </div>

            <!-- Query Details -->
            <div class="details-section">
                <h3 class="details-title">📋 Your Query Details</h3>
                <div class="details-grid">
                    <div class="detail-row">
                        <span class="detail-label">Name:</span>
                        <span class="detail-value">{{ $data['name'] }}</span>
                    </div>
                    <div class="detail-row">
                        <span class="detail-label">Email:</span>
                        <span class="detail-value">{{ $data['email'] }}</span>
                    </div>
                    <div class="detail-row">
                        <span class="detail-label">Phone:</span>
                        <span class="detail-value">{{ $data['phone'] }}</span>
                    </div>
                    <div class="detail-row">
                        <span class="detail-label">Subject:</span>
                        <span class="detail-value">{{ $data['subject'] }}</span>
                    </div>
                    <div class="detail-row">
                        <span class="detail-label">Query:</span>
                        <span class="detail-value">{{ Str::limit($data['query'], 100) }}...</span>
                    </div>
                </div>
            </div>

            <!-- Timeline -->
            <div class="timeline-section">
                <h3 class="timeline-title">⏰ What Happens Next</h3>
                <ul class="timeline-list">
                    <li class="timeline-item">
                        <span class="timeline-text"><strong>Within 2-4 hours:</strong> Our property expert will review your query</span>
                    </li>
                    <li class="timeline-item">
                        <span class="timeline-text"><strong>Same day:</strong> You'll receive a call from our expert consultant</span>
                    </li>
                    <li class="timeline-item">
                        <span class="timeline-text"><strong>During consultation:</strong> Get personalized property solutions</span>
                    </li>
                    <li class="timeline-item">
                        <span class="timeline-text"><strong>Follow-up:</strong> Detailed action plan via email</span>
                    </li>
                </ul>
            </div>

            <!-- Contact -->
            <div class="contact-section">
                <p class="contact-text">For urgent questions before our expert calls:</p>
                <div class="phone-number">{{ env('BUSINESS_PHONE', '+91-8444089530') }}</div>
            </div>

            <!-- Signature -->
            <div class="signature">
                <p>Best regards,</p>
                <div class="signature-name">360 Properties Hub Expert Team</div>
                <div class="signature-title">Your Trusted Property Consultants</div>
            </div>
        </div>

        <!-- Footer -->
        <div class="footer">
            <div class="footer-brand">360 Properties Hub</div>
            <div class="footer-tagline">Premier Property Consultancy in Kolkata</div>
            <div class="footer-contact">
                📧 {{ env('BUSINESS_EMAIL', 'contact@360propertieshub.com') }} | 📞 {{ env('BUSINESS_PHONE', '+91-8444089530') }}
            </div>
            <div class="footer-note">
                This is an automated confirmation. Our expert will contact you personally.
            </div>
        </div>
    </div>
</body>

</html>