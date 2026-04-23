<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Expert Queries - Admin</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        
        body {
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif;
            background: #f5f5f5;
            color: #333;
            line-height: 1.6;
        }
        
        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px;
        }
        
        .header {
            background: white;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
            margin-bottom: 20px;
        }
        
        .header h1 {
            color: #b98e33;
            margin-bottom: 10px;
        }
        
        .stats {
            display: flex;
            gap: 20px;
            margin-bottom: 20px;
        }
        
        .stat-card {
            background: white;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
            flex: 1;
            text-align: center;
        }
        
        .stat-number {
            font-size: 2em;
            font-weight: bold;
            color: #b98e33;
        }
        
        .queries-table {
            background: white;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
            overflow: hidden;
        }
        
        .table-header {
            background: #b98e33;
            color: white;
            padding: 15px 20px;
            font-weight: bold;
        }
        
        .query-item {
            border-bottom: 1px solid #eee;
            padding: 20px;
        }
        
        .query-item:last-child {
            border-bottom: none;
        }
        
        .query-header {
            display: flex;
            justify-content: between;
            align-items: center;
            margin-bottom: 10px;
        }
        
        .query-name {
            font-weight: bold;
            color: #333;
            font-size: 1.1em;
        }
        
        .query-date {
            color: #666;
            font-size: 0.9em;
        }
        
        .query-contact {
            display: flex;
            gap: 20px;
            margin-bottom: 10px;
            font-size: 0.9em;
            color: #666;
        }
        
        .query-subject {
            font-weight: 600;
            color: #b98e33;
            margin-bottom: 10px;
        }
        
        .query-message {
            background: #f8f9fa;
            padding: 15px;
            border-radius: 6px;
            border-left: 4px solid #b98e33;
        }
        
        .pagination {
            margin-top: 20px;
            text-align: center;
        }
        
        .pagination a, .pagination span {
            display: inline-block;
            padding: 8px 12px;
            margin: 0 4px;
            text-decoration: none;
            border: 1px solid #ddd;
            color: #333;
            border-radius: 4px;
        }
        
        .pagination a:hover {
            background: #b98e33;
            color: white;
            border-color: #b98e33;
        }
        
        .pagination .current {
            background: #b98e33;
            color: white;
            border-color: #b98e33;
        }
        
        @media (max-width: 768px) {
            .stats {
                flex-direction: column;
            }
            
            .query-contact {
                flex-direction: column;
                gap: 5px;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <h1>Expert Queries Management</h1>
            <p>Manage and view all expert solution queries submitted by users</p>
        </div>
        
        <div class="stats">
            <div class="stat-card">
                <div class="stat-number">{{ $queries->total() }}</div>
                <div>Total Queries</div>
            </div>
            <div class="stat-card">
                <div class="stat-number">{{ \App\Models\ExpertQuery::whereDate('created_at', today())->count() }}</div>
                <div>Today's Queries</div>
            </div>
            <div class="stat-card">
                <div class="stat-number">{{ \App\Models\ExpertQuery::whereBetween('created_at', [now()->startOfWeek(), now()->endOfWeek()])->count() }}</div>
                <div>This Week</div>
            </div>
        </div>
        
        <div class="queries-table">
            <div class="table-header">
                Recent Expert Queries
            </div>
            
            @forelse($queries as $query)
                <div class="query-item">
                    <div class="query-header">
                        <div class="query-name">{{ $query->name }}</div>
                        <div class="query-date">{{ $query->created_at->format('M d, Y - h:i A') }}</div>
                    </div>
                    
                    <div class="query-contact">
                        <div><strong>Email:</strong> {{ $query->email }}</div>
                        <div><strong>Phone:</strong> {{ $query->phone }}</div>
                    </div>
                    
                    <div class="query-subject">
                        <strong>Subject:</strong> {{ $query->subject }}
                    </div>
                    
                    <div class="query-message">
                        {{ $query->query }}
                    </div>
                </div>
            @empty
                <div class="query-item" style="text-align: center; color: #666;">
                    No queries found.
                </div>
            @endforelse
        </div>
        
        @if($queries->hasPages())
            <div class="pagination">
                {{ $queries->links() }}
            </div>
        @endif
    </div>
</body>
</html>