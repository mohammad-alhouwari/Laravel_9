<?php

namespace App\Http\Controllers;

use App\Models\cats;
use Illuminate\Http\Request;

class CatsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $cats = cats::all(); // Assuming you have a 'cats' table in your database

        return view('cats.index', compact('cats'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('cats.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $request->validate([
            'name' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            // Add any desired image validation rules
            'age' => 'required|integer',
        ]);

        $cat = new cats();

        $cat->name = $request->input('name');
        $cat->age = $request->input('age');

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('images'), $imageName); // Upload the image to the public/images directory
            $cat->image = $imageName;
        }

        $cat->save();

        return redirect()->route('cats.index')->with('success', 'Cat created successfully');


    }

    /**
     * Display the specified resource.
     */
    public function show(cats $cats)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    // public function edit(cats $cats)
    public function edit($id)
    {
        $cat = cats::findOrFail($id);

        return view('cats.edit', compact('cat'));
    }

    /**
     * Update the specified resource in storage.
     */
    // public function update(Request $request, cats $cats)
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            'image' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
            // Add any desired image validation rules
            'age' => 'required|integer',
        ]);

        $cat = cats::findOrFail($id);

        $cat->name = $request->input('name');
        $cat->age = $request->input('age');

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('images'), $imageName); // Upload the image to the public/images directory
            $cat->image = $imageName;
        }

        $cat->save();

        return redirect()->route('cats.index')->with('success', 'Cat updated successfully');

    }

    /**
     * Remove the specified resource from storage.
     */
    // public function destroy(cats $cats)
    public function destroy($id)
    {

        $cat = cats::findOrFail($id);
        $cat->delete();

        return redirect()->route('cats.index')->with('success', 'Cat deleted successfully');

    }
}