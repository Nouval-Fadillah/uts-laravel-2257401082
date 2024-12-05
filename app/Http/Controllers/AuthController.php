<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function index()
    {
        $nama = "Nouval Fadillah";
        $kelas = "MI22A";
        $nim = "2257401082";

        return view('welcome', compact('nama', 'kelas', 'nim'));
    }


    public function login()
    {
        return view('login');
    }

    public function register()
    {
        return view('register');
    }

    public function dashboard()
    {
        $nama = "Nouval Fadillah";
        $kelas = "MI22A";
        $nim = "2257401082";

        return view('dashboard', compact('nama', 'kelas', 'nim'));
    }
}
