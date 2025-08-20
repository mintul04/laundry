<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

class AuthController extends Controller
{
    public function login()
    {
        return view('auth.login');
    }

    public function loginProses(Request $request)
    {
        $validation = $request->only('name', 'password');

        if (Auth::attempt($validation)) {
            $request->session()->regenerate();
            return redirect()->route('layanan.index');
        }

        return back()->with('error', 'Password atau Username Salah');
    }

    public function register()
    {
        return view('auth.register');
    }

    public function registerProses(Request $request)
    {
        $validation = $request->validate([
            'name'       => 'required|string|max:255',
            'email'      => 'required|email|unique:users,email',
            'password'   => 'required|string|min:8',
            'no_telepon' => 'required|string|max:15',
            'alamat'     => 'required|string|max:255',
        ], [
            'name.required'       => 'Nama harus diisi.',
            'email.required'      => 'Email harus diisi.',
            'email.email'         => 'Format email tidak valid.',
            'email.unique'        => 'Email sudah terdaftar.',
            'password.required'   => 'Password harus diisi.',
            'password.min'        => 'Password harus terdiri dari minimal 8 karakter.',
            // 'password.confirmed'  => 'Konfirmasi password tidak cocok.',
            'no_telepon.required' => 'Nomor telepon harus diisi.',
            'alamat.required'     => 'Alamat harus diisi.',
        ]);

        $validation['password'] = Hash::make($request->password);
        User::create($validation);

        return redirect()->route('layanan.index');
    }
}
