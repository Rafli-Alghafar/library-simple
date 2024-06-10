<div class="badge bg-primary text-wrap mt-4 fs-4" style="width: 12rem;">
    Ulasan Buku
</div>
<a href="?page=ulasan_tambah" class="btn btn-primary"> + tambah data</a>
<table class="table w-75 position-absolute top-50 start-50 translate-middle">
    <thead>
        <tr>
            <th scope="col">No</th>
            <th scope="col">User</th>
            <th scope="col">Buku</th>
            <th scope="col">Ulasan</th>
            <th scope="col">Rating</th>
            <th scope="col">Aksi</th>
        </tr>
    </thead>
    <tbody class="table-group-divider">
        <?php
        $i = 1;
        $q = mysqli_query($koneksi, "SELECT * FROM ulasan LEFT JOIN user ON user.id_user = ulasan.id_user LEFT JOIN buku ON buku.id_buku = ulasan.id_buku");
        while ($data = mysqli_fetch_array($q)) {
        ?>
            <tr>
                <td><?php echo $i++; ?></td>
                <td><?php echo $data['nama']; ?></td>
                <td><?php echo $data['judul']; ?></td>
                <td><?php echo $data['ulasan']; ?></td>
                <td><?php echo $data['rating']; ?></td>
                <td>
                    <a href="?page=ulasan_edit&&id=<?php echo $data['id_ulasan']; ?>" class="btn btn-info">Edit</a>
                    <a onclick="return confirm('Yakin Mau dihapus?');" href="?page=ulasan_hapus&&id=<?php echo $data['id_ulasan']; ?>" class="btn btn-danger">Hapus</a>
                </td>
            </tr>
        <?php
        }
        ?>
    </tbody>
</table>