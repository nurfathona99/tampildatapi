<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AdditionalCostController;

class AdditionalCost extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = AdditionalCostController::all();
        $id = 0;
         //dd($data);

         return view('uts', compact('data', 'id'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('formuts');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'nama_pengeluaran' => 'required|min:5',
            'keterangan' => 'required',
            'biaya' => 'required',
           // 'tanggal_transaksi' => 'required',
            'nama_konsumen' => 'required',
            'email_konsumen' => 'required',
        ]);

        $create = AdditionalCostController::create($request->all());
        return redirect()->route('uts');
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
        $additional_costs=AdditionalCostController::findOrFail($id);

       // dd($mid_014);

       return view('utsEdit', compact('additional_costs'));
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
       // dd($request->all());
       $additional_costs = AdditionalCostController::findOrFail($id);

       $additional_costs->nama_pengeluaran = $request->nama_pengeluaran;
       $additional_costs->keterangan = $request->keterangan;
       $additional_costs->biaya = $request->biaya;
       $additional_costs->tanggal_transaksi = $request->tanggal_transaksi;
       $additional_costs->nama_konsumen = $request->nama_konsumen;
       $additional_costs->email_konsumen = $request->email_konsumen;

       $additional_costs->save();

       if ($additional_costs) {
        return redirect()->route('uts');
       }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $additional_costs = AdditionalCostController::findOrFail($id);
        $additional_costs->delete();

        if ($additional_costs) {
            return redirect()->route('uts');
           }

    }
}
