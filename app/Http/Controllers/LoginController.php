<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
   public function loginBackend()
   {
      return view('backend.v_login.login', [
         'judul' => 'Login',
      ]);
   }

   public function authenticateBackend(Request $request)
   {
      $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required'
         ]);
      if (Auth::attempt($credentials)) {
         if (Auth::user()->status == 0) {
            Auth::logout();
            return back()->with('error', 'User belum aktif');
         }
         $request->session()->regenerate();
         return redirect()->intended(route('backend.beranda'));
      }

      return back()->with('error', 'Login Gagal');
   }

   public function registerBackend()
   {
      return view('backend.v_registrasi.register', [
         'judul' => 'Registrasi User',
      ]);
   }

   public function registerUser(Request $request)
   {
      $validasi = $request->validate([
         'nama' => 'required|max:255',
         'email' => 'required|email|max:255',
         'hp' => 'max:13',
         'password' => 'required|min:6',
      ]);

      $user = User::create([
         'nama' => $validasi['nama'],
         'email' => $validasi['email'],
         'hp' => $validasi['hp'],
         'password' => bcrypt($validasi['password']),
         'role' => '1',
         'status' => 1,
         'created_at' => now()
      ]);

      return redirect()->route('backend.login')->with('success', 'Registrasi berhasil, Silahkan Login');
   }

   public function logoutBackend()
   {
      Auth::logout();
      request()->session()->invalidate();
      request()->session()->regenerateToken();
      return redirect(route('backend.login'));
   }
}
