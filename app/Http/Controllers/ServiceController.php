<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('layanan_laundry.data', [
            'layanan' => Service::get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('layanan_laundry.form');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validation = $request->validate(
            [
                'nama_layanan' => 'required',
                'deskripsi'    => 'required',
                'tipe'         => 'required',
                'harga'        => 'required',
            ],
            [
                'nama_layanan.required' => 'layanan harus diisi',
                'deskripsi.required'    => 'deskripsi harus diisi',
                'tipe.required'         => 'tipe harus diisi',
                'harga.required'        => 'harga harus diisi',
            ]
        );

        Service::create($validation);

        return redirect()->route('layanan.index');
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
    public function edit(string $id)
    {
        return view('layanan_laundry.form-edit', [
            'layanan' => Service::findOrFail($id)
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
         $validation = $request->validate(
            [
                'nama_layanan' => 'required',
                'deskripsi'    => 'required',
                'tipe'         => 'required',
                'harga'        => 'required',
            ],
            [
                'nama_layanan.required' => 'layanan harus diisi',
                'deskripsi.required'    => 'deskripsi harus diisi',
                'tipe.required'         => 'tipe harus diisi',
                'harga.required'        => 'harga harus diisi',
            ]
        );

        Service::findOrFail($id)->update($validation);

        return redirect()->route('layanan.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Service::find($id)->delete();
        return redirect()->route("layanan.index");
    }
}
