<?php

class manusia{

    function biodata($nama,$jk,$tl,$ag,$al){
        echo "Nama : $nama<br>";
        echo "Jenis Kelamin : $jk<br>";
        echo "Tanggal Lahir : $tl<br>";
        echo "Agama : $ag<br>";
        echo "Alamat : $al";
    }
}

$cetak = new manusia();

echo $cetak->biodata("Rifky","Pria","5 Agustus","Islam","Bojong");
?>