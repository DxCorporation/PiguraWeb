<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Bahan;
use App\Models\Formula;
use App\Models\FormulaDetail;
use App\Models\Produk;
use Illuminate\Http\Request;
use Illuminate\Support\Collection;

class EstimasiController extends Controller
{
    public function index()
    {
        $data = [
            'formula'   => Formula::latest()->get(),
            'detail'    => FormulaDetail::latest()->get(),
            'bahan' => Bahan::latest()->get(),
        ];
        return view('admin.estimasi.index', $data);
    }

    public function bahan()
    {
        $data = [
            'bahan' => Bahan::latest()->get(),
            'produk'    => Produk::latest()->get(),
            'formula'   => Formula::latest()->get(),
            'detail'    => FormulaDetail::latest()->get(),
        ];
        return view('admin.estimasi.bahan_formula', $data);
    }

    public function bahanCreate(Request $request)
    {
        Bahan::create([
            'nama'  => $request->nama
        ]);

        return back()->with('success', 'Bahan Berhasil Ditambah');
    }

    public function bahanHapus(string $id)
    {
        Bahan::find($id)->delete();
        return back()->with('success', 'Bahan Berhasil Dihapus');
    }

    public function formulaCreate(Request $request)
    {
        $produkId = $request->produk_id;

        $formula = Formula::create([
            'produk_id' => $produkId,
        ]);

        foreach ($request->bahan as $bahanId => $qty) {
            if ($qty != null) {
                FormulaDetail::create([
                    'formula_id' => $formula->id,
                    'bahan_id'   => $request->idBahan[$bahanId],
                    'qty'        => $qty,
                ]);
            }
        }
        return back()->with('success', 'Formula Berhasil Ditambah');
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

        // Membuat matriks dari laravel collection
        $matrix = collect([$persamaan1, $persamaan2, $persamaan3]);

        $normalisasi1 = $persamaan1->map(function ($item) use ($persamaan1) {
            return $item / $persamaan1[0];
        });

        $matrix2 = collect([$normalisasi1, $persamaan2, $persamaan3]);

        $langkah2 = $persamaan2->map(function ($item, $key) use ($normalisasi1, $persamaan2) {
            return $item - $normalisasi1[$key] * $persamaan2[0];
        });

        $langkah3 = $persamaan3->map(function ($item, $key) use ($normalisasi1, $persamaan3) {
            return $item - $normalisasi1[$key] * $persamaan3[0];
        });

        $matrix3 = collect([$normalisasi1, $langkah2, $langkah3]);

        $normalisasi2 = $langkah2->map(function ($item) use ($langkah2) {
            return $item / $langkah2[1];
        });

        $matrix4 = collect([$normalisasi1, $normalisasi2, $langkah3]);

        $langkah5 = $normalisasi1->map(function ($item, $key) use ($normalisasi2, $normalisasi1) {
            return $item - $normalisasi2[$key] * $normalisasi1[1];
        });


        $langkah6 = $langkah3->map(function ($item, $key) use ($normalisasi2, $langkah3) {
            return $item - $normalisasi2[$key] * $langkah3[1];
        });

        $matrix5 = collect([$langkah5, $normalisasi2, $langkah6]);

        $normalisasi3 = $langkah6->map(function ($item) use ($langkah6) {
            return $item / $langkah6[2];
        });

        $matrix6 = collect([$langkah5, $normalisasi2, $normalisasi3]);

        $langkah7 = $langkah5->map(function ($item, $key) use ($normalisasi3, $langkah5) {
            return $item - $normalisasi3[$key] * $langkah5[2];
        });

        $langkah8 = $normalisasi2->map(function ($item, $key) use ($normalisasi3, $normalisasi2) {
            return $item - $normalisasi3[$key] * $normalisasi2[2];
        });

        $matrix7 = collect([$langkah7, $langkah8, $normalisasi3]);

        $gauss = collect([$normalisasi1, $normalisasi2, $normalisasi3]);
        $gauss8r = $gauss[1][3] - $gauss[1][2] * $gauss[2][3];
        $gauss6r = $gauss[0][3] - $gauss[0][1] * $gauss8r - $gauss[0][2] * $gauss[2][3];

        $data = [
            'matrix' => $matrix,
            'matrix2' => $matrix2,
            'matrix3' => $matrix3,
            'matrix4' => $matrix4,
            'matrix5' => $matrix5,
            'matrix6' => $matrix6,
            'matrix7' => $matrix7,
            'gauss'   => $gauss,
            'gauss6r' => $gauss6r,
            'normalisasi' => $normalisasi3,
        ];

        return view('admin.estimasi.hasil', $data);
    }
}
