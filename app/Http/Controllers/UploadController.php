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
        $this->authorize('viewAny', Upload::class );
        return view('uploads.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $this->authorize('create', Upload::class );
        return view('uploads.create');
    }



    /**
     * Display the specified resource.
     */
    public function show()
    {
        return view('uploads.show');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Upload $upload)
    {
        $this->authorize('update', Upload::class );

        return view('uploads.edit', [
            'upload' => $upload
        ] );
    }

    /**
     * Show the settings for the slider.
     */
    public function settings()
    {
        $this->authorize('update', Upload::class );

        return view('uploads.settings');
    }

}
