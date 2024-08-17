<div class="container-fluid">
    <div class="card">
        <div class="card-header"><strong>Ubah Konten Profil</strong></div>
        <div class="card-body">
            <?php
                $sql = mysqli_query($koneksi, "SELECT * FROM tbl_profil");

                $r = mysqli_fetch_array($sql);
            ?>
            <form action="" method="POST" enctype="multipart/form-data">
                <div class="form-group">
                  <label>Konten Profil</label>
                  <textarea class="form-control" name="konten_profil" id="default" rows="10"><?php echo $r['konten_profil'] ?></textarea>
                </div>
                <div class="form-group">
                  <label>Foto Profil</label>
                  <input type="file" class="form-control-file" name="foto_profil" id="" placeholder="" aria-describedby="fileHelpId">
                  <small id="fileHelpId" class="form-text text-muted">Upload File Image(jpg, jpeg, png)</small>
                </div>
                <div class="form-group">
                    <img src="././img_profil/<?php echo $r['foto_profil'] ?>" alt="<?php echo $r['foto_profil'] ?>" height="100" width="100">
                </div>
                <button type="submit" name="submit" class="btn btn-dark">Update</button>
            </form>

            <?php
            if(isset($_POST['submit'])) {
                $konten_profil = $_POST['konten_profil'];
                $id_profil = $r['id_profil'];

                $foto_profil = $_FILES['foto_profil']['name'];
                $path_foto_profil = "././img_profil/".$r['foto_profil'];

                $file_extension = array('png', 'jpg', 'jpeg', 'gif');
                $extension = pathinfo($foto_profil, PATHINFO_EXTENSION);
                $size_foto_profil = $_FILES['foto_profil']['size'];
                $rand = rand();


                if(empty($foto_profil)) {
                    mysqli_query($koneksi, "UPDATE tbl_profil SET konten_profil='$konten_profil' WHERE id_profil='$id_profil'");

                    echo "<script>alert('Konten Profil Berhasil Di Ubah!'); window.location = 'dashboard.php?hal=profil'</script>";
                } else {
                    if (!in_array($extension, $file_extension)) {
                        echo "<script>alert('File Tidak Didukung'); window.location='dashboard.php?hal=profil'</script>";
                    } else {
                        if ($size_foto_profil < 409600){
                            $nama_foto_profil = $rand.'_'.$foto_profil;
                            unlink($path_foto_profil);
                            move_uploaded_file($_FILES['foto_profil']['tmp_name'], '././img_profil/'.$nama_foto_profil);

                            mysqli_query($koneksi, "UPDATE tbl_profil SET konten_profil='$konten_profil', foto_profil='$nama_foto_profil' WHERE id_profil='$id_profil'");

                            echo "<script>alert('Konten dan Foto Profil Berhasil Diubah'); window.location = 'dashboard.php?hal=profil'</script>";
                        } else {
                            echo "<script>alert('Ukuran Foto Terlalu Besar'); window.location = 'dashboard.php?hal=profil'</script>";
                        }
                    }
                }
            }
            ?>
        </div>
    </div>
</div>