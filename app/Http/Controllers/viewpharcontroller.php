<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;


class viewpharcontroller extends Controller
{
    function info(){
        $data = DB::select('select * from addpatients');
        return view('pharmacy.patientinfophar',['data'=>$data]);     
       
               
        }
      
        public function search(Request $request){
        
            $search = $request->get('search');
    
            $data = DB::table('addpatients')->where('fName','like','%'. $search.'%')->paginate(5);
            return view('pharmacy.search',['data'=>$data]);
                   
            }
  

//////////////////view patient and drugs
public function pharpatient(Request $request){
        
            
    if($request->isMethod('POST')):
        $id = $request->patient_id;
    else:
        $id= $request->get('id');
    endif;
    
    $data = [];
    $drug = [];
    $rx = [];
    $lab =[];
    if(isset($id)):
        $data = DB::table('addpatients')->where('id','like','%'.$id.'%')->paginate(5);
        $drug = DB::select('select * from drugs WHERE patient_id = '.$id);
        $rx = DB::select('select * from rxes WHERE patient_id = '.$id);
        $lab = DB::select('select * from labs WHERE patient_id = '.$id);
    endif;
    return view('pharmacy.patientinfophar',['data'=>$data ,'drug'=>$drug,'rx'=>$rx,'lab'=>$lab,'id'=>$id]);;
    
       }
///////////////////////
            public function xx(Request $request){
                $data = DB::table('addpatients')->where('first_name','like','%'.$Id.'%')->paginate(5);
                return view('pharmacy.patientinfophar',['data'=>$data]);
                       
                }

////////////////////////////عرض الاطباء
        


                public function pdr(Request $request){
        
            
                    if($request->isMethod('POST')):
                        $id = $request->patient_id;
                    else:
                        $id= $request->get('id');
                    endif;
                
                    $data = [];
                    $drug = [];
                    $rx = [];
                    $dr = [];
                    if(isset($id)):
                        $data = DB::table('addpatients')->where('id',$id)->paginate(5);
                        $drug = DB::select('select * from drugs WHERE patient_id = '.$id);
                        $rx = DB::select('select * from rxes WHERE patient_id = '.$id);
                        $dr = DB::select('select Doctor from drugs WHERE patient_id = '.$id);
                
                    endif;
                    return view('patientDR',['data'=>$data ,'drug'=>$drug,'rx'=>$rx,'dr'=>$dr,'id'=>$id]);;
                    
                       }





}
