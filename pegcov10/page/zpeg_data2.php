<?php
  $qpeg_nik = $_GET['zpeg_nik'];
  $query  = mysqli_query($koneksi,"SELECT * FROM tb_kon WHERE kon_id='$kon_id'");
  $data   = mysqli_fetch_array($query);
?>

<head>
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/css/select2.min.css" rel="stylesheet" />
  <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/js/select2.min.js"></script>
</head>

<!DOCTYPE html>
<html>
<head>
  <title></title>
</head>
<body>

 <div style="padding-top: 40px">
<div class="box" style="">
            <div class="box-header">
        
    <div class="col-xs-12 col-md-8">
      <h3><span class="fa fa-database"></span>
        Data Pegawai Covid
    </h3>
    </div>
  </div>
  <section class="content">
      <div class="box box-info">
        <div class="box-header with-border">
          <h3 class="box-title">Cari Data Pegawai</h3>
        </div>
        <div class="box-body ">
          <div class="row">
            <div class="col-md-12">
              <form method="POST">

              <div class="form-group" >
                  <label>Nama Pegawai</label> <br>
                  <select  class="form-control my-colorpicker1 myselect" name="kon_peg_nik" required="required" id="kon_peg_nik" onchange="otomatis()">
                    <option class="form-control form-control my-colorpicker1 select2" style="width:20px"></option>
                    <?php
                      $sql = $koneksi->query("SELECT * FROM tb_peg");
                        while ($data=$sql->fetch_assoc()) {
                    ?>
                        <option class="form-control" value="<?php echo $data['peg_nik']; ?>"><?php echo $data['peg_nik']." - ".$data['peg_nama']; ?></option>
                    <?php 
                      } 
                    ?>
                  </select>
                </div>
<!-- /////////////////////////////////////////////////////////////////////////////////////////////   -->                    
                  <input name="fsimpan" type="submit"  class="btn btn-sm btn-primary" value="Cari">           
              </form>
              <?php 
                if (isset($_POST['fsimpan'])) {


                  $kon_chosen       = $_POST['kon_peg_nik'];
              ?>
                <script type="text/javascript">
                  document.location.href="?menu=zpeg_data2&zpeg_nik=<?php echo $kon_chosen; ?>";
                </script>
              <?php } ?>
            </div>
          </div>
        </div>
     


<?php

  $queryx  = mysqli_query($koneksi,"SELECT * FROM tb_peg WHERE peg_nik='$qpeg_nik'");
  $datax   = mysqli_fetch_array($queryx);
  $peg_idx  = $datax['peg_id'];
?>

    <div class="box box-default">
          <div class="col-xs-12 col-md-8">
      <h3><span class="fa fa-database"></span>
        Informasi Pegawai
    </h3>
    </div>
        <div class="box-body">
          <div class="row">
              <div class="col-md-9">
                <div class="col-md-8">
            <div class="panel-body">
              <table class="table" cellpadding="8" cellspacing="8">
                <tr><th>Nama Pegawai</th><td>:</td> <td><?php echo $datax['peg_nama']; ?></td></tr>
                <tr><th>Jenis Kelamin </th><td>:</td> <td><?php echo $datax['peg_jk']; ?></td></tr>
                <tr><th>Tanggal Lahir </th><td>:</td> <td><?php echo $datax['peg_tgllahir']; ?></td></tr> 
                <tr><th>NIK </th><td>:</td> <td><?php echo $datax['peg_nik']; ?></td></tr>  
                <tr><th>NIP </th><td>:</td> <td><?php echo $datax['peg_nip']; ?></td></tr>  
                <tr><th>Status Pegawai </th><td>:</td> <td><?php echo $datax['peg_stapeg']; ?></td>
                <tr><th>Organisasi </th><td>:</td> <td><?php echo $datax['peg_org']; ?></td>
                <tr><th>Org. Unit </th><td>:</td> <td><?php echo $datax['peg_orgunit']; ?></td>
                </tr>                           
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>      
  </div>

 </div>

    </section>


    <div class="row" style="padding-left: 35px">
    <div class="col-xs-12 col-md-8">
      <h3><span class="fa fa-male"></span>
        Data Kondisi Pegawai Covid
        <?php
          $qjumlah = mysqli_query($koneksi,"SELECT * FROM tb_kon WHERE kon_peg_id='$peg_idx'");
          $jumlah = mysqli_num_rows($qjumlah);
        ?>
        <button class="btn btn-sm btn-default"><span class="badge"><?php echo $jumlah; ?></span></button>
        <a href="?menu=kon_tambah&peg_nik=<?php echo $qpeg_nik;?>" class="btn btn-sm btn-success">Tambah Kondisi <span class="fa fa-plus"></a>
    </h3>
    </div>
  </div>
