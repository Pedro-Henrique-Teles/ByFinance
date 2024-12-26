<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Bandeira extends Model
{
    use HasFactory;

    public static function getTipos()
    {
        // Recupera os valores do enum `tipo` diretamente do banco
        $type = DB::select(DB::raw('SHOW COLUMNS FROM bandeiras WHERE Field = "tipo"'))[0]->Type;
        preg_match('/enum\((.*)\)/', $type, $matches);

        return array_map(function ($value) {
            return trim($value, "'");
        }, explode(',', $matches[1]));
    }
}
