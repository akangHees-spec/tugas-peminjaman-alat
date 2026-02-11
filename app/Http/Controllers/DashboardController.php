<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index()
    {
        $user = Auth::user();

        if ($user->role === 'admin') {
            return view('dashboard.admin', compact('user'));
        } elseif ($user->role === 'petugas') {
            return view('dashboard.petugas', compact('user'));
        } else {
            return view('dashboard.peminjam', compact('user'));
        }

    }
}