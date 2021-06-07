<?php

namespace App\Http\Controllers;

use App\StockToko;
use Illuminate\Http\Request;

class StockTokoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = StockToko::all();
        return view('suplier.stockToko.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('suplier.stockToko.create');
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
            'harga_satuan' => 'required',
            'jumlah_stok' => 'required',
            'keterangan' => 'required'

        ]);

        StockToko::create($data);

        return redirect(route('stockToko.index'))->with('message', 'Success entry new data!');
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
        $data = StockToko::findOrFail($id);
        return  view('suplier.stockToko.edit', compact('data'));
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
            'harga_satuan' => 'required',
            'jumlah_stok' => 'required',
            'keterangan' => 'required'
        ]);
        StockToko::find($id)->update($data);

        return redirect(route('stockToko.index'))->with('message', 'Berhasil Menyunting Data');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        StockToko::find($id)->delete();
        return redirect(route('stockToko.index'))->with('message', 'Berhasil Menghapus Data');
    }
}
