<?php

namespace App\Http\Controllers;

use App\Models\Carrusel;
use Illuminate\Http\Request;

class CarruselController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('carrusel.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('carrusel.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show( Carrusel $carrusel )
    {
        return view('carrusel.show', ['carrusel'=> $carrusel ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Carrusel $carrusel)
    {
        return view('carrusel.edit', compact('carrusel'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
