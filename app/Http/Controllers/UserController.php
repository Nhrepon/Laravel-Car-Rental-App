<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\User;
use App\Helper\jwtToken;

class UserController extends Controller
{
    public function userRegistration(Request $request)
    {
        try{
            $user = User::create([
                'name' => $request->input('name'),
                'email' => $request->input('email'),
                'password' => $request->input('password'),
            ]);

            return response()->json([
                'status' => 'success',
                'message' => 'User created successfully',
                'data' => $user
            ]);
        }catch(Exception $e){
            return response()->json([
                'status' => "failed",
                'message' => "User registration failed",
            ]);
        }

    }


    public function userLogin(Request $request)
    {

        $user = User::where('email', '=', $request->input('email'))
        ->where('password', '=', $request->input('password'))->get();

        if(count($user) > 0){
            $token = jwtToken::encodeToken($user[0]->email, $user[0]->role);
            return response()->json([
                'status' => 'success',
                'message' => 'User login successfully',
            ])->cookie('token', $token, 60*24*7);
        }else{
            return response()->json([
                'status' => 'failed',
                'message' => 'User login failed',
            ]);
        }
    }






}
