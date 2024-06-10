<div class="badge bg-primary text-wrap mt-4 fs-4" style="width: 12rem;">
    Dashboard
</div>
<div class="row mt-4 w-50">
    <div class="col-sm-6 mb-3 mb-sm-0">
        <div class="card">
            <div class="card-body">
                <?php
                echo mysqli_num_rows(mysqli_query($koneksi, "SELECT * FROM kategori"));
                ?>
                <h5 class="card-title">Total Kategori</h5>
                <p class="card-text"></p>
                <a href="#" class="btn btn-primary">Detail</a>
            </div>
        </div>
    </div>
    <div class="col-sm-6">
        <div class="card">
            <div class="card-body">
                <?php
                echo mysqli_num_rows(mysqli_query($koneksi, "SELECT * FROM buku"));
                ?>
                <h5 class="card-title">Total Buku</h5>
                <p class="card-text"></p>
                <a href="#" class="btn btn-primary">Detail</a>
            </div>
        </div>
    </div>
</div>
<div class="row mt-4 w-50">
    <div class="col-sm-6 mb-3 mb-sm-0">
        <div class="card">
            <div class="card-body">
                <?php
                echo mysqli_num_rows(mysqli_query($koneksi, "SELECT * FROM ulasan"));
                ?>
                <h5 class="card-title">Total Ulasan</h5>
                <p class="card-text"></p>
                <a href="#" class="btn btn-primary">Detail</a>
            </div>
        </div>
    </div>
    <div class="col-sm-6">
        <div class="card">
            <div class="card-body">
                <?php
                echo mysqli_num_rows(mysqli_query($koneksi, "SELECT * FROM user"));
                ?>
                <h5 class="card-title">Total User</h5>
                <p class="card-text"></p>
                <a href="#" class="btn btn-primary">Detail</a>
            </div>
        </div>
    </div>
</div>

<div class="card mt-5">
    <div class="card-body">
        <table class="table table-bordered">
            <tr>
                <td width="200">Nama</td>
                <td width="1">:</td>
                <td>
                    <?php echo $_SESSION['user']['nama']; ?>
                </td>
            </tr>
            <tr>
                <td width="200">Level User</td>
                <td width="1">:</td>
                <td>
                    <?php echo $_SESSION['user']['level']; ?>
                </td>
            </tr>
            <tr>
                <td width="100">Tanggal Login</td>
                <td width="1">:</td>
                <td>
                    <?php echo date('d-m-y'); ?>
                </td>
            </tr>
        </table>
    </div>
</div>