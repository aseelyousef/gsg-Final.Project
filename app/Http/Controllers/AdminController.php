<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use DB;
use App\Models\User;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Auth\Events\Registered;




class AdminController extends Controller
{
    function UserList(){
        $data = DB::select('select * from users');
        return view('admin.dashboardadmin',['data'=>$data]);     
       
               
        }
        public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|confirmed|min:8',
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'city' => $request->city,
            'phone'=> $request->phone,
        ]);

        $user->attachRole($request->role_id);


        

        //Auth::login($user);

        return redirect('/admin');
    }
}
