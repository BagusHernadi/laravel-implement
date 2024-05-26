<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Export;

class ExportController extends Controller
{
    public function index()
    {
        return view('export.index');
    }

    public function export(Request $request)
    {
        // Validate and export the data
        $export = Export::create($request->all());
        return redirect()->route('export.index');
    }
}
