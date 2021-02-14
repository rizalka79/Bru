<?php 
  include "../inc/koneksi.php";
  session_start();
  if($_SESSION['userweb']==""){
    header('location:index.php'); 
  }
  $qprofil        = mysqli_query($koneksi,"SELECT * FROM tb_user WHERE user_id='$_SESSION[userweb]'");
  $profil         = mysqli_fetch_array($qprofil);
  $user_akses     = $profil['user_akses'];
  $user_orgsat    = $profil['user_orgsat'];
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title> User <?php echo $profil['user_akses']; ?> | Potensi Wilayah Industri</title>
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <link rel="stylesheet" href="../lte/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
    <link rel="stylesheet" href="../lte/dist/css/AdminLTE.min.css">
    <link rel="stylesheet" href="../lte/plugins/datatables/dataTables.bootstrap.css">
    <link rel="stylesheet" href="../lte/dist/css/skins/_all-skins.css">
    <link rel="icon" href="../lte/favcon/pegcov.ico">
    <link rel="stylesheet" href="../inc/mystyle.css">

    <!-- style="background-color: #000000 !important"" -->
  </head>
  <body class="hold-transition skin-green">
  <div class="wrapper">
    <header class="main-header">
      <a href="" class="logo" style=" background-color: #1d2529 !important">
       <img src="kmk.png" alt="" style="width: 30px !important;">
        
      </a>
      <nav class="navbar  navbar-static-top" role="navigation">
        <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
          <span class="sr-only">Toggle navigation</span>
        </a>
      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <img src="../lte/dist/img/m.png" class="user-image" alt="User Image"> 
              <span class="hidden-xs"><span class="glyphicon glyphicon-triangle-bottom"></span></span>
            </a>
            <ul class="dropdown-menu">
              <li class="user-header">
                <img src="../lte/dist/img/m.png" class="img-circle" alt="User Image"> 
                <p>
                  <?php echo $profil['user_name']; ?>
                  <small><?php echo $profil['user_nama']; ?></small><br>
                </p>
              </li>
              <li class="user-footer">
                <div class="pull-left">
                  <a href="?menu=user_profil" class="btn btn-default btn-flat"><span class="fa fa-user"></span> Profile</a>
                </div>
                <div class="pull-right">
                  <a onclick="return confirm('Anda yakin ingin logout ?')" class="btn btn-default btn-flat" href="../inc/keluar.php"><span class="fa fa-sign-out"></span> Logout</a>
                </div>
              </li>
            </ul>
          </li>          
        </ul>
      </div>
    </nav>
  </header>

    <aside class="main-sidebar" style=" background-color: #1d2529 !important">
    <section class="sidebar" style="color: #ffffff !important">
      <div class="user-panel">
        <div class="pull-left image">
          <img src="../lte/dist/img/m.png" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p><?php echo $profil['user_nama']; ?></p>
          <a href="#">
            <i class="fa fa-circle text-success"></i> User <?php echo $profil['user_akses']; ?></a>
        </div>
      </div>

      <?php 
        @$menu= $_GET['menu'];
      ?>
      <ul class="sidebar-menu">
        <li class="header"></li>
<!-- /////////////////////////////////////////////////////////////////////////////////////// -->
        <li <?php if (

          $menu=="" || 
          $menu=="dashboard"

          ){echo "class='active'";} ?>>
            <a href="?menu=dashboard">
              <i class="fa fa-dashboard" style="color: #ffffff !important"></i> 
              <span style="color: #ffffff !important">Beranda
              </span>
            </a>
        </li>
<!-- /////////////////////////////////////////////////////////////////////////////////////// -->
        <?php if($profil['user_akses']=='Super'){ ?> 
          <li <?php if (

              $menu=="user_data" || 
              $menu=="user_tambah" || 
              $menu=="user_edit" || 
              $menu=="user_hapus"

            ){echo "class='active'";} ?>>
              <a href="?menu=user_data">
                <i class="fa fa-users"></i> 
                <span>Data User
                </span>
              </a>
          </li>
        <?php } ?>
<!-- /////////////////////////////////////////////////////////////////////////////////////// -->
        <li <?php if (

          $menu=="peg_data" || 
          $menu=="peg_tambah" || 
          $menu=="peg_edit" || 
          $menu=="peg_hapus"|| 
          $menu=="peg_hapus_semua"|| 
          $menu=="kon_data"|| 
          $menu=="kon_edit"|| 
          $menu=="kon_tambah"|| 
          $menu=="kel_data"|| 
          $menu=="kel_edit"|| 
          $menu=="kel_tambah"||
          $menu=="kel_tambah_lama"||
          $menu=="kel_identitas"|| 
          $menu=="kel_identitas_edit"||
          $menu=="kel_identitas_hapus"

          ){echo "class='active'";} ?>>
            <a href="?menu=peg_data">
              <i class="fa fa-male"></i> 
              <span>Data Pegawai
              </span>
            </a>
        </li>
