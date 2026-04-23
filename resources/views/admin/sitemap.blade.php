@extends('Layouts.App')

@section('title', 'Sitemap Management - 360 Properties Hub')

@section('content')
<div class="container mt-5 mb-5">
  <div class="row justify-content-center">
    <div class="col-md-8">
      <div class="card">
        <div class="card-header">
          <h3>Sitemap Management</h3>
        </div>
        <div class="card-body">
          <div class="mb-4">
            <h5>Current Sitemap Status</h5>
            @if(file_exists(public_path('sitemap.xml')))
            <div class="alert alert-success">
              <i class="fa fa-check-circle"></i> Sitemap exists and is accessible
              <br>
              <strong>Last Modified:</strong> {{ date('Y-m-d H:i:s', filemtime(public_path('sitemap.xml'))) }}
              <br>
              <strong>File Size:</strong> {{ round(filesize(public_path('sitemap.xml')) / 1024, 2) }} KB
            </div>
            @else
            <div class="alert alert-warning">
              <i class="fa fa-exclamation-triangle"></i> Sitemap not found. Please generate it.
            </div>
            @endif
          </div>

          <div class="mb-4">
            <h5>Actions</h5>
            <div class="btn-group" role="group">
              <button type="button" class="btn btn-primary" onclick="generateSitemap()">
                <i class="fa fa-refresh"></i> Generate Sitemap
              </button>
              @if(file_exists(public_path('sitemap.xml')))
              <a href="{{ url('sitemap.xml') }}" target="_blank" class="btn btn-info">
                <i class="fa fa-eye"></i> View Sitemap
              </a>
              @endif
            </div>
          </div>

          <div class="mb-4">
            <h5>Sitemap Information</h5>
            <div class="table-responsive">
              <table class="table table-striped">
                <tr>
                  <td><strong>Sitemap URL:</strong></td>
                  <td><a href="{{ url('sitemap.xml') }}" target="_blank">{{ url('sitemap.xml') }}</a></td>
                </tr>
                <tr>
                  <td><strong>Total Pages:</strong></td>
                  <td>47 URLs</td>
                </tr>
                <tr>
                  <td><strong>Auto-Generation:</strong></td>
                  <td>Daily at 2:00 AM</td>
                </tr>
                <tr>
                  <td><strong>Submit to Google:</strong></td>
                  <td><a href="https://search.google.com/search-console" target="_blank">Google Search Console</a></td>
                </tr>
              </table>
            </div>
          </div>

          <div class="alert alert-info">
            <h6><i class="fa fa-info-circle"></i> SEO Tips:</h6>
            <ul class="mb-0">
              <li>Submit your sitemap to Google Search Console</li>
              <li>The sitemap is automatically updated daily</li>
              <li>All your service pages are included with appropriate priorities</li>
              <li>Blog posts are included to improve content indexing</li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<script>
  function generateSitemap() {
    const btn = event.target;
    const originalText = btn.innerHTML;

    btn.innerHTML = '<i class="fa fa-spinner fa-spin"></i> Generating...';
    btn.disabled = true;

    fetch('{{ route("generate-sitemap") }}')
      .then(response => response.json())
      .then(data => {
        alert('Sitemap generated successfully!\nTotal URLs: ' + data.total_urls);
        location.reload();
      })
      .catch(error => {
        alert('Error generating sitemap: ' + error.message);
      })
      .finally(() => {
        btn.innerHTML = originalText;
        btn.disabled = false;
      });
  }
</script>
@endsection