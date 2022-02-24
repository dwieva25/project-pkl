<?php

if(isset($_POST['search']))
{
    $valueToSearch = $_POST['valueToSearch'];
    // search in all table columns
    // using concat mysql function
    $query = "SELECT * FROM `kebutuhan_jasa` WHERE CONCAT(`id_jasa`, `perubahan`, `tgl_perubahan`, `Nama_KLD`, `satuan_kerja`, `pejabat`, `program`, `kegiatan`, `output`, `kode_BMN`, `Nama_BMN`, `pembuatan_software`, `Nama_pekerjaan`, `kriteria_indikator`, `target_sasaran`, `manfaat`, `kuantitas`, `ruang_lingkup`, `waktu_penggunaan`, `perkiraan_biaya`, `rincian_perhitungan`, `jml_unitkerja`, `Ppk`, `tingkat_beban`, `pelaku_usaha`, `syarat_usaha`, `penyedia`, `pemeliharaan`, `pelatihan`, `pekerjaan_sejenis`, `indikasi`, `rekomendasi`, `catatan`, `disusun`, `disusun_oleh`, `disetujui`, `pengguna_anggaran`, `pembuat_komitmen`, `mengetahui`, `tenaga_ahlii`, `TenagaAhli`) LIKE '%".$valueToSearch."%'";
    $search_result = filterTable($query);
    
}
 else {
    $query = "SELECT * FROM `kebutuhan_jasa`";
    $search_result = filterTable($query);
}

// function to connect and execute the query
function filterTable($query)
{
    $connect = mysqli_connect("localhost", "root", "", "project_pkl");
    $filter_Result = mysqli_query($connect, $query);
    return $filter_Result;
}

?>

