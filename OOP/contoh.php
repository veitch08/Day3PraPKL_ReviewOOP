<?php

// membuat class
class kucing{
    // properti(atribut)

        var $jenis;
        var $warna = "orange";

     // method/function

        function makan(){
            echo "kucing suka makan whiskas";
        }
        function minum(){
            echo "Kucing minumnya Al-ma'soem";
        }
}

// objek
// instansiasi
$cetak = new kucing();
// memanggil method
echo $cetak->makan();
echo "<br>";
echo $cetak->minum();
echo "<br>";
// memanggil property
echo $cetak->warna;
?>