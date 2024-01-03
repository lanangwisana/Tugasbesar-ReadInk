<?php

namespace App\Http\Controllers;

use App\Models\Bookmark;
use App\Models\penulis;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class BookmarkController extends Controller
{
    public function index()
    {
        $cerita = penulis::orderby('id')->get();

        return view('Author.Bookmark', ['cerita' => $cerita]);
    }
    public function create($id)
    {
        // return view('Author.bookmark.create');
        $cerita = penulis::find($id);

        return view('Author.favorit.create', ['cerita' => $cerita]);
    }

    public function store(Request $request)
    {
        // @dd($request->all());
        $cerita = Bookmark::create($request->all());
        if ($cerita) {
            Session::flash('status', 'succes');
            Session::flash('message', 'penambahan data berhasil');
        }
        return redirect('/bookmark-author');
    }
}
