<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card-group text-center">
                <div class="card text-white bg-info mb-3 m-2 rounded" style="max-width: 18rem;">
                    <div class="card-body">
                        <?php
                        $sql = mysqli_query($koneksi, "SELECT * FROM tbl_galeri");
                        $jumlah_galeri = mysqli_num_rows($sql);
                        ?>
                        <h1 class="card-title"><?php echo $jumlah_galeri ?></h1>
                        <p class="card-text">Total Data Galeri</p>
                    </div>
                    <div class="card-footer text-center"><a class="text-white text-decoration-none" href="dashboard.php?hal=galeri">Lihat Selengkapnya <i class="bi bi-arrow-right-circle-fill"></i></a></div>
                </div>

                <div class="card text-white bg-dark mb-3 m-2 rounded" style="max-width: 18rem;">
                    <div class="card-body">
                        <?php
                        $sql = mysqli_query($koneksi, "SELECT * FROM tbl_wisata");
                        $jumlah_wisata = mysqli_num_rows($sql);
                        ?>
                        <h1 class="card-title"><?php echo $jumlah_wisata ?></h1>
                        <p class="card-text">Total Data Wisata</p>
                    </div>
                    <div class="card-footer text-center"><a class="text-white text-decoration-none" href="">Lihat Selengkapnya <i class="bi bi-arrow-right-circle-fill"></i></a></div>
                </div>

                <div class="card text-white bg-success mb-3 m-2 rounded" style="max-width: 18rem;">
                    <div class="card-body">
                        <?php
                        $sql = mysqli_query($koneksi, "SELECT * FROM tbl_kategori");
                        $jumlah_kategori = mysqli_num_rows($sql);
                        ?>
                        <h1 class="card-title"><?php echo $jumlah_kategori ?></h1>
                        <p class="card-text">Total Data Kategori</p>
                    </div>
                    <div class="card-footer text-center"><a class="text-white text-decoration-none" href="">Lihat Selengkapnya <i class="bi bi-arrow-right-circle-fill"></i></a></div>
                </div>

                <div class="card text-white bg-danger mb-3 m-2 rounded" style="max-width: 18rem;">
                    <div class="card-body">
                        <?php
                        $sql = mysqli_query($koneksi, "SELECT * FROM tbl_berita");
                        $jumlah_berita = mysqli_num_rows($sql);
                        ?>
                        <h1 class="card-title"><?php echo $jumlah_berita ?></h1>
                        <p class="card-text">Total Data Berita</p>
                    </div>
                    <div class="card-footer text-center"><a class="text-white text-decoration-none" href="">Lihat Selengkapnya <i class="bi bi-arrow-right-circle-fill"></i></a></div>
                </div>
            </div>
        </div>
    </div>
</div>