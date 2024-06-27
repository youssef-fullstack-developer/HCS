<?php

namespace App\Http\Controllers;

use App\Models\LoomTypes;
use App\Models\Selvedge;
use App\Models\Sort;
use App\Models\SortWarp;
use App\Models\SortWeft;
use App\Models\Weave;
use App\Models\Yarn;
use Illuminate\Http\Request;

class SortController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $sorts = Sort::all();
        return view('sort.index', compact('sorts'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $weaves = Weave::all();
        $loom_types = LoomTypes::all();
        $selvedge = Selvedge::all();
        $yarns = Yarn::all();
        return view('sort.add', compact('weaves', 'loom_types', 'selvedge', 'yarns'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request);
        $data = $request->all();
        $sort = Sort::create($data);

        $i = 0;
        foreach($data["warp_pattern"] as $pattern) {
            $warp = array();
            $warp["sort"] = $sort->id;
            $warp["warp_pattern"] = $data["warp_pattern"][$i];
            $warp["warp_material"] = $data["warp_material"][$i];
            $warp["warp_shrinkage"] = $data["warp_shrinkage"][$i];
            $warp["warp_total_ends"] = $data["warp_total_ends"][$i];
            $warp["warp_grams_meters"] = $data["warp_grams_meters"][$i];

            SortWarp::create($warp);
            $i++;
        }

        $i = 0;
        foreach($data["weft_pattern"] as $pattern) {
            $weft = array();
            $weft["sort"] = $sort->id;
            $weft["weft_pattern"] = $data["weft_pattern"][$i];
            $weft["weft_material"] = $data["weft_material"][$i];
            $weft["weft_shrinkage"] = $data["weft_shrinkage"][$i];
            $weft["weft_picks"] = $data["weft_picks"][$i];
            $weft["weft_grams_meters"] = $data["weft_grams_meters"][$i];

            SortWeft::create($weft);
            $i++;
        }

        return redirect('sort')->with('message', "Sort added successfully...");
    }

    /**
     * Display the specified resource.
     */
    public function show(Sort $sort)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Sort $sort)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Sort $sort)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Sort $sort)
    {
        //
    }
}
