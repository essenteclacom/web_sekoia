<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AccionesGlobalesController extends Controller {
    public function __invoke() {
        return view('accionesglobales');
    }
}
