<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
        return view('pages.index');
    }

    public function clothes(){
        return view('pages.clothes');
    }

    public function login(){
        return view('users.login');
    }
}

