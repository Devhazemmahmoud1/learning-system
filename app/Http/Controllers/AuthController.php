<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;

use Hash;

use session;

class AuthController extends Controller
{
    public function login(Request $request)
    {
        if (!$request['email'] || !$request['password']) {
            return redirect()->back();
        }
        // check if the admin credintionals was correct
        $getUser = DB::table('Admins')->where('email', $request['email'])->first();
            // hash check should be here
        if (! $getUser) {
           session(['error' => 'Email or password in incorrect']);
           return redirect()->back();     
        }   
        
        if ($request['password'] == $getUser->password) {
            session(['login' => true]);
            session(['name' => $getUser->name]);
            return redirect('/'); 
        }

    } 

    /**
     * logs out from our admin panel
     * 
     * @param Request
     * @return redirectBack
     */
    public function logout(Request $request)
    {
            session()->forget('login');
            return redirect('/login');
    }
}
