<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Http\Controllers\FinanceiroController;
use Auth;

use function PHPUnit\Framework\returnSelf;

class UserController extends Controller
{
    public function create()
    {
        return view('pages.cadastro');
    }

    public function store(Request $request)
    {
        // Verificar os dados recebidos
        //dd($request->all());

        $validated = $request->validate([
            'first_name' => 'required|string|min:3|max:50',
            'last_name' => 'required|string|min:3|max:50',
            'email' => 'required|email|unique:users,email|min:8|max:50|',
            'password' => 'required|string|min:8|confirmed',
        ]);

        //dd('Validação concluída');

        $user = new User;
        $user->name = $request->first_name . ' ' . $request->last_name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);

        // Verificar o modelo User antes de salvar
        //dd($user);

        $user->save();
        //dd('Usuário salvo com sucesso!');

        // Autenticar o usuário
        Auth::login($user);

        //dd('Usuário autenticado!');

        return redirect()->route('financeiro')->with('success', 'Usuário cadastrado com sucesso');
    }
}
