<?php

namespace App\Http\Controllers;

use App\Models\Service;
use App\Models\ServicePage;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    // صفحة جميع الخدمات
    public function index()
    {
        $page = ServicePage::first();

        $services = Service::latest()->get();

        return view('services.index', compact('page', 'services'));
    }

    // خدمات الصفحة الرئيسية
    public function home()
    {
        $services = Service::latest()->get();

        return view('pages.home', compact('services'));
    }

    // صفحة تفاصيل الخدمة
    public function show($slug)
    {
        $service = Service::where('slug', $slug)->firstOrFail();

        return view('services.show', compact('service'));
    }
}