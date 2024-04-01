<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\DataTables\KategoriDataTable;
use App\Http\Requests\StorePostRequest;
use App\Models\KategoriModel;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Redirect;

class KategoriController extends Controller
{

    public function index(KategoriDataTable $dataTable)
    {
        return $dataTable->render('kategori.index');
    }

    public function create()
    {
        return view('kategori.create');
    }

    public function store(StorePostRequest $request): RedirectResponse
    {
        $validated = $request->validated();

        $validated = $request->safe()->only(['kategori_kode', 'kategori_nama']);
        $validated = $request->except(['kategori_kode', 'kategori_nama']);
        KategoriModel::create([
            'kategori_kode' => $request->kategori_kode,
            'kategori_nama' => $request->kategori_nama,
        ]);

        return Redirect::to('/kategori');
    }

    public function updateForm($id)
    {
        $kategori = KategoriModel::findOrFail($id);
        return view('kategori.edit', compact('kategori'));
    }

    public function update(Request $request, $id)
    {
        $kategori = KategoriModel::findOrFail($id);
        $kategori->update([
            'kategori_kode' => $request->kategori_kode,
            'kategori_nama' => $request->kategori_nama,
        ]);

        return redirect('/kategori');
    }

    public function delete($id)
    {
        $kategori = KategoriModel::findOrFail($id);
        $kategori->delete();

        return redirect('/kategori');
    }
}
