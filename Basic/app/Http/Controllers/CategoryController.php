<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        echo "Categories Index";
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        echo "Categories Create";
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        echo "Categories Store";
    }

    /**
     * Display the specified resource.
     */
    public function show(Category $category)
    {
        echo "Categories Show";
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Category $category)
    {
        echo "Categories Edit";
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Category $category)
    {
        echo "Categories Update";
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Category $category)
    {
        echo "Categories Destroy";
    }
}
