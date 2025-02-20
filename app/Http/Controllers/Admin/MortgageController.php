<?php

namespace App\Http\Controllers\Admin;

use App\Models\Mortgage;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MortgageController extends Controller
{
    public function index()
    {
        return response()->json(Mortgage::all());
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string',
            'percent' => 'required|integer|max:40',
            'min_first_payment' => 'required|integer|max:98',
            'max_price' => 'required|numeric',
            'min_price' => 'required|numeric',
            'min_term' => 'required|integer',
            'max_term' => 'required|integer'
        ]);

        $mortgage = Mortgage::create($validated);
        return response()->json($mortgage, 201);
    }

    public function show(Mortgage $mortgage)
    {
        return response()->json($mortgage);
    }

    public function update(Request $request, Mortgage $mortgage)
    {
        $mortgage->update($request->validate([
            'title' => 'string',
            'percent' => 'integer|max:40',
            'min_first_payment' => 'integer|max:98',
            'max_price' => 'numeric',
            'min_price' => 'numeric',
            'min_term' => 'integer',
            'max_term' => 'integer'
        ]));

        return response()->json($mortgage);
    }

    public function destroy(Mortgage $mortgage)
    {
        $mortgage->delete();
        return response()->json(null, 204);
    }
}
