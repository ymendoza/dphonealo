<?php

namespace App\Http\Controllers\frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Paises;
use App\Tarifas;

class FrontendController extends Controller
{
    public function index(Request $request)
    {
    	
    	$paises = Paises::where('pais_active', 1)->get();

    	return view('frontend.index')->with('paises',$paises);
    }

    public function recarga(Request $request){

    	$pais = $request['pais'];
    	$tel = $request['tel'];
    	$valor = $request['valor'];

    	dd($pais." ".$tel." ".$valor);
    }

    public function tarifas(Request $request){

    	$pais = $request['pais'];

    	$tarifas = Tarifas::where('tar_pais_cod', $pais)->first();

    	return $tarifas;
    }


}
