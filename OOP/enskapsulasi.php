<?php

class manusia{

    protected $nama = "veitch";
    public $ras = "";

    public function tampilkan(){
        echo "Hello ".$this->nama;
    }
}

$cetak = new manusia();

echo $cetak->tampilkan();


?>