<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function home(){
        $title = 'home';
        return view('index')
        ->with('title', $title);
    }

    public function dashboard(){
        $title = 'dashboard';
        return view('dashboard/index')
        ->with('title', $title);
    }
}
