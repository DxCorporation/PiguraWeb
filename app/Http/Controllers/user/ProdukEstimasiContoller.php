<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Produk;
use Illuminate\Http\Request;

class ProdukEstimasiContoller extends Controller
{
    public function index()
    {
        $data = Produk::with('Category')->get();
        return view('user.productestimasi', [
            'data' => $data,
            'title' => "Produk Ridwan Pigura",
            'categories' => Category::get()
        ]);
    }
}
