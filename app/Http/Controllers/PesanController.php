<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pesan;

class PesanController extends Controller
{
    public function storePesan(Request $request){
        $request->validate([
            'name' => 'required',
            'message' => 'required',
        ]);
        Pesan::create([
            'name' => $request->name,
            'message' => $request->message  
        ]);

        return redirect('/');
    }
    
}
