<?php

namespace App\Http\Controllers;

use App\Models\LoomTypes;
use Illuminate\Http\Request;

class LoomTypesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $types = LoomTypes::all();
        return view('loom_types.index', compact('types'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required'
        ]);

        $data['status'] = $request->status ? 1 : 0;

        LoomTypes::create($data);
        return redirect('loom_types')->with('message', 'Loom Type created Successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(LoomTypes $loomTypes)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(LoomTypes $loomTypes)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, LoomTypes $loomTypes)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(LoomTypes $loomTypes)
    {
        //
    }
}
