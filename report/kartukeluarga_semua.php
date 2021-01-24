<!DOCTYPE html>
<html>
    <head>
        <title>Cetak Semua Data Kartu Keluarga</title>
        <link href="../Assets/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
    </head>
    <body onload="print()">
        <!--Menampilkan data detail arsip-->
        <?php
        include '../config/koneksi.php';
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
                        <h3>Seluruh Data Kartu Keluarga</h3>
                        <table class="table table-bordered table-striped table-hover">
                        <tbody>
                                <thead>
								<tr>
									<th>No.</th><th width="18%">NIK</th><th>Nama Lengkap</th><th>Alamat</th><th>RT/RW</th>
                                    <th>Desa</th><th>Kelurahan</th><th>Kecamatan</th>
								</tr>
								</thead>
							<tbody>
                            <!--ambil data dari database, dan tampilkan kedalam tabel-->
                            <?php
                            //buat sql untuk tampilan data, gunakan kata kunci select
                            $sql = "SELECT * FROM tbl_kartukeluarga";
                            $query = mysqli_query($koneksi, $sql) or die("SQL Anda Salah");
                            //Baca hasil query dari databse, gunakan perulangan untuk
                            //Menampilkan data lebh dari satu. disini akan digunakan
                            //while dan fungdi mysqli_fecth_array
                            //Membuat variabel untuk menampilkan nomor urut
                            $nomor = 0;
                            //Melakukan perulangan u/menampilkan data
                            while ($data = mysqli_fetch_array($query)) {
                                $nomor++; //Penambahan satu untuk nilai var nomor
                                ?>
                                <tr>
                                    <td><?= $nomor ?></td>
                                    <td><?= $data['nik'] ?></td>
                                    <td><?= $data['nama_lengkap'] ?></td>
                                    <td><?= $data['alamat'] ?></td>
                                    <td><?= $data['rtrw'] ?></td>
                                    <td><?= $data['desa'] ?></td>
                                    <td><?= $data['kelurahan'] ?></td>
                                    <td><?= $data['kecamatan'] ?></td>
                                </tr>
                                <!--Tutup Perulangan data-->
                            <?php } ?>
							</tbody>
                        </tbody>
                            <tfoot>
                                <tr>
                                    <td colspan="8" class="text-right">
                                        Air Batu,  <?= date("d-m-Y") ?>
                                        <br><br><br><br>
                                        <u>Kasubag Penduduk<strong></u>
                                        <br>NIP.012294847593758
									</td>
								</tr>
							</tfoot>
                        </table>
                    </div>
                </div>
            </div>
    </body>
</html>
