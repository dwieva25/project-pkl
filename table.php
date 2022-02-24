
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script> -->
         <title>Admin - Kominfo</title>

    <!-- Custom fonts for this template -->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/sb-admin-2.css" rel="stylesheet">

    <!-- Custom styles for this page -->
    <link href="vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
    <style type="text/css">
        .modal {
          overflow-y:auto;
        }
    </style>

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-laugh-wink"></i>
                </div>
                <div class="sidebar-brand-text mx-3">Admin Kominfo</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

           <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="index.php">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Kebutuhan Jasa
            </div>

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item active">
                <a class="nav-link collapsed" href="table.php" data-target="#collapseTwo"
                    aria-expanded="true" aria-controls="collapseTwo">
                    <i class="far fa-plus-square"></i>
                    <span>Kebutuhan Jasa Konsultasi</span>
                </a>
                <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities"
                    data-parent="#accordionSidebar">
                    
                </div>
            
            </li>

            <li class="nav-item active">
                <a class="nav-link collapsed" href="data.php" data-target="#collapseUtilities"
                    aria-expanded="true" aria-controls="collapseUtilities">
                    <i class="fas fa-file-alt"></i>
                    <span>Data Kebutuhan Jasa Konsultasi</span>
                </a>
                <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities"
                    data-parent="#accordionSidebar">
                    
                </div>
            </li>


          

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

        </ul>
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <form class="form-inline">
                        <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                            <i class="fa fa-bars"></i>
                        </button>
                    </form>

                        <h3 class="m-0 font-weight-bold text-primary" style="text-align:Center">Dinas Komunikasi, Informatika dan Statistik Kota Denpasar</h3>


                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                        <li class="nav-item dropdown no-arrow d-sm-none">
                            <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-search fa-fw"></i>
                            </a>
                            <!-- Dropdown - Messages -->
                            <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in"
                                aria-labelledby="searchDropdown">
                                <form class="form-inline mr-auto w-100 navbar-search">
                                    <div class="input-group">
                                        <input type="text" class="form-control bg-light border-0 small"
                                            placeholder="Search for..." aria-label="Search"
                                            aria-describedby="basic-addon2">
                                        <div class="input-group-append">
                                            <button class="btn btn-primary" id="searchDropdown"  type="button">
                                                <i class="fas fa-search fa-sm"></i>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </li>

                        <!-- Nav Item - Alerts -->
                        <li class="nav-item dropdown no-arrow mx-1">
                            <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-bell fa-fw"></i>
                                <!-- Counter - Alerts -->
                                <span class="badge badge-danger badge-counter">3+</span>
                            </a>
                            <!-- Dropdown - Alerts -->
                            <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="alertsDropdown">
                                <h6 class="dropdown-header">
                                    Alerts Center
                                </h6>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="mr-3">
                                        <div class="icon-circle bg-primary">
                                            <i class="fas fa-file-alt text-white"></i>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="small text-gray-500">December 12, 2019</div>
                                        <span class="font-weight-bold">A new monthly report is ready to download!</span>
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="mr-3">
                                        <div class="icon-circle bg-success">
                                            <i class="fas fa-donate text-white"></i>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="small text-gray-500">December 7, 2019</div>
                                        $290.29 has been deposited into your account!
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="mr-3">
                                        <div class="icon-circle bg-warning">
                                            <i class="fas fa-exclamation-triangle text-white"></i>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="small text-gray-500">December 2, 2019</div>
                                        Spending Alert: We've noticed unusually high spending for your account.
                                    </div>
                                </a>
                                <a class="dropdown-item text-center small text-gray-500" href="#">Show All Alerts</a>
                            </div>
                        </li>

                        <!-- Nav Item - Messages -->
                        <li class="nav-item dropdown no-arrow mx-1">
                            <a class="nav-link dropdown-toggle" href="#" id="messagesDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-envelope fa-fw"></i>
                                <!-- Counter - Messages -->
                                <span class="badge badge-danger badge-counter">7</span>
                            </a>
                            <!-- Dropdown - Messages -->
                            <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="messagesDropdown">
                                <h6 class="dropdown-header">
                                    Message Center
                                </h6>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="dropdown-list-image mr-3">
                                        <img class="rounded-circle" src="img/undraw_profile_1.svg"
                                            alt="...">
                                        <div class="status-indicator bg-success"></div>
                                    </div>
                                    <div class="font-weight-bold">
                                        <div class="text-truncate">Hi there! I am wondering if you can help me with a
                                            problem I've been having.</div>
                                        <div class="small text-gray-500">Emily Fowler · 58m</div>
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="dropdown-list-image mr-3">
                                        <img class="rounded-circle" src="img/undraw_profile_2.svg"
                                            alt="...">
                                        <div class="status-indicator"></div>
                                    </div>
                                    <div>
                                        <div class="text-truncate">I have the photos that you ordered last month, how
                                            would you like them sent to you?</div>
                                        <div class="small text-gray-500">Jae Chun · 1d</div>
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="dropdown-list-image mr-3">
                                        <img class="rounded-circle" src="img/undraw_profile_3.svg"
                                            alt="...">
                                        <div class="status-indicator bg-warning"></div>
                                    </div>
                                    <div>
                                        <div class="text-truncate">Last month's report looks great, I am very happy with
                                            the progress so far, keep up the good work!</div>
                                        <div class="small text-gray-500">Morgan Alvarez · 2d</div>
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="dropdown-list-image mr-3">
                                        <img class="rounded-circle" src="https://source.unsplash.com/Mv9hjnEUHR4/60x60"
                                            alt="...">
                                        <div class="status-indicator bg-success"></div>
                                    </div>
                                    <div>
                                        <div class="text-truncate">Am I a good boy? The reason I ask is because someone
                                            told me that people say this to all dogs, even if they aren't good...</div>
                                        <div class="small text-gray-500">Chicken the Dog · 2w</div>
                                    </div>
                                </a>
                                <a class="dropdown-item text-center small text-gray-500" href="#">Read More Messages</a>
                            </div>
                        </li>

                        <div class="topbar-divider d-none d-sm-block"></div>

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small">Douglas McGee</span>
                                <img class="img-profile rounded-circle"
                                    src="img/undraw_profile.svg">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Profile
                                </a>
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Settings
                                </a>
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Activity Log
                                </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="index.php" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Logout
                                </a>
                            </div>
                        </li>

                    </ul>

                </nav>

              
                <!-- Begin Page Content -->
                <div class="container-fluid">
                     <div>
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal1">+ Data Kebutuhan</button>
            </div>
            <br>
                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary" style="text-align:Center">Formulir Pertanyaan Identifikasi Kebutuhan Jasa Konsultansi</h6>
                        </div>
                         <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered"  width="100%" cellspacing="0">
                                    
                                        <?php 
                                        include 'koneksi.php';
                                        $no=1;
                                        $data = mysqli_query($conn,"select * from kebutuhan_jasa ORDER BY id_jasa DESC LIMIT 1");
                                        while($d = mysqli_fetch_assoc($data)){

                                            $data2 = mysqli_query($conn,"select * from penyedia where id_jasa =".$d['id_jasa']);
                                            $data_2 = mysqli_query($conn,"select * from tenaga_ahli where id_jasa =".$d['id_jasa']);
                                            
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
                                                    </td>
                                            </tr>
                                                     <tr>
                                                    <th width="200px">Nama BMN/ Persediaan</th>
                                                    <td> <?php echo $d['Nama_BMN'];?>
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

                                            <?php 
                                                    $data_2 = mysqli_query($conn,"select * from tenaga_ahli where id_jasa =".$d['id_jasa']);
                                                    while ($dd = mysqli_fetch_array($data_2)) {
                                                        echo "<tr><td>".$dd['No']."</td><td>".$dd['Nama']."</td><td>".$dd['Tugas']."</td></tr>";
                                                    }
                                                 ?>
                                            </tbody>
                                           
                                             <table class="form-table" id="customFields">
                                            <tr valign="top">
                                                <th scope="row"><label for="customFieldName">Tambah Data</label></th>
                                                <td>
                                                     <input type="hidden" class="code" id="customFieldIdTenagaAhli" name="customFieldId_Ahli[]" value="<?= $d['id_jasa']; ?>" />
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
                                                <?php 
                                                    $data2 = mysqli_query($conn,"select * from penyedia where id_jasa =".$d['id_jasa']);
                                                    while ($dd = mysqli_fetch_array($data2)) {
                                                        echo "<tr><td>".$dd['No']."</td><td>".$dd['Nama_penyedia']."</td><td>".$dd['rantai_pasok']."</td></tr>";
                                                    }
                                                 ?>
                                            </tbody>
                                              
                                        </table>
                                            <table class="form-table" id="customFieldsPenyedia">
                                            <tr valign="top">
                                                <th scope="row"><label for="customFieldName">Tambah Data</label></th>
                                                <td>
                                                    <input type="hidden" class="code" id="customFieldIdJasa_sedia" name="customFieldIdJasa[]" value="<?= $d['id_jasa']; ?>" />
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

            
    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="index.php">Logout</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="js/demo/datatables-demo.js"></script>

 <div class="modal fade" id="myModal1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
   <div class="modal-dialog">
      <div class="modal-content">
         <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title" id="myModalLabel">Modal title 1</h4>
         </div>
         <div class="modal-body">
            <form role="form" action="function.php" method="post" class="registration-form">
               <fieldset style="display: block;">
                  <div class="form-top">
                     <div class="form-top-left">
                        <h3>Step 1 / 7</h3>
                        <p>Formulir Pertanyaan Identifikasi Kebutuhan Jasa Konsultansi</p>
                     </div>
                     <div class="form-top-right">
                        <i class="fa fa-user"></i>
                     </div>
                  </div>
                  <div class="form-bottom">
                     <div class="form-group">
                        <h7>Perubahan Ke</h7>
                        <input name="perubahan" required="required" class="form-first-name form-control input-error" id="form-first-name" type="text">
                     </div>
                     <div class="form-group">
                        <h7>Tanggal Perubahan</h7>
                        <input name="tgl_perubahan" required="required" class="form-last-name form-control input-error" id="form-last-name" type="date">
                     </div>
                     <div class="form-group">
                        <h7>Nama K/L/D</h7>
                        <textarea name="Nama_KLD" class="form-about-yourself form-control input-error" id="form-about-yourself"></textarea>
                     </div>
                      <div class="form-group">
                        <h7>Satuan kerja</h7>
                        <textarea name="satuan_kerja"  class="form-about-yourself form-control input-error" id="form-about-yourself"></textarea>
                     </div>
                     <div class="form-group">
                        <h7>Pejabat Pembuat Komitmen (nama jabatan, bukan orang)</h7>
                        <textarea name="pejabat"  class="form-about-yourself form-control input-error" id="form-about-yourself"></textarea>
                     </div>
                     <div class="form-group">
                        <h7>Program (sesuai DIPA)</h7>
                        <textarea name="program" class="form-about-yourself form-control input-error" id="form-about-yourself"></textarea>
                     </div>
                        <div class="form-group">
                        <h7>Kegiatan (sesuai DIPA)</h7>
                        <textarea name="kegiatan"  class="form-about-yourself form-control input-error" id="form-about-yourself"></textarea>
                     </div>
                       <div class="form-group">
                        <h7>Output (sesuai DIPA)</h7>
                        <textarea name="output" class="form-about-yourself form-control input-error" id="form-about-yourself"></textarea>
                     </div>
                  </div>
               </fieldset>  
         </div>
         <div class="modal-footer">
            <button type="button" class="btn btn-default btn-prev">Prev</button>
            <button type="button" class="btn btn-default btn-next" name="">Next</button>

            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
         </div>
      </div>
   </div>
</div>

<!-- Modal -->
<div class="modal fade" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
   <div class="modal-dialog">
      <div class="modal-content">
         <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title" id="myModalLabel">Modal title 2</h4>
         </div>
         <div class="modal-body">
            <fieldset>
                  <div class="form-top">
                     <div class="form-top-left">
                        <h3>Step 2 / 7</h3>
                        <p>Identifikasi Kode Barang Milik Negara (BMN) - khusus pengadaan software/aplikasi</p>
                     </div>
                     <div class="form-top-right">
                        <i class="fa fa-key"></i>
                     </div>
                  </div>
                  <div class="form-bottom">
                    
                     <div class="form-group">
                        <h7>Kode BMN/ Persediaan</h7>
                        <input name="kode_BMN" class="form-google-plus form-control" id="form-google-plus" type="text">
                     </div>
                     <div class="form-group">
                        <h7>Nama BMN/ Persediaan</h7>
                        <input name="Nama_BMN" class="form-google-plus form-control" id="form-google-plus" type="text">
                     </div>
                  </div>
               </fieldset>
           
         </div>
         <div class="modal-footer">
            <button type="button" class="btn btn-default btn-prev">Prev</button>
            <button type="button" class="btn btn-default btn-next">Next</button>
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
         </div>
      </div>
   </div>
</div>

<div class="modal fade" id="myModal3" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
   <div class="modal-dialog">
      <div class="modal-content">
         <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title" id="myModalLabel">Modal title 3</h4>
         </div>
         <div class="modal-body">
           
            <fieldset>
                  <div class="form-top">
                     <div class="form-top-left">
                        <h3>Step 3 / 7</h3>
                        <p>Identifikasi Kebutuhan Pekerjaan</p>
                     </div>
                     <div class="form-top-right">
                        <i class="fa fa-twitter"></i>
                     </div>
                  </div>
                  <div class="form-bottom">
                     <div class="form-group">
                        <h8>Nama Pekerjaan (sesuai POK DIPA)</h8>
                        <label class="sr-only" for="form-facebook">Nama Pekerjaan (sesuai POK DIPA)</label>
                        <input name="Nama_pekerjaan" class="form-facebook form-control" id="form-facebook" type="text">
                     </div>
                     <div class="form-group">
                        <h7>Jelaskan kriteria INDIKATOR KINERJA/SPESIFIKASI KINERJA yang dibutuhkan untuk pekerjaan ini</h7>
                         <select class="form-control" name="kriteria_indikator" id="deskripsi">
                                <option value="Laporan data /output alat yang dipelihara ">1.Laporan data /output alat yang dipelihara</option>
                                <option value="Service level agreement">2.Service level agreement</option>
                                <option value="Laporan monitoring visual">3.Laporan monitoring visual</option>
                            </select>                    
                        </div>
                     <div class="form-group">
                         <h7>Target/Sasaran Yang Diharapkan</h7>
                        <input name="target_sasaran" class="form-google-plus form-control" id="form-google-plus" type="text">
                     </div>
                      <div class="form-group">
                         <h7>Manfaat</h7>
                        <input name="manfaat" class="form-google-plus form-control" id="form-google-plus" type="text">
                     </div>
                      <div class="form-group">
                        <h7>Kuantitas</h7>
                        <input name="kuantitas" class="form-google-plus form-control" id="form-google-plus" type="text">
                     </div>
                      <div class="form-group">
                        <h7>Ruang lingkup pekerjaan</h7>
                        <input name="ruang_lingkup" class="form-google-plus form-control" id="form-google-plus" type="text">
                     </div>
                      <div class="form-group">
                         <h7>Waktu penggunaan</h7>
                        <input name="waktu_penggunaan" class="form-google-plus form-control" id="form-google-plus" type="text">
                     </div>
                      <div class="form-group">
                         <h7>Perkiraan biaya</h7>
                        <input name="perkiraan_biaya" class="form-google-plus form-control" id="form-google-plus" type="text">
                     </div>
                      <div class="form-group">
                         <h7>Atas perkiraan biaya di atas, jelaskan rincian perhitungannya</h7>
                        <input name="rincian_perhitungan" class="form-google-plus form-control" id="form-google-plus" type="text">
                     </div>
                  </div>
               </fieldset>
           
         </div>
         <div class="modal-footer">
            <button type="button" class="btn btn-default btn-prev">Prev</button>
            <button type="button" class="btn btn-default btn-next">Next</button>
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
         </div>
      </div>
   </div>
</div>

<div class="modal fade" id="myModal3" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
   <div class="modal-dialog">
      <div class="modal-content">
         <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title" id="myModalLabel">Modal title 4</h4>
         </div>
<div class="modal-body">
           
            <fieldset>
                  <div class="form-top">
                     <div class="form-top-left">
                        <h3>Step 4 / 7</h3>
                        <p>Identifikasi Manajemen Penunjang Tugas dan Fungsi PPK</p>
                     </div>
                     <div class="form-top-right">
                        <i class="fa fa-twitter"></i>
                     </div>
                  </div>
                  <div class="form-bottom">
                     <div class="form-group">
                        <h8>Jumlah pegawai dalam unit kerja. (dalam tim pengelolaan manajemen PPK)</h8>
                        <label class="sr-only" for="form-facebook">Nama Pekerjaan (sesuai POK DIPA)</label>
                        <input name="jml_unitkerja" class="form-facebook form-control" id="form-facebook" type="text">
                     </div>
    
                     <div class="form-group">
                         <h7>Tingkat beban tugas dan tanggung jawab pegawai dalam melaksanakan tugas dan fungsi Tim Pengelolaan Manajemen PPK</h7>                  
                        <select class="form-control" name="tingkat_beban" id="deskripsi">
                                <option value="Tinggi">Tinggi</option>
                                <option value="Sedang">Sedang</option>
                                <option value="Rendah">Rendah</option>
                            </select><br><br>
                     </div>
                  </div>
               </fieldset>
           
         </div>
         <div class="modal-footer">
            <button type="button" class="btn btn-default btn-prev">Prev</button>
            <button type="button" class="btn btn-default btn-next">Next</button>
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
         </div>
      </div>
   </div>
</div>

<div class="modal fade" id="myModal3" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
   <div class="modal-dialog">
      <div class="modal-content">
         <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title" id="myModalLabel">Modal title 5</h4>
         </div>
<div class="modal-body">
           
            <fieldset>
                  <div class="form-top">
                     <div class="form-top-left">
                        <h3>Step 5 / 7</h3>
                        <p>Identifikasi Pelaku Usaha</p>
                     </div>
                     <div class="form-top-right">
                        <i class="fa fa-twitter"></i>
                     </div>
                  </div>
                  <div class="form-bottom">
                     <div class="form-group">
                        <h7>Jenis pelaku usaha</h7>                       
                         <select class="form-control" name="pelaku_usaha" id="deskripsi">
                                <option value="Perorangan">1. Perorangan </option>
                                <option value="Badan Usaha">2. Badan Usaha</option>
                         </select>
                     </div>
                     <div class="form-group">
                        <h7>Terdapat pelaku usaha yang dinilai mampu dan memenuhi syarat</h7>
                            <select class="form-control" name="syarat_usaha" id="deskripsi">
                                <option value="Banyak">Banyak</option>
                                <option value="Terbatas">Terbatas</option>
                            </select><br>
                  </div>
                  
               </fieldset>
         </div>
         <div class="modal-footer">
            <button type="button" class="btn btn-default btn-prev">Prev</button>
            <button type="button" class="btn btn-default btn-next">Next</button>
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
         </div>
      </div>
   </div>
</div>

<div class="modal fade" id="myModal3" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
   <div class="modal-dialog">
      <div class="modal-content">
         <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title" id="myModalLabel">Modal title 6</h4>
         </div>
<div class="modal-body">
         
            <fieldset>
                  <div class="form-top">
                     <div class="form-top-left">
                        <h3>Step 6 / 7</h3>
                        <p>Identifikasi Persyaratan Lain Yang Diperlukan</p>
                     </div>
                     <div class="form-top-right">
                        <i class="fa fa-twitter"></i>
                     </div>
                  </div>
                  <div class="form-bottom">
                   
                     <div class="form-group">
                        <h7>Cara pemeliharaan/teknik/prosedur pemeliharaan</h7>
                        <label class="sr-only" for="form-facebook"></label>
                        <input name="pemeliharaan" class="form-facebook form-control" id="form-facebook" type="text">
                     </div>
                     <div class="form-group">
                        <h7>Kebutuhan pelatihan untuk lingkup pemeliharaan</h7> 
                        <form method="POST" action="tes_cek.php" ><br>
                        <input type="radio" name="radiopelatihan" value="ya">Ya <br />
                        <input type="radio" name="radiopelatihan" value="tidak">Tidak <br />
                             <br>
                  </div>
               </fieldset>
          
         </div>
         <div class="modal-footer">
            <button type="button" class="btn btn-default btn-prev">Prev</button>
            <button type="button" class="btn btn-default btn-next">Next</button>
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
         </div>
      </div>
   </div>
</div>

<div class="modal fade" id="myModal3" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
   <div class="modal-dialog">
      <div class="modal-content">
         <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title" id="myModalLabel">Modal title 7</h4>
         </div>
<div class="modal-body">
           
            <fieldset>
                  <div class="form-top">
                     <div class="form-top-left">
                        <h3>Step 7/7</h3>
                       <p>Identifikasi Konsolidasi Pekerjaan</p>
                     </div>
                     <div class="form-top-right">
                        <i class="fa fa-twitter"></i>
                     </div>
                  </div>
                       <div class="form-group"><br>
                    <h7>Terdapat pekerjaan sejenis pada kegiatan lain</h7>
                <form method="POST" action="tes_cek.php" name="pekerjaan_sejenis"><br>
                <input type="radio" name="radiopksj" value="ya">Ya <br />
                <input type="radio" name="radiopksj" value="tidak">Tidak <br />  
                     </div>
                     <h7>Indikasi konsolidasi atas pekerjaan </h7>
            <form method="POST" action="tes_cek.php" name="indikasi"><br>
                <input type="radio" name="radioindikasi" value="Direkomendasikan"> Direkomendasikan<br />
                <input type="radio" name="radioindikasi" value="Tidak direkomendasikan">Tidak direkomendasikan <br><br>
            <h7>Apabila direkomendasikan, jelaskan lebih lanjut rencana konsolidasi pekerjaan/pemeliharaan tersebut</h7>
              <input name="rekomendasi" class="form-google-plus form-control" id="form-google-plus" type="text"><br>
             <h7>Catatan Penting</h7>
             <textarea name="catatan" class="form-google-plus form-control" id="form-google-plus" type="textarea"></textarea>
                  <div class="form-bottom">
                     <div class="form-group">
                        <h7>Disusun pertama kali tanggal</h7>
                         <input name="disusun" class="form-google-plus form-control" id="form-google-plus" type="date">
                     </div>
                     <div class="form-group">
                        <h7>Disusun oleh</h7>
                         <input name="disusun_oleh" class="form-google-plus form-control" id="form-google-plus" type="textarea">
                     <div class="form-group"><br>
                         <h7>Disetujui oleh</h7>
                     <input name="disetujui" class="form-google-plus form-control" id="form-google-plus" type="textarea">
                      <h7>Disetuji oleh Pengguna Anggaran/Kuasa Pengguna Anggaran</h7>
                     <input name="pengguna_anggaran" class="form-google-plus form-control" id="form-google-plus" type="textarea">
                      <h7>Pejabat Pembuat Komitmen</h7>
                     <input name="pembuat_komitmen" class="form-google-plus form-control" id="form-google-plus" type="textarea">
                     <h7>Pejabat Pembuat Komitmen</h7>
                     <input name="mengetahui" class="form-google-plus form-control" id="form-google-plus" type="textarea">
                     <h7>Tenaga Ahli</h7>
                     <input name="tenaga_ahlii" class="form-google-plus form-control" id="form-google-plus" type="textarea">
                     <h7>Tenaga Ahli</h7>
                     <input name="TenagaAhli" class="form-google-plus form-control" id="form-google-plus" type="textarea">
                  </div>
               </fieldset>
           
         </div>
         <div class="modal-footer">
            <button type="button" class="btn btn-default btn-prev">Prev</button>
            <button type="submit" class="btn btn-default btn-next" name="submit">Submit</button>
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </form>
         </div>
      </div>
   </div>
</div>

<script type="text/javascript">
    $("div[id^='myModal']").each(function(){
  
  var currentModal = $(this);
  
  
  //click next
  currentModal.find('.btn-next').click(function(){
    currentModal.find('input').each(function(){
        if(!$(this).prop('required')){
            currentModal.modal('hide');
            currentModal.closest("div[id^='myModal']").nextAll("div[id^='myModal']").first().modal('show');
        } else {
            if($(this).val() != ''){
                isValid = true;
                $(this).css("background-color","white");
            }else{
                isValid = false;
                let name = $(this).attr("name");
                $(this).css("background-color","red");

                alert('Mohon isikan field '+name);
            }
        }

        var msf_fs_i_count = msf_fs.querySelectorAll("input").length;
        for (i = 0; i < msf_fs_i_count; ++i) {
            var msf_input_s = msf_fs.querySelectorAll("input")[i];
            if (msf_input_s.getAttribute("type") === "button") {
                // nothing happens
            } else {
                if (msf_input_s.value === "") {
                    // msf_input_s.style.backgroundColor = "pink";
                    msf_val = true;
                } else {
                    if (msf_val === false) {} else {
                        msf_val = true;
                        msf_input_s.style.backgroundColor = "white";
                    }
                }
            };
    });

    if(isValid==true){
        currentModal.modal('hide');
        currentModal.closest("div[id^='myModal']").nextAll("div[id^='myModal']").first().modal('show');
    }

  });
  
  //click prev
  currentModal.find('.btn-prev').click(function(){
    currentModal.modal('hide');
    currentModal.closest("div[id^='myModal']").prevAll("div[id^='myModal']").first().modal('show'); 
  });

});

</script>
<script type="text/javascript">
    $(document).ready(function(){
    $(".addCF").click(function(){
        $("#customFields").append('<tr valign="top"><th scope="row"><label for="customFieldNo">Kode BMN/Persediaan</label></th><td><input type="text" class="code" id="customFieldNo" name="customFieldNo[]" value="" placeholder="Input No" /> &nbsp; <input type="text" class="code" id="customFieldNama" name="customFieldNama[]" value="" placeholder="Input Nama" />&nbsp; <input type="text" class="code" id="customFieldTugas" name="customFieldTugas[]" value="" placeholder="Input Tugas" /> &nbsp; <a href="javascript:void(0);" class="remCF"><button>Remove</button></a></td></tr>');
    });
    $("#customFields").on('click','.remCF',function(){
        $(this).parent().parent().remove();
    });
});
</script>


<script type="text/javascript">
$(document).ready(function(){
    $(".addKode").click(function(){
        $("#customFieldsKode").append('<tr valign="top"><th scope="row"><label for="customFieldKode">Tambah Data</label></th><td><input type="text" class="code" id="customFieldKode" name="customFieldKode[]" value="" placeholder="Input Kode BMN/Persediaan" /> &nbsp; <input type="text" class="code" id="customFieldNamaBMN" name="customFieldNamaBMN[]" value="" placeholder="Input Nama BMN/Persediaan" /> &nbsp; <a href="javascript:void(0);" class="remCF"><button>Remove</button></a></td></tr>');
    });
    $("#customFieldsKode").on('click','.remCF',function(){
        $(this).parent().parent().remove();
    });
});
</script>

<script type="text/javascript">
    $(document).ready(function(){
    $(".addCF").click(function(){
        $("#customFieldsPenyedia").append('<tr valign="top"><th scope="row"><label for="customFieldNo">Kode BMN/Persediaan</label></th><td><input type="text" class="code" id="customFieldNo" name="customFieldNo[]" value="" placeholder="Input No" /> &nbsp; <input type="text" class="code" id="customFieldNama" name="customFieldNama[]" value="" placeholder="Input Nama" /> &nbsp; <input type="text" class="code" id="customFieldRantai" name="customFieldRantai[]" value="" placeholder="Input Rantai" />&nbsp; <a href="javascript:void(0);" class="remCF"><button>Remove</button></a></td></tr>');
    });
    $("#customFieldsPenyedia").on('click','.remCF',function(){
        $(this).parent().parent().remove();
    });
});
</script>

<script type="text/javascript">
    $(document).ready(function(){
    $(".addCF").click(function(){
        $("#customFieldsRantai").append('<tr valign="top"><th scope="row"><label for="customFieldNo">Nama BMN/Persediaan</label></th><td><input type="text" class="code" id="customFieldNo" name="customFieldNo[]" value="" placeholder="Input No" /> &nbsp; <input type="text" class="code" id="customFieldNama" name="customFieldNama[]" value="" placeholder="Input Nama" /> &nbsp; <input type="text" class="code" id="customFieldRantai" name="customFieldRantai[]" value="" placeholder="Input Rantai" />&nbsp; <a href="javascript:void(0);" class="remCF"><button>Remove</button></a></td></tr>');
    });
    $("#customFieldsRantai").on('click','.remCF',function(){
        $(this).parent().parent().remove();
    });
});
</script>

<script type="text/javascript">

    function ajxmanual(){
        var ajaxreq;

        try{
            ajaxreq = new XMLHttpRequest;
        }catch(e){
            ajaxreq = null;
        }

        ajaxreq.onreadystatechange = function(){
            if(ajaxreq.readyState == 4){
                const testres = JSON.parse(ajaxreq.responseText);
                console.log("request success");
                console.log(testres);
            }
        }

        ajaxreq.open('GET',"test-ajax.php?input_no=12&nama_penyedia=aaaa&rantai_pasok=7");
        ajaxreq.send(null);
    }

    $("#tombol-ajx").on('click',function(e){
        e.preventDefault();
        // ajxmanual();
        let no = $("#customFieldNo_sedia").val();
        let nama = $("#customFieldNama_sedia").val();
        let rantai = $("#customFieldRantai").val();
        let id_jasa = $("#customFieldIdJasa_sedia").val();

        $.ajax({
            url : `http://localhost/project_pkl/test-ajax.php?input_no=${no}&nama_penyedia=${nama}&rantai_pasok=${rantai}&id_jasa=${id_jasa}`,
            dataType : 'json',
         }).done(penerima).fail(gagal);
    });

    
    function penerima(data){
        const tabelData = $("#isi-tabel");
        let anak_tabel = `<tr><td>${data.input_no}</td><td>${data.nama}</td><td>${data.rantai}</td></tr>`;
        tabelData.append(anak_tabel);
        $("#customFieldNo_sedia").val("");
        $("#customFieldNama_sedia").val("");
        $("#customFieldRantai").val("");
        
        console.log(anak_tabel);
    }
    function gagal(request, textStatus, errorThrown){
        console.log(errorThrown);
        console.log(textStatus);    
    }
</script>

<script type="text/javascript">
    function ajxmanual(){
        var ajaxreq;

        try{
            ajaxreq = new XMLHttpRequest;
        }catch(e){
            ajaxreq = null;
        }

        ajaxreq.onreadystatechange = function(){
            if(ajaxreq.readyState == 4){
                const testres = JSON.parse(ajaxreq.responseText);
                console.log("request success");
                console.log(testres);
            }
        }

        ajaxreq.open('GET',"ajax_tenagaAhli.php?input_No=12&nama=aaaa&tugas=7");
        ajaxreq.send(null);
    }
    $("#tombol-ajax").on('click',function(e){
        e.preventDefault();
        // ajxmanual();
        let No = $("#customFieldNoTugas").val();
        let Nama = $("#customFieldNamaTugas").val();
        let Tugas = $("#customFieldTugasTenaga_ahli").val();
        let id_jasa = $("#customFieldIdTenagaAhli").val();

        $.ajax({
            url : `http://localhost/project_pkl/ajax_tenagaAhli.php?input_No=${No}&nama=${Nama}&tugas=${Tugas}&id_jasa=${id_jasa}`,
            dataType : 'json',
         }).done(penerima2).fail(gagal2);
    });

    
    function penerima2(data){
        const tabelData = $("#isi-datatabel");
        let anak_tabel = `<tr><td>${data.input_No}</td><td>${data.input_Nama}</td><td>${data.input_Tugas}</td></tr>`;
        tabelData.append(anak_tabel);
        $("#customFieldNoTugas").val("");
        $("#customFieldNamaTugas").val("");
        $("#customFieldTugasTenaga_ahli").val("");

        console.log(anak_tabel);
    }
    function gagal2(request, textStatus, errorThrown){
        console.log(errorThrown);
        console.log(textStatus);    
    }
</script>

<footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span> Copyright © 2022 Sistem Informasi by <a href="https://kominfostatistik.denpasarkota.go.id/"><font color='blue'> Dinas Komunikasi, Informatika & Statistik Kota Denpasar</a> </span>
                    </div>
                </div>
            </footer>

</body>

</html>