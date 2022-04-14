<?php

namespace App\Http\Controllers;
use App\Models\rayEx;
use Illuminate\Http\Request;
use DB;
class rayexxx extends Controller
{
    


    public function patientrad(Request $request){
        
            
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
        return view('radiology.radpatientinfo',['data'=>$data ,'drug'=>$drug,'rx'=>$rx,'id'=>$id]);;
        
           }

           public function searchrad(Request $request){
        
            $search = $request->get('search');
    
            $data = DB::table('addpatients')->where('fName','like','%'. $search.'%')->paginate(5);
            return view('radiology.search',['data'=>$data]);
                   
            }
  
           



}
