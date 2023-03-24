<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreGestionnaireRequest;
use App\Http\Requests\UpdateGestionnaireRequest;
use App\Models\Gestionnaire;

class GestionnaireController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return response()->json(Gestionnaire::all());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreGestionnaireRequest $request)
    {
        //api store Gestionnaire via data from request
        Gestionnaire::create($request->all());
        return response()->json(['message' => 'Gestionnaire created successfully']);
    }

    /**
     * Display the specified resource.
     */
    public function show(Gestionnaire $gestionnaire)
    {
        return response()->json($gestionnaire->load(['reservations']));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Gestionnaire $gestionnaire)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateGestionnaireRequest $request, Gestionnaire $gestionnaire)
    {
        //api update Gestionnaire via data from request
        $gestionnaire->update($request->all());
        return response()->json(['message' => 'Gestionnaire updated successfully']);
    }

    /*
     * Remove the specified resource from storage.
     */
    public function destroy(Gestionnaire $gestionnaire)
    {
        //api delete Gestionnaire
        $gestionnaire->delete();
        return response()->json(['message' => 'Gestionnaire deleted successfully']);
    }
}
