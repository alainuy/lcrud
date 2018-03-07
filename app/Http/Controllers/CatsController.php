<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cat;

class CatsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Http\Response|\Illuminate\View\View
     */
    public function index()
    {
        //
//        $cats = Cat::all();
        $cats = Cat::orderBy('updated_at', 'desc')->get();
        return view('cats.index')->with('cats', $cats);
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('cats.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //validate form elements
        $this->validate($request, [
            'name' => 'required',
            'color' => 'required'
        ]);
        
        // Insert to DB
        $cat = new Cat;
        $cat->name = $request->name;
        $cat->color = $request->color;
        $cat->save();

        return redirect('cats');
        
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $cat = Cat::find($id);
        return view('cats.show')->with('cat', $cat);

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
        $cat = Cat::find($id);
        return view('cats.edit')->with('cat', $cat);
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
        //validate form elements before submitting
        $this->validate($request, [
            'name' => 'required',
            'color' => 'required'
        ]);



        // Update record at DB
        $cat = Cat::find($id);
        $cat->name = $request->name;
        $cat->color = $request->color;
        $cat->save();

        return redirect('cats');

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
        $cat = Cat::find($id);
        $cat->delete();

        return redirect('cats');

    }
}
