<?php

namespace App\Http\Controllers;

use App\Models\Inyeccion;
use Illuminate\Http\Request;

class InyeccionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $this->authorize('viewAny', Inyeccion::class );
        return view('inyeccion.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $this->authorize('create', Inyeccion::class );
        return view('inyeccion.create');
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
    public function show()
    {
        return view('inyeccion.show');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Inyeccion $inyeccion)
    {
        $this->authorize('update', Inyeccion::class );

        return view('inyeccion.edit', compact('inyeccion'));
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
