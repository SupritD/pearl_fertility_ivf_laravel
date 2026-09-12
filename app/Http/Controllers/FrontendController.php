<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index()
    {
        $recent_blogs = \App\Models\Blog::where('is_published', true)->latest()->take(3)->get();
        return view('frontend.index', compact('recent_blogs'));
    }

    public function about_us()
    {
        return view('frontend.about-us');
    }

    public function best_ivf_center_in_mumbai()
    {
        return view('frontend.best-ivf-center-in-mumbai');
    }

    public function ivf_cost_in_mumbai()
    {
        return view('frontend.ivf-cost-in-mumbai');
    }

    public function iui_treatment_in_mumbai()
    {
        return view('frontend.iui-treatment-in-mumbai');
    }

    public function imsi_treatment_in_mumbai()
    {
        return view('frontend.imsi-treatment-in-mumbai');
    }

    public function icsi_treatment_for_infertility()
    {
        return view('frontend.icsi-treatment-for-infertility');
    }

    public function fertility_evaluation()
    {
        return view('frontend.fertility-evaluation');
    }

    public function infertility_work_up()
    {
        return view('frontend.infertility-work-up');
    }

    public function blastocyst()
    {
        return view('frontend.blastocyst');
    }

    public function gynecologist_obstetrics_doctors_in_mumbai()
    {
        return view('frontend.gynecologist-obstetrics-doctors-in-mumbai');
    }

    public function best_lady_gynecologist_in_mumbai()
    {
        return view('frontend.best-lady-gynecologist-in-mumbai');
    }

    public function menopause_clinic()
    {
        return view('frontend.menopause-clinic');
    }

    public function contraception_counseling()
    {
        return view('frontend.contraception-counseling');
    }

    public function pcos_treatment_in_mumbai()
    {
        return view('frontend.pcos-treatment-in-mumbai');
    }

    public function oocyte()
    {
        return view('frontend.oocyte');
    }

    public function embryo_freezing()
    {
        return view('frontend.embryo-freezing');
    }

    public function semen_freezing()
    {
        return view('frontend.semen-freezing');
    }

    public function donor_sperm()
    {
        return view('frontend.donor-sperm');
    }

    public function egg_donation()
    {
        return view('frontend.egg-donation');
    }

    public function donor_embryo()
    {
        return view('frontend.donor-embryo');
    }

    public function automated_semen_analyser()
    {
        return view('frontend.automated-semen-analyser');
    }

    public function sonography()
    {
        return view('frontend.sonography');
    }

    public function laproscopy()
    {
        return view('frontend.laproscopy');
    }

    public function cervical_cancer()
    {
        return view('frontend.cervical-cancer');
    }

    public function hysteroscopy()
    {
        return view('frontend.hysteroscopy');
    }

    public function doctor()
    {
        return view('frontend.doctor');
    }

    public function blogs()
    {
        $blogs = \App\Models\Blog::where('is_published', true)->latest()->paginate(9);
        return view('frontend.blogs', compact('blogs'));
    }

    public function show_blog($slug)
    {
        $blog = \App\Models\Blog::where('slug', $slug)->where('is_published', true)->firstOrFail();
        
        $recent_blogs = \App\Models\Blog::where('is_published', true)
            ->where('id', '!=', $blog->id)
            ->latest()
            ->take(3)
            ->get();
            
        $related_blogs = \App\Models\Blog::where('is_published', true)
            ->where('id', '!=', $blog->id)
            ->whereHas('categories', function($q) use ($blog) {
                $q->whereIn('categories.id', $blog->categories->pluck('id'));
            })
            ->latest()
            ->take(3)
            ->get();

        return view('frontend.blogs.show', compact('blog', 'recent_blogs', 'related_blogs'));
    }

    public function faqs()
    {
        return view('frontend.faqs');
    }

    public function contacts()
    {
        return view('frontend.contacts');
    }

    public function book_appointment()
    {
        return view('frontend.book-appointment');
    }
}
