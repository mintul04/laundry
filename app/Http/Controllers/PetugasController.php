<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;

class PetugasController extends Controller
{
     public function index()
    {
        return view('petugas.data', [
            'petugas' => User::get()
        ]);
    }

    public function create()
    {
        return view('petugas.form');
    }

    public function store(Request $request)
    {
        $validation = $request->validate(
            [
                'name'     => 'required',
                'email'    => 'required',
                'password' => 'required',
            ],
        );

        $validation['password'] = Hash::make($validation['password']);
        $validation['role'] = 'petugas';
        User::create($validation);

        return redirect()->route('petugas.index');
    }

    public function edit(string $id)
    {
        return view('petugas.form-edit', [
            'petugas' => User::findOrFail($id)
        ]);
    }

    public function update(Request $request, string $id)
    {
         $validation = $request->validate(
            [
                'name'     => 'required',
                'email'    => 'required',
                'password' => 'required',
            ]
        );

        $validation['password'] = Hash::make($validation['password']);
        User::findOrFail($id)->update($validation);

        return redirect()->route('petugas.index');
    }

    public function destroy(string $id)
    {
        User::find($id)->delete();
        return redirect()->route("petugas.index");
    }
}
