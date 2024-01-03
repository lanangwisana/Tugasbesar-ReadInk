<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function login2(Request $request)
    {
        $role = strtolower($request->input('role'));

        if ($role === 'author') {
            // Redirect to Author Dashboard
            return redirect('/dashboard-author');
        } elseif ($role === 'pembaca') {
            // Redirect to Pembaca Dashboard
            return redirect('/dashboard-pembaca');
        // } else {
        //     // Handle invalid role
        //     return redirect()->route('login2')->with('error', 'Invalid role');
        }
    }
}
