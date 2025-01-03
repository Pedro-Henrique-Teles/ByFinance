<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use App\Models\Bandeira;
use App\Models\TipoDeConta;

class FinanceiroController extends Controller
{
    public function show()
    {
        $user = Auth::user();
        $userName = $user->name;
        $bandeiras = Bandeira::all();
        $tiposDeContas = TipoDeConta::all();

        return view('pages.Financeiro.financeiro', [
            'userName' => $userName,
            'bandeiras' => $bandeiras,
            'tiposDeContas' => $tiposDeContas
        ]);
    }
}