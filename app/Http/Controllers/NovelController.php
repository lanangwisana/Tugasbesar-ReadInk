<?php

namespace App\Http\Controllers;
use App\Models\IsiNovel;
use Illuminate\Http\Request;

class NovelController extends Controller
{
    public function detail($judul)
    {
        $cerita = IsiNovel::find($judul);

        return view('tulis.detail', ['cerita' => $cerita]);
    }
    // isi cerita
    public function isicerita($judul)
    {
        $cerita = IsiNovel::where('judul', $judul)->orderBy('judul', 'asc')->paginate(1);
        return view('tulis.isicerita', ['cerita' => $cerita]);
    }

    public function isibaru()
    {
        $cerita = IsiNovel::orderBy('id')->get();

        return view('tulis.isibaru', ['cerita' => $cerita]);
    }

    public function storee(Request $request)
    {
        IsiNovel::create($request->all());

        return redirect('/detail-isicerita/{idcerita}');
    }

    public function editisi($id)
    {
        $cerita = IsiNovel::findOrFail($id);
        return view('tulis.editisi', ['cerita' => $cerita]);
    }

    public function updateisi(Request $request, $id)
    {
        // dd($request->all());
        $cerita = IsiNovel::findOrFail($id);
        // dd($cerita);
        $cerita->update($request->all());


        return redirect('/detail-cerita/'.$id);
    }

    public function deleteisi($id)
    {
        $cerita = IsiNovel::findOrFail($id);
        return view('tulis.deleteisi', ['cerita' => $cerita]);
    }

    public function destroyisi($id)
    {
        $cerita = IsiNovel::findOrFail($id);
        $cerita->deleteisi();

        return redirect('/detail-cerita/'.$id);
    }

    public function mulaibaca()
    {
        $cerita = IsiNovel::orderBy('judul')->paginate(1);
        return view('tulis.mulaibaca', ['cerita' => $cerita]);
    }
}
