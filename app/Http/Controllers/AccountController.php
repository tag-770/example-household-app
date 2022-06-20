<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AccountController extends Controller
{
    public function index()
    {
        return view('Account.create');
    }
    
    public function create()
    {
        return redirect()->route('home');
    }
}
