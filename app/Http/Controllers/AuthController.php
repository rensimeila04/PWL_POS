<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\UserModel;
use App\Models\LevelModel;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{
    public function login()
    {
        if (Auth::check()) { // jika sudah login, maka redirect ke halaman home
            return redirect('/');
        }
        return view('auth.login');
    }

    public function postLogin(Request $request)
    {
        if ($request->ajax() || $request->wantsJson()) {
            $credentials = $request->only('username', 'password');
            if (Auth::attempt($credentials)) {
                return response()->json([
                    'status' => true,
                    'message' => 'Login Berhasil',
                    'redirect' => url('/')
                ]);
            }
            return response()->json([
                'status' => false,
                'message' => 'Login Gagal'
            ]);
        }
        return redirect('login');
    }

    public function register()
    {
        if (Auth::check()) {
            return redirect('/');
        }

        $level = LevelModel::all();
        return view('auth.register', ['level' => $level]);
    }

    public function postRegister(Request $request)
    {
        if ($request->ajax() || $request->wantsJson()) {
            $rules = [
                'username' => 'required|string|min:3|unique:m_user,username',
                'nama' => 'required|string|max:100',
                'level_id' => 'required|integer',
                'password' => 'required|min:5'
            ];

            $validator = Validator::make($request->all(), $rules);

            if ($validator->fails()) {
                return response()->json([
                    'status' => 'false',
                    'message' => 'Validasi gagal',
                    'msgField' => $validator->errors()->toArray()
                ]);
            }

            $user = UserModel::create([
                'username' => $request->username,
                'nama' => $request->nama,
                'level_id' => $request->level_id,
                'password' => Hash::make($request->password)
            ]);

            if ($user) {
                return response()->json([
                    'status' => 'true',
                    'message' => 'Registrasi berhasil, silakan login'
                ]);
            }

            return response()->json([
                'status' => 'false',
                'message' => 'Registrasi gagal'
            ]);
        }
        return redirect('register');
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('login');
    }
}
