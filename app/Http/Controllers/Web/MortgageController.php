<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\Mortgage;
use Illuminate\Http\Request;

class MortgageController extends Controller
{
    // Главная страница со списком активных ипотек.
    public function index()
    {
        $mortgages = Mortgage::where('is_active', true)->get();
        return view('mortgages.index', compact('mortgages'));
    }

    // Детальная страница ипотеки.
    public function show($id)
    {
        $mortgage = Mortgage::where('id', $id)->where('is_active', true)->firstOrFail();
        return view('mortgages.show', compact('mortgage'));
    }

    // Страница списка ипотек в админке.
    public function adminIndex()
    {
        $mortgages = Mortgage::all();
        return view('admin.mortgages.index', compact('mortgages'));
    }

    // Форма создания ипотеки.
    public function create()
    {
        return view('admin.mortgages.create');
    }

    // Сохранение новой ипотеки.

    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string',
            'percent' => 'required|integer|max:40',
            'min_first_payment' => 'required|integer|max:98',
            'max_price' => 'required|numeric',
            'min_price' => 'required|numeric',
            'min_term' => 'required|integer',
            'max_term' => 'required|integer',
            'max_term' => 'required|integer',
        ]);

        Mortgage::create($validated);
        return redirect()->route('admin.mortgages.index')->with('success', 'Ипотека добавлена.');
    }

    // Форма редактирования ипотеки.
    public function edit($id)
    {
        $mortgage = Mortgage::findOrFail($id);
        return view('admin.mortgages.edit', compact('mortgage'));
    }

    // Обновление данных ипотеки.
    public function update(Request $request, $id)
    {
        $mortgage = Mortgage::findOrFail($id);
        $mortgage->update($request->validate([
            'title' => 'string',
            'percent' => 'integer|max:40',
            'min_first_payment' => 'integer|max:98',
            'max_price' => 'numeric',
            'min_price' => 'numeric',
            'min_term' => 'integer',
            'max_term' => 'integer',
            'is_active' => 'nullable|boolean'
        ]));

        $validated['is_active'] = $request->has('is_active');

        return redirect()->route('admin.mortgages.index')->with('success', 'Ипотека обновлена.');
    }

    // Удаление ипотеки.
    public function destroy($id)
    {
        Mortgage::findOrFail($id)->delete();
        return redirect()->route('admin.mortgages.index')->with('success', 'Ипотека удалена.');
    }
}