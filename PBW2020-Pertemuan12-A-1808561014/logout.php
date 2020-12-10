<?php
//setelah logout akan kembali ke hlm admin
    session_start();
    session_unset();
    session_destroy();
    header('Location: index.php');
?>