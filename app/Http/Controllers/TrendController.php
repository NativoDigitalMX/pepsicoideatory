<?php

namespace App\Http\Controllers;

use App\Models\Tag;
use App\Models\Trend;
use Illuminate\Http\Request;
use Inertia\Inertia;

class TrendController extends Controller
{
    public function index()
    {
        return Inertia::render('Trend/Index');
    }

    public function show(Trend $trend)
    {

        $trend->load(['category', 'tags', 'considerations', 'references', 'challenges', 'facts']);

        return Inertia::render('Trend/Show', compact(['trend']));
    }
}
