<?php

class bangundatar{

    public $luas; 

    public function persegi_panjang($p,$l){
        $this->luas = $p*$l;

    echo "<h3>Menghitung Luas Persegi Panjang</h3>";
    echo "Panjang : $p<br>";
    echo "Lebar : $l<br>";
    echo "Luas Persegi Panjang : ".$this->luas;
    echo "<br>";
   }
   
   public function persegi($s){
    $this->luas = $s*$s;

    echo "<h3>Menghitung Luas Persegi</h3>";
    echo "Sisi : $s<br>";
    echo "Luas Persegi : ".$this->luas;
    echo "<br>";
   }
   public function lingkaran($phi,$r){
    $this->luas = $phi*$r*$r;

    echo "<h3>Menghitung Luas Lingkaran</h3>";
    echo "Phi : $phi<br>";
    echo "Jari-Jari : $r<br>"; 
    echo "Luas lingkaran : ".$this->luas;
    echo "<br>";
   }
   public function segitiga($a,$t){
    $this->luas = 0.5*$a*$t;

    echo "<h3>Menghitung Luas Segitiga</h3>";
    echo "Alas : $a<br>";
    echo "Tinggi : $t<br>"; 
    echo "Luas Segitiga : ".$this->luas;
    echo "<br>";
   }
   public function trapesium($a1,$a2,$t){
    $this->luas = (($a1+$a2)/2)*$t;

    echo "<h3>Menghitung Luas Trapesium</h3>";
    echo "Alas 1: $a1<br>";
    echo "Alas 2: $a2<br>";
    echo "Tinggi : $t<br>"; 
    echo "Luas Trapesium : ".$this->luas;
    echo "<br>";
   }
}

$cetak = new bangundatar();

$cetak->persegi_panjang(6,7);
$cetak->persegi(6);
$cetak->lingkaran(3.14,6);
$cetak->segitiga(8,16);
$cetak->trapesium(8,8,9);


?>