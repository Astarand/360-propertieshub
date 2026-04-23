<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\OtherController;
use App\Http\Controllers\ContactInquiryController;
use App\Http\Controllers\ExpertQueryController;

Route::get('/', [HomeController::class, 'Index'])->name('home');
Route::get('/about-us', [HomeController::class, 'About'])->name('about');
Route::get('/property-deal', [HomeController::class, 'Properties'])->name('properties');
Route::get('/approval-and-nocs', [HomeController::class, 'Approveal'])->name('approveal');
Route::get('/architecture-and-structural', [HomeController::class, 'Architecture'])->name('architecture');
Route::get('/nri-service', [HomeController::class, 'NRIService'])->name('nri-service');
Route::get('/success-stories', [HomeController::class, 'Projects'])->name('projects');
Route::get('/contact-us', [HomeController::class, 'Contact'])->name('contact');
Route::post('/contact-us', [HomeController::class, 'ContactStore'])->name('contact.store');

// Service Sidebar Contact Form
Route::post('/service-inquiry', [ContactInquiryController::class, 'store'])->name('service.inquiry.store');

// Expert Solution Modal Form
Route::post('/expert-solution', [ExpertQueryController::class, 'store'])->name('expert.solution.store');

// Admin route for viewing expert queries
Route::get('/admin/expert-queries', [ExpertQueryController::class, 'index'])->name('admin.expert.queries');

// Test route for debugging
Route::get('/test-expert-query', function() {
    try {
        $query = App\Models\ExpertQuery::create([
            'name' => 'Test User',
            'phone' => '1234567890',
            'email' => 'test@example.com',
            'subject' => 'Test Subject',
            'query' => 'Test query message'
        ]);
        return 'Success: Created query with ID ' . $query->id;
    } catch (Exception $e) {
        return 'Error: ' . $e->getMessage();
    }
});

//Service Routes
Route::get('/our-services', [ServiceController::class, 'Services'])->name('services');
Route::get('/hidco-property-solution', [ServiceController::class, 'HidcoPropertyCompliance'])->name('hidco');
Route::get('/nkda-regulatory-support', [ServiceController::class, 'NKDARegulatorySupport'])->name('nkda');
Route::get('/webel-property-solutions', [ServiceController::class, 'WEBELPropertySolutions'])->name('webel');
Route::get('/ndita-industrial-compliance', [ServiceController::class, 'NDITAIndustrialCompliance'])->name('ndita');
Route::get('/kmc-municipal-services', [ServiceController::class, 'KMCMunicipalServices'])->name('kmc');
Route::get('/ud-development-permissions', [ServiceController::class, 'UDDevelopmentPermissions'])->name('ud-development');
Route::get('/environmental-clearance-services', [ServiceController::class, 'EnvironmentalClearanceServices'])->name('environmental');
Route::get('/rera-compliance-supports', [ServiceController::class, 'RERAComplianceSupport'])->name('rera');
Route::get('/building-plan-approval', [ServiceController::class, 'BuildingPlanApproval'])->name('building-plan');
Route::get('/fire-noc-services', [ServiceController::class, 'FireNOCServices'])->name('fire-noc');
Route::get('/government-liaison-services', [ServiceController::class, 'GovernmentLiaisonServices'])->name('government-liaison');
Route::get('/property-due-diligence', [ServiceController::class, 'PropertyDueDiligence'])->name('property-diligence');
Route::get('/title-verification-services', [ServiceController::class, 'TitleVerificationServices'])->name('title-verification');
Route::get('/property-registration-support', [ServiceController::class, 'PropertyRegistrationSupport'])->name('property-registration');
Route::get('/legal-documentation-drafting', [ServiceController::class, 'LegalDocumentationDrafting'])->name('legal-drafting');
Route::get('/property-dispute-resolution', [ServiceController::class, 'PropertyDisputeResolution'])->name('property-dispute');
Route::get('/real-estate-litigation', [ServiceController::class, 'RealEstateLitigation'])->name('real-estate-litigation');
Route::get('/legal-audit-services', [ServiceController::class, 'LegalAuditServices'])->name('legal-audit');
Route::get('/contract-review-services', [ServiceController::class, 'ContractReviewServices'])->name('contract-review');
Route::get('/property-valuation-services', [ServiceController::class, 'PropertyValuationServices'])->name('property-valuation');
Route::get('/joint-venture-documentation', [ServiceController::class, 'JointVentureDocumentation'])->name('joint-venture');
Route::get('/property-taxation-planning', [ServiceController::class, 'PropertyTaxationPlanning'])->name('property-taxation');
Route::get('/business-mall-setup', [ServiceController::class, 'BusinessMallSetup'])->name('mall');
Route::get('/nri-property-services', [ServiceController::class, 'NRIPropertyServices'])->name('nri');
Route::get('/trade-license-registration', [ServiceController::class, 'TradeLicenseRegistration'])->name('trade-license');
Route::get('/dpr-preparation-services', [ServiceController::class, 'DPRPreparationServices'])->name('dpr');
Route::get('/completion-certificate-services', [ServiceController::class, 'CompletionCertificateServices'])->name('completion-certificate');
Route::get('/corporate-property-consulting', [ServiceController::class, 'CorporatePropertyConsulting'])->name('corporate-property');
Route::get('/property-investment-advisory', [ServiceController::class, 'PropertyInvestmentAdvisory'])->name('property-investment');
Route::get('/property-tax-advisory', [ServiceController::class, 'PropertyTaxAdvisory'])->name('property-tax');
Route::get('/property-portfolio-management', [ServiceController::class, 'PropertyPortfolioManagement'])->name('property-portfolio');
Route::get('/real-estate-structuring', [ServiceController::class, 'RealEstateStructuring'])->name('real-estate-structuring');

//Blog Routes
Route::get('/our-blogs', [BlogController::class, 'Blog'])->name('blog');
Route::get('/complete-legal-guide-for-property-owner-and-business-in-kolkata-and-india', [BlogController::class, 'Blog1'])->name('blog1');
Route::get('/how-to-optimise-your-property-portfolio-for-higher-roi', [BlogController::class, 'Blog2'])->name('blog2');
Route::get('/property-tax-in-west-bengal-compliance-and-savings-guide', [BlogController::class, 'Blog3'])->name('blog3');
Route::get('/why-a-strong-dpr-is-the-fast-track-to-real-estate-funding', [BlogController::class, 'Blog4'])->name('blog4');

//Other Routes
Route::get('/frequently-asked-questions', [OtherController::class, 'FAQ'])->name('faq');
Route::get('/job-opening', [OtherController::class, 'Career'])->name('career');
Route::get('/job-details', [OtherController::class, 'JobDetails'])->name('job-details');
Route::get('/privacy-policy', [OtherController::class, 'PrivacyPolicy'])->name('privacy-policy');
Route::get('/terms-and-condition', [OtherController::class, 'TermsAndCondition'])->name('terms-and-condition');


//Sitemap Routes
Route::get('/sitemap.xml', [App\Http\Controllers\SitemapController::class, 'show'])->name('sitemap');
Route::get('/generate-sitemap', [App\Http\Controllers\SitemapController::class, 'generate'])->name('generate-sitemap');
Route::get('/admin/sitemap', function () {
  return view('admin.sitemap');
})->name('admin.sitemap');
