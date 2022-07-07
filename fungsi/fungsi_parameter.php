<?php 

// fungsi dengan parameter
function biodata($nama,$jenis_kelamin,$tanggal_lahir,$agama,$alamat,$hobi="tidak ada"){

    echo "Nama : $nama <br>";
    echo "Jenis kelamin : $jenis_kelamin ";
    echo "Tanggal Lahir : $tanggal_lahir <br>";
    echo "Agama : $agama ";
    echo "Alamat : $alamat <br>";
    echo "Hobi : $hobi ";

}

biodata("Rifky","Pria","05-08-2004","Islam","Kp.Bojong");
?>
