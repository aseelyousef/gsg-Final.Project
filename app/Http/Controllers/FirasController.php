<?php

namespace App\Http\Controllers;

use App\Models\firas;
use Illuminate\Http\Request;

class FirasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('doctor.firas');    
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function firas(Request $request)
    {
     $request->validate([
        'fName'=>'required',
        'idnumber'=>'required',
        'address'=>'required',
        'amount'=>'required',
        'money'=> 'required|string|max:255',
        'birthday'=>'required',
       
     ]);
     firass::create($request->all());
     return redirect()->route('firas')
    ->with('success','customer created successfully');
    }
    /**
     * Display the specified resource.
     *
     * @param  \App\Models\firas  $firas
     * @return \Illuminate\Http\Response
     */
    public function show(firas $firas)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\firas  $firas
     * @return \Illuminate\Http\Response
     */
    public function edit(firas $firas)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\firas  $firas
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, firas $firas)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\firas  $firas
     * @return \Illuminate\Http\Response
     */
    public function destroy(firas $firas)
    {
        //
    }
}
