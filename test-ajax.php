<?php  
$koneksi = mysqli_connect("localhost","root","","project_pkl");

$input_no = $_REQUEST['input_no'];
$nama_penyedia = $_REQUEST['nama_penyedia'];
$rantai_pasok = $_REQUEST['rantai_pasok'];
$id_jasa = $_REQUEST['id_jasa'];

$respon = array();

 $sql = "INSERT INTO penyedia (`No`, Nama_penyedia, rantai_pasok, id_jasa) VALUES ('".$input_no."','".$nama_penyedia."','".$rantai_pasok."','".$id_jasa."')";
 $simpan = mysqli_query($koneksi, $sql);

$respon['input_no'] = $input_no;
$respon['nama'] = $nama_penyedia;
$respon['rantai'] = $rantai_pasok;

$jres = json_encode($respon);

echo($jres);