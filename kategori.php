<div class="badge bg-primary text-wrap mt-4 fs-4" style="width: 12rem;">
    Kategori Buku
</div>
<a href="?page=kategori_tambah" class="btn btn-primary"> + tambah data</a>
<table class="table w-75 position-absolute top-50 start-50 translate-middle">
    <thead>
        <tr>
            <th scope="col">No</th>
            <th scope="col">Kategori</th>
            <th scope="col">Aksi</th>
        </tr>
    </thead>
    <tbody class="table-group-divider">
        <?php
        $i = 1;
        $q = mysqli_query($koneksi, "SELECT * FROM kategori");
        while ($data = mysqli_fetch_array($q)) {
        ?>
            <tr>
                <td><?php echo $i++; ?></td>
                <td><?php echo $data['kategori']; ?></td>
                <td>
                    <a href="?page=kategori_edit&&id=<?php echo $data['id_kategori']; ?>" class="btn btn-info">Edit</a>
                    <a onclick="return confirm('Yakin Mau dihapus?');" href="?page=kategori_hapus&&id=<?php echo $data['id_kategori']; ?>" class="btn btn-danger">Hapus</a>
                </td>
            </tr>
        <?php
        }
        ?>
    </tbody>
</table>