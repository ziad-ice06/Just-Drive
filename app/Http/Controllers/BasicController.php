<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BasicController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    
    public function payment()
    {
        return view('payment');
    }
    public function result()
    {
        return view('result');
    }
}
