<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index() {
        return view('pages.users.index');
    }

    public function usersInfo() {
        return view('pages.users.index');
    }
}