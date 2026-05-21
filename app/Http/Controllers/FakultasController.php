<?php

namespace App\Http\Controllers;

use App\Models\Fakultas;
use App\Models\Prodi;
use Illuminate\Http\Request;
use LDAP\Result;

class FakultasController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // akses tabel fakultas
        $result = Fakultas::all(); // select * from fakultas
        // dd($result); // drop date_date_set
        // return view('fakultas.index',$Result);
        return view('fakultas.index', compact('result'));
    }





    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $fakultas = Fakultas::all();
        return view('fakultas.create', compact('fakultas'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // validasi input
        $input = $request->validate([
            'nama_fakultas' => 'required|unique:fakultas',
            'singkatan' => 'required',
        ]);

        fakultas::create($input);

        return redirect()->route('fakultas.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Fakultas $fakultas)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($fakultas)
    {
        $fakultas = Fakultas::find($fakultas); // cari data berdasarkan id
        // dd($fakultas);
        return view('fakultas.edit', compact('fakultas'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $fakultas)
    {
        $input = $request->validate([
            'nama_fakultas' => 'required|unique:fakultas,nama_fakultas,' . $fakultas,
            'singkatan' => 'required',
        ]);

        fakultas::where('id', $fakultas)->update($input);

        return redirect()->route('fakultas.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($fakultas)
    {
        // dd($fakultas);
        $fakultas = Fakultas::find($fakultas);
        // dd($fakultas);
        $fakultas->delete();
        return redirect()->route('fakultas.index');
    }
}
