<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RentaGlobalController extends Controller {
    public function __invoke() {
        return view('rentaglobal');
    }
}
