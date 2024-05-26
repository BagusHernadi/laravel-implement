<?php

// ErrorController.php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Error;

class ErrorController extends Controller
{
    public function index()
    {
        return view('error');
    }

    public function show(Request $request, $id)
    {
        $error = Error::find($id);

        return view('error', compact('error'));
    }
}
