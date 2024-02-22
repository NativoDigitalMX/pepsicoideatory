<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Trend;
use Illuminate\Http\Request;

use Inertia\Inertia;

class HomeController extends Controller
{
    public function index(Request $request)
    {

        return Inertia::render("Home", [
            'categories' => Category::all(),
            'trends' => Trend::when($request->input('search'), function ($query, $search) {
                    $query->where('title', 'like', "%{$search}%")
                        ->orWhere('subtitle', 'like', "%{$search}%")
                        ->orWhere('description', 'like', "%{$search}%")
                        ->orWhere('relevant', 'like', "%{$search}%")
                        ->orderBy('id', 'desc')
                        ->get()
                        ->load('category');
                })
                ->when($request->input('category'), function ($query, $category) {
                    $query->where('category_id', $category)
                        ->orderBy('id', 'desc')
                        ->get()
                        ->load('category');
                })
                ->orderBy('id', 'desc')
                ->get()
                ->load('category'),
            'filters' => $request->only(['search', 'category']),
        ]);


        //$trends = Trend::orderByDesc('id')->get()->load('category');

        //return Inertia::render('Home', compact(['categories', 'trends']));
    }
}
