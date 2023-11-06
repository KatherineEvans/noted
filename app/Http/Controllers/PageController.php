<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;
use App\Models\Interview;
use App\Models\JobApplication;
use App\Http\Resources\JobApplicationResource;

class PageController extends Controller
{
    public function home()
    {
        return Inertia::render('App', [
            'interviews' => Interview::with('contacts', 'jobApplication')->orderBy('date_interviewed', 'desc')->take(6)->get(),
            'jobApplications' => JobApplication::with('interviews', 'contacts')->orderBy('date_applied', 'desc')->take(10)->get()
        ]);
    }
}
