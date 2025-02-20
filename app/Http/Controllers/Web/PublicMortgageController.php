<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\Mortgage;

class PublicMortgageController extends Controller
{
    // Главная страница со списком активных ипотек.
    public function index()
    {
        $mortgages = Mortgage::where('is_active', true)->get();
        return view('public.mortgages.index', compact('mortgages'));
    }

    // Детальная страница ипотеки.
    public function show($id)
    {
        $mortgage = Mortgage::where('id', $id)->where('is_active', true)->firstOrFail();
        return view('public.mortgages.show', compact('mortgage'));
    }
}