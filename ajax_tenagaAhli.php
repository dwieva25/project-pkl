<?php  
$koneksi = mysqli_connect("localhost","root","","project_pkl");

$input_No = $_REQUEST['input_No'];
$nama = $_REQUEST['nama'];
$tugas = $_REQUEST['tugas'];
$id_jasa = $_REQUEST['id_jasa'];

$respon = array();

 $sql = "INSERT INTO tenaga_ahli (`No`, Nama, Tugas, id_jasa) VALUES ('".$input_No."','".$nama."','".$tugas."','".$id_jasa."')";
 $simpan = mysqli_query($koneksi, $sql);

$respon['input_No'] = $input_No;
$respon['input_Nama'] = $nama;
$respon['input_Tugas'] = $tugas;

$jres = json_encode($respon);

echo($jres);