<?php
    $host = "localhost";
    $user = "root";
    $pw   =  "";
    $db   = "mini market";
    $koneksi = mysqli_connect($host,$user,$pw,$db);

    if(!$koneksi) {
        die("koneksi dengan database gagal : ".mysql_connect_error());
    } 
    ?>