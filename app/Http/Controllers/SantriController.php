<?php

namespace App\Http\Controllers;

use App\Models\Santri;

use Illuminate\Http\Request;

class SantriController extends Controller
{
    public function index()
    {
    $data = Santri::all();
    return view('santri.index', compact('data'));
    }

    public function store(){
        Santri::create($input);
        return back()->with('succes', 'Data Santri berhasil ditambahkan');
    }

    public function show($id){
        $data = Santri::find($id);
        return view('santri.detail', data:compact('data'));
    }

    public function destroy($id){
        $data = Santri ::find($id);
        $data->delete();
        return back();
    }
}
