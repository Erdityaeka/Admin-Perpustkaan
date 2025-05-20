<!-- partial -->
<div class="main-panel">
    <div class="content-wrapper">
        <div class="row">
            <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Data buku</h5>
                        <a href="media.php?page=tambahbuku">
                            <button type="button" class="btn btn-primary">Tambah</button>
                        </a>
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>gambar sampul</th>
                                        <th>kodebuku</th>
                                        <th>judul buku</th>
                                        <th>kategori</th>
                                        <th>pengarang</th>
                                        <th>penerbit</th>
                                        <th>tahun terbit</th>
                                        <th>Aksi</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    <?php 
                                        $tampil = "SELECT * FROM buku, kategori WHERE buku.idkategori=kategori.idkategori";
                                        $query = mysqli_query($koneksi, $tampil);
                                        while($data = mysqli_fetch_array($query)) {
                                        ?>
                                    <tr>
                                        <td><img src="images/foto/<?php echo $data['gambar_sampul'];?>" width="100">
                                        </td>
                                        <td><?php echo $data['kodebuku']; ?></td>
                                        <td><?php echo $data['judul_buku'];?></td>
                                        <td><?php echo $data['nama_kategori'];?></td>
                                        <td><?php echo $data['pengarang'];?></td>
                                        <td><?php echo $data['penerbit'];?></td>
                                        <td><?php echo $data['tahunterbit'];?></td>
                                        <td>
                                            <a href="media.php?page=ubahdata&kodebuku=<?php echo $data['kodebuku'];?>"
                                                class="btn btn-warning btn-sm">
                                                <i class="ti-pencil"></i> Ubah</a>
                                            <a href="javascript:if(confirm('yakin ingin menghapus data')){document.location='hapusdata.php?kodebuku=<?php echo $data['kodebuku']; ?>';}"
                                                class="btn btn-danger btn-sm"
                                                onclick="return confirm('Anda yakin ingin menghapus Data  ini?')">
                                                <i class="ti-trash"></i> Hapus</a>
                                        </td>
                                    </tr>
                                    <?php } ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- content-wrapper ends -->