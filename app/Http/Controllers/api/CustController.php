<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Customer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class CustController extends Controller
{
 public function index(){
    $data=Customer::all();
    return response()->json($data,200);
 }

 public function show($id) {
    $data = Customer::where('id', $id)->first();
    if (empty($data)){
        return response()->json([
            'pesan' => 'Data Tidak Ditemukan',
            'data' => null
         ], 404);
    }
    return response()->json([
        'pesan' => 'Data Ditemukan',
        'data' => $data
     ], 200);
}

 public function store(Request $request)
 {
    $validate = Validator::make($request->all(), [
        'name' => 'required|min:5',
        'phone' => 'required',
        'email' => 'required',
        'address' => 'required',

    ]);

    if ($validate->fails()){
        return $validate->errors();
    }

    $data=Customer::created($request->all());
     return response()->json([
        'pesan' => 'Data Berhasil Disimpan',
        'data' => $data
     ], 201);

    }
}
