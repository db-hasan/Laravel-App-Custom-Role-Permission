<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use App\Models\User;
use Exception;
use Session;

class AuthController extends Controller
{
    public function login() {
        return view('backend.user.login');
    }

     public function adminlogin(Request $request) {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        $credentials = [
            'email' => $request->input('email'),
            'password' => $request->input('password'),
        ];

        if(Auth::attempt($credentials)) {
            return redirect()->route('dashboard');
        } else {
            return redirect()->route('login')->with('error', 'Invalid credentials. Please try again.');
        }
    }
    


    // public function apiLogin(Request $request)
    // {
    //     try {
    //         $credentials = $request->validate([
    //             'email' => 'required|email',
    //             'password' => 'required',
    //         ]);


    //         if (Auth::attempt($credentials)) {
    //             $user = Auth::user();
    //             $token = $user->createToken('Personal Access Token')->plainTextToken;
    //             return response()->json([
    //                 'status' => 1,
    //                 'message' => 'Logged in successfully',
    //                 'user' => $user,
    //                 'token' => $token,
    //             ])->cookie('auth_token', $token, 120, '/', 'localhost', true, true);

    //         }

    //         return response()->json([
    //             'status' => 0,
    //             'message' => 'Invalid credentials',
    //         ], 200);
    //     } catch (\Exception $e) {
    //         return response()->json([
    //             'status' => 0,
    //             'message' => 'An error occurred while trying to log in',
    //             'error' => $e->getMessage(),
    //         ], 500);
    //     }
    // }

}
