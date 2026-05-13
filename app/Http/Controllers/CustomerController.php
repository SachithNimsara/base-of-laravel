<?php

namespace App\Http\Controllers;
use App\Models\Customer;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function store (Request $request)
    {
        $request -> validate([
            'name'=>'required',
            'email'=>'required|email',
            'message'=>'required',
        ]

    );

        Customer::create([
            'name' => $request->name,
            'email' => $request->email,
            'message' => $request->message,
        ]);
    
         return view ('alerts.success');
    }

   

}
