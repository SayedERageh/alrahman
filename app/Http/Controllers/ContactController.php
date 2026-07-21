<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Models\ContactPage;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    // عرض صفحة اتصل بنا
    public function index()
    {
        $page = ContactPage::first();

        return view('pages.contact', compact('page'));
    }

    // إرسال نموذج التواصل
    public function store(Request $request)
    {
        $request->validate([
            'name'    => 'required|string|max:255',
            'phone'   => 'required|string|max:20',
            'message' => 'required|string',
        ]);

        Contact::create($request->all());

        return back()->with('success', 'تم إرسال طلبك بنجاح 👍');
    }
}