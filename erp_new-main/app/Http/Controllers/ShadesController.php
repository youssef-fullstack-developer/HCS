<?php

namespace App\Http\Controllers;

use App\Models\Shades;
use Illuminate\Http\Request;

class ShadesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $shades = Shades::all();
        return view('shades.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('shades.add');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Shades $shades)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Shades $shades)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Shades $shades)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Shades $shades)
    {
        //
    }
}
