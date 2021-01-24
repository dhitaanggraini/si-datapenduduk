<!DOCTYPE html>
<html>
    <head>
        <title>Cetak Data Kartu Keluarga</title>
        <link href="../Assets/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
    </head>
    <body onload="print()">
        <!--Menampilkan data detail arsip-->
        <?php
        include '../config/koneksi.php';
        $sql = "SELECT * FROM tbl_kartukeluarga WHERE id='" . $_GET ['id'] . "'";
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
                        <h2>Sistem Informasi Data Penduduk Desa AIr Teluk Hessa </h2>
                        <h4> Jalan Lintas Sumatera, No.22, Air Batu, Asahan<br>
                             Kabupaten Asahan, Sumatera Utara, Kode Pos : 21272</h4>
                        <hr>
                        <h3>Data Kartu Keluarga</h3>
                        <table class="table table-bordered table-striped table-hover">
                            <tbody>
								<tr>
                            <td>NIK</td> <td><?= $data['nik'] ?></td>
                        </tr>
                        <tr>
                            <td>Nama Lengkap</td> <td><?= $data['nama_lengkap'] ?></td>
                        </tr>
                        <tr>
                            <td>Alamat</td> <td><?= $data['alamat'] ?></td>
                        </tr>
                        <tr>
                            <td>RT/RW</td> <td><?= $data['rtrw'] ?></td>
                        </tr>
                        <tr>
                            <td>Desa</td> <td><?= $data['desa'] ?></td>
                        </tr>
                        <tr>
                            <td>Kelurahan</td> <td><?= $data['kelurahan'] ?></td>
                        </tr>
                        <tr>
                            <td>Kecamatan</td> <td><?= $data['kecamatan'] ?></td>
                        </tr>

                            </tbody>
                            <tfoot>
                                <tr>
                                    <td colspan="2" class="text-right">
                                        Air Batu, <?= date("d-m-Y") ?>
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
