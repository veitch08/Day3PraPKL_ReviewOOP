<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Raport</title>
</head>
<body>
    <center>
        <form action="" method="post">
            <h3>Nilai Ujian</h3>
            <table>
                <tr>
                    <td>Nama</td>
                    <td>:</td>
                    <td><input type="text" name="nama"></td>
                </tr>
                <tr>
                    <td>Jurusan</td>
                    <td>:</td>
                    <td><select name="jurusan" id="jr3">
                        <option value="RPL">Rekayasa Perangkat Lunak</option>
                        <option value="TBSM">Teknik Bisnis Sepeda Motor</option>
                        <option value="TKR">Teknik Kendaraan Ringan</option>
                    </select></td>
                </tr>
                <tr>
                    <td>Kelas</td>
                    <td>:</td>
                    <td><select name="kelas" id="kls3">
                        <option value="XI RPL 1">XI RPL 1</option>
                        <option value="XI RPL 2">XI RPL 2</option>
                        <option value="XI RPL 3">XI RPL 3</option>
                    </select></td>
                </tr>
                </table>
                <h3>Nilai</h3>
                <table>
                <tr>
                    <td>N.Matematika</td>
                    <td>:</td>
                    <td><input type="number" name="matematika"></td>
                </tr>
                <tr>
                    <td>N.B.Indonesia</td>
                    <td>:</td>
                    <td><input type="number" name="indonesia"></td>
                </tr>
                <tr>
                    <td>N.B.Inggris</td>
                    <td>:</td>
                    <td><input type="number" name="inggris"></td>
                </tr>
                <tr>
                    <td>N.Produktif</td>
                    <td>:</td>
                    <td><input type="number" name="produktif"></td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td><input type="submit" name="proses" value="Proses"></td>
                </tr>
            </table>
        </form>
        <br><br>

        <?php

        if (isset($_POST["proses"])){
          $nama = $_POST["nama"];
          $jurusan = $_POST["jurusan"];
          $kelas = $_POST["kelas"];

          $matematika = $_POST["matematika"];
          $indonesia = $_POST["indonesia"];
          $inggris = $_POST["inggris"];
          $produktif = $_POST["produktif"];

          class hitungSaja{

            public function Identitas($nama, $jurusan, $kelas){
                echo "<table border='1' cellpadding='5'>";
                echo "<tr>";
                echo "<td>Nama</td>";
                echo "<td>:</td>";
                echo "<td>$nama</td>";
                echo "</tr>";
                echo "<tr>";
echo "<td>Jurusan</td>";
echo "<td>:</td>";
echo "<td>$jurusan</td>";
echo "</tr>";
echo "<tr>";
echo "<td>Kelas</td>";
echo "<td>:</td>";
echo "<td>$kelas</td>";
echo "</tr>";
            }

            public function nilai($matematika, $indonesia, $inggris, $produktif){

                $hasil = ($matematika + $indonesia + $inggris + $produktif) / 4 ;

                echo "<br>";
                echo "<tr>";
echo "<td>N.Matematika</td>";
echo "<td>:</td>";
echo "<td>$matematika</td>";
echo "</tr>";
echo "<tr>";
echo "<td>N.B.Indonesia</td>";
echo "<td>:</td>";
echo "<td>$indonesia</td>";
echo "</tr>";
echo "<tr>";
echo "<td>N.B.Inggris</td>";
echo "<td>:</td>";
echo "<td>$inggris</td>";
echo "</tr>";
echo "<tr>";
echo "<td>N.Produktif</td>";
echo "<td>:</td>";
echo "<td>$produktif</td>";
echo "</tr>";
echo "<tr>";
echo "<td>Rata-Rata</td>";
echo "<td>:</td>";
echo "<td>$hasil</td>";
echo "</tr>";
echo "<tr>";
echo "<td>Status</td>";
echo "<td>:</td>";
?>
<td><?php if ($hasil > 80) {
    echo "Lulus";
} else if ($hasil < 80) {
    echo "Tidak Lulus";
}
 ?></td>
<?php
echo "</tr>";
                echo "</table>";

            }
          }
          $print = new hitungSaja();
          $print -> identitas($nama, $jurusan, $kelas);
          $print -> nilai($matematika, $indonesia, $inggris, $produktif);

        }

        ?>
    </center>
</body>
</html>