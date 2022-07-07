<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <center>
        <h2>Nilai Ujian</h2>
        <form action="" method="post">
            <table>
                <!-- NAMA -->
                <tr>
                    <td>Nama</td>
                    <td>:</td>
                    <td><input type="text" name="nama" value=""></td>
                </tr>

                <!-- KELAS -->
                <tr>
                    <td>Kelas</td>
                    <td>:</td>
                    <td><input type="text" name="kelas" value=""></td>
                </tr>

                <!-- JURUSAN   -->
                <tr>
                    <td>Jurusan</td>
                    <td>:</td>
                    <td><select name="jurusan" id="">
                            <option value="RPL">RPL</option>
                            <option value="TKRO">TKRO</option>
                            <option value="TBSM">TBSM</option>
                        </select></td>
                </tr>

                <!-- Nilai Matematika -->
                <tr>
                    <td>
                        <h2>Nilai</h2>
                    </td>
                </tr>
                <tr>
                    <td>Matematika</td>
                    <td>:</td>
                    <td><input type="text" name="mtk" value=""></td>
                </tr>
                <tr>
                    <td>Bahasa Indonesia</td>
                    <td>:</td>
                    <td><input type="text" name="b_indo" value=""></td>
                </tr>
                <tr>
                    <td>Bahasa Inggris</td>
                    <td>:</td>
                    <td><input type="text" name="b_inggris" value=""></td>
                </tr>
                <tr>
                    <td>Produktif</td>
                    <td>:</td>
                    <td><input type="text" name="produktif" value=""></td>
                </tr>

                
                <tr>
                    <td></td>
                    <td></td>
                    <td><input type="submit" name="proses" value="Proses"></td>
                </tr>

            </table>
        </form>
        <hr>


        <?php

        if (isset($_POST['proses'])) {
            $nama = $_POST['nama'];
            $kelas = $_POST['kelas'];
            $jurusan = $_POST['jurusan'];
            $mtk = $_POST['mtk'];
            $b_indo = $_POST['b_indo'];
            $b_inggris = $_POST['b_inggris'];
            $produktif = $_POST['produktif'];

            class nilai {
                
                public $nama;
                public $kelas;
                public $jurusan;
                public $mtk;
                public $b_indo;
                public $b_inggris;
                public $produktif;
                public $rata;
                public $nilai_akhir;
                public $predikat;


                public function __construct($nama, $kelas, $jurusan, $mtk, $b_indo, $b_inggris, $produktif){
                    $this->nama = $nama;
                    $this->kelas = $kelas;
                    $this->jurusan = $jurusan;
                    $this->mtk = $mtk;
                    $this->b_indo = $b_indo;
                    $this->b_inggris = $b_inggris;
                    $this->produktif = $produktif;
                

                    if ($nilai_akhir > 80) {
                        $this->nilai_akhir = "LULUS";
                    } else if ($this->nilai_akhir <= 80) {
                        $this->nilai_akhir = "TIDAK LULUS";
                    }

                    }

                }

            $nilai = new nilai($nama, $kelas, $jurusan, $mtk, $b_indo, $b_inggris, $produktif);

            }

            ?>

    </center>

    
    
    

    <center>
        <table border="1">
            <tr>
                <td>Nama</td>
                <td>:</td>
                <td><?php echo $nilai->nama; ?></td>
            </tr>
            <tr>
                <td>Kelas</td>
                <td>:</td>
                <td><?php echo $nilai->kelas; ?></td>
            </tr>
            <tr>
                <td>Jurusan</td>
                <td>:</td>
                <td><?php echo $nilai->jurusan; ?></td>
            </tr>
            <tr>
                <td>Nilai Matematika</td>
                <td>:</td>
                <td><?php echo $nilai->mtk; ?></td>
            </tr>
            <tr>
                <td>Nilai Bahasa Indonesia</td>
                <td>:</td>
                <td><?php echo $nilai->b_indo; ?></td>
            </tr>
            <tr>
                <td>Nilai Bahasa Inggris</td>
                <td>:</td>
                <td><?php echo $nilai->b_inggris; ?></td>
            </tr>
            <tr>
                <td>Nilai Produktif</td>
                <td>:</td>
                <td><?php echo $nilai->produktif; ?></td>
            </tr>
            <tr>
                <td>Nilai Akhir</td>
                <td>:</td>
                <td><?php echo $nilai->nilai_akhir; ?></td>
            </tr>
        </table>




</body>

</html>