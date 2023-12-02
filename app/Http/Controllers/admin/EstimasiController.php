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
        $formula = Formula::latest()->get();
        $bahan = Bahan::latest()->get();

        $input_formula = array();
        foreach ($formula as $value) {
            array_push($input_formula, $request->input($value->id));
        }

        $x = array();
        $y = array();
        $z = array();

        for ($i = 0; $i < Formula::count(); $i++) {
            if ($input_formula[$i] != null) {
                $ar_bahan = null;
                $ar_bahan = FormulaDetail::where('formula_id', $input_formula[$i])->get();
                foreach ($ar_bahan as $ar) {
                    if ($ar->formula_id = 4) {
                        array_push($x, $ar->qty);
                    }
                    if ($ar->formula_id = 5) {
                        array_push($y, $ar->qty);
                    }
                    if ($ar->formula_id = 6) {
                        array_push($z, $ar->qty);
                    }
                }
            }
        }

        return $x;
    }
}
