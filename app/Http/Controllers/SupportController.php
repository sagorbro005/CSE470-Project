<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Support;

class SupportController extends Controller
{
    // Show the support form
    public function create()
    {
        return view('CustomerSupport.support'); // Renders the support form
    }

    // Store support inquiry
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'phone' => 'required|string|max:11',
            'subject' => 'required|string|max:255',
            'message' => 'required|string',
        ]);

        Support::create($validatedData); // Save inquiry in the database

        return redirect()->back()->with('success', 'Your message has been sent successfully! We are working on your issues and will get back to you soon.');
    }

    // View inquiries (for admin)
    public function index()
    {
        $inquiries = Support::orderBy('created_at', 'asc')->get();  // Fetch inquiries in ascending order
        return view('CustomerSupport.adminSupport', compact('inquiries')); // Renders the admin view
    }
}

