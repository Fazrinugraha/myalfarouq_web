<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\Validator;
use App\Models\User;

class AuthController extends Controller
{
    // Login function for both admin and regular user
    public function login(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => 'required|email:dns',
            'password' => 'required|min:8|max:15',
        ]);

        if ($validator->fails()) {
            Alert::error('Error', 'Pastikan semua email dan password terisi dengan benar!');
            return redirect()->back();
        }

        // Check for admin login attempt
        if (Auth::guard('admin')->attempt(['email' => $request->email, 'password' => $request->password])) {
            // Retrieve the authenticated admin
            $admin = Auth::guard('admin')->user();
            // Use the admin's name in the success message
            toast('Selamat datang, ' . $admin->name . '!', 'success');
            return redirect()->route('admin.dashboard');
            // toast('Selamat datang admin!', 'success');
            // return redirect()->route('admin.dashboard');
        } 

         // Check for admin besar login attempt
        elseif (Auth::guard('adminbesar')->attempt(['email' => $request->email, 'password' => $request->password])) {
            // Retrieve the authenticated admin
            $admin_besars = Auth::guard('adminbesar')->user();
            // Use the admin's name in the success message
            toast('Selamat datang, ' . $admin_besars->name . '!', 'success');
            return redirect()->route('adminbesar.dashboard');
            // toast('Selamat datang admin!', 'success');
            // return redirect()->route('admin.dashboard');
        } 


        // Check for regular user login attempt
        elseif (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            $user = Auth::user();
            toast('Selamat datang, ' . $user->name . '!', 'success');
            return redirect()->route('user.home');
        } 
        // Login failed
        else {
            Alert::error('Login Gagal!', 'Email atau password tidak valid!');
            return redirect()->back();
        }
    }

    // Admin logout function
    public function admin_logout() 
    {
        Auth::guard('admin')->logout();
        toast('Berhasil logout!', 'success');
        return redirect('/');
    }

    // Admin besar logout function
    public function adminbesar_logout() 
    {
        Auth::guard('adminbesar')->logout();
        toast('Berhasil logout!', 'success');
        return redirect('/');
    }

    // User logout function
    public function user_logout() 
    {
        Auth::logout();
        toast('Berhasil logout!', 'success');
        return redirect('/');
    }

    // Register function for regular user
    public function register()
    {
        return view('register');
    }

    public function post_register(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'email' => 'required|email:dns|unique:users,email',
            'password' => 'required|min:8|max:20',
            'no_telepon' => 'required|regex:/^08[1-9][0-9]{6,10}$/',
        ]);
    
        if ($validator->fails()) {
            Alert::error('Gagal!', 'Pastikan semua data terisi dengan benar atau email sudah terdaftar!');
            return redirect()->back()->withErrors($validator)->withInput();
        }
    
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'no_telepon' => $request->no_telepon,
            'image' => 'default.jpg', // Default image
        ]);
    
        if ($user) {
            Alert::success('Berhasil!', 'Akun baru berhasil dibuat, silahkan login!');
            return redirect('/');
        } else {
            Alert::error('Gagal!', 'Akun gagal dibuat, silahkan coba lagi!');
            return redirect()->back();
        }
    }
    
    
}