<?php 
session_start();
if ($_SESSION['priv'] != 'admin') {
    header("Location: ../");
    
}
require "../database.php"?>
<script>if ( window.history.replaceState ) {
 window.history.replaceState( null, null, window.location.href );
}
</script>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
 
    <link rel="stylesheet" type="text/css" href="login.css">
 
    <title>Login</title>
</head>
<body>
    <?php
    $i =0;
        while ($row = mysqli_fetch_assoc($ongoing)) :
            $judul = $row['judul'];
            $id = $row['id'];
            $gambar = $row['gambar'];
            echo "$i. $judul ($gambar) <a href ='hapus'>hapus</a> <a href ='kurang'>kurang</a>";
            $i++;
    ?>
</body>
</html>