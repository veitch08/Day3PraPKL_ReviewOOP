<?php

class bangunDatar{

    function persegi($sisi){
        $luas = $sisi*$sisi;
        echo "<h2>Menghitung Luas Persegi</h2>";
        echo "Luas persegi dengan sisi $sisi = $luas<hr>";
    }
    function persegiPanjang($panjang,$lebar){
        $luasPersegiPanjang = $panjang*$lebar;
        echo "<h2>Menghtung Luas Persegi Panjang</h2>";
        echo "Luas persegi panjang dengan panjang $panjang dan lebar $lebar = $luasPersegiPanjang<hr>";
    }
    function lingkaran($phi,$r){
        $luaslingkaran = $phi*$r*2;
        echo "<h2>Menghtung Luas Lingkaran</h2>";
        echo "Luas lingakran denga jari jari $r = $luaslingkaran<hr>";
    }
    function Segitiga($alas,$tinggi){
        $luasSegitiga = 0.5*$alas*$tinggi;
        echo "<h2>Menghtung Luas Segitiga</h2>";
        echo "Luas segitiga dengan alas $alas dan tinggi $tinggi = $luasSegitiga<hr>";
    }
}

$cetak = new bangunDatar;

echo $cetak -> persegi(4);
echo $cetak -> persegiPanjang(8,4);
echo $cetak -> lingkaran(3.14,4);
echo $cetak -> Segitiga(6,10);
?>