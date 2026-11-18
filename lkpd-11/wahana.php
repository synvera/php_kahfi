<?php
    echo "<h2>Pengecekan Wahana Roller Coaster</h2>";

    $umur = 15;        // Silakan ubah-ubah angka ini nanti
    $tinggi_cm = 140;  // Silakan ubah-ubah angka ini nanti

    // Lengkapi syarat if menggunakan logika AND (&&)
    if ($umur >= 12 && $tinggi_cm >= 145) {
        echo "<h3 style='color: green;'>Selamat, Anda Boleh Naik Wahana!</h3>";
    } else {
        echo "<h3 style='color: red;'>Maaf, Syarat Tidak Terpenuhi.</h3>";
    }
?>