<?php

namespace App\Http\Controllers;

use App\Models\AboutPage;

class AboutController extends Controller
{
    public function index()
    {
        $page = AboutPage::first();

        return view('pages.about', compact('page'));
    }
}