<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\mhs;

class mhsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data['mhs'] = mhs::all();
        return view('mhs.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('mhs.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $mhs = new mhs();
        $mhs->name = $request->name;
        $mhs->save();

        return redirect()->route('mhs.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $mhs = mhs::find($id);
        return view('mhs.show', compact('mhs'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $mhs = mhs::find($id);
        return view('mhs.edit', compact('mhs'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $mhs = mhs::find($id);
        $mhs->name = $request->name;
        $mhs->save();

        return redirect()->route('mhs.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $mhs = mhs::find($id);
        $mhs->delete();

        return redirect()->route('mhs.index');
    }
}