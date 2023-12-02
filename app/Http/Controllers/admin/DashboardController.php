<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        return view('admin.dashboard.index');
    }

    public function tes()
    {
        function gaussJordan($matrix)
        {
            $rows = count($matrix);
            $cols = count($matrix[0]);

            // Metode Gauss
            for ($i = 0; $i < $rows; $i++) {
                // Membuat diagonal utama menjadi 1
                $divisor = $matrix[$i][$i];
                for ($j = $i; $j < $cols; $j++) {
                    $matrix[$i][$j] /= $divisor;
                }

                // Mengurangkan baris-baris di bawahnya
                for ($k = 0; $k < $rows; $k++) {
                    if ($k != $i) {
                        $factor = $matrix[$k][$i];
                        for ($j = $i; $j < $cols; $j++) {
                            $matrix[$k][$j] -= $factor * $matrix[$i][$j];
                        }
                    }
                }
            }

            return $matrix;
        }

        function printSolution($matrix)
        {
            $rows = count($matrix);
            $cols = count($matrix[0]);

            echo "Solusi dari sistem persamaan adalah:\n";
            for ($i = 0; $i < $rows; $i++) {
                echo "x$i = " . round($matrix[$i][$cols - 1], 2) . "\n";
            }
        }

        // Contoh pemanggilan fungsi dengan sistem persamaan linier 3 variabel
        $coefficients = array(
            array(2, -1, 3, 5),
            array(1, 1, 1, 8),
            array(3, 2, 1, 13),
        );

        $result = gaussJordan($coefficients);


        return printSolution($result);
    }
}
