<?php
$anggota = array("Erlangga" => "493922", "Syifa" => "49999", "Sutrisno" => "2919129");
foreach($anggota as $nama => $nim) {
    if($nim % 2 == 0){
        echo "Nama : " . $nama . "<br>";
        echo "NIM : " . $nim . "<br>";
        echo "Bagian : Back-End Developer" . "<br><br>";
    } else {
        echo "Nama : " . $nama . "<br>";
        echo "NIM : " . $nim . "<br>";
        echo "Bagian : Front-End Developer" . "<br><br>";
    }
}
?>