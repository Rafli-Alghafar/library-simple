<div class="badge bg-primary text-wrap mt-4 fs-4" style="width: 12rem;">
    Edit Kategori Buku
</div>
<div class="card">
    <div class="card-body">
        <div class="row">
            <form action="" method="post">
                <?php
                $id = $_GET['id'];
                if (isset($_POST['submit'])) {
                    $kategori = $_POST['kategori'];
                    $query = mysqli_query($koneksi, "UPDATE kategori SET kategori='$kategori' WHERE id_kategori='$id'");

                    if ($query) {
                        echo '<script>alert("Edit data berhasil.");</script>';
                    } else {
                        echo '<script>alert("Edit data  gagal.");</script>';
                    }
                }

                $q = mysqli_query($koneksi, "SELECT * FROM kategori WHERE id_kategori='$id'");
                $data = mysqli_fetch_array($q);
                ?>
                <label class="col-md-1">Kategori</label>
                <div class="col-md-8 mb-4">
                    <input type="text" name="kategori" class="form-control" value="<?php echo $data['kategori']; ?>">
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