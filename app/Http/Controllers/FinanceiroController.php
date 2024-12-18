<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;

class FinanceiroController extends Controller
{
    public function show()
    {
        $user = Auth::user();
        $userName = $user->name;

        return view('pages.Financeiro.financeiro', ['userName' => $userName]);
    }
}
