<?php

namespace App\Http\Controllers;

use App\Models\penulis;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;

class FavoritController extends Controller
{
    public function index()
    {
        $cerita = penulis::orderby('id')->get();

        return view('Author.Favorit', ['cerita' => $cerita]);
    }
    public function create($id)
    {
        {
            $cerita = penulis::find($id);
    
            return view('Author.favorit.create', ['cerita' => $cerita]);
        }
    }

    public function store(Request $request)
    {
        // @dd($request->all());
        $cerita = penulis::create($request->all());
        if ($cerita) {
            Session::flash('status', 'succes');
            Session::flash('message', 'penambahan data berhasil');
        }
        return redirect('/favorit-author');
        return redirect('/dashboard-author');
    }
}
