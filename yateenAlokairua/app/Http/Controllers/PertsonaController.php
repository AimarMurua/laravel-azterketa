<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pertsona;

class PertsonaController extends Controller{
    
    public function p_index() {
        $pertsonak = Pertsona::all();
        return view('pertsonak.p_index', ['pertsona' => $pertsonak]);
    }
}
