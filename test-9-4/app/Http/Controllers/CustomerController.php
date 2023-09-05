<?php

namespace App\Http\Controllers;

use App\Models\customer;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function register(request $request)
    {
        $customers = new customer();
        $customers->name = $request->input('name');
        $customers->email = $request->input('email');
        $customers->password = $request->input('password');
        
        $customers->save();

        return redirect('login');

    }


    public function login(request $request)
    {
        $user = customer::where('email',$request->email)->first();
        if ($user && $user->password == $request->password) {
            session(['islogedin' => 'logedin']);
            return redirect('home');
        }else {
           return redirect('login');
        }

    }



    public function logout()
    {
        session(['islogedin' => 'noLogin']);
        return redirect('login');
    }







    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(customer $customer)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(customer $customer)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, customer $customer)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(customer $customer)
    {
        //
    }
}
