<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New Contact Form Submission</title>
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
            background-color: #2c3e50;
            color: white;
            padding: 20px;
            text-align: center;
            border-radius: 5px 5px 0 0;
        }
        .content {
            background-color: #f8f9fa;
            padding: 30px;
            border-radius: 0 0 5px 5px;
        }
        .contact-details {
            background-color: white;
            padding: 20px;
            border-radius: 5px;
            margin: 20px 0;
            border-left: 4px solid #3498db;
        }
        .detail-row {
            margin-bottom: 15px;
            padding-bottom: 10px;
            border-bottom: 1px solid #eee;
        }
        .detail-row:last-child {
            border-bottom: none;
            margin-bottom: 0;
        }
        .label {
            font-weight: bold;
            color: #2c3e50;
            display: inline-block;
            width: 100px;
        }
        .value {
            color: #555;
        }
        .message-box {
            background-color: #fff;
            padding: 15px;
            border-radius: 5px;
            border: 1px solid #ddd;
            margin-top: 10px;
        }
        .footer {
            text-align: center;
            margin-top: 30px;
            padding-top: 20px;
            border-top: 1px solid #ddd;
            color: #666;
            font-size: 12px;
        }
    </style>
</head>
<body>
    <div class="header">
        <h1>New Contact Form Submission</h1>
        <p>360 Properties Hub</p>
    </div>
    
    <div class="content">
        <p>You have received a new contact form submission from your website.</p>
        
        <div class="contact-details">
            <h3 style="margin-top: 0; color: #2c3e50;">Contact Details:</h3>
            
            <div class="detail-row">
                <span class="label">Name:</span>
                <span class="value">{{ $contact['name'] }}</span>
            </div>
            
            <div class="detail-row">
                <span class="label">Email:</span>
                <span class="value">{{ $contact['email'] }}</span>
            </div>
            
            <div class="detail-row">
                <span class="label">Phone:</span>
                <span class="value">{{ $contact['phone'] }}</span>
            </div>
            
            <div class="detail-row">
                <span class="label">Subject:</span>
                <span class="value">{{ $contact['subject'] }}</span>
            </div>
            
            @if($contact['message'])
            <div class="detail-row">
                <span class="label">Message:</span>
                <div class="message-box">
                    {{ $contact['message'] }}
                </div>
            </div>
            @endif
        </div>
        
        <p><strong>Please respond to this inquiry as soon as possible.</strong></p>
        
        <p>You can reply directly to <a href="mailto:{{ $contact['email'] }}">{{ $contact['email'] }}</a> or call {{ $contact['phone'] }}.</p>
    </div>
    
    <div class="footer">
        <p>This email was automatically generated from the contact form on 360propertieshub.com</p>
        <p>Submitted on: {{ date('F j, Y \a\t g:i A') }}</p>
    </div>
</body>
</html>