<?php

namespace App\Http\Controllers;

use Auth;
use App\Models\User;
use App\Models\UserDetail;
use App\Models\Pembeli;
use App\Models\Penjual;
use App\Http\Requests\UserStoreRequest;

class AuthController extends Controller
{

    function showLogin()
    {
        return view('login');
    }

    function loginProcess()
    {
        // digunakan untuk login biasa tanpa multi user
        // if (Auth::attempt(['email' => request('email'), 'password' => request('password')])) {
        //     return redirect('template.admin')->with('success', 'Login Berhasil');
        // } else {
        //     // return redirect('template.admin')->with('success', 'Login Berhasil');
        //     return back()->with('danger', 'Login gagal. Silahkan cek email dan password anda!');
        // }

        // login user, penjual, pembeli yg digunakan pas form login ny nda perlu pakai option, tapi langsung ngedetek lewat guard
        $email = request('email');
        $user = Pembeli::where('email', $email)->first();
        if ($user) {
            $guard = 'pembeli';
        } elseif ($user) {
            $user = User::where('email', $email)->first();
            if ($user) {
                $guard = 'user';
            } else {
                $guard = false;
            }
        } else {
            $user = Penjual::where('email', $email)->first();
            if ($user) {
                $guard = 'penjual';
            } else {
                $guard = false;
            }
        }

        if (!$guard) {
            return back()->with('danger', 'login gagal, email tidak dapat ditemukan');
        } else {
            if (Auth::guard('penjual')->attempt(['email' => request('email'), 'password' => request('password')])) {
                return redirect('beranda/penjual/$guard')->with('success', 'Anda berhasil login');
            } elseif (Auth::guard('user')->attempt(['email' => request('email'), 'password' => request('password')])) {
                return redirect('beranda/$guard')->with('success', 'Anda berhasil login');
            } elseif (Auth::guard('pembeli')->attempt(['email' => request('email'), 'password' => request('password')])) {
                return redirect('user/$guard')->with('success', 'Anda berhasil login');
            } else {
                return back()->with('danger', 'login gagal silahkan cek email dan password');
            }
        }

        // login penjual dan pembeli pengecekan guard
        // $email = request('email');
        // $user = Pembeli::where('email', $email)->first();
        // if ($user) {
        //     $guard = 'pembeli';
        // } else {
        //     $user = Penjual::where('email', $email)->first();
        //     if ($user) {
        //         $guard = 'penjual';
        //     } else {
        //         $guard = false;
        //     }
        // }
        // if (!$guard) {
        //     return back()->with('danger', 'login gagal, email tidak dapat ditemukan');
        // } else {
        //     if (Auth::guard($guard)->attempt(['email' => request('email'), 'password' => request('password')])) {
        //         return redirect('beranda/$guard')->with('success', 'Anda berhasil login');
        //     } else {
        //         return back()->with('danger', 'login gagal silahkan cek email dan password');
        //     }
        // }


        // digunakan untuk form login yg memiliki option pembeli atau penjual
        // if (request('login_as') == 1) {
        //     if (Auth::guard('pembeli')->attempt(['email' => request('email'), 'password' => request('password')])) {
        //         return redirect('beranda/pembeli')->with('success', 'login berhasil');
        //     } else {
        //         return back()->with('danger', 'Login gagal. Silahkan cek email dan password anda!');
        //     }
        // } else {
        //     if (Auth::guard('penjual')->attempt(['email' => request('email'), 'password' => request('password')])) {
        //         return redirect('beranda/penjual')->with('success', 'login berhasil');
        //     } else {
        //         return back()->with('danger', 'Login gagal. Silahkan cek email dan password anda!');
        //     }
        // }
    }

    function logout()
    {
        Auth::logout();
        Auth::guard('pembeli')->logout();
        Auth::guard('penjual')->logout();
        Auth::guard('user')->logout();
        return redirect('/');
    }

    function showRegister()
    {
        return view('register');
    }
    function storeRegister()
    {
        // produk ini sama dengan model
        $penjual = new penjual;
        // // kiri= nama (database), kanan= nama(codingan view)
        $penjual->nama = request('nama');
        $penjual->username = request('username');
        $penjual->password = bcrypt(request('password'));
        $penjual->email = request('email');
        $penjual->save();

        return redirect('login')->with('success', 'Silahkan Login');
    }
    function forgotPassword()
    {
    }
}
