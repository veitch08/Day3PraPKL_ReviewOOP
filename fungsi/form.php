<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Function</title>
</head>
<body>

 
        <h2 align = "center">BIODATA</h2>
    <table align = "center">
    <form action="" method = "post">
        <tr>
            <td>Nama</td>
            <td>:</td>
            <td><input type="text" name ="nama" value = ""></td>
        </tr>
        <tr>
            <td>Tanggal Lahir</td>
            <td>:</td>
            <td><input type="date" name = "tl" value = ""></td>
        </tr>
        <tr>
            <td>Jenis Kelamin</td>
            <td>:</td>
            <td><input type="radio" name = "jk" value = "Pria">Pria
                <input type="radio" name = "jk" value = "Wanita">Wanita</td>
        </tr>
        <tr>
            <td>Agama</td>
            <td>:</td>
            <td><select name="agama">
            <option value="Islam">Islam</option> 
            <option value="Kristen">Kristen</option>            
            <option value="Buddha">Buddha</option> 
            <option value="Hindu">Hindu</option> 
            </select></td>
        </tr>
        <tr>
            <td>Alamat</td>
            <td>:</td>
            <td><textarea name="alamat" id="" cols="30" rows="10"></textarea></td>
        </tr>
        <tr>
            <td>hobi</td>
            <td>:</td>
            <td><input type="checkbox" name = "hobi" value = "bermain">bermain
            <input type="checkbox" name = "hobi" value = "berdiam">berdiam</td>
        </tr>
        <tr>
            <td>Moto Hidup</td>
            <td>:</td>
            <td><textarea name="moto" id="" cols="30" rows="10"></textarea></td>
        </tr>
        <tr>
            <td></td>
            <td></td>
            <td><input type="submit" name="simpan" value="simpan"></td>
        </tr>
        </form>
    </table>
   
</body>
</html>

<?php

if(isset($_POST['simpan'])){
    $nama = $_POST['nama'];
    $tl = $_POST['tl'];
    $jk = $_POST['jk'];
    $agama = $_POST['agama'];
    $alamat = $_POST['alamat'];
    $hobi = $_POST['hobi'];
    $moto = $_POST['moto'];

function biodata($nama1,$tl1,$jk1,$agama1,$alamat1,$hobi1,$moto1){
    echo "Nama : $nama1 <br>";
    echo "Tanggal Lahir : $tl1<br>";
    echo "Jenis Kelamin : $jk1<br>";
    echo "Agama : $agama1<br>";
    echo "Alamat : $alamat1<br>";
    echo "Hobi : $hobi1<br>";
    echo "Moto Hidup : $moto1";
}

biodata($nama,$tl,$jk,$agama,$alamat,$hobi,$moto);

}

?>