<!-- /////////////////////////////////////////////////////////////////////////////////////// -->
        <li <?php if (

          $menu=="vkon_data"||
          $menu=="vkon_tambah"||
          $menu=="vkon_hapus"

          ){echo "class='active'";} ?>>
            <a href="?menu=vkon_data">
              <i class="fa fa-file"></i> 
              <span>Pegawai Covid
              </span>
            </a>
        </li>
<!-- /////////////////////////////////////////////////////////////////////////////////////// -->
        <li <?php if (

          $menu=="vkel_data"||
          $menu=="vkel_tambah"||
          $menu=="vkel_hapus"

          ){echo "class='active'";} ?>>
            <a href="?menu=vkel_data">
              <i class="fa fa-file-o"></i> 
              <span>Keluarga Covid
              </span>
            </a>
        </li>
<!-- /////////////////////////////////////////////////////////////////////////////////////// -->
        <li <?php if (

          $menu=="rekkon_data"||
          $menu=="rekkon_rekap"||
          $menu=="rekkon_detail"

          ){echo "class='active'";} ?>>
            <a href="?menu=rekkon_data">
              <i class="fa fa-area-chart"></i> 
              <span>Rekap Bulanan Pegawai Covid
              </span>
            </a>
        </li>
<!-- /////////////////////////////////////////////////////////////////////////////////////// -->
        <li <?php if (

          $menu=="rekkel_data"||
          $menu=="rekkel_rekap"||
          $menu=="rekkel_detail"

          ){echo "class='active'";} ?>>
            <a href="?menu=rekkel_data">
              <i class="fa fa-bar-chart"></i> 
              <span>Rekap Bulanan Keluarga Covid
              </span>
            </a>
        </li>
