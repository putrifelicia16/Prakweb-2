<?php

    // mendefinisikan variabel konstanta
    

    define ('PHI', 3.14);
    

    // Soal 1. Cari nilai dari luas lingkaran ddengan jari jari 8
    // Soal 2. Cari nilai dari keliling lingkaran dengan jari jari 8

    $jari = 8;

    //Rumus luas lingkaran
    $luas = PHI * $jari * $jari;
    //Rumus keliling lingkaran
    $keliling = 2 * PHI * $jari;
     
    echo 'Luas lingkaran dengan jari jari 8 = ' . $luas;
    echo '</br>';
    echo 'Keliling lingkaran dengan jari jari 8 = ' . $keliling;


?>