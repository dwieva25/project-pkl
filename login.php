<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Login Admin</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

    <div class="login-box">
        <img src="img/admin.png" class="admin">
        <h1>Login Here</h1>
         <?php 
          if(isset($_GET['pesan'])){
          if($_GET['pesan'] == "gagal"){
           echo "Login gagal! username dan password salah!";
          }
          else if($_GET['pesan'] == "logout"){
          echo "Anda telah berhasil logout";
         }
         else if($_GET['pesan'] == "belum_login"){
         echo "Anda harus login untuk mengakses halaman admin";
         }
         }
      ?>
       <form method="POST" action="cek_login.php" >
        
            <p>Username</p>
            <input type="text" name="username" placeholder="Enter Username">
            <p>Password</p>
            <input type="password" name="password" placeholder="Enter Password">

            <input type="submit" name="submit" value="Login">

        </form>
    </div>

</body>
</html>