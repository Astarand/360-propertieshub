<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Thank You</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            color: #333;
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
        }
        .header {
            background-color: #f8f9fa;
            padding: 20px;
            text-align: center;
            border-radius: 8px;
            margin-bottom: 20px;
        }
        .content {
            background-color: #ffffff;
            padding: 30px;
            border: 1px solid #e9ecef;
            border-radius: 8px;
        }
        .footer {
            text-align: center;
            margin-top: 20px;
            padding: 20px;
            background-color: #f8f9fa;
            border-radius: 8px;
            font-size: 14px;
            color: #666;
        }
        h1 {
            color: #007bff;
            margin-bottom: 20px;
        }
        .highlight {
            background-color: #e7f3ff;
            padding: 15px;
            border-left: 4px solid #007bff;
            margin: 20px 0;
        }
    </style>
</head>
<body>
    <div class="header">
        <h1>Thank You for Connecting with Us!</h1>
    </div>
    
    <div class="content">
        <p>Dear {{ $data['name'] }},</p>
        
        <div class="highlight">
            <p><strong>Thank you for connecting with us. Our executive will be reaching out to you shortly. We truly appreciate your patience and look forward to assisting you.</strong></p>
        </div>
        
        <p>We have received your inquiry regarding: <strong>{{ $data['subject'] }}</strong></p>
        
        <p>Here are the details we received:</p>
        <ul>
            <li><strong>Name:</strong> {{ $data['name'] }}</li>
            <li><strong>Email:</strong> {{ $data['email'] }}</li>
            <li><strong>Phone:</strong> {{ $data['phone'] }}</li>
            <li><strong>Subject:</strong> {{ $data['subject'] }}</li>
            @if(!empty($data['message']))
            <li><strong>Message:</strong> {{ $data['message'] }}</li>
            @endif
        </ul>
        
        <p>Our team will review your inquiry and get back to you within 24 hours. If you have any urgent questions, please don't hesitate to contact us directly.</p>
        
        <p>Best regards,<br>
        The Support Team</p>
    </div>
    
    <div class="footer">
        <p>This is an automated message. Please do not reply to this email.</p>
    </div>
</body>
</html>