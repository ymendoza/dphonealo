<?php

namespace App\Http\Controllers\frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Paises;

class FrontendController extends Controller
{
    public function index(Request $request)
    {
    	
    	$paises = Paises::where('pais_active', 1)->get();

    	return view('frontend.index')->with('paises',$paises);
    }


}
