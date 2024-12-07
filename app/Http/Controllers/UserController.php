<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Http\Controllers\FinanceiroController;

use function PHPUnit\Framework\returnSelf;

class UserController extends Controller
{
    public function create()
    {
        return view('pages.cadastro');
    }

    public function store(Request $request)
    {

        $validated = $request->validate(
            [
                'first_name' => 'required|string|min:3|max:50',
                'last_name' => 'required|string|min:3|max:50',
                'email' => 'required|email|unique:users,email|min:8|max:50|',
                'password' => 'required|string|min:8|confirmed',
            ]
        );

        $user = new User;

        $user -> name = $request -> first_name . ' ' . $request -> last_name;
        $user -> email = $request -> email;
        $user -> password = Hash::make($request->password);


        $user->save();

        return redirect()->route('financeiro')->with('success', 'Usuario cadastrado com sucesso');
    }
}