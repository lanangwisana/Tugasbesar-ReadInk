<?php

namespace App\Http\Controllers;

use App\Models\history;
use Illuminate\Http\Request;

class historyController extends Controller
{
    public function index()
    {
        {
    
            $cerita = history::orderby('id')->get();
            return view('Author.history', ['cerita' => $cerita]);
        }
    }
}
