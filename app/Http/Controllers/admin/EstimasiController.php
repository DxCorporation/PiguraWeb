<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Bahan;
use App\Models\Formula;
use App\Models\FormulaDetail;
use App\Models\Produk;
use Illuminate\Http\Request;

class EstimasiController extends Controller
{
    public function index()
    {
        return view('admin.estimasi.index');
    }

    public function bahan()
    {
        $data = [
            'bahan' => Bahan::latest()->get(),
            'produk'    => Produk::latest()->get(),
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
}
