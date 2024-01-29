<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Dragon;
use App\Enums\ColorDragon;
use App\Enums\TipoDragon;

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
        return view('dragones.create', compact('tipos'), compact('colores'));
    }

    public function edit(Dragon $dragon) {
        $tipos = TipoDragon::getValues();
        $colores = ColorDragon::getValues();
        return view('dragones.edit', compact('dragon', 'tipos', 'colores'));
    }
}
