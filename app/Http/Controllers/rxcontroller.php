<?php

namespace App\Http\Controllers;

use App\Models\rx;
use Illuminate\Http\Request;

class rxcontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function rx()
    {
        $rx=rx::all();
     //   $rx = \DB::select('select * from rxes');
        return view('rx');
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
    public function qq(Request $request )
    {
        $this->validate($request,[
            'patient_id'=>'required',
            'Symptoms'=>'required',
            'diagnosis'=>'required',
            'Laboratory'=>'required',
            'Radiology'=>'required',

        ]);
        $rx = new rx;
        $rx->patient_id=$request->input('patient_id');
        $rx->Symptoms=$request->input('Symptoms');
        $rx->diagnosis=$request->input('diagnosis');
        $rx->Laboratory=$request->input('Laboratory');
        $rx->Radiology=$request->input('Radiology');
        
        $rx->save();
        return redirect('/patientt?id='.$request->patient_id)->with('success',' data saved'); 
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\rx  $rx
     * @return \Illuminate\Http\Response
     */
    public function show(rx $rx)
    {
        $rx = \DB::select('select * from rxes where id = ?',[$id]);
        return view('update',['rx'=>$rx]);
    }
    function list(){
        
        $rx = DB::select('select * from rxes');
        return view('/patientt?id',['rx'=>$rx]);
               
        }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\rx  $rx
     * @return \Illuminate\Http\Response
     */
    public function edit(rx $rx)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\rx  $rx
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, rx $rx)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\rx  $rx
     * @return \Illuminate\Http\Response
     */
    public function destroy( $id)
    {
        {
            $rx=  \DB::delete('delete from rxes where id = ?',[$id]);
              echo "Record deleted successfully. ";
              return redirect('/patientt?id')->with('success','Data Deleted!!');
          }
          
    }
}
