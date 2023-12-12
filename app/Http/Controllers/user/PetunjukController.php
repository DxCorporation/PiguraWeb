<?php

namespace App\Http\Controllers\user;


use App\Http\Controllers\Controller;
use App\Models\Produk;
use Illuminate\Http\Request;

class PetunjukController extends Controller
{
    public function index()
    {
        
        return view('user.petunjuk');
    }  
}