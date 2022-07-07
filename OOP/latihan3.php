<?php

class gaji{

    public $nama;
    private $gaji_pokok;
    public $pendidikan;
    private $tunjangan_pendidikan;
    private $TotalPotongan;

    public function gaji_pokok($nama,$jabatan){      
        ?><h3>Gaji Pokok</h3><?php
        if ($jabatan == "ob"){
            $this->gaji_pokok = 2500000;
        }else if ($jabatan == "karyawan"){
            $this->gaji_pokok = 5000000;
        }else if($jabatan == "manager"){
            $this->gaji_pokok = 7500000;
        }else if ($jabatan == "direktur"){
            $this->gaji_pokok = 10000000;
        }
        echo "Nama Karyawan : ".$this->nama = $nama."<br>";
        echo "Jabatan : ".$jabatan."<br>";
        echo "Gaji Pokok : ".$this->gaji_pokok;
    }
    public function tunjangan_pendidikan($pendidikan){
        ?><h3>Tunjangan</h3><?php
        
        if ($pendidikan == "SD"){
            $this->tunjangan_pendidikan = 250000;
        }else if ($pendidikan == "SMP"){
            $this->tunjangan_pendidikan = 500000;
        }else if($this->pendidikan == "SMA"){
            $this->tunjangan_pendidikan = 750000;
        }else if ($pendidikan == "S1"){
            $this->tunjangan_pendidikan = 1000000;
        }
        echo "Pendidikan : ".$pendidikan."<br>";
        echo "Tunjangan Pendidikan: ".$this->tunjangan_pendidikan."<br>";
    }
    public function potongan($tabungan,$pinjaman){
        ?><h3>Potongan</h3><?php
        $this->TotalPotongan = $tabungan+$pinjaman;
        echo "Tabungan : ".$tabungan."<br>";
        echo "Pinjaman : ".$pinjaman."<br>";
        echo "Total Potongan : ".$this->TotalPotongan;
    }
    public function total_gaji(){
        ?><h3>Total Gaji Bersih</h3><?php
        $TotalGaji = ($this->gaji_pokok + $this->tunjangan_pendidikan) - $this->TotalPotongan;
        echo "Total Gaji : ". $TotalGaji;
    }
    
}

$cetak = new gaji();

echo $cetak->gaji_pokok("Rifky","direktur");
echo "<hr>";
echo $cetak->tunjangan_pendidikan("S1");
echo "<hr>";
echo $cetak->potongan(50000,25000);
echo "<hr>";
echo $cetak->total_gaji();


?>