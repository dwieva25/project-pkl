<?php

    $conn = mysqli_connect("localhost","root","","project_pkl");

    if( !$conn ){
        die("Gagal terhubung dengan database: " . mysqli_connect_error());
    }
?>