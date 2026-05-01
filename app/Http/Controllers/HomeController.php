<?php

namespace App\Http\Controllers;

use App\Models\Service;

class HomeController extends Controller
{
    public function index()
    {
        $services = Service::latest()->take(6)->get();

        return view('pages.home', compact('services'));
    }
}