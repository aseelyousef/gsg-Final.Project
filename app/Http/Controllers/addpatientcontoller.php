<?php

namespace App\Http\Controllers;
use App\Models\addpatients;

use Illuminate\Http\Request;
use Session;
use DB;
class addpatientcontoller extends Controller
{
    public function addpatient(Request $request)
    {
        return view('doctor.addpatient');    
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
    public function store(Request $request)
    {
     $request->validate([
        'fName'=>'required',
        'lName'=>'required',
        'idnumber'=>'required',
        'address'=>'required',
        'phone'=>'required',
        'phone2'=>'required',
        'gender'=> 'required|string|max:255',
        'birthday'=>'required',
        'Marital'=>'required'
     ]);
     addpatients::create($request->all());
    return redirect()->route('addpatient')
   ->with('success','patient created successfully');
 
 }

    /**
     * 
     * Display the specified resource.
     *
     * @param  \App\Models\addpatient  $addpatient
     * @return \Illuminate\Http\Response
     */
    public function show(addpatient $addpatient)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\addpatient  $addpatient
     * @return \Illuminate\Http\Response
     */
    public function edit(addpatient $addpatient)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\addpatient  $addpatient
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, addpatient $addpatient)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\addpatient  $addpatient
     * @return \Illuminate\Http\Response
     */
    public function destroy(addpatient $addpatient)
    {
        //
    }


    

    public function search(Request $request){
        
        $search = $request->get('search');
          $data = [];
            if($request->isMethod('POST')):
           $data = DB::table('addpatients')->where('fName','like','%'. $search.'%')->paginate(5);
         endif;
          return view('doctor.search',['data'=>$data]);
                       
                }
            

        
}
