<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ProductController extends Controller
{
 public function index(){
    $data=Product::all();
    return response()->json($data,200);
 }

 public function show($id) {
    $data = Product::where('id', $id)->first();
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
        'description' => 'required',
        'price' => 'required',
        'category_id' => 'required',

    ]);

    if ($validate->fails()){
        return $validate->errors();
    }

    $data=Product::created($request->all());
     return response()->json([
        'pesan' => 'Data Berhasil Disimpan',
        'data' => $data
     ], 201);

    }
}
