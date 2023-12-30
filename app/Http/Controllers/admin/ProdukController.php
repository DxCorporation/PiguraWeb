<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Produk;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Yajra\DataTables\Facades\DataTables;
use Illuminate\Support\Str;

class ProdukController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    public function __construct()
    {
        function rupiah($angka)
        {
            if ($angka != null) {
                $hasil_rupiah = "Rp " . number_format($angka, 2, ',', '.');
                return $hasil_rupiah;
            }
        }
    }

    public function index()
    {

        if (request()->ajax()) {
            $produk = Produk::with('Category')->latest()->get();

            return DataTables::of($produk)
                ->addIndexColumn()
                ->addColumn('category_id', function ($produk) {
                    return $produk->Category->nama;
                })
                ->addColumn('harga', function ($produk) {
                    return rupiah($produk->harga);
                })
                ->addColumn('img', function ($produk) {
                    return '
                        <img src="' . asset("storage/back/" . $produk->img) . '" alt="" width="100px">
                    ';
                })
                ->addColumn('button', function ($produk) {
                    return '
                        <div class="text-center">
                            <a href="' . route('produk.show', ['produk' => $produk->id]) . '" class="btn btn-secondary btn-sm" 
                            style="margin-right: 3px">Detail</a>
                            <a href="' . route('produk.edit', ['produk' => $produk->id]) . '" class="btn btn-warning btn-sm"
                            style="margin-right: 3px">Edit</a>
                            <button type="button" onclick="deleteProduk(this)" data-id="' . $produk->id . '" class="btn btn-danger btn-sm">delete</button>
                        </div>
                    ';
                })
                ->rawColumns(['category_id', 'img', 'button', 'harga'])
                ->make();
        }
        return view('admin.produk.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.produk.create', [
            'categories'    => Category::get()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'category_id'         => 'required',
            'nama'         => 'required',
            'harga'          => 'required',
            'desc'          => 'required',
            'img'           => ['required', 'image', 'file', 'max:3024'],
        ]);

        $file = $request->file('img');
        $fileName = uniqid() . '.' . $file->getClientOriginalExtension();
        $file->storeAs('public/back/', $fileName);

        $data['img'] = $fileName;
        $data['slug'] = Str::slug($data['nama']);
        Produk::create($data);

        return redirect(url('admin/produk'))->with('success', 'Produk Berhasil Ditambah');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $produks = Produk::with('Category')->where('id', $id)->first();

        return view('admin.produk.detail', [
            'produks'   => $produks,
            'harga'     => rupiah($produks->harga)
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $produk = Produk::with('Category')->where('id', $id)->first();
        return view('admin.produk.edit', [
            'produk'    => $produk,
            'categories'    => Category::latest()->get()
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data = $request->validate([
            'nama'         => 'required',
            'category_id'         => 'required',
            'harga'          => 'required',
            'desc'          => 'required',
            'img'           => ['nullable', 'image', 'file', 'max:3024'],
        ]);
        if ($request->hasFile('img')) {
            $file = $request->file('img');
            $fileName = uniqid() . '.' . $file->getClientOriginalExtension();
            $file->storeAs('public/back/', $fileName);

            Storage::delete(['public/back/' . $request->imgLama]);

            $data['img'] = $fileName;
        } else {
            $data['img'] = $request->imgLama;
        }
        $data['slug'] = Str::slug($data['nama']);

        Produk::find($id)->update($data);

        return redirect(url('admin/produk'))->with('success', 'Data Produk Berhasil Diupdate!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $data = Produk::find($id);
        Storage::delete(['public/back/' . $data->img]);
        $data->delete();
        return response()->json([
            'message'   => 'Data Produk Berhasil Dihapus'
        ]);
    }
}
