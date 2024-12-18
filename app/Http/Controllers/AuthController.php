<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function showLoginForm()
    {
        return view('pages.login');
    }

    public function authUser(Request $request)
    {
        $request->validate([
            'email' => 'required|email|min:8',
            'password' => 'required|min:5',
        ]);

        $credenciais = $request->only('email', 'password');

        if (Auth::attempt($credenciais, true)) {
            return redirect()->route('financeiro')->with('success', 'Login realizado com sucesso');
        }

        return back()->withErrors(['email' => 'As credenciais informadas estão incorretas'])->withInput();
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('login')->with('success', 'Sessão encerrada com sucesso');
    }

    
}
