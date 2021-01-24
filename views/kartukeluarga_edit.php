<?php
$id=$_GET['id'];
$ambil=  mysqli_query($koneksi, "SELECT * FROM tbl_kartukeluarga WHERE id='$id'") or die ("SQL Edit error");
$data= mysqli_fetch_array($ambil);
?>
<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div class="panel panel-success">
                <div class="panel-heading">
                    <h3 class="panel-title">Update Data Kartu Keluarga</h3>
                </div>
                <div class="panel-body">
                    <!--membuat form untuk tambah data-->
                    <form class="form-horizontal" action="" method="post">
                        <div class="form-group">
                            <label for="nik" class="col-sm-3 control-label">NIK</label>
                             <div class="col-sm-9">
								<input type="text" name="nik" value="<?=$data['nik']?>"class="form-control" id="inputEmail3" placeholder="Nik" readonly="true">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="nama_lengkap" class="col-sm-3 control-label">Nama Lengkap</label>
                            <div class="col-sm-9">
                                <input type="text" name="nama_lengkap" value="<?=$data['nama_lengkap']?>"class="form-control" id="inputEmail3" placeholder="Nama Lengkap">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="alamat" class="col-sm-3 control-label">Alamat</label>
                            <div class="col-sm-9">
                                <input type="text" name="alamat" value="<?=$data['alamat']?>" class="form-control" id="inputPassword3" placeholder="alamat">
                            </div>
                        </div>
                         <div class="form-group">
                            <label for="rt/rw" class="col-sm-3 control-label">RT/RW</label>
                            <div class="col-sm-9">
                                <input type="text" name="rt/rw" value="<?=$data['rtrw']?>" class="form-control" id="inputPassword3" placeholder="rt/rw">
                            </div>
                        </div> 
                        <div class="form-group">
                            <label for="desa" class="col-sm-3 control-label">desa</label>
                            <div class="col-sm-9">
                                <input type="text" name="desa" value="<?=$data['desa']?>" class="form-control" id="inputPassword3" placeholder="desa">
                            </div>
                        </div>
                         <div class="form-group">
                            <label for="kelurahan" class="col-sm-3 control-label">Kelurahan</label>
                            <div class="col-sm-9">
                                <input type="text" name="kelurahan" value="<?=$data['kelurahan']?>" class="form-control" id="inputPassword3" placeholder="kelurahan">
                            </div>
                        </div>
                         <div class="form-group">
                            <label for="kecamatan" class="col-sm-3 control-label">Kecamatan</label>
                            <div class="col-sm-9">
                                <input type="text" name="kecamatan" value="<?=$data['kecamatan']?>" class="form-control" id="inputPassword3" placeholder="kecamatan">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-offset-3 col-sm-9">
                                <button type="submit" class="btn btn-success">
                                    <span class="fa fa-edit"></span> Update Kartu Keluarga</button>
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
    $sql="UPDATE tbl_kartukeluarga SET nik = '$nik', nama_lengkap='$nama_lengkap', alamat='$alamat', rtrw='$rtrw', desa='$desa',
    kelurahan='$kelurahan', kecamatan='$kecamatan' WHERE id='$id'"; 
    $query=  mysqli_query($koneksi, $sql) or die ("SQL Edit MHS Error");
    if ($query){
        echo "<script>window.location.assign('?page=kartukeluarga&actions=tampil');</script>";
    }else{
        echo "<script>alert('Edit Data Gagal');<script>";
    }
    }

?>



