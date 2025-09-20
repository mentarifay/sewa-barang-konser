<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function showRegisterForm()
    {
        return view('auth.create.account');
    }

    public function register(Request $request)
    {
        $request->validate([
            'name'     => 'required|string|max:255',
            'email'    => 'required|email|unique:users,email',
            'phone'    => 'required|string|max:20',
            'address'  => 'required|string',
            'password' => 'required|string|min:6|confirmed',
            'ktp'      => 'required|mimes:jpg,jpeg,png,pdf|max:2048',
            'kk'       => 'required|mimes:jpg,jpeg,png,pdf|max:2048',
            'agree'    => 'accepted',
        ]);

        // simpan file KTP & KK
        $ktpPath = $request->file('ktp')->store('uploads/ktp', 'public');
        $kkPath  = $request->file('kk')->store('uploads/kk', 'public');

        $user = User::create([
            'name'     => $request->name,
            'email'    => $request->email,
            'phone'    => $request->phone,
            'address'  => $request->address,
            'password' => Hash::make($request->password),
            'ktp'      => $ktpPath,
            'kk'       => $kkPath,
            'role'     => 'customer',
        ]);

        auth()->login($user);

        return redirect()->route('home')->with('success', 'Akun berhasil dibuat!');
    }
}
