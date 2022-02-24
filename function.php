<?php 
session_start();

// membuat koneksi dengan database
$koneksi = mysqli_connect("localhost","root","","project_pkl");

    
    if (isset($_POST['submit'])){

        // die(var_dump($_POST));
       
        $perubahan = $_POST['perubahan'];
        $tgl_perubahan = $_POST['tgl_perubahan'];
        $Nama_KLD = $_POST['Nama_KLD'];
        $satuan_kerja = $_POST['satuan_kerja'];
        $pejabat = $_POST['pejabat'];
        $program = $_POST['program'];
        $kegiatan = $_POST['kegiatan'];
        $output = $_POST['output'];
        $kode_BMN = $_POST['kode_BMN'];
        $Nama_BMN = $_POST['Nama_BMN'];
        $Nama_pekerjaan = $_POST['Nama_pekerjaan'];
        $kriteria_indikator = $_POST['kriteria_indikator'];
        $target_sasaran = $_POST['target_sasaran'];
        $manfaat = $_POST['manfaat'];
        $kuantitas = $_POST['kuantitas'];
        $ruang_lingkup = $_POST['ruang_lingkup'];
        $waktu_penggunaan = $_POST['waktu_penggunaan'];
        $perkiraan_biaya = $_POST['perkiraan_biaya'];
        $rincian_perhitungan = $_POST['rincian_perhitungan'];
        $jml_unitkerja = $_POST['jml_unitkerja'];
        $tingkat_beban = $_POST['tingkat_beban'];
        $pelaku_usaha = $_POST['pelaku_usaha'];
        $syarat_usaha = $_POST['syarat_usaha'];
        $pemeliharaan = $_POST['pemeliharaan'];
        // $pelatihan = $_POST['pelatihan'];
        // $pekerjaan_sejenis = $_POST['pekerjaan_sejenis'];
        $indikasi = $_POST['indikasi'];
        $rekomendasi = $_POST['rekomendasi'];
        $catatan = $_POST['catatan'];
        $disusun = $_POST['disusun'];
        $disusun_oleh = $_POST['disusun_oleh'];
        $disetujui = $_POST['disetujui'];
        $pengguna_anggaran = $_POST['pengguna_anggaran'];
        $pembuat_komitmen = $_POST['pembuat_komitmen'];
        $mengetahui = $_POST['mengetahui'];
        $tenaga_ahlii = $_POST['tenaga_ahlii'];
        $TenagaAhli = $_POST['TenagaAhli'];
        

        if($_POST['radiopksj']=="ya"){
            $cekboxpksj=$_POST['radiopksj'];
        
        }
        elseif($_POST['radiopksj']=="tidak"){
           $cekboxpksj=$_POST['radiopksj'];
        }



        if($_POST['radioindikasi']=="Direkomendasikan"){
            $radioindikasi=$_POST['radioindikasi'];
        
        }
        elseif($_POST['radioindikasi']=="Tidak direkomendasikan"){
           $radioindikasi=$_POST['radioindikasi'];
        }



        if($_POST['radiopelatihan']=="ya"){
            $radiopelatihan=$_POST['radiopelatihan'];
        
        }
        elseif($_POST['radiopelatihan']=="tidak"){
           $radiopelatihan=$_POST['radiopelatihan'];
        }
         
       


        $sql = "INSERT INTO kebutuhan_jasa (perubahan, tgl_perubahan, Nama_KLD, satuan_kerja, pejabat, program, kegiatan, output, pembuatan_software, kode_BMN, Nama_BMN, Nama_pekerjaan, kriteria_indikator, target_sasaran, manfaat, kuantitas, ruang_lingkup, waktu_penggunaan, perkiraan_biaya, rincian_perhitungan, jml_unitkerja, tingkat_beban, pelaku_usaha, syarat_usaha, penyedia, pemeliharaan, pelatihan, pekerjaan_sejenis, indikasi, rekomendasi, catatan, disusun, disusun_oleh, disetujui,pengguna_anggaran, pembuat_komitmen, mengetahui, tenaga_ahlii,TenagaAhli) VALUES ('".$perubahan."','".$tgl_perubahan."','".$Nama_KLD."','".$satuan_kerja."', '".$pejabat."', '".$program."', '".$kegiatan."', '".$output."', '".$pembuatan_software."', '".$kode_BMN."', '".$Nama_BMN."','".$Nama_pekerjaan."','".$kriteria_indikator."','".$target_sasaran."','".$manfaat."','".$kuantitas."','".$ruang_lingkup."','".$waktu_penggunaan."','".$perkiraan_biaya."','".$rincian_perhitungan."','".$jml_unitkerja."','".$tingkat_beban."', '".$pelaku_usaha."', '".$syarat_usaha."', '".$penyedia."','".$pemeliharaan."','".$radiopelatihan."','".$cekboxpksj."','".$radioindikasi."','".$rekomendasi."','".$catatan."','".$disusun."','".$disusun_oleh."','".$disetujui."', '".$pengguna_anggaran."','".$pembuat_komitmen."','".$mengetahui."','".$tenaga_ahlii."','".$TenagaAhli."')";
            $simpan = mysqli_query($koneksi, $sql);
             header('location: table.php');

    // var_dump($disusun);
        
        if(!empty($perubahan) && !empty($tgl_perubahan) && !empty($Nama_KLD) && !empty($satuan_kerja) && !empty($pejabat) && !empty($program) && !empty($kegiatan) && !empty($output) && !empty($pembuatan_software) && !empty($kode_BMN) && !empty($Nama_BMN) && !empty($Nama_pekerjaan) && !empty($kriteria_indikator) && !empty($target_sasaran) && !empty($manfaat) && !empty($kuantitas) && !empty($ruang_lingkup) && !empty($waktu_penggunaan) && !empty($perkiraan_biaya) && !empty($rincian_perhitungan) && !empty($jml_unitkerja)  && !empty($tingkat_beban) && !empty($pelaku_usaha) && !empty($syarat_usaha) && !empty($penyedia) && !empty($pemeliharaan) && !empty($pelatihan)  && !empty($pekerjaan_sejenis) && !empty($indikasi) && !empty($rekomendasi) && !empty($catatan) && !empty($disusun) && !empty($disusun_oleh) && !empty($disetujui) && !empty($pengguna_anggaran) && !empty($pembuat_komitmen) && !empty($mengetahui) && !empty($tenaga_ahlii) && !empty($TenagaAhli)){


            $sql = "INSERT INTO kebutuhan_jasa (perubahan, tgl_perubahan, Nama_KLD, satuan_kerja, pejabat, program, kegiatan, output, pembuatan_software, kode_BMN, Nama_BMN, Nama_pekerjaan, kriteria_indikator, target_sasaran, manfaat, kuantitas, ruang_lingkup, waktu_penggunaan, perkiraan_biaya, rincian_perhitungan, jml_unitkerja, tingkat_beban, pelaku_usaha, syarat_usaha, penyedia, pemeliharaan, pelatihan, pekerjaan_sejenis, indikasi, rekomendasi, catatan, disusun, disusun_oleh, disetujui) VALUES ('".$perubahan."','".$tgl_perubahan."','".$Nama_KLD."','".$satuan_kerja."', '".$pejabat."', '".$program."', '".$kegiatan."', '".$output."', '".$pembuatan_software."', '".$kode_BMN."', '".$Nama_BMN."','".$Nama_pekerjaan."','".$kriteria_indikator."','".$target_sasaran."','".$manfaat."','".$kuantitas."','".$ruang_lingkup."','".$waktu_penggunaan."','".$perkiraan_biaya."','".$rincian_perhitungan."','".$jml_unitkerja."','".$tingkat_beban."', '".$pelaku_usaha."', '".$syarat_usaha."', '".$penyedia."','".$pemeliharaan."','".$pelatihan."','".$pekerjaan_sejenis."','".$indikasi."','".$rekomendasi."','".$catatan."','".$disusun."','".$disusun_oleh."','".$disetujui."')";
            $simpan = mysqli_query($koneksi, $sql);
            if($simpan && isset($_GET['aksi'])){
                if($_GET['aksi'] == 'create'){
                    header('location: table.php');
                }
            }
        } else {
            $pesan = "Tidak dapat menyimpan, data belum lengkap!";
            echo($pesan);
        }
    }
    
    ?>