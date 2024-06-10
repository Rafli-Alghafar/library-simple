<div class="badge bg-primary text-wrap mt-4 fs-4" style="width: 12rem;">
    Kategori Buku
</div>
<div class="card">
    <div class="card-body">
        <div class="row">
            <form action="" method="post">
                <?php
                if (isset($_POST['submit'])) {
                    $kategori = $_POST['kategori'];
                    $query = mysqli_query($koneksi, "INSERT INTO kategori(kategori) VALUES ('$kategori')");

                    if ($query) {
                        echo '<script>alert("Tambah data berhasil.");</script>';
                    } else {
                        echo '<script>alert("Tambah data  gagal.");</script>';
                    }
                }
                ?>
                <label class="col-md-1">Kategori</label>
                <div class="col-md-8 mb-4">
                    <input type="text" name="kategori" class="form-control">
                </div>
        </div>
        <div class="row">
            <div class="col-md-8">
                <button type="submit" class="btn btn-primary" name="submit" value="submit">Simpan</button>
                <button type="reset" class="btn btn-warning">Batal</button>
                <a href="?page=kategori" class="btn btn-danger">Kembali</a>
            </div>
        </div>
    </div>
</div>
</form>