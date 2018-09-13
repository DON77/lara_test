<?php

namespace App\Http\Controllers;

use App\Category;
use App\Company;
use App\Image;
use App\Pill;
use Illuminate\Http\Request;

class PillController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pills = Pill::all();
        return view('pill.index',compact('pills'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
        $companies = Company::all();

        return view('pill.create',compact('categories','companies'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'category' => 'required',
            'company' => 'required',
        ]);

        $pill = Pill::create([
            'name' => $request->name,
            'description' => $request->description,
            'company_id' => $request->company,
        ]);

        $pill->categories()->sync($request->category);

        if ($request->has('image')) {
            $filename = microtime(true).'.'.$request->file('image')->extension();
            $path = 'uploads/pills';

            $request->file('image')->move($path, $filename);

            $image = Image::create([
                'name' => $filename
            ]);

            $pill->update(['image_id' => $image->id]);
        }

        return redirect()->route('pill.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
