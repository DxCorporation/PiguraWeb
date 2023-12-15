<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class EstimasiController extends Controller
{
    public function index()
    {
        $data = [
            'kayu'  => '',
            'triplek' => '',
            'kaca'  => '',
            'p6r'   => '',
            'p8r'   => '',
            'p10rs' => '',
        ];
        return view('user.estimasi', $data);
    }

    public function hasil(Request $request)
    {
        // Mengambil input dari pengguna
        $kayu = intval($request->input('kayu'));
        $triplek = intval($request->input('triplek'));
        $kaca = intval($request->input('kaca'));

        // Membuat laravel collection untuk menyimpan koefisien persamaan
        $persamaan1 = collect([80, 100, 130, $kayu]);
        $persamaan2 = collect([300, 500, 875, $triplek]);
        $persamaan3 = collect([320, 520, 900, $kaca]);

        $normalisasi1 = $persamaan1->map(function ($item) use ($persamaan1) {
            return $item / $persamaan1[0];
        });

        $langkah2 = $persamaan2->map(function ($item, $key) use ($normalisasi1, $persamaan2) {
            return $item - $normalisasi1[$key] * $persamaan2[0];
        });

        $langkah3 = $persamaan3->map(function ($item, $key) use ($normalisasi1, $persamaan3) {
            return $item - $normalisasi1[$key] * $persamaan3[0];
        });

        $normalisasi2 = $langkah2->map(function ($item) use ($langkah2) {
            return $item / $langkah2[1];
        });

        $langkah5 = $normalisasi1->map(function ($item, $key) use ($normalisasi2, $normalisasi1) {
            return $item - $normalisasi2[$key] * $normalisasi1[1];
        });


        $langkah6 = $langkah3->map(function ($item, $key) use ($normalisasi2, $langkah3) {
            return $item - $normalisasi2[$key] * $langkah3[1];
        });

        $normalisasi3 = $langkah6->map(function ($item) use ($langkah6) {
            return $item / $langkah6[2];
        });

        $langkah7 = $langkah5->map(function ($item, $key) use ($normalisasi3, $langkah5) {
            return $item - $normalisasi3[$key] * $langkah5[2];
        });

        $langkah8 = $normalisasi2->map(function ($item, $key) use ($normalisasi3, $normalisasi2) {
            return $item - $normalisasi3[$key] * $normalisasi2[2];
        });

        $matrix = collect([$langkah7, $langkah8, $normalisasi3]);

        $data = [
            'kayu'  => $kayu,
            'triplek' => $triplek,
            'kaca'  => $kaca,
            'p6r'   => $matrix[0][3],
            'p8r'   => $matrix[1][3],
            'p10rs' => $matrix[2][3],
        ];

        return view('user.estimasi', $data);
    }
}
