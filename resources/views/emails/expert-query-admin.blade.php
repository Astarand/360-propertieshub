<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>New Expert Query</title>
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
            background-color: #28a745;
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
            background-color: #d1ecf1;
            border: 1px solid #bee5eb;
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
        .query-box {
            background-color: #e9ecef;
            padding: 15px;
            border-radius: 8px;
            margin-top: 10px;
            white-space: pre-wrap;
        }
        .expert-badge {
            background-color: #ffc107;
            color: #212529;
            padding: 5px 10px;
            border-radius: 15px;
            font-size: 12px;
            font-weight: bold;
        }
    </style>
</head>
<body>
    <div class="header">
        <h1>🎯 New Expert Query Received</h1>
        <span class="expert-badge">EXPERT SOLUTION REQUIRED</span>
    </div>
    
    <div class="content">
        <div class="urgent">
            <strong>⚡ Priority Action Required:</strong> A client is seeking expert property consultation and requires professional guidance.
        </div>
        
        <div class="info-box">
            <h3>Client Information</h3>
            
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
                <span class="label">Submitted:</span>
                <span class="value">{{ now()->format('M d, Y \a\t h:i A') }}</span>
            </div>
            
            <div class="field">
                <span class="label">Expert Query:</span>
                <div class="query-box">{{ $data['query'] }}</div>
            </div>
        </div>
        
        <div class="urgent">
            <strong>📋 Expert Action Plan:</strong>
            <ul>
                <li>Review the query details and complexity level</li>
                <li>Contact the client within 2-4 hours for expert consultation</li>
                <li>Use phone: <strong>{{ $data['phone'] }}</strong></li>
                <li>Prepare expert solution for: <strong>{{ $data['subject'] }}</strong></li>
                <li>Provide comprehensive property guidance and recommendations</li>
            </ul>
        </div>
        
        <div style="background-color: #f0f8ff; padding: 15px; border-radius: 8px; margin-top: 20px;">
            <strong>💡 Note:</strong> This is an expert query requiring specialized property consultation. Please ensure our most qualified expert handles this inquiry.
        </div>
    </div>
</body>
</html>