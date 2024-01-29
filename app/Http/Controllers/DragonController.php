<?php

namespace App\Http\Controllers;

use App\Models\Dragon;
use App\Enums\ColorDragon;
use App\Enums\TipoDragon;
use Illuminate\Http\Request;

class DragonController extends Controller
{
    public function index() {
        $dragones = Dragon::all();
        return view('dragones.index', compact('dragones'));
    }

    public function show(Dragon $dragon) {
        return view('dragones.show', compact('dragon'));
    }

    public function create() {
        $tipos = TipoDragon::getValues();
        $colores = ColorDragon::getValues();
        return view('dragones.create', compact('tipos', 'colores'));
    }

    public function store(Request $request) {
        $dragon = Dragon::create($request->all());
        return view('dragones.show', compact('dragon'));
    }

    public function edit(Dragon $dragon) {
        $tipos = TipoDragon::getValues();
        $colores = ColorDragon::getValues();
        return view('dragones.edit', compact('dragon', 'tipos', 'colores'));
    }

    public function update(Request $request, Dragon $dragon) {
        $dragon ->update($request->all());
        return view('dragones.show', compact('dragon'));
    }

    public function destroy(Dragon $dragon) {
        $dragon->delete();
        return redirect()->route('dragones.index');
    }
    
}
