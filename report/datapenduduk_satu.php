<!DOCTYPE html>
<html>
    <head>
        <title>Cetak Data Penduduk</title>
        <link href="../Assets/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
    </head>  
    <body onload="print()">
        <!--Menampilkan data detail arsip-->
        <?php
        include '../config/koneksi.php';
        $sql = "SELECT * FROM tbl_datapenduduk WHERE id='" . $_GET ['id'] . "'";
        //proses query ke database
        $query = mysqli_query($koneksi, $sql) or die("SQL Detail error");
        //Merubaha data hasil query kedalam bentuk array
        $data = mysqli_fetch_array($query);
        ?>   

        <div class="container">
            <div class='row'>
                <div class="col-sm-12">
                    <!--dalam tabel--->
                    <div class="text-center">
                        <h2>Sistem Informasi Data Penduduk Desa Air Teluk Hessa </h2>
                        <h4> Jalan Lintas Sumatera, No.22, Air Batu, Asahan<br>
                             Kabupaten Asahan, Sumatera Utara, Kode Pos : 21272</h4>
                        <hr>
                        <h3>Data Penduduk</h3>
                        <table class="table table-bordered table-striped table-hover"> 
                            <tbody>
								<tr>
                            <td>NIK</td> <td><?= $data['nik'] ?></td>
                        </tr>
                        <tr>
                            <td>Nama Penduduk</td> <td><?= $data['nama'] ?></td>
                        </tr>
                        <tr>
                            <td>Tempat Lahir</td> <td><?= $data['tempat_lahir'] ?></td>
                        </tr>
                        <tr>
                            <td>Tanggal Lahir</td> <td><?= $data['tanggal_lahir'] ?></td>
                        </tr>
                        <tr>
                            <td>Jenis Kelmain</td> <td><?= $data['jenis_kelamin'] ?></td>
                        </tr>
                        <tr>
                            <td>Alamat</td> <td><?= $data['alamat'] ?></td>
                        </tr>
                        <tr>
                            <td>Agama</td> <td><?= $data['agama'] ?></td>
                        </tr>
                        <tr>
                            <td>Pendidikan</td> <td><?= $data['pendidikan'] ?></td>
                        </tr>
                        <tr>
                            <td>Pekerjaan</td> <td><?= $data['pekerjaan'] ?></td>
                        </tr>
                            </tbody>
                            <tfoot> 
                                <tr>
                                    <td colspan="2" class="text-right">
                                        Air Batu,  <?= date("d-m-Y") ?>
                                        <br><br><br><br>
                                        <u>Kasubag Penduduk<strong></u><br>
                                           NIP.012294847593758
									</td>
								</tr>
							</tfoot> 
                        </table>
                    </div>
                </div>
            </div>
    </body>
</html>