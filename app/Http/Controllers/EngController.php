<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EngController extends Controller {
    public function __invoke() {
        $url = Request()->headers->get('referer');
        $urlExplode = explode("/", $url);
        $count = count($urlExplode);
        if ($count > 0) {
            $curretPage = end($urlExplode);
        }
        switch ($curretPage) {
            case "inicio":
                return redirect('home');
                break;
            case "nosotros":
                return redirect('aboutus');
                break;
            case "servicios":
                return redirect('services');
                break;
            case "investigacion":
                return redirect('research');
                break;
            case "regulaciones":
                return redirect('regulations');
                break;
            case "rentaglobal":
                return redirect('globalrent');
                break;
            case "accionesglobales":
                return redirect('globalaction');
                break;
            case "rentafijaargentina":
                return redirect('fixedrentargentina');
                break;
            case "seleccionartipocuenta":
                return redirect('selectaccounttype');
                break;
        }
    }
}
