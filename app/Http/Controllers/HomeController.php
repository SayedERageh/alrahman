<?php

namespace App\Http\Controllers;

use App\Models\Service;
use App\Models\Faq;

class HomeController extends Controller
{
    public function index()
    {
        $services = Service::orderBy('sort_order')
            ->take(6)
            ->get();

        $faqs = Faq::where('is_active', true)
            ->orderBy('sort_order')
            ->get();

        return view('pages.home', compact('services', 'faqs'));
    }
}