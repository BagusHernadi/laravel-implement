<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Import;

class ImportController extends Controller
{
    public function index()
    {
        return view('import.index');
    }

    public function import(Request $request)
    {
        // Validate and import the data
        $import = Import::create($request->all());
        return redirect()->route('import.index');
    }
}