<!-- /////////////////////////////////////////////////////////////////////////////////////// --> 
      </ul>
    </section>
  </aside>

  <div class="content-wrapper">
    <section class="content">
      <?php
        error_reporting(0);
        switch($_GET['menu']){
////////////////////////////////////////////////////////////////////////////////////////////
          case 'dashboard';
          include "dashboard.php";
          break;

          case '';
          include "dashboard.php";
          break;
///////////////////////////////////////////////////////////////////////////////////////////
          case 'user_profil':
          include "user_profil.php";
          break;

          case 'user_profil_edit':
          include "user_profil_edit.php";
          break;
///////////////////////////////////////////////////////////////////////////////////////////
          case 'user_data':
          include "user_data.php";
          break;

          case 'user_tambah':
          include "user_tambah.php";
          break;

          case 'user_edit':
          include "user_edit.php";
          break;

          case 'user_hapus': 
          $user_id    = $_GET['user_id']; 
          mysqli_query($koneksi,"DELETE FROM tb_user WHERE user_id='$user_id'"); 
          include "user_data.php"; 
          break;
///////////////////////////////////////////////////////////////////////////////////////////
          case 'peg_data':              
          include "peg_data.php";
          break;

          case 'peg_tambah':
          include "peg_tambah.php";
          break;

          case 'peg_edit':
          include "peg_edit.php";
          break;

          case 'peg_hapus': 
          $peg_nik    = $_GET['peg_nik']; 
          mysqli_query($koneksi,"DELETE FROM tb_peg WHERE peg_nik = '$peg_nik'");
          mysqli_query($koneksi,"DELETE FROM tb_kon WHERE kon_peg_nik = '$peg_nik'");
          mysqli_query($koneksi,"DELETE FROM tb_kel WHERE kel_peg_nik = '$peg_nik'");
          include "peg_data.php"; 
          break;

          //case 'peg_hapus_semua':                         
          //mysqli_query($koneksi,"DELETE FROM tb_peg"); 
          //include "peg_data.php";
          //break;
///////////////////////////////////////////////////////////////////////////////////////////
          case 'kon_data':
          include "kon_data.php";
          break;

          case 'kon_tambah':
          include "kon_tambah.php";
          break;

          case 'kon_edit':
          include "kon_edit.php";
          break;

          case 'kon_hapus': 
          $kon_id     = $_GET['kon_id'];
          mysqli_query($koneksi,"DELETE FROM tb_kon WHERE kon_id='$kon_id'"); 
          include "kon_data.php"; 
          break;
          
          //case 'kon_hapus_semua':                         
          //mysqli_query($koneksi,"DELETE FROM tb_kon");
          //include "kon_data.php";
          //break;
///////////////////////////////////////////////////////////////////////////////////////////
          case 'kel_identitas':
          include "kel_identitas.php";
          break;

          case 'kel_tambah':
          include "kel_tambah.php";
          break;

          case 'kel_identitas_edit':
          include "kel_identitas_edit.php";
          break;

          case 'kel_identitas_hapus':
          $kel_nik    = $_GET['kel_nik'];
          mysqli_query($koneksi,"DELETE FROM tb_kel WHERE kel_nik = '$kel_nik'");
          include "kel_identitas.php";
          break;

          case 'kel_data':
          include "kel_data.php";
          break;

          case 'kel_tambah_lama':
          include "kel_tambah_lama.php";
          break;

          case 'kel_edit':
          include "kel_edit.php";
          break;

          case 'kel_hapus': 
          $kel_id    = $_GET['kel_id'];
          mysqli_query($koneksi,"DELETE FROM tb_kel WHERE kel_id='$kel_id'"); 
          include "kel_data.php"; 
          break;
///////////////////////////////////////////////////////////////////////////////////////////
          case 'vkon_data':
          include "vkon_data.php";
          break;

          case 'vkon_tambah':
          include "vkon_tambah.php";
          break;

          case 'vkon_hapus':
          $peg_nik    = $_GET['peg_nik'];
          mysqli_query($koneksi,"DELETE FROM tb_kon WHERE kon_peg_nik = '$peg_nik'");
          include "vkon_data.php";
          break;

          case 'vkel_data':
          include "vkel_data.php";
          break;

          case 'vkel_tambah':
          include "vkel_tambah.php";
          break;

          case 'vkel_hapus':
          $kel_nik    = $_GET['kel_nik'];
          mysqli_query($koneksi,"DELETE FROM tb_kel WHERE kel_nik = '$kel_nik'");
          include "vkel_data.php";
          break;          
///////////////////////////////////////////////////////////////////////////////////////////
/*
          case 'zpeg_data':
          include "zpeg_data.php";
          break;

          case 'zpeg_data2':
          include "zpeg_data2.php";
          break;
*/
///////////////////////////////////////////////////////////////////////////////////////////          
          //case 'kel_hapus_semua':                         
          //mysqli_query($koneksi,"DELETE FROM tb_kel");
          //include "kel_data.php";
          //break;
///////////////////////////////////////////////////////////////////////////////////////////
          case 'rekkon_data':
          include "rekkon_data.php";
          break;

          case 'rekkon_rekap':
          include "rekkon_rekap.php";
          include "rekkon_data.php";
          break;

          case 'rekkon_detail':
          include "rekkon_detail.php";
          break;



          case 'rekkel_data':
          include "rekkel_data.php";
          break;

          case 'rekkel_rekap':
          include "rekkel_rekap.php";
          include "rekkel_data.php";
          break;

          case 'rekkel_detail':
          include "rekkel_detail.php";
          break;
       
///////////////////////////////////////////////////////////////////////////////////////////
          case 'hapus_logout': $id=$_GET['user_id']; 
                ?>
                <script type="text/javascript">
                  alert('Profil berhasil dihapus');
                  document.location.href="../inc/keluar.php";
                </script>
                <?php
          mysqli_query($koneksi,"DELETE FROM tb_user WHERE user_id='$id'");  
          break;
        }
      ?>
    </section>
  </div>

  <footer class="main-footer">
    <div class="pull-right hidden-xs">      
    </div>
    <strong><a href="">Pusat Data dan Informasi Kementerian Kesehatan</a> &copy; 2021 </a>
  </footer>
  <div class="control-sidebar-bg"></div>
</div>
<script src="../lte/plugins/jQuery/jquery-2.2.3.min.js"></script>
<script src="../lte/bootstrap/js/bootstrap.min.js"></script>
<script src="../lte/dist/js/app.min.js"></script>
<script src="../lte/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="../lte/plugins/datatables/dataTables.bootstrap.min.js"></script>
<script src="../lte/plugins/slimScroll/jquery.slimscroll.min.js"></script>
<script src="../lte/plugins/fastclick/fastclick.js"></script>
<script src="../lte/dist/js/demo.js"></script>
<script>
  $(function () {
    $("#example1").DataTable();
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": true,
      "ordering": true,
      "info": true,
      "autoWidth": false
    });
  });
</script>
</body>
</html>