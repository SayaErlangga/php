<?php
    $nama = "Erlangga";
    $panjangNama = strlen($nama);
    if($panjangNama == (date('d')-2)){
        echo "Berhasil";
    } elseif ($panjangNama < (date('d')-2)){
        echo "Sedikit Lagi";
    } else {
        echo "Coba Lagi";
    }
?>