<?php

namespace App\Http\Controllers;

use App\Models\penulis;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class penulisController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $cerita = penulis::orderby('id')->get();
        return view('Author.Tulis', ['cerita' => $cerita]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Author.Addcerita');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        if ($request->file('photo')) {

            // $extension = $request->file('photo')->getClientOriginalExtension();
            // $newName = $request->judul.'.'.$extension;
            // $request->file('photo')->storeAs('photo', $newName);

            $sampul = $request->file('photo');
            $originalName = $sampul->getClientOriginalName();
            $request->file('photo')->storeAs('photo', $originalName);
            $request['sampul'] = $originalName; //$newName;


        }
        penulis::create($request->all());
        return redirect('/tulis-author');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Request $request, $id)
    {
        $tulis = Penulis::findOrFail($id);
        return view('Author.Editceritaa', ['tulis' => $tulis]);
    }


    public function update(Request $request, $id)
    {
        $tulis = penulis::findOrFail($id);


        if ($request->hasFile('photo')) {

            storage::delete('public/photo/' . $tulis->sampul);

            // $extension = $request->file('photo')->getClientOriginalExtension();
            // $newName = $request->judul.'.'.$extension;
            // $request->file('photo')->storeAs('photo', $newName);

            // $request['sampul'] = $newName;
            $sampul = $request->file('photo');
            $originalName = $sampul->getClientOriginalName();
            $request->file('photo')->storeAs('photo', $originalName);
            $request['sampul'] = $originalName; //$newName;




            $tulis->sampul = $request->file('photo')->store('photo', 'public');
        }


        $tulis->update($request->all());

        return redirect('tulis-author');
    }


    /**
     * Remove the specified resource from storage.
     */
    public function delete($id)
    {
        $cerita = penulis::findOrFail($id);
        return view('Author.delete', ['cerita' => $cerita]);
    }

    public function destroy($id)
    {
        $cerita = penulis::findOrFail($id);
        $cerita->delete();
        return redirect('/tulis-author');
    }
    public function search(Request $request)
    {
        if ($request->has('search')) {
            $cerita = penulis::where('judul', 'LIKE', '%' . $request->search . '%')->get();
        } else {
            $cerita =  penulis::all();
        }
        return view('Author.Tulis', ['cerita' => $cerita]);
    }

    public function halamanbacaauthor($id)
    {
        // @dd($cerita);
        $cerita = penulis::findOrFail($id);
        return view('Author.halamanBaca', ['cerita' => $cerita]);
    }

    public function indexpembaca()
    {
        $cerita = penulis::orderby('id')->get();
        return view('Pembaca.Dashboard', ['cerita' => $cerita]);
    }
}
