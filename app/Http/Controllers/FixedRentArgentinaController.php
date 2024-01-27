<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FixedRentArgentinaController extends Controller {
    public function __invoke() {
        return view('fixedrentargentina');
    }
}
