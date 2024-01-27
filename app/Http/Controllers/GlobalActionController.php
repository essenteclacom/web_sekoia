<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GlobalActionController extends Controller {
    public function __invoke() {
        return view('globalaction');
    }
}