<!DOCTYPE html>
<html>
    <head>
        <title>PHP HTML TABLE DATA SEARCH</title>
        <style>
            table,tr,th,td
            {
                border: 1px solid black;
            }
        </style>
    </head>
    <body>
        
        <form action="search.php" method="post">
            <input type="text" name="valueToSearch" placeholder="Value To Search"><br><br>
            <input type="submit" name="search" value="Filter"><br><br>
            
            <table class="table table-bordered"  width="100%" cellspacing="0">
                                    
                                        <?php 
                                        include 'koneksi.php';
                                        $no=1;
                                        $data = mysqli_query($conn,"select * from kebutuhan_jasa");
                                        while($d = mysqli_fetch_array($data)){

                                         ?>

                                    
                                        <tr>
                                            <th width="200px">Perubahan Ke</th>

                                            <td><?php echo $d['perubahan'];?></td>
                                        </tr>
                                    
                                        <tr>
                                            <th>Tanggal Perubahan</th>

                                            <td><?php echo $d['tgl_perubahan'];?></td>
                                        </tr>

                                  <table class="table table-bordered"  width="100%" cellspacing="0">
                                  
                                  
                                         <tr>
                                            <th width="200px">Nama K/L/D</th>

                                            <td><?php echo $d['Nama_KLD'];?></td>
                                        </tr>
                                    
                                            
                                        <tr>
                                            <th>Satuan kerja</th>

                                            <td><?php echo $d['satuan_kerja'];?></td>
                                        </tr>

                                         <tr>
                                            <th>Pejabat Pembuat <br>Komitmen (nama <br> jabatan, bukan orang)</th>

                                            <td><?php echo $d['pejabat'];?></td>
                                        </tr>

                                        <tr>
                                            <th>Program (sesuai DIPA)</th>

                                            <td><?php echo $d['program'];?></td>
                                        </tr>

                                         <tr>
                                            <th>Kegiatan (sesuai DIPA)</th>

                                            <td><?php echo $d['kegiatan'];?></td></td>
                                        </tr>
                                         
                                         <tr>
                                            <th>Output (sesuai DIPA)</th>

                                            <td><?php echo $d['output'];?></td>
                                        </tr> 
                                      
                                        <br>
                                    </table>

                                    <br><br>
                                          <table class="table table-bordered"  width="100%" cellspacing="0">
                                   <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Identifikasi kode Barang Milik Negara (BMN) – khusus pengadaan software/aplikasi</h6>
                        </div>
                                     
                                         <tr>
                                            <th width="200px">Apabila pekerjaan pembuatan sofware, mohon dijelaskan Kode barang (BMN) dan nama barang pada SIMAK BMN yang akan dipelihara</th>

                                            <td>
                                             <table class="table table-bordered"  width="100%" cellspacing="0">

                                                <table class="form-table" id="customFieldsKode">
                                            <tr valign="top">
                                               <!--  <th scope="row"><label for="customFieldKode"></label></th> -->
                                                <!-- <td>
                                                     <tr> -->
                                                    <th>Kode BMN/ Persediaan</th>
                                                    <td>
                                                    <?php echo $d['kode_BMN'];?>
                                                    <input type="text" class="code" id="customFieldKode" name="customFieldKode[]" value="" placeholder="Input Kode BMN/Persediaan" /> &nbsp;</td>
                                            </tr>
                                                     <tr>
                                                    <th width="200px">Nama BMN/ Persediaan</th>
                                                    <td> <?php echo $d['Nama_BMN'];?>
                                                    <input type="text" class="code" id="customFieldNamaBMN" name="customFieldNamaBMN[]" value="" placeholder="Input Nama BMN/Persediaan" /> &nbsp; 
                                                    </td>
                                                    
                                                </td>

                                            </tr>
                                        </table>
                                            </tr>                                    
                                           </table>
                                            </td>
                                        </tr>
                                      </thead>  
                                      <br> <br>
                                </table>   


                       <table class="table table-bordered"  width="100%" cellspacing="0">
                                   <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Identifikasi kebutuhan pekerjaan</h6>
                                  
                                      <thead>
                                         <tr>
                                            <th width="200px">Nama Pekerjaan (sesuai POK DIPA)</th>

                                            <td><?php echo $d['Nama_pekerjaan'];?></td>
                                        </tr>

                                          <tr>
                                            <th>Jelaskan kriteria INDIKATOR KINERJA/SPESIFIKASI KINERJA yang dibutuhkan untuk pekerjaan ini</th>

                                            <td><?php echo $d['kriteria_indikator'];?></td>
                                        </tr>

                                         <tr>
                                            <th>Target/Sasaran Yang Diharapkan</th>

                                            <td><?php echo $d['target_sasaran'];?></td>
                                        </tr>

                                         <tr>
                                            <th>Manfaat </th>

                                            <td><?php echo $d['manfaat'];?></td>
                                        </tr>

                                        <tr>
                                            <th>Kuantitas</th>

                                            <td><?php echo $d['kuantitas'];?></td>
                                        </tr>

                                         <tr>
                                            <th>Ruang lingkup pekerjaan</th>

                                            <td><?php echo $d['ruang_lingkup'];?></td>
                                        </tr>

                                         <tr>
                                            <th>Waktu penggunaan</th>

                                            <td><?php echo $d['waktu_penggunaan'];?></td>
                                        </tr>

                                           <tr>
                                            <th>Perkiraan biaya. </th>

                                            <td><?php echo $d['perkiraan_biaya'];?></td>
                                        </tr>

                                        <tr>
                                            <th>Atas perkiraan biaya di atas, jelaskan rincian perhitungannya</th>

                                            <td><?php echo $d['rincian_perhitungan'];?></td>
                                        </tr>

                                       </thead>
                                   </table>
                                   <br><br>


                            <table class="table table-bordered"  width="100%" cellspacing="0">
                                   <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Identifikasi Manajemen Penunjang Tugas dan Fungsi PPK</h6>
                               
                                         <tr>
                                            <th width="200px">Jumlah pegawai dalam unit kerja. (dalam tim pengelolaan manajemen PPK)</th>

                                            <td><?php echo $d['jml_unitkerja'];?></td></td>
                                        </tr>

                                          <tr>
                                            <th>Apakah PPK dibantu oleh Tim atau Tenaga Ahli. Jelaskan pada kotak "Lainnya"</th>

                                              <td>
                                             <table class="table table-bordered"  width="100%" cellspacing="0">
                                                <p>Mohon dijelaskan daftar Tim atau Tenaga Ahli dan identitas singkat</p>
                                            
                                                <thead>
                                                <tr>
                                            <th>No</th>
                                            <th>Nama</th>
                                            <th>Tugas</th>
                                            </tr>
                                        </thead>
                                            <tbody id="isi-datatabel">
                                            
                                            </tbody>
                                           
                                             <table class="form-table" id="customFields">
                                            <tr valign="top">
                                                <th scope="row"><label for="customFieldName">Tambah Data</label></th>
                                                <td>
                                                    <input type="text" class="code" id="customFieldNoTugas" name="customFieldNo[]" value="" placeholder="Input No" /> &nbsp;
                                                    <input type="text" class="code" id="customFieldNamaTugas" name="customFieldNama[]" value="" placeholder="Input Nama" /> &nbsp;
                                                    <input type="text" class="code" id="customFieldTugasTenaga_ahli" name="customFieldTugas[]" value="" placeholder="Input Tugas" /> &nbsp;
                                                    <button a href="javascript:void(0);" id="tombol-ajax">Add</button>
                                                </td>
                                            </tr>
                                        </table>
                                          <tr>
                                            <th>Tingkat beban tugas dan tanggung jawab pegawai dalam melaksanakan tugas dan fungsi Tim Pengelolaan Manajemen PPK</th>

                                            <td><?php echo $d['tingkat_beban'];?></td>
                                        </tr>
                                           </table>
                                         </td>
                                        </tr> 
                                      <br> <br>
                       
                                </table>  

                                  <table class="table table-bordered"  width="100%" cellspacing="0">
                                   <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Identifikasi Pelaku Usaha</h6> 
                                      <thead>
                                         <tr>
                                            <th width="200px">Jenis pelaku usaha</th>

                                            <td><?php echo $d['pelaku_usaha'];?></td>
                                        </tr>

                                          <tr>
                                            <th>Terdapat pelaku usaha yang dinilai mampu dan memenuhi syarat</th>

                                            <td><?php echo $d['syarat_usaha'];?></td>
                                        </tr>

                                         <tr>
                                            <th>Apabila terbatas, jelaskan dan sebutkan nama penyedia yang selama memenuhi kebutuhan barang ini. Setiap penyedia jelaskan identitas singkat penyedia, berapa kali berkontrak, berkontrak pada tahun berapa saja, serta jelaskan singkat kinerja penyedia tersebut</th>

                                     
                                            
                                            <td colspan="2">
                                             <table class="table table-bordered"  width="100%" cellspacing="0">
                                            <thead>
                                            <tr>
                                            <th>No</th>
                                            <th>Nama Penyedia</th>
                                            <th>Rantai pasok (principal/agen tunggal/ distributor / pengecer</th>
                                            </tr>
                                            </thead>
                                            <tbody id="isi-tabel">
                                            
                                            </tbody>
                                              
                                        </table>
                                            <table class="form-table" id="customFieldsPenyedia">
                                            <tr valign="top">
                                                <th scope="row"><label for="customFieldName">Tambah Data</label></th>
                                                <td>
                                                    <input type="text" class="code" id="customFieldNo_sedia" name="customFieldNNo[]" value="" placeholder="Input No" /> &nbsp;
                                                    <input type="text" class="code" id="customFieldNama_sedia" name="customFieldNama[]" value="" placeholder="Input Nama Penyedia" /> &nbsp;
                                                     <input type="text" class="code" id="customFieldRantai" name="customFieldRantai[]" value="" placeholder="Input Rantai Pasok" /> &nbsp;
                                                    <button a href="javascript:void(0);" id="tombol-ajx">Add</button>
                                                </td>
                                            </tr>
                                        </table>
                                        </tr>
                                            
                                           </table>
                                            </td>
                                           
                                        </tr>
                                      </thead>  
                                      <br> <br>
                                     
                                </table>  

                                  <table class="table table-bordered"  width="100%" cellspacing="0">
                                   <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Identifikasi Persyaratan Lain Yang Diperlukan</h6>

                                      <thead>
                                         <tr>
                                            <th width="200px">Cara pemeliharaan/teknik/prosedur pemeliharaan</th>

                                            <td><?php echo $d['pemeliharaan'];?></td>
                                        </tr>

                                          <tr>
                                            <th >Kebutuhan pelatihan untuk lingkup pemeliharaan</th>

                                            <td><?php echo $d['pelatihan'];?></td>
                                        </tr>
                                      </thead> 
                                      </table> 
                                      <br> <br>

                                 <table class="table table-bordered"  width="100%" cellspacing="0">
                                   <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Identifikasi Konsolidasi Pekerjaan</h6>
                                  
                                      <thead>
                                         <tr>
                                            <th width="200px">Terdapat pekerjaan sejenis pada kegiatan lain</th>

                                            <td><?php echo $d['pekerjaan_sejenis'];?></td>
                                        </tr>

                                          <tr>
                                            <th>Indikasi konsolidasi atas pekerjaan </th>

                                            <td><?php echo $d['indikasi'];?></td>
                                        </tr>

                                        <tr>
                                            <th>Apabila direkomendasikan, jelaskan lebih lanjut rencana konsolidasi pekerjaan/pemeliharaan tersebut</th>

                                            <td><?php echo $d['rekomendasi'];?></td>
                                        
                                        </tr>
                                      </thead>  
                                   
                                 <table  class="table table-bordered"  width="100%" cellspacing="0" height="200px"><br>
                                         <tr>
                                            <th width="200px">Catatan penting:</th>
                                            <td>
                                                <?php echo $d['catatan'];?>
                                            </td>
                                        </tr>
                                                      
                                </table>
                                <br>

                            <table class="table table-bordered"  width="100%" cellspacing="0">
                                      <thead>
                                         <tr>
                                            <th width="200px">Disusun pertama kali tanggal:</th>
                                            <td><?php echo $d['disusun'];?></td>
                                        </tr>

                                        <tr>
                                            <th >Disusun oleh:</th>
                                            <td><?php echo $d['disusun_oleh'];?></td>
                                        </tr>

                                    <tr>
                                        <th> Disetujui oleh</th>
                                        <td><?php echo $d['disetujui'];?></td>
                                       
                                    </tr>
                                    <tr>
                                        <td colspan="2">
                                            <table class="table table-bordered"  width="100%" cellspacing="0">
                                            <tr>
                                            <th>Disetuji oleh Pengguna Anggaran/Kuasa Pengguna Anggaran</th>
                                            <th>Pejabat Pembuat Komitmen</th>
                                            </tr>

                                            <tr>
                                            <th></th>
                                            <th>Mengetahui,</th>
                                            </tr>

                                             <tr>
                                            <th>Tenaga Ahli</th>
                                            <th>Tenaga Ahli</th>
                                            </tr>

                                           </table>
                                        </td>
                                    </tr>
                                           <?php } ?>
                                         </thead>
                                     </table>
                               
                        </div>
                    </div>

                </div>
            </div>

      <!-- populate table from mysql database -->
                <?php while($row = mysqli_fetch_array($search_result)):?>
                <tr>
                <?php echo $d['catatan'];?>
                </tr>
                <?php endwhile;?>
            </table>
        </form>
        
    </body>
</html>