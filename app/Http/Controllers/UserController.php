<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function userRegistration(Request $request)
    {
        try{
            return User::create([
                'name' => $request->input('name'),
                'email' => $request->input('email'),
                'password' => $request->input('password'),
            ]);

            /* return response()->json([
                'status' => 'success',
                'message' => 'User created successfully',
                'user'=> $user
            ],200); */
        }catch(Exception $e){
            return response()->json($e->getMessage());
        }

    }






}
