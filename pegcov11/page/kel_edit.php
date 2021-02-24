<?php
  $peg_nik      = $_GET['peg_nik'];
  $query_peg    = mysqli_query($koneksi,"SELECT * FROM tb_peg WHERE peg_nik='$peg_nik'");
  $data_peg     = mysqli_fetch_array($query_peg);
  $peg_nama     = $data_peg['peg_nama']; 

  $kel_id       = $_GET['kel_id'];
  $query_kel    = mysqli_query($koneksi,"SELECT * FROM tb_kel WHERE kel_id='$kel_id'");
  $data_kel     = mysqli_fetch_array($query_kel);
  $kel_nama     = $data_kel['kel_nama'];
  $kel_nik      = $data_kel['kel_nik'];
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
  <div class="row">
    <div class="col-xs-12 col-md-8">
      <h3><span class="fa fa-file-o"></span>
        Data Keluarga Pegawai Covid
    </h3>
    </div>
  </div>
  <section class="content">
      <div class="box box-default">
        <div class="box-header with-border">
          <h3 class="box-title">Edit Data Kondisi Keluarga Covid</h3>
        </div>
        <div class="box-body">
          <div class="row">
            <div class="col-md-12">
              <form method="POST">

                <div class="form-group">
                  <label>NIK - Nama Pegawai</label><font color="red"> *</font><br>
                  <input class="form-control" name="peg_nik" required="required" value="<?php echo $peg_nik." - ".$peg_nama  ;?>" readonly>
                </div>

                <div class="form-group">
                  <label>NIK - Nama Keluarga Covid</label><font color="red"> *</font><br>
                  <input class="form-control" name="kel_nik" required="required" value="<?php echo $kel_nik." - ".$kel_nama  ;?>" readonly>
                </div>                  

                <div class="form-group">
                  <label>Tanggal Melakukan Swab</label>
                  <input class="form-control" name="kel_tglswab" type="date" required="required"  value="<?php echo $data_kel['kel_tglswab']; ?>"/>
                </div>

                <div class="form-group">
                  <label>Tanggal Hasil Swab</label>
                  <input class="form-control" name="kel_tglhasil" type="date" required="required" value="<?php echo $data_kel['kel_tglhasil']; ?>"/>
                </div>

                <div class="form-group">
                  <label>Status Rawat</label>
                  <select name="kel_status" class="form-control" required="required">
                    <option><?php echo $data_kel['kel_status']; ?></option>
                    <option class="form-control">Isman</option>
                    <option class="form-control">Rujuk</option>
                    <option class="form-control">Sembuh</option>
                    <option class="form-control">Meninggal</option>
                  </select>  
                </div>              

                <div class="form-group">
                    <label>Keterangan</label>
                    <textarea class="form-control" name="kel_ket"><?php echo $data_kel['kel_ket']; ?></textarea>
                </div>    

                <div class="form-group">
                  <label>Tanggal Kondisi</label>
                  <input class="form-control" name="kel_tgl" type="date" required="required" value="<?php echo $data_kel['kel_tgl']; ?>" readonly/>
                </div>                
<!-- /////////////////////////////////////////////////////////////////////////////////////////////   -->                   
                <input name="fsimpan" type="submit"  class="btn btn-sm btn-primary" value="Simpan">
                <a class="btn btn-sm btn-danger" href="?menu=kel_data&kel_nik=<?php echo $kel_nik ;?>">Batal</a>
              </form>
              <?php 
                if (isset($_POST['fsimpan'])) {
                  $kel_tglswab      = $_POST['kel_tglswab'];
                  $kel_tglhasil     = $_POST['kel_tglhasil'];
                  $kel_status       = $_POST['kel_status'];
                  $kel_ket          = $_POST['kel_ket'];
                  $kel_tgl          = $_POST['kel_tgl'];
                  $kel_tglinput     = date('Y-m-d');                
//////////////////////////////////////////////////////////   
                  $q ="UPDATE tb_kel SET 
                    kel_tglswab   = '$kel_tglswab', 
                    kel_tglhasil  = '$kel_tglhasil', 
                    kel_status    = '$kel_status', 
                    kel_ket       = '$kel_ket', 
                    kel_tgl       = '$kel_tgl', 
                    kel_tglinput  = '$kel_tglinput' 
                    WHERE kel_id  = '$kel_id' ";
                  mysqli_query($koneksi,$q);
              ?>
                <script type="text/javascript">
                  alert('Berhasil merubah data kondisi keluarga covid');
                  document.location.href="?menu=kel_data&kel_nik=<?php echo $kel_nik ;?>&peg_nik=<?php echo $peg_nik ;?>";
                </script>
              <?php } ?>
            </div>
          </div>
        </div>
      </div>
    </section>

    <script type="text/javascript">
      $(".myselect").select2();
</script>