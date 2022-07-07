<?php
class Penggajihan{
    private $gaji_pokok;
    private $tunjangan;
    private $total_potongan;

    public function Gaji($nama,$jabatan){
        echo "<h3>Gaji</h3>";
        if($jabatan == "Direktur"){
            $this->gaji_pokok = 10000000;
        }else if($jabatan == "Manager"){
            $this->gaji_pokok = 7500000;
        }else if($jabatan == "Karyawan"){
            $this->gaji_pokok = 5000000;
        }else if($jabatan == "OB"){
            $this->gaji_pokok = 2500000;
        }
        echo "Nama Karyawan : ".$nama."<br>";
        echo "Jabatan : ".$jabatan."<br>";
        echo "Gaji Pokok : ".$this->gaji_pokok."<br>";
        echo "<hr>";
    }

    public function Tunjangan($pendidikan){
        echo "<h3>Tunjangan</h3>";
        if($pendidikan == "S1"){
            $this->tunjangan = 1000000;
        }else if($pendidikan == "SMK"){
            $this->tunjangan = 750000;
        }else if($pendidikan == "SMP"){
            $this->tunjangan = 500000;
        }else if($pendidikan == "SD"){
            $this->tunjangan = 250000;
        }
        echo "Pendidikan : ".$pendidikan."<br>";
        echo "Tunjangan Pendidikan : ".$this->tunjangan;
        echo "<hr>";
    }

    public function Potongan($tabungan, $pinjaman){
        echo "<h3>Potongan</h3>";
        $this->total_potongan = $tabungan + $pinjaman;
        echo "Tabungan : ".$tabungan."<br>";
        echo "Pinjaman : ".$pinjaman."<br>";
        echo "Total Potongan : ".$this->total_potongan;
        echo "<hr>";
    }

    public function Total_gaji(){
        echo "<h3>Total Gaji Bersih</h3>";
        $total_gaji = ($this->gaji_pokok + $this->tunjangan) - $this->total_potongan;
        echo "Total Gaji Bersih : ".$total_gaji;
        echo "<hr>";
    }
}
$cetak = new Penggajihan();
echo $cetak->Gaji("Anggarae", "OB");
echo $cetak->Tunjangan("S1");
echo $cetak->Potongan(200000, 50000);
echo $cetak->Total_gaji();
?>