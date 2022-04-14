<?php

namespace App\Http\Controllers;
use DB;
use App\Quotation;
use App\Models\drug;
use Illuminate\Http\Request;

class drugcontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function drug()
    {
        $drug=drug::all();
      //  $drug = DB::select('select * from fofos');
        return view('drug')->with('drug',$drug);
    }
  //pres
  function infso(){
    $data = DB::select('select * from drugs');
    return view('patientinfo',['drug'=>$drug]);
    }

//

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
    public function ss(Request $request)
    {
        $this->validate($request,[
            'patient_id'=>'required',
            'Snumber'=>'required',
            'Dsearch'=>'required',
            'Tsearch'=>'required',
            'Doctor'=>'required',
        ]);
        $drug = new drug;
        $drug->patient_id=$request->input('patient_id');
        $drug->Snumber=$request->input('Snumber');
        $drug->Dsearch=$request->input('Dsearch');
        $drug->Tsearch=$request->input('Tsearch');
        $drug->Doctor=$request->input('Doctor');
        $drug->date=$request->input('date');
        $drug->save();
        return redirect('/patientt?id='.$request->patient_id)->with('succes',' data saved');
    }



    /**
     * Display the specified resource.
     *
     * @param  \App\Models\drug  $drug
     * @return \Illuminate\Http\Response
     */
    public function show(drug $drug)
    {


        $data = DB::select('select * from drugs where id = ?',[$id]);
        return view('update',['drug'=>$drug]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\drug  $drug
     * @return \Illuminate\Http\Response
     */

    function list(){

        $drug = DB::select('select * from drugs');
        return view('drug',['drug'=>$drug]);

        }

    public function edit(drug $drug)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\drug  $drug
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, drug $drug)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\drug  $drug
     * @return \Illuminate\Http\Response
     */


 //// delete drugs
    public function destroy($id) {
        DB::delete('delete from drugs where id = ?',[$id]);
        return back();
      /*  echo "Record deleted successfully. ";
        echo 'Click Here to go back.';*/
        }

}
