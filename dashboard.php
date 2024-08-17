<?php
  require_once "koneksi.php";
  date_default_timezone_set('Asia/Jakarta');
  session_start();
  if(empty($_SESSION['username']) and empty($_SESSION['password'])){
    echo'
    <center>
    <br><br><br><br><br><br><br><br><br><br>
    <b>Maaf, Silahkan Melakukan Login!</b><br><br>
    <b>Anda Telah Keluar Dari Sistem</b><br>
    <b>Atau Anda Belum Melakukan Login</b><br>

    <a href="index.php" title="klik Gambar Ini Untuk Kembali Ke Halaman Login"><img src="img/key-login.png" heigth="100" width="100"></img></a>
    </center>
    ';
  }else{

?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Dashboard - <?php echo ucwords(str_replace('_',' ',$_GET['hal'])) ?></title>

    <!-- Bootstrap CSS -->
    <script src="https://cdn.tiny.cloud/1/du2ji08u9j975eau9z1frbc47sneirxgh0q1lv2uykbgrix1/tinymce/7/tinymce.min.js" referrerpolicy="origin"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/2.1.4/css/dataTables.dataTables.css">
    
  </head>
  <body class="bg-secondary">
    <div class="container-fluid">
      <!-- start header -->
      <div class="row">
        <div class="col-lg-12 py-2 bg-dark fixed-top">
          <div class="dropdown float-right">
            <button class="btn btn-dark dropdown-toggle" type="button" data-toggle="dropdown" aria-expanded="false">
              User
            </button>
            <div class="dropdown-menu dropdown-menu-right">
              <a class="dropdown-item" href="">
                <div class="media">
                  <img src="img/logo.png" height="50" width="50" class="align-self-center mr-3" alt="...">
                  <div class="media-body">
                    <h5 class="mt-0"><i class="bi bi-person-fill"></i> <?php echo $_SESSION['namaadmin'] ?></h5>
                    <small><p class="mb-0"><i class="bi bi-clock"></i> Pkl <?php echo date('H:i:s')?> WIB</p></small>
                  </div>
                </div>
              </a>
              <a class="dropdown-item" href="dashboard.php?hal=user"><i class="bi bi-gear"></i> Setting</a>
              <a class="dropdown-item" href="logout.php" onclick="return confirm('Apakah anda yakin ingin logout?')"><i class="bi bi-box-arrow-right"></i> Logout</a>
            </div>
          </div>
        </div>
      </div>
      <!-- end header -->

      <!-- start content -->
      <div class="row mt-4" style="padding-top:50px">
        <div class="col-lg-2 position-fixed vh-100 ">
          <div class="nav flex-column nav-pills border border-dark rounded" id="v-pills-tab" role="tablist" aria-orientation="vertical">
            <a class="nav-link text-white <?php echo ($_GET['hal'] == 'home') ? "active bg-dark":"" ?>" 
            href="dashboard.php?hal=home">Home</a>
            <a class="nav-link text-white <?php echo ($_GET['hal'] == 'profil') ? "active bg-dark":"" ?>" 
            href="dashboard.php?hal=profil">Profil</a>
            <a class="nav-link text-white <?php echo (($_GET['hal'] == 'galeri') or ($_GET['hal'] == 'tambah_galeri') or ($_GET['hal'] == 'edit_galeri')) ? "active bg-dark":"" ?>" 
            href="dashboard.php?hal=galeri">Galeri</a>
            <a class="nav-link text-white <?php echo (($_GET['hal'] == 'wisata') or ($_GET['hal'] == 'tambah_wisata') or ($_GET['hal']=='edit_wisata'))? "active bg-dark":"" ?>" 
            href="dashboard.php?hal=wisata">Wisata</a>
            <a class="nav-link text-white <?php echo (($_GET['hal'] == 'kategori') or ($_GET['hal'] == 'tambah_kategori') or ($_GET['hal'] == 'edit_kategori')) ? "active bg-dark":"" ?>" href="dashboard.php?hal=kategori">Kategori</a>
            <a class="nav-link text-white <?php echo (($_GET['hal'] == 'berita') or ($_GET['hal'] == 'tambah_berita')) ? "active bg-dark":"" ?>" href="dashboard.php?hal=berita" >Berita</a>
          </div>
        </div>
        <div class="col-lg-10 offset-2">
        <?php
          if(isset($_GET['hal'])){

            switch($_GET['hal']){
              case 'home':
                include "modul/mod_home/home.php";
                break;
              case 'profil':
                include "modul/mod_profil/profil.php";
                break;
              case 'galeri':
                include "modul/mod_galeri/galeri.php";
                break;
              case 'tambah_galeri':
                include "modul/mod_galeri/tambah_galeri.php";
                break;
              case 'edit_galeri':
                include "modul/mod_galeri/edit_galeri.php";
                break;
              case 'hapus_galeri':
                include "modul/mod_galeri/hapus_galeri.php";
                break;
              case 'wisata':
                include "modul/mod_wisata/wisata.php";
                break;
              case 'tambah_wisata':
                include "modul/mod_wisata/tambah_wisata.php";
                break;
              case 'edit_wisata':
                include "modul/mod_wisata/edit_wisata.php";
                break;
              case 'hapus_wisata':
                include "modul/mod_wisata/hapus_wisata.php";
                break;
              case 'kategori':
                include "modul/mod_kategori/kategori.php";
                break;
              case 'tambah_kategori':
                include "modul/mod_kategori/tambah_kategori.php";
                break;
              case 'edit_kategori':
                include "modul/mod_kategori/edit_kategori.php";
                break;
              case 'hapus_kategori':
                include "modul/mod_kategori/hapus_kategori.php";
                break;
              case 'berita':
                include "modul/mod_berita/berita.php";
                break;
              case 'tambah_berita':
                include "modul/mod_berita/tambah_berita.php";
                break;
              case 'hapus_berita':
                include "modul/mod_berita/hapus_berita.php";
                break;
              case 'user':
                include "modul/mod_user/user.php";
                break;
              default;
                echo "<h3>Halaman Tidak Di Temukan</h3>";
            }
          }else{
            header("location:dashboard.php?hal=home");
          }
        ?>
        </div>
      </div>
      <!-- end content -->
    </div>


    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
    

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    
    <!-- <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous"></script> -->

    <script>
      tinymce.init({
        selector: 'textarea',
        plugins: 'anchor autolink charmap codesample emoticons image link lists media searchreplace table visualblocks wordcount checklist mediaembed casechange export formatpainter pageembed linkchecker a11ychecker tinymcespellchecker permanentpen powerpaste advtable advcode editimage advtemplate ai mentions tinycomments tableofcontents footnotes mergetags autocorrect typography inlinecss markdown',
        toolbar: 'undo redo | blocks fontfamily fontsize | bold italic underline strikethrough | link image media table mergetags | addcomment showcomments | spellcheckdialog a11ycheck typography | align lineheight | checklist numlist bullist indent outdent | emoticons charmap | removeformat',
        tinycomments_mode: 'embedded',
        tinycomments_author: 'Author name',
        mergetags_list: [
          { value: 'First.Name', title: 'First Name' },
          { value: 'Email', title: 'Email' },
        ],
        ai_request: (request, respondWith) => respondWith.string(() => Promise.reject("See docs to implement AI Assistant")),
      });
    </script>
    <script src="https://code.jquery.com/jquery-3.7.1.js"></script>
    <script src="https://cdn.datatables.net/2.1.4/js/dataTables.js"></script>
    <script>
      const table = new DataTable('#example', {
        columnDefs: [
            {
                searchable: false,
                orderable: false,
                targets: 0
            }
        ],
        order: [[1, 'asc']]
    });
    
    table
        .on('order.dt search.dt', function () {
            let i = 1;
    
            table
                .cells(null, 0, { search: 'applied', order: 'applied' })
                .every(function (cell) {
                    this.data(i++);
                });
        })
      .draw();
    </script>
  </body>
</html>
<?php
}
?>
