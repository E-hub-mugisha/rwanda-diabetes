<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\LearningMaterial;
use Illuminate\Http\Request;

class LearningMaterialController extends Controller
{
    public function index()
    {
        $materials = LearningMaterial::where('status', 'published')->paginate(10);
        return view('pages.learning_materials', compact('materials'));
    }

    public function show($slug)
    {
        $material = LearningMaterial::where('slug', $slug)->firstOrFail();
        return view('pages.learning_material_show', compact('material'));
    }

    public function category($slug)
    {
        $category = Category::where('slug', $slug)->with('materials')->firstOrFail();
        return view('pages.learning_material_category', compact('category'));
    }

}
