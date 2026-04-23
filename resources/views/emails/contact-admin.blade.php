<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>New Contact Inquiry</title>
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
            background-color: #dc3545;
            color: white;
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
        .info-box {
            background-color: #f8f9fa;
            padding: 20px;
            border-radius: 8px;
            margin: 20px 0;
        }
        .urgent {
            background-color: #fff3cd;
            border: 1px solid #ffeaa7;
            padding: 15px;
            border-radius: 8px;
            margin: 20px 0;
        }
        h1 {
            margin-bottom: 20px;
        }
        .field {
            margin-bottom: 15px;
            padding-bottom: 10px;
            border-bottom: 1px solid #eee;
        }
        .field:last-child {
            border-bottom: none;
        }
        .label {
            font-weight: bold;
            color: #495057;
            display: inline-block;
            width: 120px;
        }
        .value {
            color: #212529;
        }
        .message-box {
            background-color: #e9ecef;
            padding: 15px;
            border-radius: 8px;
            margin-top: 10px;
            white-space: pre-wrap;
        }
    </style>
</head>
<body>
    <div class="header">
        <h1>🚨 New Contact Inquiry Received</h1>
    </div>
    
    <div class="content">
        <div class="urgent">
            <strong>⚡ Action Required:</strong> A new contact inquiry has been submitted and requires your attention.
        </div>
        
        <div class="info-box">
            <h3>Contact Information</h3>
            
            <div class="field">
                <span class="label">Name:</span>
                <span class="value">{{ $data['name'] }}</span>
            </div>
            
            <div class="field">
                <span class="label">Email:</span>
                <span class="value">{{ $data['email'] }}</span>
            </div>
            
            <div class="field">
                <span class="label">Phone:</span>
                <span class="value">{{ $data['phone'] }}</span>
            </div>
            
            <div class="field">
                <span class="label">Subject:</span>
                <span class="value">{{ $data['subject'] }}</span>
            </div>
            
            <div class="field">
                <span class="label">Page URL:</span>
                <span class="value">{{ $data['page_url'] }}</span>
            </div>
            
            <div class="field">
                <span class="label">Submitted:</span>
                <span class="value">{{ now()->format('M d, Y \a\t h:i A') }}</span>
            </div>
            
            @if(!empty($data['message']))
            <div class="field">
                <span class="label">Message:</span>
                <div class="message-box">{{ $data['message'] }}</div>
            </div>
            @endif
        </div>
        
        <div class="urgent">
            <strong>Next Steps:</strong>
            <ul>
                <li>Contact the customer within 24 hours</li>
                <li>Use the provided phone number: <strong>{{ $data['phone'] }}</strong></li>
                <li>Reference inquiry subject: <strong>{{ $data['subject'] }}</strong></li>
            </ul>
        </div>
    </div>
</body>
</html>