<?php

namespace App\Http\Controllers;

use App\Models\Crud;
use Illuminate\Http\Request;

class CrudController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $allUser = Crud::paginate(10);
        return view('crud.index', ['cruds' => $allUser]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

        return view('crud.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // echo "store called";
        // dd ($request->all());
        // all form data is show without fillable in a model. this is very simple beacuse create a form show korbo, request a value store kore new model a save korbo.

        $crud = new Crud();
        $crud->name = $request->name;
        $crud->email = $request->email;
        $crud->phone = $request->phone;
        $crud->save();
        return redirect()->route('crud.index')->with('success', 'Todo created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Crud $crud)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Crud $crud)
    {
        return view('crud.edit');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Crud $crud)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Crud $crud)
    {
        //
    }
}
