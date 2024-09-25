<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\mhs;

class mhsController extends Controller
{
    public function index()
    {
        $data['mhs'] = mhs::all();
        return view('mhs.index', $data);
    }

    public function create()
    {
        return view('mhs.create');
    }

    public function store(Request $request)
    {
        $mhs = new mhs();
        $mhs->nama = $request->nama;
        $mhs->nrp = $request->nrp;
        $mhs->alamat = $request->alamat;
        $mhs->save();

        return redirect()->route('mhs.index');
    }

    public function show(string $id)
    {
        $mhs = mhs::find($id);
        return view('mhs.show', compact('mhs'));
    }

    public function edit(string $id)
    {
        $mhs = mhs::find($id);
        return view('mhs.edit', compact('mhs'));
    }

    public function update(Request $request, string $id)
    {
        $mhs = mhs::find($id);
        $mhs->nama = $request->nama;
        $mhs->nrp = $request->nrp;
        $mhs->alamat = $request->alamat;
        $mhs->save();

        return redirect()->route('mhs.index');
    }

    public function destroy(string $id)
    {
        $mhs = mhs::find($id);
        $mhs->delete();

        return redirect()->route('mhs.index');
    }
}