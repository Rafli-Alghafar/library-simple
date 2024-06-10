<div class="badge bg-primary text-wrap mt-4 fs-4" style="width: 12rem;">
    Edit Ulasan Buku
</div>
<div class="card">
    <div class="card-body">
        <div class="row">
            <form action="" method="post">
                <?php
                $id = $_GET['id'];
                if (isset($_POST['submit'])) {
                    $id_buku = $_POST['id_buku'];
                    $id_user = $_SESSION['user']['id_user'];
                    $ulasanBaru = $_POST['ulasanBaru'];
                    $ratingBaru = $_POST['ratingBaru'];
                    $query = mysqli_query($koneksi, "UPDATE ulasan SET id_buku='$id_buku', ulasan='$ulasanBaru', rating='$ratingBaru' WHERE id_ulasan='$id'");

                    if ($query) {
                        echo '<script>alert("Edit data berhasil.");</script>';
                    } else {
                        echo '<script>alert("Edit data  gagal.");</script>';
                    }
                }

                $q = mysqli_query($koneksi, "SELECT * FROM ulasan WHERE id_ulasan='$id'");
                $data = mysqli_fetch_array($q)
                ?>
                <label class="col-md-1">Buku</label>
                <div class="col-md-8 mb-4">
                    <select name="id_buku" class="form-select">
                        <?php
                        $book = mysqli_query($koneksi, "SELECT * FROM buku");
                        while ($buku = mysqli_fetch_array($book)) {
                        ?>
                            <option <?php if ($data['id_buku'] == $buku['id_buku']) echo 'selected'; ?> value="<?php echo $buku['id_buku']; ?>"><?php echo $buku['judul']; ?></option>
                        <?php } ?>
                    </select>
                </div>
                <label class="col-md-1">Ulasan</label>
                <div class="col-md-8 mb-4">
                    <textarea name="ulasanBaru" rows="5" class="form-control"><?php echo $data['ulasan']; ?></textarea>
                </div>
                <label class="col-md-1">Rating</label>
                <div class="col-md-8 mb-4">
                    <select name="ratingBaru" class="form-select">
                        <?php
                        for ($i = 1; $i <= 10; $i++) {
                        ?>
                            <option <?php if ($data['rating'] == $i) echo 'selected'; ?>><?php echo $i; ?></option>
                        <?php
                        }
                        ?>
                    </select>
                </div>
        </div>
        <div class="row">
            <div class="col-md-8">
                <button type="submit" class="btn btn-primary" name="submit" value="submit">Simpan</button>
                <button type="reset" class="btn btn-warning">Batal</button>
                <a href="?page=ulasan" class="btn btn-danger">Kembali</a>
            </div>
        </div>
    </div>
</div>
</form>