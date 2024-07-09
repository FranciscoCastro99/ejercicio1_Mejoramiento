<?php

namespace App\Http\Controllers;

use App\Models\Client;
use App\Models\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{

    //listar todos los registros
    public function index(){
        $projects = Project::orderby('id','asc')->get();
        return view('proyecto.listar', compact('projects'));
    }

    //Formulario create -> con otros clientes
    public function create(){
        $clients = Client::orderby('id', 'asc')->get();
        return view('proyecto.create', compact('clients'));
    }

    //registrar en la base de datos
    public function store(Request $request){
        $projects = new Project();
        $projects->descripcion = $request->descripcion;
        $projects->cuantia = $request->cuantia;
        $projects->fechaDeInicio = $request->fechaDeInicio;
        $projects->client_id = $request->client_id; //esta fue la linea que se agregó
        $projects->save();
        return redirect()->route('project.index');
    }

    //ver un registro
    public function show(Project $projects){
        $clients = Client::orderby('id', 'asc')->get();
        return view('proyecto.show',compact('projects', 'clients'));
    }

    //destruir un formulario
    public function destroy (Project $projects){
        $projects->delete();
        return redirect()->route('project.index');
    }

      //Edit form
    public function edit(Project $projects){
        $clients = Client::orderby('id', 'asc')->get();
        return view('proyecto.editar', compact('projects','clients'));
    }

      //Update
    public function update(Request $request, Project $projects){
        $projects->descripcion = $request->descripcion;
        $projects->cuantia = $request->cuantia;
        $projects->fechaDeInicio = $request->fechaDeInicio;
        $projects->save();
        return redirect()->route('project.index');
    }}