<!-- ////////////////////////////////////////////// -->
  <div class="box">
        <div class="box-body">
            <table id="example1" class="table table-bordered table-striped">
              <thead>
                <tr>
            <th>No</th>           
            <th>Tanggal Swab</th>
            <th>Tanggal Hasil</th>
            <th>Status Rawat</th>
            <th>Status Akhir</th>
            <th>Ket.</th>
            <th>Tanggal Kondisi</th>
            <th>Tanggal Input</th>
            <th>Opsi</th>
                </tr>
              </thead>
              <tbody>
          <?php
              $no = 1;
              $sql = $koneksi->query("SELECT * FROM tb_kon WHERE kon_peg_nik='$qpeg_nik' ORDER BY kon_id DESC");
              while ($data=$sql->fetch_assoc()) {
          ?>
            <tr>
                <td> <?php echo $no++; ?> </td>
                <td> <?php echo $data['kon_tglswab']; ?></td>
                <td> <?php echo $data['kon_tglhasil']; ?></td>
                <td> <?php echo $data['kon_starawat']; ?></td>
                <td> <?php echo $data['kon_staakhir']; ?></td>
                <td> <?php echo $data['kon_ket']; ?></td>
                <td> <?php echo $data['kon_tgl']; ?></td>
                <td> <?php echo $data['kon_tglinput']; ?></td>
                
                <td>
              <a href="?menu=kon_edit&kon_id=<?php echo $data['kon_id']; ?>" class="btn btn-sm btn-success" title="Edit <?php echo $data['kon_peg_nama'];?>"><span class="fa fa-edit"></span></a>

              <a onclick="return confirm('Anda yakin menghapus data kondisi pegawai covid <?php echo $data['kon_nama']; ?> ?')" href="?menu=kon_hapus&kon_id=<?php echo $data['kon_id']; ?>" class="btn btn-sm btn-danger" title="Hapus <?php echo $data['kon_nama'];?>" ><span class="fa fa-trash"></span> </a>
                </td>
            </tr>
              <?php 
              } 
          ?>
              </tbody>
          </table>
      </div>
  </div>



<?php
  //$peg_id = $_GET['peg_id'];
  $queryx  = mysqli_query($koneksi,"SELECT * FROM tb_peg WHERE peg_nik='$qpeg_nik'");
  $datax   = mysqli_fetch_array($queryx);
  $peg_idx  = $datax['peg_id'];
?>


    <div class="row" style="padding-left: 35px">
    <div class="col-xs-12 col-md-12">
      <h3><span class="fa fa-male"></span>
        Data Keluarga Covid
        <?php
          $qjumlah = mysqli_query($koneksi,"SELECT DISTINCT kel_peg_nik, kel_nik FROM tb_kel WHERE kel_peg_nik='$qpeg_nik' ");
          $jumlah = mysqli_num_rows($qjumlah);
        ?>
        <button class="btn btn-sm btn-default"><span class="badge"><?php echo $jumlah; ?></span></button>
        <a href="?menu=kel_tambah&peg_nik=<?php echo $qpeg_nik;?>" class="btn btn-sm btn-success">Tambah Keluarga Covid (Baru)<span class="fa fa-plus"></a>
    </h3>
    </div>
  </div>


<!-- ////////////////////////////////////////////// -->
  <div class="box">
        <div class="box-body" >
            <table id="example2" class="table table-bordered table-striped">
              <thead>
                <tr>
            <th>No</th>
            <th>Nama Keluarga</th>
            <th>Jenis Kelamin</th>
            <th>Hubungan</th>
            <th>Tanggal Lahir</th>
            <th>NIK</th>
            <th>Status Pegawai</th>
            <th>Unit Kerja</th>
            <th>NIP</th>
            <th>Opsi</th>
                </tr>
              </thead>
              <tbody>
          <?php
              $no = 1;
              $sql = $koneksi->query("SELECT DISTINCT kel_nama, kel_jk, kel_hubungan, kel_tgllahir, kel_nik, kel_stapeg, kel_unitkerja, kel_nip FROM tb_kel WHERE kel_peg_nik='$qpeg_nik' ");
              while ($data=$sql->fetch_assoc()) {
          ?>
            <tr>
                <td> <?php echo $no++; ?> </td>
                <td> <?php echo $data['kel_nama']; ?></td>
                <td> <?php echo $data['kel_jk']; ?></td>
                <td> <?php echo $data['kel_hubungan']; ?></td>
                <td> <?php echo $data['kel_tgllahir']; ?></td>
                <td> <?php echo $data['kel_nik']; ?></td>
                <td> <?php echo $data['kel_stapeg']; ?></td>
                <td> <?php echo $data['kel_unitkerja']; ?></td>
                <td> <?php echo $data['kel_nip']; ?></td>
                <td>
              <a href="?menu=kel_identitas_edit&kel_nik=<?php echo $data['kel_nik']; ?>" class="btn btn-sm btn-success" title="Edit <?php echo $data['kel_nama'];?>"><span class="fa fa-edit"></a>
              <a onclick="return confirm('Anda yakin menghapus data Keluarga Covid <?php echo $data['kel_nama']; ?> ?')" href="?menu=kel_hapus&kel_id=<?php echo $data['kel_id']; ?>" class="btn btn-sm btn-danger" title="Hapus <?php echo $data['kel_nama'];?>" ><span class="fa fa-trash"></a>
              <a href="?menu=kel_data&kel_nik=<?php echo $data['kel_nik']; ?>" class="btn btn-sm btn-default" title="Tambah Kondisi <?php echo $data['kel_nama'];?>"><span class="fa fa-eye"></a></a>
                </td>
            </tr>
              <?php 
              } 
          ?>
              </tbody>
          </table>
      </div>
  </div>
        


<script type="text/javascript">
            function otomatis(){
                var kon_peg_nik = $("#kon_peg_nik").val();
                $.ajax({
                    url: 'otomatis.php',
                    data:"kon_peg_nik="+kon_peg_nik ,
                }).success(function (data) {
                    var json = data,
                    obj = JSON.parse(json);
                    $('#peg_jk').val(obj.peg_jk);
                    $('#peg_tgllahir').val(obj.peg_tgllahir);
                    $('#peg_nip').val(obj.peg_nip);
                    $('#peg_nik').val(obj.peg_nik);
                    $('#peg_stapeg').val(obj.peg_stapeg);
                    $('#peg_org').val(obj.peg_org);
                    $('#peg_orgunit').val(obj.peg_orgunit);
               });
            }
        </script>
<script type="text/javascript">
      $(".myselect").select2();
</script>