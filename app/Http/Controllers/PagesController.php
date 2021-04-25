<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\sewa;

class PagesController extends Controller
{
    public function home(){
        $title = 'home';
        return view('index')
        ->with('title', $title);
    }

    public function dashboard(){
        $title = 'dashboard';
        $data = sewa::all();
        return view('dashboard/index')
        ->with('title', $title) 
        ->with("sewa", $data);
    }
}
