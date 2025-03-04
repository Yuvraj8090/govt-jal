<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Page;
use Illuminate\Support\Facades\View;

class PageController extends Controller
{
    public function show($slug)
    {
        // Find the page by slug
        $page = Page::where('slug', $slug)->where('status', 'ACTIVE')->first();

        if ($page) {
            return view('pages.show', compact('page'));
        }

        // If page not found, redirect to another route (e.g., homepage)
        return redirect()->route('welcome')->with('error', 'Page not found');
    }
}
