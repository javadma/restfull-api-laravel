<?php

namespace App\Http\Controllers;

class FilesController extends Controller
{
    public function show()
    {
        return response()->download(storage_path('app/GraceHopper.pdf'), 'Amazing GraceHopper');
    }

    public function create()
    {
        $path = request()->file('photo')->store('testing');
        return response()->json(['path'=>$path],200);
    }
}
