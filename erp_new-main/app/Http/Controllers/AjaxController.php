<?php

namespace App\Http\Controllers;

use App\Models\Selvedge;
use App\Models\Yarn;
use Illuminate\Http\Request;

class AjaxController extends Controller
{
    public function changeCompany(Request $request)
    {
        $request->session()->put('company', $request->c);
        return response()->json(['status' => true]);
    }

    public function getSelvedgeDetail(Request $request)
    {
        $selvedge = Selvedge::find($request->selvedge);
        return response()->json(['status' => true, 'selvedge' => $selvedge]);
    }

    public function getYarnDetail(Request $request) {
        $yarn = Yarn::with('count')->find($request->yarn);
        return response()->json(['status' => true, 'yarn' => $yarn]);
    }
}
