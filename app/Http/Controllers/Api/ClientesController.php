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

    public function getClieteById($id)
    {
        $cliente = Cliente::find($id);
        if ($cliente) {
            return response()->json($cliente);
        } else {
            return response()->json(['message' => 'Cliente not found'], 404);
        }
    }

}



