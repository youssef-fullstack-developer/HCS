<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ApprovalController extends Controller
{
    public function export_so()
    {
        return view('approvals.export_so.index');
    }

    public function po_fabric_purchase()
    {
        return view('approvals.po_fabric_purchase.index');
    }

    public function po_fabric_purchase_jw()
    {
        return view('approvals.po_fabric_purchase_jw.index');
    }
}
