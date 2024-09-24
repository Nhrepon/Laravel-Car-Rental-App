<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function userRegistration(Request $request)
    {
        try{
            User::create([
                'name' => $request->input('name'),
                'email' => $request->input('email'),
                'password' => bcrypt($request->input('password')),
            ]);
            return response()->json([
                'status' => 'success',
                'message' => 'User created successfully',	
            ],200);
        }catch(Exception $e){
            return response()->json($e->getMessage());
        }
        return view('user.registration');
    }





    
}
