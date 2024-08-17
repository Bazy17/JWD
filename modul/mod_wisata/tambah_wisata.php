<div class="container-fluid">
    <div class="card">
        <div class="card-header"></div>
        <div class="card-body">
            <form action="" method="POST">
                <div class="form-group">
                  <label>Nama Wisata</label>
                  <input type="text" name="nama_wisata" class="form-control" placeholder="Masukkan Nama Wisata">
                </div>
                <div class="form-group">
                  <label>Kategori Wisata</label>
                  <select class="form-control" name="id_kategori">
                    <option value="0" selected>--Pilih Kategori Wisata--</option>
                    <?php
                    $sql = mysqli_query($koneksi, "SELECT * FROM tbl_kategori ORDER BY id_kategori ASC");
                    while($r = mysqli_fetch_array($sql)){ ?>

                    <option value="<?php echo $r['id_kategori'] ?>"><?php echo $r['nama_kategori'] ?></option>

                    <?php 
                        }
                    ?>
                  </select>
                </div>
                <div class="form-group">
                  <label>Lokasi Wisata</label>
                  <input type="text" name="lokasi_wisata" class="form-control" placeholder="Masukkan Lokasi Wisata">
                </div>
                <div class="form-group">
                  <label>Link Peta</label>
                  <input class="form-control" name="link_peta" rows="2" placeholder="Masukkan Link Peta"></input>
                </div>
                <div class="form-group">
                  <label>Deskripsi Wilayah</label>
                  <textarea class="form-control" name="deskripsi" rows="3" placeholder="Masukkan Deskripsi Wilayah"></textarea>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-dark" name="submit">Tambahkan Wisata</button>
                </div>
            </form>
            <?php
                if(isset($_POST['submit'])) {
                    $nama_wisata = $_POST['nama_wisata'];
                    $id_kategori = $_POST['id_kategori'];
                    $lokasi_wisata = $_POST['lokasi_wisata'];
                    $link_peta = $_POST['link_peta'];
                    $deskripsi = $_POST['deskripsi'];

                    mysqli_query($koneksi, "INSERT INTO tbl_wisata (nama_wisata, id_kategori, lokasi_wisata, link_peta, deskripsi) VALUES ('$nama_wisata', '$id_kategori', '$lokasi_wisata', '$link_peta', '$deskripsi')");

                    echo "<script>alert('Wisata Berhasil Ditambahkan'); window.location = 'dashboard.php?hal=wisata'</script>";
                }
            ?>
        </div>
    </div>
</div>
