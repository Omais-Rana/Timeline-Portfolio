<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Project;

class ProjectController extends Controller
{
    public function portSingle(Request $request)
    {
        $projects = Project::whereSlug($request->slug)->firstOrFail();
        return view('portfolio-single', compact('projects'));
    }
}
