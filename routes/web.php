<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Auth;

Route::get('/', [FrontendController::class, 'index'])->name('frontend.index');

Route::get('/about-us', [FrontendController::class, 'about_us'])->name('frontend.about-us');
Route::get('/best-ivf-center-in-mumbai', [FrontendController::class, 'best_ivf_center_in_mumbai'])->name('frontend.best-ivf-center-in-mumbai');
Route::get('/ivf-cost-in-mumbai', [FrontendController::class, 'ivf_cost_in_mumbai'])->name('frontend.ivf-cost-in-mumbai');
Route::get('/iui-treatment-in-mumbai', [FrontendController::class, 'iui_treatment_in_mumbai'])->name('frontend.iui-treatment-in-mumbai');
Route::get('/imsi-treatment-in-mumbai', [FrontendController::class, 'imsi_treatment_in_mumbai'])->name('frontend.imsi-treatment-in-mumbai');
Route::get('/icsi-treatment-for-infertility', [FrontendController::class, 'icsi_treatment_for_infertility'])->name('frontend.icsi-treatment-for-infertility');
Route::get('/fertility-evaluation', [FrontendController::class, 'fertility_evaluation'])->name('frontend.fertility-evaluation');
Route::get('/infertility-work-up', [FrontendController::class, 'infertility_work_up'])->name('frontend.infertility-work-up');
Route::get('/blastocyst', [FrontendController::class, 'blastocyst'])->name('frontend.blastocyst');
Route::get('/gynecologist-obstetrics-doctors-in-mumbai', [FrontendController::class, 'gynecologist_obstetrics_doctors_in_mumbai'])->name('frontend.gynecologist-obstetrics-doctors-in-mumbai');
Route::get('/best-lady-gynecologist-in-mumbai', [FrontendController::class, 'best_lady_gynecologist_in_mumbai'])->name('frontend.best-lady-gynecologist-in-mumbai');
Route::get('/menopause-clinic', [FrontendController::class, 'menopause_clinic'])->name('frontend.menopause-clinic');
Route::get('/contraception-counseling', [FrontendController::class, 'contraception_counseling'])->name('frontend.contraception-counseling');
Route::get('/pcos-treatment-in-mumbai', [FrontendController::class, 'pcos_treatment_in_mumbai'])->name('frontend.pcos-treatment-in-mumbai');
Route::get('/oocyte', [FrontendController::class, 'oocyte'])->name('frontend.oocyte');
Route::get('/embryo-freezing', [FrontendController::class, 'embryo_freezing'])->name('frontend.embryo-freezing');
Route::get('/semen-freezing', [FrontendController::class, 'semen_freezing'])->name('frontend.semen-freezing');
Route::get('/donor-sperm', [FrontendController::class, 'donor_sperm'])->name('frontend.donor-sperm');
Route::get('/egg-donation', [FrontendController::class, 'egg_donation'])->name('frontend.egg-donation');
Route::get('/donor-embryo', [FrontendController::class, 'donor_embryo'])->name('frontend.donor-embryo');
Route::get('/automated-semen-analyser', [FrontendController::class, 'automated_semen_analyser'])->name('frontend.automated-semen-analyser');
Route::get('/sonography', [FrontendController::class, 'sonography'])->name('frontend.sonography');
Route::get('/laproscopy', [FrontendController::class, 'laproscopy'])->name('frontend.laproscopy');
Route::get('/cervical-cancer', [FrontendController::class, 'cervical_cancer'])->name('frontend.cervical-cancer');
Route::get('/hysteroscopy', [FrontendController::class, 'hysteroscopy'])->name('frontend.hysteroscopy');
Route::get('/doctor', [FrontendController::class, 'doctor'])->name('frontend.doctor');
Route::get('/blogs', [FrontendController::class, 'blogs'])->name('frontend.blogs.index');
Route::get('/faqs', [FrontendController::class, 'faqs'])->name('frontend.faqs');
Route::get('/contacts', [FrontendController::class, 'contacts'])->name('frontend.contacts');
Route::get('/book-appointment', [FrontendController::class, 'book_appointment'])->name('frontend.book-appointment');
Route::get('/blogs/why-choosing-the-best-lady-gynecologist-in-mumbai-matters-for-womens-health', [FrontendController::class, 'blog_why_choosing_the_best_lady_gynecologist_in_mumbai_matters_for_womens_health'])->name('frontend.blogs.why-choosing-the-best-lady-gynecologist-in-mumbai-matters-for-womens-health');
Route::get('/blogs/who-needs-icsi-treatment-signs-you-should-consult-a-fertility-specialist-in-mumbai', [FrontendController::class, 'blog_who_needs_icsi_treatment_signs_you_should_consult_a_fertility_specialist_in_mumbai'])->name('frontend.blogs.who-needs-icsi-treatment-signs-you-should-consult-a-fertility-specialist-in-mumbai');
Route::get('/blogs/low-cost-ivf-centre-in-mumbai-affordable-fertility-treatment-without-compromising-quality', [FrontendController::class, 'blog_low_cost_ivf_centre_in_mumbai_affordable_fertility_treatment_without_compromising_quality'])->name('frontend.blogs.low-cost-ivf-centre-in-mumbai-affordable-fertility-treatment-without-compromising-quality');
Route::get('/blogs/how-to-choose-the-best-ivf-centre-in-mumbai-a-complete-guide-for-couples', [FrontendController::class, 'blog_how_to_choose_the_best_ivf_centre_in_mumbai_a_complete_guide_for_couples'])->name('frontend.blogs.how-to-choose-the-best-ivf-centre-in-mumbai-a-complete-guide-for-couples');
Route::get('/blogs/ivf-treatment-in-mumbai-step-by-step-process-success-rates-benefits', [FrontendController::class, 'blog_ivf_treatment_in_mumbai_step_by_step_process_success_rates_benefits'])->name('frontend.blogs.ivf-treatment-in-mumbai-step-by-step-process-success-rates-benefits');
Route::get('/blogs/why-consulting-a-lady-gynecologist-is-important-for-infertility-ivf-treatment-in-mumbai', [FrontendController::class, 'blog_why_consulting_a_lady_gynecologist_is_important_for_infertility_ivf_treatment_in_mumbai'])->name('frontend.blogs.why-consulting-a-lady-gynecologist-is-important-for-infertility-ivf-treatment-in-mumbai');
Route::get('/blogs/icsi-treatment-for-infertility-a-breakthrough-hope-for-couples-at-pearl-fertility-ivf-mumbai', [FrontendController::class, 'blog_icsi_treatment_for_infertility_a_breakthrough_hope_for_couples_at_pearl_fertility_ivf_mumbai'])->name('frontend.blogs.icsi-treatment-for-infertility-a-breakthrough-hope-for-couples-at-pearl-fertility-ivf-mumbai');

Auth::routes();

Route::middleware(['auth'])->prefix('admin')->name('admin.')->group(function () {
    Route::get('/dashboard', [HomeController::class, 'index'])->name('dashboard');
    
    // Reports
    Route::get('/reports', [App\Http\Controllers\Admin\ReportController::class, 'index'])->name('reports.index');
    Route::post('/reports/export', [App\Http\Controllers\Admin\ReportController::class, 'export'])->name('reports.export');

    // Reviews
    Route::resource('reviews', App\Http\Controllers\ReviewController::class);

    // Profile
    Route::get('/profile', [App\Http\Controllers\Admin\ProfileController::class, 'index'])->name('profile');
    Route::post('/profile', [App\Http\Controllers\Admin\ProfileController::class, 'update'])->name('profile.update');

    Route::resource('categories', App\Http\Controllers\Admin\CategoryController::class);
    Route::resource('tags', App\Http\Controllers\Admin\TagController::class);
    Route::resource('sliders', App\Http\Controllers\Admin\SliderController::class);
    Route::resource('blogs', App\Http\Controllers\Admin\BlogController::class);
    Route::resource('leads', App\Http\Controllers\Admin\LeadController::class)->except(['create', 'store']);
});
