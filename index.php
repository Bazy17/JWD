<?php
    session_start();
    if((empty($_SESSION['username'])) and (empty($_SESSION['password']))){

?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>BazyAdventure</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body>
    <div class="container mt-4">
        <div class="col-md-4 posisitengah">
            <img src="img/logo.png" alt="logo" width="150" height="150" class="rounded mx-auto d-block">
            <div class="card mt-4">
                <!-- <div class="card-header bg-dark text-white">Form Login</div> -->
                <div class="card-body">
                    <form action="cek_login.php" method="POST">
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Username</label>
                            <input type="text" name="username" class="form-control" placeholder="Masukkan Username" required 
                            value="<?php echo (isset($_COOKIE["username"])) ? $_COOKIE["username"]:"" ?>">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Password</label>
                            <input type="password" name="password" class="form-control" placeholder="Masukkan Password" required
                            value="<?php echo (isset($_COOKIE["password"])) ? $_COOKIE["password"]:"" ?>">
                        </div>
                        <div class="mb-3 form-check">
                            <input type="checkbox" class="form-check-input" id="exampleCheck1" name="remember"
                            <?php echo ((isset($_COOKIE["username"])) and (isset($_COOKIE["password"]))) ? "checked":"" ?> >
                            <label class="form-check-label" for="exampleCheck1">Ingat Saya</label>
                        </div>
                        <button type="submit" class="btn btn-dark">Login</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
  </body>
</html>

<?php
    }else{
        echo "<script>window.history.go(-1)</script>";
    }
?>