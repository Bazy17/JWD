<?php

    session_start();

    session_destroy();
    
    echo "<script>alert('Anda Telah Logout Dari Sistem'); window.location = 'index.php'</script>";
?>