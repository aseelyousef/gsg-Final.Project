<?php

namespace App\Http\Controllers;
use App\Models\rads;
use DB;
use Illuminate\Http\Request;

class radcontroller extends Controller
{
    public function rad()
    {  
        $rad=rads::all();
        return view('radiology.radresult')->with('rad',$rad);
    }

    public function radresult(Request $request)
    {
        $this->validate($request,[
            'patient_id'=>'required',
            'Snumber'=>'required',
            'rad'=>'required',
        
        ]);
        $rad = new rads;
        $rad->patient_id=$request->input('patient_id');
        $rad->Snumber=$request->input('Snumber');
        $rad->rad=$request->input('rad');
     
        
        $rad->save();
        return redirect('/rad')->with('success',' data saved');
    }


}
