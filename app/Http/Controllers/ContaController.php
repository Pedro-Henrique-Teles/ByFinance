<?php
// app/Http/Controllers/ContaController.php

namespace App\Http\Controllers;

use App\Models\Bandeira;
use App\Models\Conta;
use App\Models\TipoDeConta;
use Auth;
use Illuminate\Http\Request;

class ContaController extends Controller
{
    protected function getBandeiras()
    {
        return Bandeira::all();
    }

    public function pageFinanceiro()
    {
        $bandeiras = $this->getBandeiras();
        return view('financeiro', compact('bandeiras','tiposDeContas'));
    }

    public function store(Request $request)
    {
        

        // dd(Auth::id());

        // dd($request->all());

        $validated = $request->validate([
            'nome' => 'required|string|min:3|max:50',
            'banco' => 'required|exists:bandeiras,id',
            'saldoInicial' => 'required|numeric|min:0',
        ]);

        // dd($validated); 

        Conta::create([
            'nome' => $validated['nome'],
            'bandeira_id' => $validated['banco'],
            'saldoInicial' => $validated['saldoInicial'],
            'user_id' => Auth::id(),
        ]);

        return redirect()->route('pages.Financeiro.financeiro')->with('success', 'Conta criada com sucesso!');
    }
}
