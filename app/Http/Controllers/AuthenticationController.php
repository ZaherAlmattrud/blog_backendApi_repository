<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;

use App\Http\Controllers\BaseController ;

use Auth ;

class AuthenticationController extends BaseController
{
    
    public function createAccount(Request $request)
    {

      
        $attr = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|unique:users,email',
            'password' => 'required|string|min:3|confirmed'
        ]);

        $user = User::create([
            'name' => $attr['name'],
            'password' => bcrypt($attr['password']),
            'email' => $attr['email']
        ]);

        $success['token'] = $user->createToken('tokens')->plainTextToken ;

        $success['user']  = auth()->user() ;

        return $this->sendResponse($success, 'User register successfully.');

       
    }

    //use this method to signin users
    public function signin(Request $request)
    {
        $attr = $request->validate([
            'email' => 'required|string|email|',
            'password' => 'required|string|min:3'
        ]);

        if (!Auth::attempt($attr)) {

            return $this->sendError('Unauthorised.', ['error'=>'Unauthorised']);
           
        }

        $success['token'] = auth()->user()->createToken('API Token')->plainTextToken ;

        $success['user']  = auth()->user() ;

        return $this->sendResponse($success, 'User login successfully.');

    }

    // this method signs out users by removing tokens
    
    public function signout()
    {
        auth()->user()->tokens()->delete();

        $success['status']  = 'signout' ;

        return $this->sendResponse($success, 'User signout successfully.');

      
    }
}
