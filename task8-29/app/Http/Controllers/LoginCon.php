<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LoginCon extends Controller
{

    public function login(Request $req)
    {
        $req->validate([
            'email' => 'required',
            'password' => 'required|min:6',
        ]);

        $users = DB::select('select * from users'); // Retrieve users from the database

        foreach ($users as $user) {
            if ($user->email == $req->input('email') && $user->password == $req->input('password')) {
                return redirect('home')->with('success', 'Logged in successfully.');
                
            }
        }
        return redirect('login')->with('error', 'Invalid login credentials.');
        // return $req;
    }
}
