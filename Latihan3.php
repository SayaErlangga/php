<?php
$nama = "Syifa";
$kota = array("Lampung", "Riau", "Jambi", "Bengkulu", "Makassar", "Kendari", "Gorontalo", "Samarinda", "Papua", "Nusa Tenggara Barat");
$array = array();
for ($x = 0; $x < strlen($nama); $x++){
    $carikota = strtolower($nama[$x]);
    for($y = 0; $y < count($kota); $y++){
        $kotasekarang = strtolower($kota[$y]);
        if ($carikota == $kotasekarang[0]){
            array_push($array, $kota[$y]);
        }
    }
}
if(count($array)==0){
    print_r("Anda akan ditempatkan di Jawa Timur");
} else {
    print_r("Anda akan ditempatkan di ".$array[0]);
}
?>