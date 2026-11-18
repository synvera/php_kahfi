<?php

    echo "<h2>Hasil Perhitungan</h2>";

    $nilai_a = $_POST['angka1'];
    $nilai_b = $_POST['angka2'];

    $hasil = $nilai_a + $nilai_b;

    echo "<p>$nilai_a ditambah $nilai_b sama dengan <b>$hasil</b></p>";

    echo "<br><a href='kalkulator.php'>Hitung Lagi</a>";

?>