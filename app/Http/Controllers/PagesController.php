<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\sewa;
use Carbon\Carbon;


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
        
        $belumSelesai = sewa::whereDate('sampai','>', Carbon::now())->sum('harga');
        $belumMulai = sewa::whereDate('dari','>', Carbon::now())->sum('harga');
        $rev = $belumSelesai - $belumMulai;

        return view('dashboard/index')
        ->with('title', $title) 
        ->with("sewa", $data)
        ->with("rev", $rev);
    }
}
