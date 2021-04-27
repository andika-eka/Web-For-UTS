<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\sewa;
use App\Models\User;
use App\Models\bayar;
use Illuminate\Support\Facades\Auth;
class BayarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $title = "history pembayaran";
        $data = bayar::all();
        $Sewa = sewa::all();
        $user = User::all();
        return view('dashboard.pembayaran.index')
        ->with('title', $title)
        ->with("bayar", $data)
        ->with('sewa', $Sewa)
        ->with('user', $user);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $title = 'buat pembayaran';
        return view('dashboard.pembayaran.create')->with('title', $title);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $this->validate($request,[
            'id_sewa' => 'required',
            'bulan' => 'required'
        ]);
        bayar::create([
            'id_sewa' => request('id_sewa'),
            'bulan' => request('bulan'),  
            'id_user' =>Auth::id(),
            'keterangan' => request('keterangan'),
        ]);
        return redirect('/pembayaran')->with('success', 'data saved');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $data = bayar::find($id);       
        $data-> delete();                 

        return redirect('/pembayaran')->with('success', 'data deleted');
    }
}
