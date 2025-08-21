<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class QuoteController extends Controller
{
    private $password = 'dental2025';

    public function showLogin()
    {
        return view('quote.login');
    }

    public function authenticate(Request $request)
    {
        $request->validate([
            'password' => 'required'
        ]);

        if ($request->password === $this->password) {
            Session::put('quote_authenticated', true);
            return redirect()->route('quote.index');
        }

        return back()->withErrors(['password' => 'Contraseña incorrecta']);
    }

    public function index()
    {
        return view('quote.index');
    }
}