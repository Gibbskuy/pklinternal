<?php

namespace App\Http\Controllers;

use Alert;
use Illuminate\Http\Request;
use App\Models\Eskul;
class Eskulcontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $eskul = Eskul::all();
        $title = 'Delete User!';
        $text = "Are you sure you want to delete?";
        confirmDelete($title, $text);
        return view('admin.eskul.index', compact('eskul'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.eskul.create');
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
            'eskul' => 'required',
            'deskripsi' => 'required',
            'foto' => 'required',
        ]);

        $eskul = new Eskul();
        $eskul->eskul = $request->eskul;
        $eskul->deskripsi = $request->deskripsi;

        // upload foto
        if ($request->hasFile('foto')) {
            $img = $request->file('foto');
            $name = rand(1000, 9999) . $img->getClientOriginalName();
            $img->move('images/eskul/', $name);
            $eskul->foto = $name;
        }
        $eskul->save();

return redirect()->route('eskul.index')
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
        $eskul = Eskul::findOrFail($id);
        return view('admin.eskul.edit', compact('eskul'));
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
            'eskul' => 'required',
            'deskripsi' => 'required',
            'foto' => 'required',
        ]);

        $eskul = Eskul::findOrFail($id);
        $eskul->eskul = $request->eskul;
        $eskul->deskripsi = $request->deskripsi;

// upload foto
        if ($request->hasFile('foto')) {
            $img = $request->file('foto');
            $name = rand(1000, 9999) . $img->getClientOriginalName();
            $img->move('images/eskul/', $name);
            $eskul->foto = $name;
        }
        $eskul->save();

        Alert::success('Success', 'Edit Data Berhasil di Simpan')->autoclose(2000);
        return redirect()->route('eskul.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $eskul = Eskul::findOrFail($id);
        $eskul->delete();
        Alert::success('Success', 'Data Ini Telah Di Hapus')->autoclose(2000);
        return redirect()->route('eskul.index');
    }
}
