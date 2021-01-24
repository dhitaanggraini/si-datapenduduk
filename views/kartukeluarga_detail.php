<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">Informasi Detail Kartu Keluarga</h3>
                </div>
                <div class="panel-body">
                    <!--Menampilkan data detail arsip-->
                    <?php
                    $sql = "SELECT *FROM tbl_kartukeluarga WHERE id='" . $_GET ['id'] . "'";
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
                    </table>
				
                </div> <!--end panel-body-->
                <!--panel footer--> 
                <div class="panel-footer">
                    <a href="?page=kartukeluarga&actions=tampil" class="btn btn-success btn-sm">
                        Kembali ke Kartu Keluarga </a>

                </div>
                <!--end panel footer-->
            </div>

        </div>
    </div>
</div>

