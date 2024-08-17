<div class="container-fluid">
    <div class="card">
        <div class="card-header">
            
            <a href="dashboard.php?hal=tambah_berita" class="btn btn-dark"><i class="bi bi-plus"></i> Tambah Data Berita</a>
        </div>
        <div class="card-body">
        <table id="example" class="display" style="width:100%">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Judul Berita</th>
                    <th>Penulis</th>
                    <th>Tanggal Upload</th>
                    <th>Gambar Berita</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    $sql = mysqli_query($koneksi, "SELECT * FROM tbl_berita, tbl_admin WHERE tbl_berita.id_admin_berita=tbl_admin.id_admin");
                    while($r = mysqli_fetch_array($sql)){
                    
                ?>
                <tr>
                    <td></td>
                    <td><?php echo $r ['judul_berita']?></td>
                    <td><?php echo $r ['nama_admin']?></td>
                    <td><?php echo date('d-m-y', strtotime($r ['tanggal_berita']))?></td>
                    <td><img src="././img_berita/<?php echo $r ['foto_berita']?>" height="100" width="150"></td>
                    <td>
                        <a href="dashboard.php?hal=hapus_berita&id=<?php echo $r['id_berita'] ?>;" class="btn btn-secondary" title="Hapus"><i class="bi bi-trash3"></i></a>
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