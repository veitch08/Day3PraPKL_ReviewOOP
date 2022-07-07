<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Raport</title>
</head>
<body>
    <center>
    <form action="" method = "POST"> 
    
    <h2>MENGHITUNG NILAI RAPORT</h2>
    <table>
        <tr>
            <td>
            Nama
            </td>
            <td>
            :
            </td>
            <td>
            <input type="text" name = "nama">
            </td>
        </tr>
        <tr>
            <td>
            kelas
            </td>
            <td>
            :
            </td>
            <td>
            <select name="kelas" id="">
            <option value="XI RPL 1">XI RPL 1</option>
            <option value="XI RPL 2">XI RPL 2</option>
            <option value="XI RPL 3">XI RPL 3</option>
            </select>
            </td>
        </tr>
        <tr>
            <td>
            Jurusan
            </td>
            <td>
            :
            </td>
            <td>
            <select name="jurusan" id="">
            <option value="Rekayasa Perangkat Lunak">Rekayasa Perangkat Lunak</option>
            <option value="Teknik Kendaraan Ringan">Teknik Kendaraan Ringan</option>
            <option value="Teknik Bisnis Sepeda Motor">Teknik Bisnis Sepeda Motor</option>
            </select>
            </td>
        </tr>
    </table>

    <table>
        <tr>
        <td>Nilai Matematika</td>
        <td>:</td>
        <td><input type="number" name = "nhm">
        </tr>

        <tr>
        <td>Nilai Bahasa Indonesia</td>
        <td>:</td>
        <td><input type="number" name = "nhbind">
        </tr>
        
        <tr>
        <td>Nilai Bahsa Inggris</td>
        <td>:</td>
        <td><input type="number" name = "nhbing">
        </tr>
    
        <tr>
        <td>Nilai Produktif</td>
        <td>:</td>
        <td><input type="number" name = "nhkjr">
        </tr>

    </table>
    <br>
    <table>
        <tr>
        <td></td>
        <td><input type = "submit" name = "proses" value = "PROSES"></td>
        <td></td>
        </tr>
    </table>
    </form>
    </center>




<?php

    if(isset($_POST['proses'])){
        $nama = $_POST['nama'];
        $kelas = $_POST['kelas'];
        $jurusan = $_POST['jurusan'];
        $nhm = $_POST['nhm'];
        $nhbind = $_POST['nhbind']; 
        $nhbing = $_POST['nhbing'];      
        $nhkjr = $_POST['nhkjr'];
        
        

        class raport{

            public $rata;
            

            public function nama($nama1){
                echo $nama1;
            }
            public function jurusan($jurusan1){
                echo $jurusan1;
            }
            public function kelas($kelas1){
                echo  $kelas1;
            }
            public function nmtk($nhm1){
               echo  $nhm1;
            }   
            public function nbind($nhbind1){
               echo  $nhbind1;
            }
            public function nbing($nhbing1){
              echo  $nhbing1;
            }
            public function nkjr($nhkjr1){
            echo $nhkjr1;
            }
           
            public function rata(){   
             $this->rata= $rata2 = $nhm+$nhbind+$nhbing+$nhkjr/4;
             echo $this->rata;
            }
            
            public function stts($stts){
             if($this->rata >= 80){
                    $stts = "LULUS";
                    echo $stts;
                }else if($this->rata < 80 ){
                    $stts = "TIDAK LULUS";
                    echo $stts;
                }
            }
        }

        $cetak = new raport($rata,$stts );?>
       <table align = "center" border = "1">
       <tr>
       <td>Nama</td>
       <td>:</td>
       <td><?php $nama;?></td>
       </tr>
       <tr>
       <td>Jurusan</td>
       <td>:</td>
       <td><?= $jurusan;?></td>
       </tr>
       <tr>
       <td>Kelas</td>
       <td>:</td>
       <td><?= $kelas;?></td>
       </tr>
       <tr>
       <td>Nilai Matematika</td>
       <td>:</td>
       <td><?= $nhm;?></td>
       </tr>
       <tr>
       <td>Nilai Bahasa Indonesia</td>
       <td>:</td>
       <td><?= $nhbind;?></td>
       </tr>
       <tr>
       <td>Nilai Bahasa Inggris</td>
       <td>:</td>
       <td><?= $nhbing;?></td>
       </tr>
       <tr>
       <td>Nilai Produktif</td>
       <td>:</td>
       <td><?= $nhkjr;?></td>
       </tr>
       <td>Rata-rata</td>
       <td>:</td>
       <td><?= $rata;?></td>
       </tr>
       <td>Status</td>
       <td>:</td>
       <td><?= $stts;?></td>
       </tr>
       </table>
       </body>
       </html>
    
    <?php }

?>