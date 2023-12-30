<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('user.home', [
            'title' => "Ridwan Pigura | Jl. Sagan No.20, Sagan, Caturtunggal, Depok,Sleman, Yogyakarta"
        ]);
    }
}
