<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Trend;
use Illuminate\Http\Request;

use Inertia\Inertia;

class HomeController extends Controller
{
    public function index()
    {
        $categories = Category::all();

        $trends = Trend::all();

        return Inertia::render('Home', compact(['categories', 'trends']));
    }
}
