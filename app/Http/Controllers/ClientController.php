<?php

namespace App\Http\Controllers;

use App\Models\Client;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    public function index(){
        $clients = Client::orderby('id','asc')->get();
        return view('clientes.listar', compact('clients'));
    }

    public function create(){
        return view('clientes.create');
    }

    public function store(Request $request){
        $clients = new Client();
        $clients->telefono = $request->telefono;
        $clients->num_social = $request->num_social;
        $clients->domicilio = $request->domicilio;
        $clients->save();
        return redirect()->route('client.index');
    }

    public function show(Client $clients){
        return view('clientes.show',compact('clients'));
    }

    public function destroy (Client $clients){
        $clients->delete();
        return redirect()->route('client.index');
    }

      //Edit
    public function edit(Client $clients){
        return view('clientes.editar', compact('clients'));
    }

      //Update
    public function update(Request $request, Client $clients){
        $clients->telefono = $request->telefono;
        $clients->num_social = $request->num_social;
        $clients->domicilio = $request->domicilio;
        $clients->save();
        return redirect()->route('client.index');
    }
}
