<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index() {
        return view('pages.admins.index');
    }

    public function showUsers() {
        $users = User::orderByRaw('lastName,firstName')->get();
        return view('pages.admins.users', compact('users'));
    }
}
