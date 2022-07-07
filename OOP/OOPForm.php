<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form OOP 2</title>
</head>
<body>
<center>
    <form action="" method = "post">
        <h2>Menghitung Luas Bangun Datar</h2>
        <table>
            <tr>
            <td>Masukan Panjang</td>
            <td>:</td>
            <td><input type="number" name = "panjang"></td>
            </tr>
            <tr>
            <td>Masukan Lebar</td>
            <td>:</td>
            <td><input type="number" name = "lebar"></td>
            </tr>
            <tr>
            <td></td>
            <td></td>
            <td><input type= "submit" name = "proses"></td>
            </tr>
        </table>

    </form>
    </center>
</body>
</html>

<?php

if(isset ($_POST[''])){}
if(isset ($_POST['proses'])){
    $panjang = $_POST['panjang'];
    $lebar = $_POST['lebar'];

    class hitungluas{

        public $luas;

        public function luasPersegi($panjang1,$lebar1){
            echo "<center>";
            $this->luas = $panjang1*$lebar1;
            echo "Luas Persegi dengan panjang $panjang1 dan lebar $lebar1 adalah = <b><u>".$this->luas."</u></b>";
        }
    }
    $print = new hitungluas;
    echo $print -> luasPersegi($panjang,$lebar);
}

?>