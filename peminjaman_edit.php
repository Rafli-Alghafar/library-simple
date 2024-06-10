<div class="badge bg-primary text-wrap mt-4 fs-4" style="width: 12rem;">
    Peminjaman Buku
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
                    $tglpeminjamanBaru = $_POST['tanggalPeminjamanBaru'];
                    $tglpengembalianBaru = $_POST['tanggalPengembalianBaru'];
                    $statusBaru = $_POST['statusBaru'];
                    $query = mysqli_query($koneksi, "UPDATE peminjaman SET id_buku='$id_buku', tgl_peminjaman='$tglpeminjamanBaru', tgl_pengembalian='$tglpengembalianBaru', status_peminjaman='$statusBaru' WHERE id_peminjaman='$id'");

                    if ($query) {
                        echo '<script>alert("Edit data berhasil.");</script>';
                    } else {
                        echo '<script>alert("Edit data  gagal.");</script>';
                    }
                }

                $q = mysqli_query($koneksi, "SELECT * FROM peminjaman WHERE id_peminjaman='$id'");
                $data = mysqli_fetch_array($q);
                ?>
                <label class="col-md-1">Buku</label>
                <div class="col-md-8 mb-4">
                    <select name="id_buku" class="form-select">
                        <?php
                        $book = mysqli_query($koneksi, "SELECT * FROM buku");
                        while ($buku = mysqli_fetch_array($book)) {
                        ?>
                            <option <?php if ($buku['id_buku'] == $data['id_buku']) echo 'selected'; ?> value="<?php echo $buku['id_buku']; ?>"><?php echo $buku['judul']; ?></option>
                        <?php } ?>
                    </select>
                </div>
                <label>Tanggal Peminjaman</label>
                <div class="col-md-8 mb-4">
                    <input type="date" name="tanggalPeminjamanBaru" class="form-control" value="<?php echo $data['tgl_peminjaman']; ?>">
                </div>
                <label>Tanggal Pengembalian</label>
                <div class="col-md-8 mb-4">
                    <input type="date" name="tanggalPengembalianBaru" class="form-control" value="<?php echo $data['tgl_pengembalian']; ?>">
                </div>
                <label>Status Peminjaman</label>
                <div class="col-md-8 mb-4">
                    <select name="statusBaru" class="form-select">
                        <option value="dipinjam" <?php if ($data['status_peminjaman'] == 'dipinjam') echo 'selected'; ?>>Dipinjam</option>
                        <option value="dikembalikan" <?php if ($data['status_peminjaman'] == 'dikembalikan') echo 'selected'; ?>>Dikembalikan</option>
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