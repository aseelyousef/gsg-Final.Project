<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
     public function index()
     {
          if(Auth::user()->hasRole('pharmacist')){
               return view('pharmacy.indexphar');
          }elseif(Auth::user()->hasRole('doctor')){
               return view('doctor.index');
          }elseif(Auth::user()->hasRole('Admin')){
               return redirect('/admin');
          }elseif(Auth::user()->hasRole('Lab')){
               return view('lab.indexlab');
          }elseif(Auth::user()->hasRole('rayTechnician')){
               return view('radiology.indexrad');
          }
     }

}
