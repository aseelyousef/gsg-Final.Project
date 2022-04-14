<?php

namespace App\Http\Controllers;
use App\Models\searchphar;

use Illuminate\Http\Request;
use Session;
use DB;
class searchpharcontroller extends Controller
{
  
    public function search(Request $request){
        
        $search = $request->get('search');
        $data = [];
            if($request->isMethod('POST')):
        $data = DB::table('addpatients')->where('fName','like','%'. $search.'%')->paginate(5);
        endif;
        return view('pharmacy.search',['data'=>$data]);
                }
}
