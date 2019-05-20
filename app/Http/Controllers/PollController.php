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
        return response()->json($poll, 201);
    }

    public function update(Request $request, Poll $poll)
    {
        $poll->update($request->all());
        return response()->json($poll, 200);
    }

    public function delete(Poll $poll)
    {
        $poll->delete();
        return response()->json(null, 204);
    }

    public function errors()
    {
        return response()->json(['msg' => 'Payment is required.'], 501);
    }
}
