<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Spatie\Sitemap\Sitemap;
use Spatie\Sitemap\Tags\Url;
use Carbon\Carbon;

class GenerateSitemap extends Command
{
  protected $signature = 'sitemap:generate';
  protected $description = 'Generate XML sitemap for the website';

  public function handle()
  {
    $this->info('Generating sitemap...');

    $sitemap = Sitemap::create();

    // Define all routes with their priorities and change frequencies
    $routes = [
      // Main pages
      ['route' => 'home', 'priority' => 1.0, 'changefreq' => 'daily'],
      ['route' => 'about', 'priority' => 0.9, 'changefreq' => 'monthly'],
      ['route' => 'services', 'priority' => 0.9, 'changefreq' => 'weekly'],
      ['route' => 'contact', 'priority' => 0.8, 'changefreq' => 'monthly'],
      ['route' => 'blog', 'priority' => 0.8, 'changefreq' => 'daily'],
      ['route' => 'properties', 'priority' => 0.8, 'changefreq' => 'weekly'],
      ['route' => 'faq', 'priority' => 0.6, 'changefreq' => 'monthly'],
      ['route' => 'career', 'priority' => 0.6, 'changefreq' => 'weekly'],

      // Regulatory compliance services (High priority)
      ['route' => 'hidco', 'priority' => 0.8, 'changefreq' => 'monthly'],
      ['route' => 'nkda', 'priority' => 0.8, 'changefreq' => 'monthly'],
      ['route' => 'webel', 'priority' => 0.8, 'changefreq' => 'monthly'],
      ['route' => 'ndita', 'priority' => 0.8, 'changefreq' => 'monthly'],
      ['route' => 'kmc', 'priority' => 0.8, 'changefreq' => 'monthly'],
      ['route' => 'ud-development', 'priority' => 0.7, 'changefreq' => 'monthly'],
      ['route' => 'environmental', 'priority' => 0.7, 'changefreq' => 'monthly'],
      ['route' => 'rera', 'priority' => 0.8, 'changefreq' => 'monthly'],
      ['route' => 'building-plan', 'priority' => 0.7, 'changefreq' => 'monthly'],
      ['route' => 'fire-noc', 'priority' => 0.7, 'changefreq' => 'monthly'],
      ['route' => 'government-liaison', 'priority' => 0.7, 'changefreq' => 'monthly'],

      // Legal services
      ['route' => 'property-diligence', 'priority' => 0.8, 'changefreq' => 'monthly'],
      ['route' => 'title-verification', 'priority' => 0.7, 'changefreq' => 'monthly'],
      ['route' => 'property-registration', 'priority' => 0.7, 'changefreq' => 'monthly'],
      ['route' => 'legal-drafting', 'priority' => 0.7, 'changefreq' => 'monthly'],
      ['route' => 'property-dispute', 'priority' => 0.7, 'changefreq' => 'monthly'],
      ['route' => 'real-estate-litigation', 'priority' => 0.7, 'changefreq' => 'monthly'],
      ['route' => 'legal-audit', 'priority' => 0.7, 'changefreq' => 'monthly'],
      ['route' => 'contract-review', 'priority' => 0.7, 'changefreq' => 'monthly'],
      ['route' => 'property-valuation', 'priority' => 0.7, 'changefreq' => 'monthly'],
      ['route' => 'joint-venture', 'priority' => 0.6, 'changefreq' => 'monthly'],
      ['route' => 'property-taxation', 'priority' => 0.7, 'changefreq' => 'monthly'],

      // Business & corporate services
      ['route' => 'mall', 'priority' => 0.7, 'changefreq' => 'monthly'],
      ['route' => 'nri', 'priority' => 0.8, 'changefreq' => 'monthly'],
      ['route' => 'trade-license', 'priority' => 0.6, 'changefreq' => 'monthly'],
      ['route' => 'dpr', 'priority' => 0.7, 'changefreq' => 'monthly'],
      ['route' => 'completion-certificate', 'priority' => 0.7, 'changefreq' => 'monthly'],
      ['route' => 'corporate-property', 'priority' => 0.7, 'changefreq' => 'monthly'],
      ['route' => 'property-investment', 'priority' => 0.7, 'changefreq' => 'monthly'],
      ['route' => 'property-tax', 'priority' => 0.7, 'changefreq' => 'monthly'],
      ['route' => 'property-portfolio', 'priority' => 0.7, 'changefreq' => 'monthly'],
      ['route' => 'real-estate-structuring', 'priority' => 0.6, 'changefreq' => 'monthly'],

      // Blog posts
      ['route' => 'blog1', 'priority' => 0.6, 'changefreq' => 'monthly'],
      ['route' => 'blog2', 'priority' => 0.6, 'changefreq' => 'monthly'],
      ['route' => 'blog3', 'priority' => 0.6, 'changefreq' => 'monthly'],
      ['route' => 'blog4', 'priority' => 0.6, 'changefreq' => 'monthly'],

      // Other pages
      ['route' => 'job-details', 'priority' => 0.5, 'changefreq' => 'yearly'],
      ['route' => 'privacy-policy', 'priority' => 0.4, 'changefreq' => 'yearly'],
      ['route' => 'terms-and-condition', 'priority' => 0.4, 'changefreq' => 'yearly'],
    ];

    $addedUrls = 0;

    foreach ($routes as $routeData) {
      try {
        $url = route($routeData['route']);
        $sitemap->add(
          Url::create($url)
            ->setLastModificationDate(Carbon::now())
            ->setChangeFrequency($routeData['changefreq'])
            ->setPriority($routeData['priority'])
        );
        $addedUrls++;
        $this->line("✓ Added: {$url}");
      } catch (\Exception $e) {
        $this->error("✗ Failed to add route: {$routeData['route']} - {$e->getMessage()}");
      }
    }

    // Write sitemap to public directory
    $sitemapPath = public_path('sitemap.xml');
    $sitemap->writeToFile($sitemapPath);

    $this->info("Sitemap generated successfully!");
    $this->info("Total URLs added: {$addedUrls}");
    $this->info("Sitemap saved to: {$sitemapPath}");
    $this->info("Sitemap URL: " . url('sitemap.xml'));

    return 0;
  }
}
