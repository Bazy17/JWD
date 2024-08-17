<div class="container-fluid">
    <div class="card">
        <div class="card-header">
            <a href="dashboard.php?hal=tambah_galeri" class="btn btn-dark"><i class="bi bi-plus"></i> Tambah Data Galeri</a>
        </div>
        <div class="card-body">
            <table id="example" class="display" style="width: 100%">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Keterangan Foto</th>
                        <th>Nama Wisata</th>
                        <th>Foto</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $sql = mysqli_query($koneksi, "SELECT * FROM tbl_galeri, tbl_wisata WHERE tbl_galeri.id_wisata=tbl_wisata.id_wisata");

                    while($r = mysqli_fetch_array($sql)) { ?>
                        <tr>
                            <td></td>
                            <td><?php echo $r['keterangan_foto'] ?></td>
                            <td><?php echo $r['nama_wisata'] ?></td>
                            <td><img src="././img_galeri/<?php echo $r['nama_foto'] ?>" width="100" height="100" ></td>
                            <td>
                                <a href="dashboard.php?hal=edit_galeri&id=<?php echo $r['id_galeri'] ?>" class="btn btn-secondary" title="edit"><i class="bi bi-pencil"></i></a>

                                <a href="dashboard.php?hal=hapus_galeri&id=<?php echo $r['id_galeri'] ?>" class="btn btn-secondary" title="hapus"><i class="bi bi-trash3"></i></a>
                            </td>
                        </tr>
                    <?php
                    }
                    ?>
                    
                </tbody>
            </table>
        </div>
    </div>
</div>