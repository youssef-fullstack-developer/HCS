<?php

namespace App\Http\Controllers;

use App\Models\Color;
use App\Models\Count;
use App\Models\Ply;
use App\Models\UOM;
use App\Models\Variety;
use App\Models\Yarn;
use App\Models\YarnType;
use Illuminate\Http\Request;

class YarnController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $yarns = Yarn::all();
        return view('yarn_master.yarn.index', compact('yarns'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $counts = Count::all();
        $ply = Ply::all();
        $types = YarnType::all();
        $varieties = Variety::all();
        $colors = Color::all();
        $uom = UOM::where('type', 'yarn_unit')->get();
        $buy_uom = UOM::where('type', 'other_item')->get();
        return view('yarn_master.yarn.add', compact('counts', 'ply', 'types', 'varieties', 'colors', 'uom', 'buy_uom'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'count' => 'required',
            'ply' => 'required',
            'unit' => 'required',
            'type' => 'required',
            'variety' => 'required',
            'buy_uom' => 'required',
            'name' => 'required',
            'conversion' => 'required',
            'hsn' => 'required',
            'igst' => 'required',
            'sgst' => 'required',
            'cgst' => 'required'
        ]);

        $data['filaments'] = $request->filaments ? $request->filaments : '';
        $data['tpm'] = $request->tpm ? $request->tpm : '';
        $data['color'] = $request->color ? $request->color : '';
        $data['reorder'] = $request->reorder ? $request->reorder : '';
        $data['blend'] = $request->blend ? $request->blend : '';
        $data['danger'] = $request->danger ? $request->danger : '';
        $data['display_name'] = $request->display_name ? $request->display_name : '';
        $data['cess'] = $request->cess ? $request->cess : '';
        $data['is_apply'] = $request->is_apply ? 1 : 0;
        $data['status'] = $request->status ? 1 : 0;

        Yarn::create($data);

        return redirect('yarn')->with('message', 'Yarn added successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(Yarn $yarn)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Yarn $yarn)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Yarn $yarn)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Yarn $yarn)
    {
        //
    }
}
