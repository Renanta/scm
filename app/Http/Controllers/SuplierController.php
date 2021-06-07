<?php

namespace App\Http\Controllers;

use App\Suplier;
use Illuminate\Http\Request;

class SuplierController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Suplier::all();
        return view('suplier.supliers.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('suplier.supliers.create');
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
            'nama_perusahaan' => 'required',
            'nama_toko' => 'required',
            'alamat' => 'required',
            'barang' => 'required',
            'stok' => 'required',
            'harga_satuan' => 'required',
        ]);

        Suplier::create($data);

        return redirect(route('suplier.index'))->with('message', 'Success entry new data!');
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
        $data = Suplier::findOrFail($id);
        return  view('suplier.supliers.edit', compact('data'));
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
            'nama_perusahaan' => 'required',
            'nama_toko' => 'required',
            'alamat' => 'required',
            'barang' => 'required',
            'stok' => 'required',
            'harga_satuan' => 'required',
        ]);
        Suplier::find($id)->update($data);

        return redirect(route('suplier.index'))->with('message', 'Berhasil Menyunting Data');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Suplier::find($id)->delete();
        return redirect(route('suplier.index'))->with('message', 'Berhasil Menghapus Data');
    }
}
