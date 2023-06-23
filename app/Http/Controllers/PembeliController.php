<?php

namespace App\Http\Controllers;

use App\Models\Pembeli;
use Illuminate\Http\Request;

class PembeliController extends Controller
{
    public function index()
    {
        $pembeli = Pembeli::all();
        return view ('pembeli.index', compact(['pembeli']));
    }
    public function create()
    {
        return view ('pembeli.create');
    }
    public function shop(Request $request)
    {
        Pembeli::create($request->except(['_token', 'submit']));
        return redirect('/pembeli');
    }
    public function edit($id)
    {
        $pembeli = Pembeli::find($id);
        return view ('pembeli.edit', compact(['pembeli']));
    }
    public function update($id, Request $request)
    {
        $pembeli = Pembeli::find($id);
        $pembeli->update($request->except(['_token', 'submit']));
        return redirect('/pembeli');
    }
    public function delete($id)
    {
        $pembeli = Pembeli::find($id);
        $pembeli->delete();
        return redirect('/pembeli');
    }
}
