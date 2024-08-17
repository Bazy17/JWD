<div class="container-fluid">
    <div class="card">
        <div class="card-header">
            <a href="dashboard.php?hal=tambah_kategori" class="btn btn-dark"><i class="bi bi-plus"></i> Tambah Data Kategori</a>
        </div>
        <div class="card-body">
            <table id="example" class="display" style="width:100%">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Kategori</th>
                        <th>Keterangan</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        $sql = mysqli_query($koneksi, "SELECT * FROM tbl_kategori");
                        while($r = mysqli_fetch_array($sql)){
                    ?>
                    <tr>
                        <td></td>
                        <td><?php echo $r['nama_kategori'] ?></td>
                        <td><?php echo $r['keterangan']?></td>
                        <td>
                            <a href="dashboard.php?hal=edit_kategori&id=<?php echo $r['id_kategori'] ?>" class="btn btn-secondary" title="Edit"><i class="bi bi-pencil"></i></a>

                            <a href="dashboard.php?hal=hapus_kategori&id=<?php echo $r['id_kategori'] ?>" class="btn btn-secondary"><i class="bi bi-trash3"></i></a>
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