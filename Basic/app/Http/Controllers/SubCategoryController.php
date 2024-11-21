<?php

namespace App\Http\Controllers;

use App\Models\SubCategory;
use Illuminate\Http\Request;
use App\Models\Category;

class SubCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // $subcategories = SubCategory::paginate(10);
        $subcategories = SubCategory::with('category')->paginate(10);
        return view('subcategories.index')->with('subcategories', $subcategories);
    }

    /**s
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::pluck('name', 'id');
        // dd($categories);
        return view('subcategories.create')->with('categories', $categories);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $subcategory = SubCategory::create($request->all());
        // dd($subcategory);
        return redirect()->route('subcategories.index', $subcategory)->with('success', 'SubCategory created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(SubCategory $subcategory)
    {
        // dd($subcategory);
        return view('subcategories.show')->with('subcategory', $subcategory);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(SubCategory $subcategory)
    {
        // dd($subcategory);
        $c = Category::pluck("name","id");
        return view('subcategories.edit')
        ->with('categories', $c)
        ->with('subcategory', $subcategory);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, SubCategory $subcategory)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(SubCategory $subcategory)
    {
        //
    }
}
