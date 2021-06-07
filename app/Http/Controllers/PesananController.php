<?php

namespace App\Http\Controllers;

use App\Pesanan;
use Illuminate\Http\Request;

class PesananController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Pesanan::all();
        return view('stakeholder.pesanan.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('stakeholder.pesanan.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'nama_bahan' => 'required',
            'jumlah_bahan' => 'required',
            'harga_satuan' => 'required',
        ]);

        Pesanan::create($data);

        return redirect(route('pesanan.index'))->with('message', 'Success entry new data!');
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
        $data = Pesanan::findOrFail($id);
        return  view('stakeholder.pesanan.edit', compact('data'));
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
        $data = $request->validate([
            'nama_bahan' => 'required',
            'jumlah_bahan' => 'required',
            'harga_satuan' => 'required',
        ]);
        Pesanan::find($id)->update($data);

        return redirect(route('pesanan.index'))->with('message', 'Berhasil Menyunting Data');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Pesanan::find($id)->delete();
        return redirect(route('pesanan.index'))->with('message', 'Berhasil Menghapus Data');
    }
}
