<?php

namespace App\Http\Controllers;

use App\Models\Agenda;
use Illuminate\Http\Request;
use App\Models\Profesion;

class AgendaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $agendas = Agenda::all();

        //? PARA LISTAR     
        // return view('agenda.index', compact('agendas'));
        return view('agenda.index', [
            'agendas' => $agendas
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //? PARA CREAR UN NUEVO REGISTRO
        $profesiones = Profesion::orderBy('nombre')->get();

        return view('agenda.create', [
            'profesiones' => $profesiones
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    // Explicar la funcion store 
    public function store(Request $request)
    {
        // Validar los datos
        $request->validate([
            'ci' => 'required',
            'nombres' => 'required',
            'apellidos' => 'required',
            'celular' => 'required',
            'email' => 'required',
            'profesion_id' => 'required'
        ]);

        // Crear un nuevo registro
        Agenda::create($request->all());

        return response()->json([
            'success' => true,
            'message' => 'Registro creado exitosamente.'
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(Agenda $agenda)
    {
        return view('agenda.show', [
            'agenda' => $agenda
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Agenda $agenda)
    {
        $profesiones = Profesion::orderBy('nombre')->get();

        return view('agenda.edit', [
            'agenda' => $agenda,
            'profesiones' => $profesiones
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Agenda $agenda)
    {

        $agenda->update($request->all());

        return response()->json([
            'success' => true,
            'message' => 'Registro actualizado exitosamente.'
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Agenda $agenda)
    {
        $agenda->delete();

        return response()->json([
            'success' => true,
            'message' => 'Registro eliminado exitosamente.'
        ]);
    }
}
