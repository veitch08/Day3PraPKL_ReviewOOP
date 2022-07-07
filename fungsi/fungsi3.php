<?php

function datadiri($nama,$jenis_kelamin){
    echo "nama : $nama <br>";
    echo "Jenis kelamin : $jenis_kelamin<br>";
}

function kelas($jurusan,$kelas){
    echo datadiri("rifky","pria");
    echo "Jurusan : $jurusan<br>";
    echo "Kelas : $kelas";
}

kelas("Rekayasa Perangkat Lunak","11 RPL 1");
?>