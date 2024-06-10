<div class="badge bg-primary text-wrap mt-4 fs-4" style="width: 12rem;">
    Buku
</div>
<div class="card">
    <div class="card-body">
        <div class="row">
            <form action="" method="post">
                <?php
                $id = $_GET['id'];
                if (isset($_POST['submit'])) {
                    $id_kategori = $_POST['id_kategori'];
                    $judulBaru = $_POST['judulBaru'];
                    $penulisBaru = $_POST['penulisBaru'];
                    $penerbitBaru = $_POST['penerbitBaru'];
                    $tahunTerbitBaru = $_POST['tahunTerbitbaru'];
                    $deskripsiBaru = $_POST['deskripsiBaru'];
                    $query = mysqli_query($koneksi, "UPDATE buku SET judul='$judulBaru', penulis='$penulisBaru', penerbit='$penerbitBaru', tahun_terbit='$tahunTerbitBaru', deskripsi='$deskripsiBaru' WHERE id_buku='$id'");

                    if ($query) {
                        echo '<script>alert("Edit data berhasil.");</script>';
                    } else {
                        echo '<script>alert("Edit data  gagal.");</script>';
                    }
                }
                $q = mysqli_query($koneksi, "SELECT * FROM buku WHERE id_buku='$id'");
                $data = mysqli_fetch_array($q);
                ?>
                <label class="col-md-1">Kategori</label>
                <div class="col-md-8 mb-4">
                    <select name="id_kategori" class="form-select">
                        <?php
                        $kat = mysqli_query($koneksi, "SELECT * FROM kategori");
                        while ($kategori = mysqli_fetch_array($kat)) {
                        ?>
                            <option <?php if ($kategori['id_kategori'] == $data['id_kategori']) echo 'selecteds'; ?> value="<?php echo $kategori['id_kategori']; ?>"><?php echo $kategori['kategori']; ?></option>
                        <?php } ?>
                    </select>
                </div>
                <label class="col-md-1">Judul</label>
                <div class="col-md-8 mb-4">
                    <input type="text" name="judulBaru" class="form-control" value="<?php echo $data['judul']; ?>">
                </div>
                <label class="col-md-1">Penulis</label>
                <div class="col-md-8 mb-4">
                    <input type="text" name="penulisBaru" class="form-control" value="<?php echo $data['penulis']; ?>">
                </div>
                <label class="col-md-1">Penerbit</label>
                <div class="col-md-8 mb-4">
                    <input type="text" name="penerbitBaru" class="form-control" value="<?php echo $data['penerbit']; ?>">
                </div>
                <label class="col-md-1">Tahun Terbit</label>
                <div class="col-md-8 mb-4">
                    <input type="number" name="tahunTerbitbaru" class="form-control" value="<?php echo $data['tahun_terbit']; ?>">
                </div>
                <label class="col-md-1">Deksripsi</label>
                <div class="col-md-8 mb-4">
                    <textarea name="deskripsiBaru" rows="5" class="form-control"><?php echo $data['deskripsi']; ?></textarea>
                </div>
        </div>
        <div class="row">
            <div class="col-md-8">
                <button type="submit" class="btn btn-primary" name="submit" value="submit">Simpan</button>
                <button type="reset" class="btn btn-warning">Batal</button>
                <a href="?page=buku" class="btn btn-danger">Kembali</a>
            </div>
        </div>
    </div>
</div>
</form>
