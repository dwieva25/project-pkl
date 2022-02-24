<?php 
  
    include 'koneksi.php';
 
    // menangkap data yang dikirim dari form login
    $username = $_POST['username'];
    $password = $_POST['password'];
 
    // menyeleksi data pada tabel admin dengan username dan password yang sesuai
    $data = mysqli_query($conn, "SELECT * FROM admin WHERE username='$username' and password='$password'");

    // menghitung jumlah data yang ditemukan
    $cek = mysqli_num_rows($data);
 
    if ($cek> 0) {
  session_start();

  // inisialisasi session /////////

  ("username");
  ("password");
  // ("status");
  ("id_akses");

  $_SESSION['username']     = $r['username'];
  $_SESSION['password']     = $r['password'];
  // $_SESSION['status']       = $r['status'];
  $_SESSION['id_akses']     = $r['id_akses'];

  if ($_SESSION['id_akses'] == 4) {
    header('location:table.php');
  } else {
    header('location:table.php');
  }
} else {
  echo "<SCRIPT language=Javascript>
  alert('Login Anda Gagal,  username dan password tidak valid. Silahkan Hubungi Admin')
  </script>";
  echo "
  <meta http-equiv='refresh' content='0; url=login.php'/>";
}

?>