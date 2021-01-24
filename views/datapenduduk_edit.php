<?php
$id=$_GET['id'];
$ambil=  mysqli_query($koneksi, "SELECT * FROM tbl_datapenduduk WHERE id ='$id'") or die ("SQL Edit error");
$data= mysqli_fetch_array($ambil);
?>
<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div class="panel panel-success">
                <div class="panel-heading">
                    <h3 class="panel-title">Form Update Data Penduduk</h3>
                </div>
                <div class="panel-body">
                    <!--membuat form untuk tambah data-->
                    <form class="form-horizontal" action="" method="post">
                        <div class="form-group">
                            <label for="nik" class="col-sm-3 control-label">Nik penduduk</label>
                             <div class="col-sm-9">
                                <input type="text" name="nik" value="<?=$data['nik']?>"class="form-control" id="inputEmail3" placeholder="Nik Penduduk" readonly="true">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="nama" class="col-sm-3 control-label">Nama Penduduk</label>
                            <div class="col-sm-9">
                                <input type="text" name="nama" value="<?=$data['nama']?>"class="form-control" id="inputEmail3" placeholder="Nama Penduduk">
                            </div>
                        </div>
                        
                        <!--untuk tanggal lahir form tahun-bulan-tanggal 1998-10-10-->
                        <div class="form-group">
                            <label class="col-sm-3 control-label">Tempat Lahir </label>
                            <div class="col-sm-9">
                                <input type="text" name="tempat_lahir" value="<?=$data['tempat_lahir']?>"class="form-control" id="inputEmail3" placeholder="Tempat Lahir">
                            </div>
                        </div>
                        
                        <!--untuk tanggal lahir form tahun-bulan-tanggal 1998-10-10-->
                        <div class="form-group">
                            <label class="col-sm-3 control-label">Tanggal Lahir</label>
                            <!--untu tahun-->
                            <div class="col-sm-2 col-xs-9">
                                <select name="tahun" class="form-control">
                                    <?php for($i=2017;$i>1980;$i--) {?>
                                    <option value="<?=$i?>"> <?=$i?> </option>
                                    <?php }?>
                                    
                                </select>

                            </div>
                            <!--Untuk Bulan-->
                            <div class="col-sm-2 col-xs-9">
                                <select name="bulan" class="form-control">
                                    <?php 
                                    $bulan=  array("","Januari","Februari","Maret","April","Mei","Juni","Juli","Agustus","September","Oktober","November","Desember");
                                    for($j=12;$j>0;$j--) {?>
                                    <option value="<?=$j?>"> <?=$bulan[$j]?> </option>
                                    <?php }?>
                                    
                                </select>

                            </div>
                            <!--Untuk Tanggal-->
                            <div class="col-sm-2 col-xs-9">
                                <select name="tanggal" class="form-control">
                                    <?php for($k=31;$k>0;$k--) {?>
                                    <option value="<?=$k?>"> <?=$k?> </option>
                                    <?php }?>
                                    
                                </select>

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
                                <input type="text" name="alamat" value="<?=$data['alamat']?>" class="form-control" id="inputPassword3" placeholder="alamat">
                            </div>
                        </div>

                         <div class="form-group">
                            <label for="agama" class="col-sm-3 control-label">Agama</label>
                            <div class="col-sm-9">
                                <input type="text" name="agama" value="<?=$data['agama']?>" class="form-control" id="inputPassword3" placeholder="agama">
                            </div>
                        </div>

                         <div class="form-group">
                            <label for="pendidikan" class="col-sm-3 control-label">Pendidikan</label>
                            <div class="col-sm-9">
                                <input type="text" name="pendidikan" value="<?=$data['pendidikan']?>" class="form-control" id="inputPassword3" placeholder="Pendidikan">
                            </div>
                        </div>

                         <div class="form-group">
                            <label for="pekerjaan" class="col-sm-3 control-label">Pekerjaan</label>
                            <div class="col-sm-9">
                                <input type="text" name="pekerjaan" value="<?=$data['pekerjaan']?>" class="form-control" id="inputPassword3" placeholder="Pekerjaan">
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-sm-offset-3 col-sm-9">
                                <button type="submit" class="btn btn-success">
                                    <span class="fa fa-edit"></span> Update Data Penduduk</button>
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
    $tanggal_lahir=$_POST['tahun']."_".$_POST['bulan']."_".$_POST['tanggal'];
    $jenis_kelamin =$_POST['jenis_kelamin'];
        $alamat =$_POST['alamat'];
        $agama =$_POST['agama'];
        $pendidikan =$_POST['pendidikan'];
        $pekerjaan =$_POST['pekerjaan'];
    //buat sql
    $sql="UPDATE tbl_datapenduduk SET nik='$nik',nama='$nama',tempat_lahir='$tempat_lahir',tanggal_lahir='$tanggal_lahir',jenis_kelamin='$jenis_kelamin',alamat='$alamat',agama='$agama',pendidikan='$pendidikan',pekerjaan='$pekerjaan' WHERE id ='$id'"; 
    $query=  mysqli_query($koneksi, $sql) or die ("SQL Edit MHS Error");
    if ($query){
        echo "<script>window.location.assign('?page=datapenduduk&actions=tampil');</script>";
    }else{
        echo "<script>alert('Edit Data Gagal');<script>";
    }
    }

?>



