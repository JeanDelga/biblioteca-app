<?php

namespace App\Http\Controllers\Api;

use App\Models\Cliente;
use App\Http\Controllers\Controller;

class ClientesController extends Controller
{
    public function getClientes()
    { 
        $clientes = Cliente::all();
        return response()->json($clientes);
    }

}
