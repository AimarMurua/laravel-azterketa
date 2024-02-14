<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Alkilerra;
use App\Models\Pertsona;
use App\Models\Yatea;

class AlkilerraController extends Controller{
    
    public function a_index() {
        $alkilerrak = Alkilerra::all();
        return view('alkilerrak.a_index', ['alkilerra' => $alkilerrak]);
    }

    public function a_delete($id) {
        $alkilerra = Alkilerra::findOrFail($id);
        $alkilerra->delete();

        return redirect('/alkilerrak');
    }

    public function a_edit($id) {
        $alkilerra = Alkilerra::findOrFail($id);
        return view('alkilerrak.a_edit', ['alkilerra' => $alkilerra]);
    }

    public function a_update(Request $request, $id) {
        $request->validate([
            'p_izena' => 'required',
            'y_izena' => 'required',
        ]);

        $alkilerra = Alkilerra::findOrFail($id);
        $alkilerra->update([
            'p_izena' => $request->p_izena,
            'y_izena' => $request->y_izena
        ]);

        return redirect('/alkilerrak');

    }
}
