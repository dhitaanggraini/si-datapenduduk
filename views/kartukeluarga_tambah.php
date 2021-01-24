<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div class="panel panel-success">
                <div class="panel-heading">
                    <h3 class="panel-title">Form Tambah Data Kartu Keluarga</h3>
                </div>
                <div class="panel-body">
                    <!--membuat form untuk tambah data-->
                    <form class="form-horizontal" action="" method="post">
                        <div class="form-group">
                            <label for="nik" class="col-sm-3 control-label">NIK Penduduk</label>
                            <div class="col-sm-9">
                                <input type="text" name="nik" class="form-control" id="nik" placeholder="Inputkan Nik" required>
                            </div>
                        </div> 
                        <div class="form-group">
                            <label for="nama_lengkap" class="col-sm-3 control-label">Nama Lengkap</label>
                            <div class="col-sm-9">
                                <input type="text" name="nama_lengkap" class="form-control" id="nama_lengkap" placeholder="Inputkan Nama Lengkap" required>
                            </div>
                        </div>
                         <div class="form-group">
                            <label for="alamat" class="col-sm-3 control-label">Alamat</label>
                            <div class="col-sm-9">
                                <input type="text" name="alamat" class="form-control" id="alamat" placeholder="Inputkan Alamat" required>
                            </div>
                        </div>
                         <div class="form-group">
                            <label for="rtrw" class="col-sm-3 control-label">RT/RW</label>
                            <div class="col-sm-9">
                                <input type="text" name="rtrw" class="form-control" id="rtrw" placeholder="Inputkan RT/RW" required>
                            </div>
                        </div>
                         <div class="form-group">
                            <label for="desa" class="col-sm-3 control-label">Desa</label>
                            <div class="col-sm-9">
                                <input type="text" name="desa"class="form-control" id="desa" placeholder="Inputkan Desa" required>
                            </div>
                        </div>
                         <div class="form-group">
                            <label for="kelurahan" class="col-sm-3 control-label">Kelurahan</label>
                            <div class="col-sm-9">
                                <input type="text" name="kelurahan"class="form-control" id="kelurahan" placeholder="Inputkan Kelurahan" required>
                            </div>
                        </div>
                         <div class="form-group">
                            <label for="kecamatan" class="col-sm-3 control-label">Kecamatan</label>
                            <div class="col-sm-9">
                                <input type="text" name="kecamatan"class="form-control" id="kecamatan" placeholder="Inputkan Kecamatan" required>
                            </div>

                        <div class="form-group">
                            <div class="col-sm-offset-3 col-sm-9">
                                <button type="submit" class="btn btn-success">
                                    <span class="fa fa-save"></span> Simpan Data Kartu keluarga</button>
                            </div>
                        </div>
                    </form>


                </div>
                <div class="panel-footer">
                    <a href="?page=kartukeluarga&actions=tampil" class="btn btn-danger btn-sm">
                        Kembali Ke Data Kartu Keluarga
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
    $nama_lengkap=$_POST['nama_lengkap'];
    $alamat=$_POST['alamat'];
    $rtrw=$_POST['rtrw'];
    $desa=$_POST['desa'];
    $kelurahan=$_POST['kelurahan'];
    $kecamatan=$_POST['kecamatan'];
    //buat sql
    $sql="INSERT INTO tbl_kartukeluarga VALUES ('$nik','$nama_lengkap','$alamat','$rtrw','$desa','$kelurahan','$kecamatan','')";
    $query=  mysqli_query($koneksi, $sql) or die ("SQL Simpan gajikaryawan Error");
    if ($query){
        echo "<script>window.location.assign('?page=kartukeluarga&actions=tampil');</script>";
    }else{
        echo "<script>alert('Simpan Data Gagal');<script>";
    }
    }

?>
