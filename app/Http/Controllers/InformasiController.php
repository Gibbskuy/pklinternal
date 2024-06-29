<?php

namespace App\Http\Controllers;

use Alert;
use App\Models\Informasi;
use Illuminate\Http\Request;

class Informasicontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $informasi = Informasi::all();
        $title = 'Delete User!';
        $text = "Are you sure you want to delete?";
        confirmDelete($title, $text);
        return view('admin.informasi.index', compact('informasi'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.informasi.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'judul' => 'required',
            'deskripsi' => 'required',
            'foto' => 'required'
        ]);

        $informasi = new Informasi();
        $informasi->judul = $request->judul;
        $informasi->deskripsi = $request->deskripsi;

        // upload foto
        if ($request->hasFile('foto')) {
            $img = $request->file('foto');
            $name = rand(1000, 9999) . $img->getClientOriginalName();
            $img->move('images/informasi/', $name);
            $informasi->foto = $name;
        }
        $informasi->save();

        return redirect()->route('informasi.index')
            ->with('success', 'data berhasil ditambahkan');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $informasi = Informasi::findOrFail($id);
        return view('admin.informasi.edit', compact('informasi'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'judul' => 'required',
            'dekripsi' => 'required',
            'foto' => 'required',
        ]);

        $informasi = Informasi::findOrFail($id);
        $informasi->judul = $request->judul;
        $informasi->deskripsi = $request->deskripsi;

// upload foto
        if ($request->hasFile('foto')) {
            $img = $request->file('foto');
            $name = rand(1000, 9999) . $img->getClientOriginalName();
            $img->move('images/informasi/', $name);
            $informasi->foto = $name;
        }
        $informasi->save();

        Alert::success('Success', 'Edit Data Berhasil di Simpan')->autoclose(2000);
        return redirect()->route('informasi.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $informasi = Informasi::findOrFail($id);
        $informasi->delete();
        Alert::success('Success', 'Data Ini Telah Di Hapus')->autoclose(2000);
        return redirect()->route('informasi.index');
    }
}
