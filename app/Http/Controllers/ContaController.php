<?php
// app/Http/Controllers/ContaController.php

namespace App\Http\Controllers;

use App\Models\Bandeira;
use App\Models\Conta;
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
        return view('financeiro', compact('bandeiras'));
    }

   

}