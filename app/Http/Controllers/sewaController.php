<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\sewa;

class sewaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $title = "daftar sewa";
        $data = sewa::all();
        return view('dashboard.sewa')
        ->with('title', $title)
        ->with("sewa", $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $title = 'data entry';
        return view('dashboard.create')->with('title', $title);
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
        $this->validate($request, [
            'nama' => 'required',
            'NIK' => 'required',
            'tlp' => 'required',
            'no_unit' => 'required',
            'dari' => 'required',
            'sampai' => 'required',
            'harga' => 'required'
        ]);
        sewa::create([
            'nama' => request('nama'),
            'NIK' => request('NIK'),
            'tlp' => request('tlp'),
            'email' => request('email'),
            'dari' => request('dari'),
            'sampai' => request('dari'),
            'no_unit' => request('no_unit'),
            'harga' => request('harga'),
            
            'keterangan' => request('keterangan'),
        ]);
        return redirect('/sewa')->with('success', 'data saved');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
        $data = sewa::find($id);
        $title = $data->nama;
        return view('dashboard.detail')
        ->with('title', $title)
        ->with("sewa", $data);
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
    }
}
