<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use App\Models\Visitor;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(Request $request)
    {
        date_default_timezone_set('Asia/Jakarta');
        $ip = $request->ip();
        $date  = date("Y-m-d");
        $waktu = time();
        $timeinsert = date("Y-m-d H:i:s");

        $cek = Visitor::where('ip', $ip)->where('date', $date)->first();

        if ($cek == null) {
            Visitor::create([
                'ip'    => $ip,
                'date'  => $date,
                'hits'  => 1,
                'online' => $waktu,
                'time'  => $timeinsert
            ]);
        } else {
            Visitor::find($cek->id)->update([
                'hits'  => $cek->hits + 1,
                'online' => $waktu
            ]);
        }

        return view('user.home', [
            'title' => "Ridwan Pigura | Jl. Sagan No.20, Sagan, Caturtunggal, Depok,Sleman, Yogyakarta"
        ]);
    }
}
