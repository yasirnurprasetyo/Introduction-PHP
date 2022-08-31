<?php
    echo "Intro PHP <br>";

    $nim = "1723912923";
    $nama = "yasir";
    $umur = 20;
    $nilai = 90.8;
    $status = false;

    echo "Nim : $nim <br>";
    echo "Nama : $nama <br>";
    print "Umur : $umur <br>";
    printf("Nilai : %.3f <br>",$nilai);
    if ($status) 
        echo "Status : Mahasiswa Aktif <br>";
    else
        echo "Status : Mahasiswa Tidak Aktif <br>";

    echo "=========================== <br>";

    $gaji = 5000000;
    $pajak = 0.5;
    $p_penghasilan = $gaji - ($gaji*$pajak);

    echo "Gaji saya sebelum kena pajak = Rp. $gaji <br>";
    echo "Gaji saya sesudah kena pajak = Rp. $p_penghasilan";
?>