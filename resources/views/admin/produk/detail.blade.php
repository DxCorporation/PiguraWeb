@extends('admin.layout.index')

@section('content')
    <div style="min-height: 80vh">
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
            <h3><a href="{{ url('/admin/produk') }}">Produk</a> / Detail</h3>

        </div>
        <div class="card p-3 mb-3">
            <table class="table table-bordered table-striped mb-3">
                <tr>
                    <th style="width: 20%">Nama</th>
                    <td>{{ $produks->nama }}</td>
                </tr>
                <tr>
                    <th>Gambar</th>
                    <td><img src="{{ asset('storage/back/' . $produks->img) }}" alt="" width="150px"></td>
                </tr>
                <tr>
                    <th>Deskripsi</th>
                    <td>
                        {!! $produks->desc !!}
                    </td>
                </tr>
                <tr>
                    <th>Harga</th>
                    <td>{{ $harga }}</td>
                </tr>
                <tr>
                    <th>Tanggal Upload</th>
                    <td>{{ date('d M Y | h : m : s', strtotime($produks->created_at)) }}</td>
                </tr>
                <tr>
                    <th>Terakhir Update</th>
                    <td>{{ date('d M Y | h : m : s', strtotime($produks->updated_at)) }}</td>
                </tr>
            </table>
            <div class="d-flex justify-content-end">
                <a class="btn btn-secondary" href="{{ url('/admin/produk') }}">Kembali</a>
            </div>
        </div>
    </div>
@endsection
