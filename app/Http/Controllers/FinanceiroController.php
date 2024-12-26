<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use App\Models\Bandeira;

class FinanceiroController extends Controller
{
    public function show()
    {
        $user = Auth::user();
        $userName = $user->name;
        $bandeiras = Bandeira::all();

        return view('pages.Financeiro.financeiro', [
            'userName' => $userName,
            'bandeiras' => $bandeiras
        ]);
    }
}