<?php

namespace App\Http\Controllers;
use DB;
use App\Quotation;
use App\Models\doctors;
use Illuminate\Http\Request;

class doctorcontroller extends Controller
{

    public function doc()
    {  
        $doc=doctors::all();
        return view('doctor.doctorinfo')->with('doc',$doc);
    }
    public function docresult(Request $request)
    {
        $this->validate($request,[
            'address'=>'required',
            'phone'=>'required',
            'specialty'=>'required',
        
        ]);
        $doc = new doctors;
        $doc->address=$request->input('address');
        $doc->phone=$request->input('phone');
        $doc->specialty=$request->input('specialty');
     
        
        $doc->save();
        return redirect('/doc')->with('success',' data saved');

    }

}