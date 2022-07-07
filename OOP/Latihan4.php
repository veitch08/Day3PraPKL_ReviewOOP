<?php

class BangunDatar{


    protected $luas;
    protected $keliling;
}

class segitiga extends BangunDatar{

    public function LuasSegitiga($alas,$tinggi){
        echo "<h3>Menhitung Luas Segitiga</h3>";
        $this->luas=$alas*$tinggi/2;
        echo "Alas : ".$alas."<br>";
        echo "Tinggi : ".$tinggi."<br>";
        echo "Luas Segitiga : ".$this->luas;
    }

    public function keliling($sisi1,$sisi2,$sisi3){
        echo "<h3>Menhitung Keliling Segitiga</h3>";

        echo "Sisi 1 : ".$sisi1."<br>";
        echo "Sisi 2 : ".$sisi2."<br>";
        echo "Sisi 3 : ".$sisi3."<br>";

        $this->keliling=$sisi1+$sisi2+$sisi3;
        echo "Keliling Segitiga : ".$this->keliling; 
    }
}

$cetak = new segitiga();
echo $cetak->LuasSegitiga(5,10);
echo $cetak->keliling(5,6,7);
echo "<hr>";

?>