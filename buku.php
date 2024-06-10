<div class="badge bg-primary text-wrap mt-4 fs-4" style="width: 12rem;">
    Buku
</div>
<a href="?page=buku_tambah" class="btn btn-primary"> + tambah data</a>
<table class="table w-75 position-absolute top-50 start-50 translate-middle">
    <thead>
        <tr>
            <th scope="col">No</th>
            <th scope="col">Nama Kategori</th>
            <th scope="col">Judul</th>
            <th scope="col">Penulis</th>
            <th scope="col">Penerbit</th>
            <th scope="col">Tahun Terbit</th>
            <th scope="col">Deskripsi</th>
            <th scope="col">Aksi</th>
        </tr>
    </thead>
    <tbody class="table-group-divider">
        <?php
        $i = 1;
        $q = mysqli_query($koneksi, "SELECT * FROM buku LEFT JOIN kategori ON buku.id_kategori = kategori.id_kategori");
        while ($data = mysqli_fetch_array($q)) {
        ?>
            <tr>
                <td><?php echo $i++; ?></td>
                <td><?php echo $data['kategori']; ?></td>
                <td><?php echo $data['judul']; ?></td>
                <td><?php echo $data['penulis']; ?></td>
                <td><?php echo $data['penerbit']; ?></td>
                <td><?php echo $data['tahun_terbit']; ?></td>
                <td><?php echo $data['deskripsi']; ?></td>
                <td>
                    <a href="?page=buku_edit&&id=<?php echo $data['id_buku']; ?>" class="btn btn-info">Edit</a>
                    <a onclick="return confirm('Yakin Mau dihapus?');" href="?page=buku_hapus&&id=<?php echo $data['id_buku']; ?>" class="btn btn-danger">Hapus</a>
                </td>
            </tr>
        <?php
        }
        ?>
    </tbody>
</table>