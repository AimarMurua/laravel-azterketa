<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Yatea;

class YateaController extends Controller {
    
    public function y_index() {
        $yateak = Yatea::all();
        return view('yateak.y_index', ['yatea' => $yateak]);
    }

    public function y_edit($id) {
        $yatea = Yatea::findOrFail($id);
        return view('yateak.y_edit', ['yatea'=>$yatea]);
    }

    public function y_update(Request $request, $id){
        $request->validate([
            'y_izena' => 'required',
            'y_urtea' => 'required', 
            'y_bidaiariak' => 'required',
        ]);

        $yatea = Yatea::findOrFail($id);
        $yatea->update([
            'y_izena' => $request->y_izena, 
            'y_urtea' => $request->y_urtea, 
            'y_bidaiariak' => $request->y_bidaiariak, 
        ]);

        return redirect('/yateak');
    }
}
