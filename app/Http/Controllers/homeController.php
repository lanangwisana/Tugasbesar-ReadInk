<?php

namespace App\Http\Controllers;

use App\Models\penulis;
use Illuminate\Http\Request;

class homeController extends Controller
{
    public function index()
    {
       
        $cerita = penulis::orderby('id')->get();
        return view('Author.Dashboard', ['cerita' => $cerita]);
    }
}
