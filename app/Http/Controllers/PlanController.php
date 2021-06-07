<?php

namespace App\Http\Controllers;

use App\Plan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PlanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Plan::all();
        return view('contractor.plans.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('contractor.plans.create');
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
            'nama_proyek' => 'required',
            'koor' => 'required',
            'nama_bahan' => 'required',
            'banyak_bahan' => 'required',
            'harga_satuan' => 'required',
            'nama_suplier' => 'required',
            'alamat_suplier' => 'required',
        ]);

        Plan::create($data);

        return redirect(route('plan.index'))->with('message', 'Success entry new data!');
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
        $data = Plan::findOrFail($id);
        return  view('contractor.plans.edit', compact('data'));
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
            'nama_proyek' => 'required',
            'koor' => 'required',
            'nama_bahan' => 'required',
            'banyak_bahan' => 'required',
            'harga_satuan' => 'required',
            'nama_suplier' => 'required',
            'alamat_suplier' => 'required',
        ]);
        Plan::find($id)->update($data);

        return redirect(route('plan.index'))->with('message', 'Berhasil Menyunting Data');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Plan::find($id)->delete();
        return redirect(route('plan.index'))->with('message', 'Berhasil Menghapus Data');
    }
}
