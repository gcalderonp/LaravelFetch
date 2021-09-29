<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cliente;
use Hamcrest\Type\IsNumeric;

class ClienteController extends Controller
{
    public function index()
    {
        $clientes = Cliente::paginate(5);
        return view('index', compact('clientes'));
    }

    public function create()
    {
        return view('clienteCreate');
    }



    public function Store(Request $request)
    {

        $name = $request->get('name');
        $age = $request->get('age');

        if((preg_match("/^[a-zA-Z\s]+$/", $name)) == 0 or (is_numeric($age) == false)){
            return json_encode([false, 'Los datos que ha ingresado son erroneos', 'danger']);
        }

        $cliente = new Cliente();
        $cliente->nombre = $name;
        $cliente->edad = $age;
        $cliente->save();
        return json_encode([true, 'Datos Guardados correctamente', 'success']);
    }

    public function edit(Cliente $cliente)
    {
        return view('clienteEdit', compact('cliente'));
    }

    public function update(Request $request){

        return json_encode($request);

    }
}
