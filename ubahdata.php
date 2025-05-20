<?php
if(isset($_GET['kodebuku'])){
    $id_mhs = $_GET['kodebuku'];
    $query = "SELECT * FROM buku WHERE kodebuku='$id_mhs'";
    $result = mysqli_query($koneksi, $query);
    $data = mysqli_fetch_assoc($result);
}
?>
<!-- partial -->
<div class="main-panel">
    <div class="content-wrapper">
        <div class="row">
            <div class="col-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Ubah Data Buku</h4>
                        <?php 
                        if(isset($_POST['ubah'])){
                            $nama_tempat = $_POST['judul_buku'];
                            $alamat_mhs = $_POST['idkategori'];
                            $prodi_mhs = $_POST['pengarang'];
                            $alama = $_POST['penerbit'];
                            $alam = $_POST['tahunterbit'];
                            $foto = $_FILES['gambar_sampul']['name'];
                            $tmp = $_FILES['gambar_sampul']['tmp_name'];

                            // proses input ke database
                            if(strlen($foto) > 0){
                                $input = "UPDATE buku SET judul_buku='$nama_tempat', idkategori='$alamat_mhs', pengarang='$prodi_mhs', penerbit='$alama', tahunterbit='$alam', gambar_sampul='$foto' WHERE kodebuku='$id_mhs'";
                                $query = mysqli_query($koneksi, $input);
                                move_uploaded_file($tmp, "images/foto/$foto");
                            } else {
                                $input = "UPDATE buku SET judul_buku='$nama_tempat', idkategori='$alamat_mhs', pengarang='$prodi_mhs', penerbit='$alama', tahunterbit='$alam' WHERE kodebuku='$id_mhs'";
                                $query = mysqli_query($koneksi, $input);
                            }

                            if($query){
                                echo "<div class='alert alert-success' role='alert'>Data berhasil diubah! <a href='media.php?page=databuku'>lihat data</a></div>";
                            } else {
                                echo "<div class='alert alert-danger' role='alert'>Data gagal disimpan!</div>";
                            }
                        }
                        ?>
                        <form class="forms-sample" method="post" enctype="multipart/form-data">
                            <div class="form-group">
                                <label for="exampleInputName1">kode Buku</label>
                                <input type="text" name="kodebuku" value="<?php echo $data['kodebuku'];?>"
                                    class="form-control" disabled>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputName1">Judul Buku</label>
                                <input type="text" name="judul_buku" value="<?php echo $data['judul_buku'];?>"
                                    class="form-control">
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 col-form-label">Kategori Buku</label>
                                <select class="form-select" name="idkategori" aria-label="Default select example">
                                    <?php 
                                        $a = "SELECT * FROM kategori";
                                        $b = mysqli_query($koneksi, $a);
                                        while($c = mysqli_fetch_array($b)) {
                                            $selected = ($data['idkategori'] == $c['idkategori']) ? "selected" : "";
                                            echo "<option value='{$c['idkategori']}' $selected>{$c['nama_kategori']}</option>";
                                        }
                                    ?>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputName1">pengarang</label>
                                <input type="text" name="pengarang" value="<?php echo $data['pengarang'];?>"
                                    class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputName1">penerbit</label>
                                <input type="text" name="penerbit" value="<?php echo $data['penerbit'];?>"
                                    class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputName1">tahunterbit</label>
                                <input type="text" name="tahunterbit" value="<?php echo $data['tahunterbit'];?>"
                                    class="form-control">
                            </div>
                            <div class="row mb-3">
                                <div class="col-sm-10">
                                    <img src="images/foto/<?php echo $data['gambar_sampul'];?>" width="70">
                                    <input class="form-control" name="gambar_sampul" type="file" id="formFile">
                                </div>
                            </div>
                            <div>
                                <button type="submit" name="ubah" class="btn btn-primary me-2">Ubah</button>
                                <button type="submit" name="batal" class="btn btn-light">Batal</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>