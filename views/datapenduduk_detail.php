<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">Informasi Detail Penduduk</h3>
                </div>
                <div class="panel-body">
                    <!--Menampilkan data detail arsip-->
                    <?php
                    $sql = "SELECT *FROM tbl_datapenduduk WHERE id ='" . $_GET ['id'] . "'";
                    //proses query ke database
                    $query = mysqli_query($koneksi, $sql) or die("SQL Detail error");
                    //Merubaha data hasil query kedalam bentuk array
                    $data = mysqli_fetch_array($query);
                    ?>   

                    <!--dalam tabel--->
                    <table class="table table-bordered table-striped table-hover"> 
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
                    </table>
				
                </div> <!--end panel-body-->
                <!--panel footer--> 
                <div class="panel-footer">
                    <a href="?page=datapenduduk&actions=tampil" class="btn btn-success btn-sm">
                        Kembali ke Data Penduduk </a>

                </div>
                <!--end panel footer-->
            </div>

        </div>
    </div>
</div>

