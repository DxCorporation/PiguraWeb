@extends('admin.layout.index')

@section('content')
    <?php
    function tabel($matrik)
    {
        echo '<table class="table">';
        foreach ($matrik as $key => $value) {
            echo '<tr>';
            echo '<td>' . $matrik[$key][0] . '</td>';
            echo '<td>' . $matrik[$key][1] . '</td>';
            echo '<td>' . $matrik[$key][2] . '</td>';
            echo '<td>' . $matrik[$key][3] . '</td>';
            echo '</tr>';
        }
        echo '</table>';
    }
    ?>
    <div class="card">
        <div class="card-body">
            <div class="row">
                <h4>Metode Gauss-Jordan</h4>
                <div class="col-sm-6">
                    <div class="mb-2">
                        <strong>Langkah 1 : Augmented Matrik</strong>
                        {{ tabel($matrix) }}
                    </div>
                    <div class="mb-2">
                        <strong>Langkah 2 : Normalisasi Baris Pertama</strong><br>
                        <small>*Baris pertama dibagi dengan kolom pertamanya yaitu {{ $matrix[0][0] }}</small>
                        {{ tabel($matrix2) }}
                    </div>
                    <div class="mb-2">
                        <strong>Langkah 3 : Kolom Pertama Baris 2 dan 3 diubah menjadi 0</strong><br>
                        <small>*Baris 2 dikurangi hasil perkalian antara baris 2 kolom 1 dan baris 1</small><br>
                        <small>*Baris 3 dikurangi hasil perkalian antara baris 3 kolom 1 dan baris 1</small>
                        {{ tabel($matrix3) }}
                    </div>
                    <div class="mb-2">
                        <strong>Langkah 4 : Normalisasi Baris kedua</strong><br>
                        <small>*Baris kedua dibagi dengan kolom pertamanya yaitu {{ $matrix3[1][1] }}</small>
                        {{ tabel($matrix4) }}
                    </div>
                    <div class="mb-2">
                        <strong>Langkah 5 : Kolom Kedua Baris 1 dan 3 diubah menjadi 0</strong><br>
                        <small>*Baris 1 dikurangi hasil perkalian antara baris 1 kolom 2 dan baris 2</small><br>
                        <small>*Baris 3 dikurangi hasil perkalian antara baris 3 kolom 2 dan baris 2</small>
                        {{ tabel($matrix5) }}
                    </div>
                    <div class="mb-2">
                        <strong>Langkah 6 : Normalisasi Baris ketiga</strong><br>
                        <small>*Baris ketiga dibagi dengan kolom pertamanya yaitu {{ $matrix5[2][2] }}</small>
                        {{ tabel($matrix6) }}
                    </div>
                    <div class="mb-2">
                        <strong>Langkah 7 : Kolom Ketiga Baris 1 dan 2 diubah menjadi 0</strong><br>
                        <small>*Baris 1 dikurangi hasil perkalian antara baris 1 kolom 3 dan baris 3</small><br>
                        <small>*Baris 2 dikurangi hasil perkalian antara baris 2 kolom 3 dan baris 3</small>
                        {{ tabel($matrix7) }}
                    </div>
                    <p>
                        <strong>Hasil Estimasi</strong><br>
                        <label for="">Pigura 6R = {{ $matrix7[0][3] }}</label><br>
                        <label for="">Pigura 8R = {{ $matrix7[1][3] }}</label><br>
                        <label for="">Pigura 10Rs = {{ $matrix7[2][3] }}</label><br>
                    </p>
                </div>

            </div>
        </div>
    </div>
@endsection
