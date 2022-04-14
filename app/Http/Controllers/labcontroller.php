<?php

namespace App\Http\Controllers;

use App\Models\labs;
use Illuminate\Http\Request;
use DB;

class labcontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function lab()
    {  
        $lab=labs::all();
        return view('lab.lab')->with('lab',$lab);
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
   
   
   public function labresult(Request $request)
    {
        $this->validate($request,[
            'patient_id'=>'required',
            'Snumber'=>'required',
            'lab'=>'required',
        
        ]);
        $lab = new labs;
        $lab->patient_id=$request->input('patient_id');
        $lab->Snumber=$request->input('Snumber');
        $lab->lab=$request->input('lab');
     
        
        $lab->save();
        return redirect('/lab')->with('success',' data saved');
    }



    /**
     * Display the specified resource.
     *
     * @param  \App\Models\labs  $labs
     * @return \Illuminate\Http\Response
     */
    public function show(labs $labs)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\labs  $labs
     * @return \Illuminate\Http\Response
     */
    public function edit(labs $labs)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\labs  $labs
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, labs $labs)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\labs  $labs
     * @return \Illuminate\Http\Response
     */
    public function destroy(labs $labs)
    {
        //
    }

    public function patientlab(Request $request){
        
            
        if($request->isMethod('POST')):
            $id = $request->patient_id;
        else:
            $id= $request->get('id');
        endif;
       
        $data = [];
        $drug = [];
        $rx = [];
        if(isset($id)):
            $data = DB::table('addpatients')->where('id',$id)->paginate(5);
            $drug = DB::select('select * from drugs WHERE patient_id = '.$id);
            $rx = DB::select('select * from rxes WHERE patient_id = '.$id);
        endif;
        return view('lab.xpatientinfo',['data'=>$data ,'drug'=>$drug,'rx'=>$rx,'id'=>$id]);;
        
           }

           public function searchlab(Request $request){
        
            $search = $request->get('search');
    
            $data = DB::table('addpatients')->where('fName','like','%'. $search.'%')->paginate(5);
            return view('lab.search',['data'=>$data]);
                   
            }
  




}
