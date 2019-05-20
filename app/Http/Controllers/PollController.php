<?php

namespace App\Http\Controllers;

use App\Poll;
use Illuminate\Http\Request;

class PollController extends Controller
{
    public function index()
    {
        return response()->json(Poll::all(), 200);
    }

    public function show($id)
    {
        $poll = Poll::find($id);
        return response()->json($poll, 200);
    }
    public function store(Request $request)
    {
        $poll = Poll::create($request->all());
        return response()->json($poll,201);
    }
}