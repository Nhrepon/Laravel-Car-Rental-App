<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function userRegistration(Request $request)
    {
        try{
            $user = User::create($request->all());

            return response()->json([
                'status' => 'success',
                'message' => 'User created successfully',
                'user'=> $user
            ],200);
        }catch(Exception $e){
            return response()->json($e->getMessage());
        }

    }






}
