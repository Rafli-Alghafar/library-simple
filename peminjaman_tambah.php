<div class="badge bg-primary text-wrap mt-4 fs-4" style="width: 12rem;">
    Peminjaman Buku
</div>
<div class="card">
    <div class="card-body">
        <div class="row">
            <form action="" method="post">
                <?php
                if (isset($_POST['submit'])) {
                    $id_buku = $_POST['id_buku'];
                    $id_user = $_SESSION['user']['id_user'];
                    $tglpeminjaman = $_POST['tanggalPeminjaman'];
                    $tglpengembalian = $_POST['tanggalPengembalian'];
                    $status = $_POST['status'];
                    $query = mysqli_query($koneksi, "INSERT INTO peminjaman(id_buku,id_user,tgl_peminjaman,tgl_pengembalian,status_peminjaman) VALUES ('$id_buku','$id_user','$tglpeminjaman','$tglpengembalian','$status')");

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
                <label>Tanggal Peminjaman</label>
                <div class="col-md-8 mb-4">
                    <input type="date" name="tanggalPeminjaman" class="form-control">
                </div>
                <label>Tanggal Pengembalian</label>
                <div class="col-md-8 mb-4">
                    <input type="date" name="tanggalPengembalian" class="form-control">
                </div>
                <label>Status Peminjaman</label>
                <div class="col-md-8 mb-4">
                    <select name="status" class="form-select">
                        <option value="dipinjam">Dipinjam</option>
                        <option value="dikembalikan">Dikembalikan</option>
                    </select>
                </div>
        </div>
        <div class="row">
            <div class="col-md-8">
                <button type="submit" class="btn btn-primary" name="submit" value="submit">Simpan</button>
                <button type="reset" class="btn btn-warning">Batal</button>
                <a href="?page=peminjaman" class="btn btn-danger">Kembali</a>
            </div>
        </div>
    </div>
</div>
</form>