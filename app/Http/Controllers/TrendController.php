<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;

class TrendController extends Controller
{
    public function show()
    {
        return Inertia::render('Trend/Show');
    }
}
