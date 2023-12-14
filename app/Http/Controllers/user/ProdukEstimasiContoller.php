<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use App\Models\Produk;
use Illuminate\Http\Request;

class ProdukEstimasiContoller extends Controller
{
    public function index()
    {
        $data = Produk::all();
        return view('user.productestimasi',['data' => $data]);
    }  


}