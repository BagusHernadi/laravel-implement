<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Response;

class Error extends Model
{
    // Method to handle errors
    public function handleError($exception)
    {
        // Get the current request
        $request = Request::instance();

        // Check if the request is an AJAX request
        if ($request->ajax()) {
            // Return a JSON response with the error message
            return Response::json(['error' => $exception->getMessage()], 500);
        } else {
            // Redirect the user to an error page
            return Redirect::route('error')->with('error', $exception->getMessage());
        }
    }
}