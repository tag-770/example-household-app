<?php

namespace App\Http\Controllers;

use App\Models\Account;
use Illuminate\Http\Request;

class AccountController extends Controller
{
    public function index()
    {
        return view('Account.create');
    }
    
    public function create(Request $request)
    {
        $request->validate([
            'title' => ['required'],
            'amount' => ['required', 'numeric', 'min:1'],
            'memo' => ['required']
        ]);

        Account::create([
            'title' => $request->title,
            'amount' => $request->amount,
            'memo' => $request->memo
        ]);

        return redirect()->route('home');
    }
}
