<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div class="panel panel-success">
                <div class="panel-heading">
                    <h3 class="panel-title">Form Tambah Data Penduduk</h3>
                </div>
                <div class="panel-body">
                    <!--membuat form untuk tambah data-->
                    <form class="form-horizontal" action="" method="post">
                        <div class="form-group">
                            <label for="nik" class="col-sm-3 control-label">Nik Penduduk</label>
                            <div class="col-sm-9">
                                <input type="text" name="nik" class="form-control" id="nik" placeholder="Inputkan Nik" required>
                            </div>
                        </div> 
                        <div class="form-group">
                            <label for="nama" class="col-sm-3 control-label">Nama Penduduk</label>
                            <div class="col-sm-9">
                                <input type="text" name="nama" class="form-control" id="nama" placeholder="Inputkan Nama Penduduk" required>
                            </div>
                        </div>
                         <div class="form-group">
                            <label for="tempat_lahir" class="col-sm-3 control-label">Tempat Lahir</label>
                            <div class="col-sm-9">
                                <input type="text" name="tempat_lahir" class="form-control" id="tempat_lahir" placeholder="Inputkan Tempat Lahir" required>
                            </div>
                        </div>
                         <div class="form-group">
                            <label for="tanggal_lahir" class="col-sm-3 control-label">Tanggal Lahir</label>
                            <div class="col-sm-9">
                                <input type="date" name="tanggal_lahir" class="form-control" id="tanggal_lahir" placeholder="Inputkan Tanggal Lahir" required>
                            </div>
                        </div>
                       <div class="form-group">
                            <label for="jenis_kelamin" class="col-sm-3 control-label">Jenis Kelamin</label>
                               <div class="col-sm-2 col-xs-9">
                                <select name="jenis_kelamin" class="form-control">
                                    <option value="Perempuan">Perempuan</option>
                                    <option value="Laki-Laki">Laki-Laki</option>
                                </select>
                            </div>
                        </div>
                         <div class="form-group">
                            <label for="alamat" class="col-sm-3 control-label">Alamat</label>
                            <div class="col-sm-9">
                                <input type="text" name="alamat"class="form-control" id="alamat" placeholder="Inputkan Alamat" required>
                            </div>
                        </div>
                         <div class="form-group">
                            <label for="agama" class="col-sm-3 control-label">Agama</label>
                            <div class="col-sm-9">
                                <input type="text" name="agama"class="form-control" id="agama" placeholder="Inputkan Agama" required>
                            </div>
                        </div>
                         <div class="form-group">
                            <label for="pendidikan" class="col-sm-3 control-label">Pendidikan</label>
                            <div class="col-sm-9">
                                <input type="text" name="pendidikan"class="form-control" id="pendidikan" placeholder="Inputkan Pendidikan" required>
                            </div>
                        </div>
                         <div class="form-group">
                            <label for="pekerjaan" class="col-sm-3 control-label">Pekerjaan</label>
                            <div class="col-sm-9">
                                <input type="text" name="pekerjaan"class="form-control" id="pekerjaan" placeholder="Inputkan Pekerjaan" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-sm-offset-3 col-sm-9">
                                <button type="submit" class="btn btn-success">
                                    <span class="fa fa-save"></span> Simpan Data Penduduk</button>
                            </div>
                        </div>
                    </form>


                </div>
                <div class="panel-footer">
                    <a href="?page=datapenduduk&actions=tampil" class="btn btn-danger btn-sm">
                        Kembali Ke Data Penduduk
                    </a>
                </div>
            </div>

        </div>
    </div>
</div>

<?php
if($_POST){
    //Ambil data dari form
  $nik=$_POST['nik'];
    $nama=$_POST['nama'];
    $tempat_lahir=$_POST['tempat_lahir'];
    $tanggal_lahir=$_POST['tanggal_lahir'];
    $jenis_kelamin=$_POST['jenis_kelamin'];
    $alamat=$_POST['alamat'];
    $agama=$_POST['agama'];
    $pendidikan=$_POST['pendidikan'];
    $pekerjaan=$_POST['pekerjaan'];
    //buat sql
    $sql="INSERT INTO tbl_datapenduduk VALUES ('','$nik','$nama','$tempat_lahir','$tanggal_lahir','$jenis_kelamin','$alamat','$agama','$pendidikan','$pekerjaan')";
    $query=  mysqli_query($koneksi, $sql) or die ("SQL Simpan datapenduduk Error");
    if ($query){
        echo "<script>window.location.assign('?page=datapenduduk&actions=tampil');</script>";
    }else{
        echo "<script>alert('Simpan Data Gagal');<script>";
    }
    }

?>
