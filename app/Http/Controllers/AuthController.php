<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function showLoginForm()
    {
        return view('pages.login');
    }

    public function authUser(Request $request)
    {

        $request->validate(
            [
                'email' => 'required|email|min:8',
                'password' => 'required|password|min:5'
            ]
        );

        $credenciais = $request->only('email', 'password');

        if(auth()->attempt($credenciais)){

            return redirect()->route('financeiro')->with('success', 'Login realizado com sucesso');
        }

        return back()->withErrors(['email' => 'As credenciais informadas estão incorretas'])->withInput();
    }
}
