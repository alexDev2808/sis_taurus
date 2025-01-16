<?php

namespace App\Http\Controllers;

use App\Models\Upload;
use Illuminate\Http\Request;

class UploadController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('uploads.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        
        return view('uploads.create');
    }



    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Upload $upload)
    {
        return view('uploads.edit', [
            'upload' => $upload
        ] );
    }

}
