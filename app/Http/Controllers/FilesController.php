<?php

namespace App\Http\Controllers;

class FilesController extends Controller
{
    public function show()
    {
        return response()->download(storage_path('app/GraceHopper.pdf'), 'Amazing GraceHopper');
    }
}
