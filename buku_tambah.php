<div class="badge bg-primary text-wrap mt-4 fs-4" style="width: 12rem;">
    Buku
</div>
<div class="card">
    <div class="card-body">
        <div class="row">
            <form action="" method="post">
                <?php
                if (isset($_POST['submit'])) {
                    $id_kategori = $_POST['id_kategori'];
                    $judul = $_POST['judul'];
                    $penulis = $_POST['penulis'];
                    $penerbit = $_POST['penerbit'];
                    $tahunTerbit = $_POST['tahunTerbit'];
                    $deskripsi = $_POST['deskripsi'];
                    $query = mysqli_query($koneksi, "INSERT INTO buku(id_kategori,judul,penulis,penerbit,tahun_terbit,deskripsi) VALUES ('$id_kategori','$judul','$penulis','$penerbit','$tahunTerbit','$deskripsi')");

                    if ($query) {
                        echo '<script>alert("Tambah data berhasil.");</script>';
                    } else {
                        echo '<script>alert("Tambah data  gagal.");</script>';
                    }
                }
                ?>
                <label class="col-md-1">Kategori</label>
                <div class="col-md-8 mb-4">
                    <select name="id_kategori" class="form-select">
                        <?php
                        $kat = mysqli_query($koneksi, "SELECT * FROM kategori");
                        while ($kategori = mysqli_fetch_array($kat)) {
                        ?>
                            <option value="<?php echo $kategori['id_kategori']; ?>"><?php echo $kategori['kategori']; ?></option>
                        <?php } ?>
                    </select>
                </div>
                <label class="col-md-1">Judul</label>
                <div class="col-md-8 mb-4">
                    <input type="text" name="judul" class="form-control">
                </div>
                <label class="col-md-1">Penulis</label>
                <div class="col-md-8 mb-4">
                    <input type="text" name="penulis" class="form-control">
                </div>
                <label class="col-md-1">Penerbit</label>
                <div class="col-md-8 mb-4">
                    <input type="text" name="penerbit" class="form-control">
                </div>
                <label class="col-md-1">Tahun Terbit</label>
                <div class="col-md-8 mb-4">
                    <input type="number" name="tahunTerbit" class="form-control">
                </div>
                <label class="col-md-1">Deksripsi</label>
                <div class="col-md-8 mb-4">
                    <textarea name="deskripsi" rows="5" class="form-control"></textarea>
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