<?php

namespace App\Http\Controllers;

use App\Models\Faq;
use App\Models\HomePage;
use App\Models\Service;

class HomeController extends Controller
{
    public function index()
    {
        $page = HomePage::first();

        $services = Service::orderBy('sort_order')
            ->take(6)
            ->get();

        $faqs = Faq::where('is_active', true)
            ->orderBy('sort_order')
            ->get();

        return view('pages.home', compact(
            'page',
            'services',
            'faqs'
        ));
    }
}