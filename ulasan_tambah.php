<div class="badge bg-primary text-wrap mt-4 fs-4" style="width: 12rem;">
    Ulasan Buku
</div>
<div class="card">
    <div class="card-body">
        <div class="row">
            <form action="" method="post">
                <?php
                if (isset($_POST['submit'])) {
                    $id_buku = $_POST['id_buku'];
                    $id_user = $_SESSION['user']['id_user'];
                    $ulasan = $_POST['ulasan'];
                    $rating = $_POST['rating'];
                    $query = mysqli_query($koneksi, "INSERT INTO ulasan(id_buku,id_user,ulasan,rating) VALUES ('$id_buku','$id_user','$ulasan','$rating')");

                    if ($query) {
                        echo '<script>alert("Tambah data berhasil.");</script>';
                    } else {
                        echo '<script>alert("Tambah data  gagal.");</script>';
                    }
                }
                ?>
                <label class="col-md-1">Buku</label>
                <div class="col-md-8 mb-4">
                    <select name="id_buku" class="form-select">
                        <?php
                        $book = mysqli_query($koneksi, "SELECT * FROM buku");
                        while ($buku = mysqli_fetch_array($book)) {
                        ?>
                            <option value="<?php echo $buku['id_buku']; ?>"><?php echo $buku['judul']; ?></option>
                        <?php } ?>
                    </select>
                </div>
                <label class="col-md-1">Ulasan</label>
                <div class="col-md-8 mb-4">
                    <textarea name="ulasan" rows="5" class="form-control"></textarea>
                </div>
                <label class="col-md-1">Rating</label>
                <div class="col-md-8 mb-4">
                    <select name="rating" class="form-select">
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                        <option>5</option>
                        <option>6</option>
                        <option>7</option>
                        <option>8</option>
                        <option>9</option>
                        <option>10</option>
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