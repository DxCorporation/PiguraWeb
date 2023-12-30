<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Produk;
use App\Models\Visitor;
use Carbon\Carbon;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        date_default_timezone_set('Asia/Jakarta');

        // Mendapatkan tanggal hari ini
        $today = date('Y-m-d');
        $todayTimestamp = strtotime($today);
        $sundayTimestamp = strtotime('last Sunday', $todayTimestamp);
        $endWeek = date('Y-m-d', $sundayTimestamp + (6 * 24 * 60 * 60));
        $pToday = Visitor::where('date', $today)->count();
        $pWeek = Visitor::whereBetween('date', [$sundayTimestamp, $endWeek])->count();

        // Mendapatkan tanggal 1 bulan ini
        $tanggalAwal = date('Y-m-01');

        // Mendapatkan tanggal terakhir bulan ini
        $tanggalAkhir = date('Y-m-t');

        $pMonth = Visitor::whereBetween('date', [$tanggalAwal, $tanggalAkhir])->count();

        // Mendapatkan tanggal hari Minggu (minggu ini dimulai dari hari Minggu)
        $sundayTimestamp = strtotime('last Sunday', $todayTimestamp);

        // Menggunakan koleksi Laravel
        $labelWeek = collect();
        $dataWeek = collect();

        // Loop untuk menambahkan tanggal dari hari Minggu hingga hari Sabtu

        for ($i = 0; $i < 7; $i++) {
            $currentDate = date('Y-m-d', $sundayTimestamp + ($i * 24 * 60 * 60));
            $labelDate = date('d/m', $sundayTimestamp + ($i * 24 * 60 * 60));
            $labelWeek->push($labelDate);

            $query = Visitor::where('date', $currentDate)->count();
            $dataWeek->push($query);
        }



        $data = [
            'labelWeek' => $labelWeek->all(),
            'dataWeek'  => $dataWeek->all(),
            'pToday'    => $pToday,
            'pWeek'     => $pWeek,
            'pMonth'    => $pMonth,
            'totalProduk' => Produk::count()
        ];
        return view('admin.dashboard.index', $data);
    }
    public function bulan()
    {
        date_default_timezone_set('Asia/Jakarta');

        // Mendapatkan tanggal hari ini
        $today = date('Y-m-d');
        $todayTimestamp = strtotime($today);
        $sundayTimestamp = strtotime('last Sunday', $todayTimestamp);
        $endWeek = date('Y-m-d', $sundayTimestamp + (6 * 24 * 60 * 60));
        $pToday = Visitor::where('date', $today)->count();
        $pWeek = Visitor::whereBetween('date', [$sundayTimestamp, $endWeek])->count();

        // Mendapatkan tanggal 1 bulan ini
        $tanggalAwal = date('Y-m-01');

        // Mendapatkan tanggal terakhir bulan ini
        $tanggalAkhir = date('Y-m-t');

        $pMonth = Visitor::whereBetween('date', [$tanggalAwal, $tanggalAkhir])->count();

        // Mendapatkan tanggal hari Minggu (minggu ini dimulai dari hari Minggu)
        $sundayTimestamp = strtotime('last Sunday', $todayTimestamp);

        // Menggunakan koleksi Laravel
        $labelWeek = collect();
        $dataWeek = collect();

        // Loop untuk menambahkan tanggal dari hari Minggu hingga hari Sabtu

        for ($i = 0; $i < date('t'); $i++) {
            $currentDateTimestamp = strtotime($tanggalAwal . " + $i day");

            $currentDate = date('Y-m-d', $currentDateTimestamp);
            $labelDate = date('d', $currentDateTimestamp);

            $labelWeek->push($labelDate);

            $query = Visitor::where('date', $currentDate)->count();
            $dataWeek->push($query);
        }


        $data = [
            'labelWeek' => $labelWeek->all(),
            'dataWeek'  => $dataWeek->all(),
            'pToday'    => $pToday,
            'pWeek'     => $pWeek,
            'pMonth'    => $pMonth,
            'totalProduk' => Produk::count()
        ];
        return view('admin.dashboard.bulan', $data);
    }

    public function tahun()
    {
        date_default_timezone_set('Asia/Jakarta');

        // Mendapatkan tanggal hari ini
        $today = date('Y-m-d');
        $todayTimestamp = strtotime($today);
        $sundayTimestamp = strtotime('last Sunday', $todayTimestamp);
        $endWeek = date('Y-m-d', $sundayTimestamp + (6 * 24 * 60 * 60));
        $pToday = Visitor::where('date', $today)->count();
        $pWeek = Visitor::whereBetween('date', [$sundayTimestamp, $endWeek])->count();

        // Mendapatkan tanggal 1 bulan ini
        $tanggalAwal = date('Y-m-01');

        // Mendapatkan tanggal terakhir bulan ini
        $tanggalAkhir = date('Y-m-t');

        $pMonth = Visitor::whereBetween('date', [$tanggalAwal, $tanggalAkhir])->count();

        // Mendapatkan tanggal hari Minggu (minggu ini dimulai dari hari Minggu)
        $sundayTimestamp = strtotime('last Sunday', $todayTimestamp);

        $tanggalAwalJanuari = date('Y-01');

        // Menggunakan koleksi Laravel
        $labelWeek = collect();
        $dataWeek = collect();

        // Loop untuk menambahkan tanggal dari bulan Januari hingga bulan Desember
        for ($i = 0; $i < 12; $i++) {
            $currentDate = strtotime($tanggalAwalJanuari . " +$i months");
            $labelDate = date('M', $currentDate);
            $labelWeek->push($labelDate);

            // Menggunakan whereMonth untuk mengambil data berdasarkan bulan
            $query = Visitor::whereMonth('date', date('m', $currentDate))->count();
            $dataWeek->push($query);
        }



        $data = [
            'labelWeek' => $labelWeek->all(),
            'dataWeek'  => $dataWeek->all(),
            'pToday'    => $pToday,
            'pWeek'     => $pWeek,
            'pMonth'    => $pMonth,
            'totalProduk' => Produk::count()
        ];
        return view('admin.dashboard.tahun', $data);
    }
}
