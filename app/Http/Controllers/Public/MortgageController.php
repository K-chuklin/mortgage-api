<?php

namespace App\Http\Controllers\Public;

use App\Models\Mortgage;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MortgageController extends Controller
{
    public function index()
    {
        return response()->json(Mortgage::where('is_active', true)->get());
    }

    public function show($id)
    {
        $mortgage = Mortgage::where('id', $id)->where('is_active', true)->firstOrFail();
        return response()->json($mortgage);
    }
}
