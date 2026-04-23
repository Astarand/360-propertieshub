<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\Sitemap\Sitemap;
use Spatie\Sitemap\Tags\Url;
use Carbon\Carbon;

class SitemapController extends Controller
{
  public function generate()
  {
    $sitemap = Sitemap::create();

    // Add main pages with priorities and change frequencies
    $mainPages = [
      ['url' => route('home'), 'priority' => 1.0, 'changefreq' => 'daily'],
      ['url' => route('about'), 'priority' => 0.9, 'changefreq' => 'monthly'],
      ['url' => route('services'), 'priority' => 0.9, 'changefreq' => 'weekly'],
      ['url' => route('contact'), 'priority' => 0.8, 'changefreq' => 'monthly'],
      ['url' => route('blog'), 'priority' => 0.8, 'changefreq' => 'daily'],
      ['url' => route('properties'), 'priority' => 0.8, 'changefreq' => 'weekly'],
      ['url' => route('projects'), 'priority' => 0.7, 'changefreq' => 'monthly'],
      ['url' => route('faq'), 'priority' => 0.6, 'changefreq' => 'monthly'],
      ['url' => route('career'), 'priority' => 0.6, 'changefreq' => 'weekly'],
    ];

    foreach ($mainPages as $page) {
      $sitemap->add(
        Url::create($page['url'])
          ->setLastModificationDate(Carbon::now())
          ->setChangeFrequency($page['changefreq'])
          ->setPriority($page['priority'])
      );
    }

    // Add regulatory compliance services (HIGH PRIORITY for Top 5 Rankings)
    $regulatoryServices = [
      ['route' => 'hidco', 'priority' => 0.95], // TARGET: "HIDCO compliance Kolkata"
      ['route' => 'nkda', 'priority' => 0.9],   // TARGET: "NKDA regulatory support Kolkata"
      ['route' => 'webel', 'priority' => 0.9],  // TARGET: "WEBEL property solutions Kolkata"
      ['route' => 'ndita', 'priority' => 0.85], // TARGET: "NDITA industrial compliance Kolkata"
      ['route' => 'kmc', 'priority' => 0.85],   // TARGET: "KMC municipal services Kolkata"
      ['route' => 'ud-development', 'priority' => 0.8], // TARGET: "UD development permissions Kolkata"
      ['route' => 'environmental', 'priority' => 0.8], // TARGET: "environmental clearance Kolkata"
      ['route' => 'rera', 'priority' => 0.95], // TARGET: "RERA compliance Kolkata"
      ['route' => 'building-plan', 'priority' => 0.8], // TARGET: "building plan approval Kolkata"
      ['route' => 'fire-noc', 'priority' => 0.8], // TARGET: "fire NOC services Kolkata"
      ['route' => 'government-liaison', 'priority' => 0.75], // TARGET: "government liaison Kolkata"
    ];

    foreach ($regulatoryServices as $service) {
      $sitemap->add(
        Url::create(route($service['route']))
          ->setLastModificationDate(Carbon::now())
          ->setChangeFrequency('monthly')
          ->setPriority($service['priority'])
      );
    }

    // Add legal services (HIGH PRIORITY for Top 5 Rankings)
    $legalServices = [
      ['route' => 'property-diligence', 'priority' => 0.95], // TARGET: "property due diligence Kolkata"
      ['route' => 'title-verification', 'priority' => 0.9], // TARGET: "title verification Kolkata"
      ['route' => 'property-registration', 'priority' => 0.85], // TARGET: "property registration Kolkata"
      ['route' => 'legal-drafting', 'priority' => 0.8], // TARGET: "legal documentation Kolkata"
      ['route' => 'property-dispute', 'priority' => 0.85], // TARGET: "property dispute resolution Kolkata"
      ['route' => 'real-estate-litigation', 'priority' => 0.8], // TARGET: "real estate litigation Kolkata"
      ['route' => 'legal-audit', 'priority' => 0.8], // TARGET: "legal audit services Kolkata"
      ['route' => 'contract-review', 'priority' => 0.8], // TARGET: "contract review Kolkata"
      ['route' => 'property-valuation', 'priority' => 0.9], // TARGET: "property valuation Kolkata"
      ['route' => 'joint-venture', 'priority' => 0.75], // TARGET: "joint venture documentation Kolkata"
      ['route' => 'property-taxation', 'priority' => 0.85], // TARGET: "property taxation planning Kolkata"
    ];

    foreach ($legalServices as $service) {
      $sitemap->add(
        Url::create(route($service['route']))
          ->setLastModificationDate(Carbon::now())
          ->setChangeFrequency('monthly')
          ->setPriority($service['priority'])
      );
    }

    // Add business & corporate services (HIGH PRIORITY for Top 5 Rankings)
    $businessServices = [
      ['route' => 'mall', 'priority' => 0.8], // TARGET: "business mall setup Kolkata"
      ['route' => 'nri', 'priority' => 0.95], // TARGET: "NRI property services Kolkata"
      ['route' => 'trade-license', 'priority' => 0.75], // TARGET: "trade license registration Kolkata"
      ['route' => 'dpr', 'priority' => 0.85], // TARGET: "DPR preparation Kolkata"
      ['route' => 'completion-certificate', 'priority' => 0.8], // TARGET: "completion certificate Kolkata"
      ['route' => 'corporate-property', 'priority' => 0.85], // TARGET: "corporate property consulting Kolkata"
      ['route' => 'property-investment', 'priority' => 0.95], // TARGET: "property investment advisory Kolkata"
      ['route' => 'property-tax', 'priority' => 0.9], // TARGET: "property tax advisory Kolkata"
      ['route' => 'property-portfolio', 'priority' => 0.85], // TARGET: "property portfolio management Kolkata"
      ['route' => 'real-estate-structuring', 'priority' => 0.8], // TARGET: "real estate structuring Kolkata"
    ];

    foreach ($businessServices as $service) {
      $sitemap->add(
        Url::create(route($service['route']))
          ->setLastModificationDate(Carbon::now())
          ->setChangeFrequency('monthly')
          ->setPriority($service['priority'])
      );
    }

    // Add blog posts
    $blogPosts = [
      ['route' => 'blog1', 'priority' => 0.6],
      ['route' => 'blog2', 'priority' => 0.6],
      ['route' => 'blog3', 'priority' => 0.6],
      ['route' => 'blog4', 'priority' => 0.6],
    ];

    foreach ($blogPosts as $blog) {
      $sitemap->add(
        Url::create(route($blog['route']))
          ->setLastModificationDate(Carbon::now())
          ->setChangeFrequency('monthly')
          ->setPriority($blog['priority'])
      );
    }

    // Add other pages
    $otherPages = [
      ['route' => 'job-details', 'priority' => 0.5],
      ['route' => 'privacy-policy', 'priority' => 0.4],
      ['route' => 'terms-and-condition', 'priority' => 0.4],
    ];

    foreach ($otherPages as $page) {
      $sitemap->add(
        Url::create(route($page['route']))
          ->setLastModificationDate(Carbon::now())
          ->setChangeFrequency('yearly')
          ->setPriority($page['priority'])
      );
    }

    // Write sitemap to public directory
    $sitemap->writeToFile(public_path('sitemap.xml'));

    return response()->json([
      'message' => 'Sitemap generated successfully!',
      'url' => url('sitemap.xml'),
      'total_urls' => count($mainPages) + count($regulatoryServices) + count($legalServices) + count($businessServices) + count($blogPosts) + count($otherPages)
    ]);
  }

  public function show()
  {
    $sitemapPath = public_path('sitemap.xml');

    if (!file_exists($sitemapPath)) {
      abort(404, 'Sitemap not found. Please generate it first.');
    }

    return response()->file($sitemapPath, [
      'Content-Type' => 'application/xml'
    ]);
  }
}
