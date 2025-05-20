<!-- partial -->
<div class="main-panel">
    <div class="content-wrapper">
        <div class="row">
            <div class="col-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Tambah Data Buku</h4>
                        <?php 
                    if(isset($_POST['simpan'])){
                        $kd=$_POST['kodebuku'];
                        $tempa=$_POST['judul_buku'];
                        $spesial=$_POST['idkategori'];
                        $alamatt=$_POST['pengarang'];
                        $alama=$_POST['penerbit'];
                        $alam=$_POST['tahunterbit'];
                        $foto=$_FILES['gambar_sampul']['name'];
                        $tmp=$_FILES['gambar_sampul']['tmp_name'];


                        // proses input ke database
                        $input="INSERT INTO buku VALUES ('$kd', '$tempa', '$spesial', '$alamatt', '$alama', '$alam', '$foto')";
                        $query=mysqli_query($koneksi,$input);
                        move_uploaded_file($tmp, "images/foto/$foto");
                        if($query){
                            echo "<div class='alert alert-success' role='alert'>Data berhasil ditambahkan! <a href='media.php?page=databuku'>lihat data</a></div>";
                        }else{
                            echo "<div class='alert alert-danger' role='alert'>
                            Data gagal disimpan!</div>";
                            }
                    }
                  ;?>
                        <form class="forms-sample" method="post" enctype="multipart/form-data">
                            <div class="form-group">
                                <label for="exampleInputName1">Kode Buku</label>
                                <input type="text" name="kodebuku" class="form-control" id="exampleInputName1"
                                    placeholder="Masukan kodebuku">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputName1">Judul Buku</label>
                                <input type="text" name="judul_buku" class="form-control" id="exampleInputName1"
                                    placeholder="Masukan judul_buku">
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 col-form-label">Kategori Buku</label>
                                <div class="col-sm-10">
                                    <select class="form-select" name="idkategori" aria-label="Default select example">
                                        <?php 
                                            $a = "select * from kategori";
                                            $b = mysqli_query($koneksi,$a);
                                            while($c=mysqli_fetch_array($b)){
                                                echo "<option value='$c[idkategori]'>$c[nama_kategori]</option>";
                                            }
                                            ;?>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputName1">Pengarang</label>
                                <input type="text" name="pengarang" class="form-control" id="exampleInputName1"
                                    placeholder="Masukan pengarang">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputName1">Penerbit</label>
                                <input type="text" name="penerbit" class="form-control" id="exampleInputName1"
                                    placeholder="Masukan penerbit">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputName1">Tahun Terbit</label>
                                <input type="text" name="tahunterbit" class="form-control" id="exampleInputName1"
                                    placeholder="Masukan tahunterbit">
                            </div>
                            <div class="row mb-3">
                                <div class="col-sm-10">
                                    <input class="form-control" name="gambar_sampul" type="file" id="formFile">
                                </div>
                            </div>
                            <button type="submit" name="simpan" class="btn btn-primary me-2">Submit</button>
                            <button class="btn btn-light">Cancel</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
<!-- content-wrapper ends -->