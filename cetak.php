<h2 align="center">LAPORAN PEMINJAMAN BUKU</h2>
<table class="w-75 position-absolute top-50 start-50 translate-middle" border="1" cellspacing="0" cellpadding="5" width="100%">
    <thead>
        <tr>
            <th scope="col">No</th>
            <th scope="col">User</th>
            <th scope="col">Buku</th>
            <th scope="col">Tanggal Peminjaman</th>
            <th scope="col">Tanggal Pengembalian</th>
            <th scope="col">Status Peminjaman</th>
        </tr>
    </thead>
    <tbody class="table-group-divider">
        <?php
        include "config/koneksi.php";
        $i = 1;
        $q = mysqli_query($koneksi, "SELECT * FROM peminjaman LEFT JOIN user ON user.id_user = peminjaman.id_user LEFT JOIN buku ON buku.id_buku = peminjaman.id_buku");
        while ($data = mysqli_fetch_array($q)) {
        ?>
            <tr>
                <td><?php echo $i++; ?></td>
                <td><?php echo $data['nama']; ?></td>
                <td><?php echo $data['judul']; ?></td>
                <td><?php echo $data['tgl_peminjaman']; ?></td>
                <td><?php echo $data['tgl_pengembalian']; ?></td>
                <td><?php echo $data['status_peminjaman']; ?></td>
            </tr>
        <?php
        }
        ?>
    </tbody>
</table>
<script>
    window.print();
    setTimeout(function() {
        window.close();
    }, 100);
</script>