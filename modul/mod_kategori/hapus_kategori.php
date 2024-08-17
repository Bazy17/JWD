<?php
    $id = $_GET['id'];

    mysqli_query($koneksi, "DELETE FROM tbl_kategori WHERE id_kategori='$id' ");

    echo"<script>alert('Kategori Berhasil Dihapus'); window.location = 'dashboard.php?hal=kategori'</script>";
?>