<?php
  $peg_id = $_GET['peg_id'];
  $queryx  = mysqli_query($koneksi,"SELECT * FROM tb_peg WHERE peg_id='$peg_id'");
  $datax   = mysqli_fetch_array($queryx);
  $peg_idx  = $datax['peg_id'];
  $peg_nikx  = $datax['peg_nik'];
?>

<head>
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/css/select2.min.css" rel="stylesheet" />
  <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/js/select2.min.js"></script>
</head>

<?php
//$tgl_sekarang=date("d-m-Y");
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
  <div class="row">
    <div class="col-xs-12 col-md-8">
      <h3><span class="fa fa-file"></span>
        Data Kondisi Pegawai Covid
    </h3>
    </div>
  </div>
  <section class="content">
      <div class="box box-default">
        <div class="box-header with-border">
          <h3 class="box-title">Tambah Data Kondisi Pegawai Covid</h3>
        </div>
        <div class="box-body">
          <div class="row">
            <div class="col-md-12">
              <form method="POST">
                <div class="form-group" >
                  <label>Nama Pegawai Covid</label> <font color="red"> *</font> <br>
                  <select  class="myselect" name="kon_peg_nik" required="required" style="width:1210px;">
                    <option class="form-control"></option>
                    <?php
//$peg_nikv = $data['peg_nik']; if ($peg_nikv==$peg_nikx){  echo "selected";   }
                    $sql = $koneksi->query("SELECT * FROM tb_peg");
                        while ($data=$sql->fetch_assoc()) {
                    ?>
                      <option class="form-control" value="<?php echo $data['peg_nik']; ?>">
                        <?php echo $data['peg_nik']." - ".$data['peg_nama']; ?></option>
                    <?php 
                    } 
                    ?>
                  </select>
                </div>

                <div class="form-group">
                  <label>Tanggal Melakukan Swab</label>
                  <input class="form-control" name="kon_tglswab" type="date" />
                </div>

                <div class="form-group">
                  <label>Tanggal Hasil Swab</label>
                  <input class="form-control" name="kon_tglhasil" type="date"/>
                </div>

                <div class="form-group">
                  <label>Status Rawat</label><font color="red"> *</font>
                  <select name="kon_starawat" class="form-control" required="required">
                    <option></option>
                    <option class="form-control">Isman</option>
                    <option class="form-control">Rujuk</option>
                  </select>  
                </div>


                <div class="form-group">
                  <label>Status Akhir</label><font color="red"> *</font>
                  <select name="kon_staakhir" class="form-control" required="required">
                    <option></option>
                    <option class="form-control">Dalam Proses</option>
                    <option class="form-control">Sembuh</option>
                    <option class="form-control">Meninggal</option>
                  </select>  
                </div>     

                <div class="form-group">
                    <label>Keterangan</label><textarea class="form-control" name="kon_ket"> 
                    </textarea>
                </div>    

                <div class="form-group">
                  <label>Tanggal Kondisi</label><font color="red"> *</font>
                  <input class="form-control" name="kon_tgl" type="date" required="required" value="<?php echo date('Y-m-d'); ?>" readonly/>
                </div>                           
<!-- /////////////////////////////////////////////////////////////////////////////////////////////   -->
                                
                  <input name="fsimpan" type="submit"  class="btn btn-sm btn-primary" value="Simpan">
                  <a class="btn btn-sm btn-danger" href="?menu=kon_data">Batal</a>
                             
              </form>
              <?php 
                if (isset($_POST['fsimpan'])) {
                  $kon_chosen       = $_POST['kon_peg_nik'];
                  $query = mysqli_query($koneksi,"SELECT * FROM tb_peg WHERE peg_nik='$kon_chosen'");
                  $chosen = mysqli_fetch_array($query);

                  $kon_peg_id       = $chosen['peg_id'];
                  $kon_peg_nama     = $chosen['peg_nama'];
                  $kon_peg_jk       = $chosen['peg_jk'];
                  $kon_peg_tgllahir = $chosen['peg_tgllahir'];
                  $kon_peg_nip      = $chosen['peg_nip'];
                  $kon_peg_nik      = $chosen['peg_nik'];
                  
                  $kon_peg_stapeg   = $chosen['peg_stapeg'];
                  $kon_peg_org      = $chosen['peg_org'];
                  $kon_peg_orgunit  = $chosen['peg_orgunit'];

                  $kon_tglswab      = $_POST['kon_tglswab'];
                  $kon_tglhasil     = $_POST['kon_tglhasil'];
                  $kon_starawat     = $_POST['kon_starawat'];
                  $kon_staakhir     = $_POST['kon_staakhir'];
                  $kon_ket          = $_POST['kon_ket'];
                  $kon_tgl          = $_POST['kon_tgl'];
                  $kon_tglinput     = date('Y-m-d');
                             
//////////////////////////////////////////////////////////   

                  $q ="INSERT INTO tb_kon (kon_peg_id, kon_peg_nama, kon_peg_jk, kon_peg_tgllahir, kon_peg_nip, kon_peg_nik, kon_peg_stapeg, kon_peg_org, kon_peg_orgunit, kon_tglswab, kon_tglhasil, kon_starawat, kon_staakhir, kon_ket, kon_tgl, kon_tglinput) VALUES ('$kon_peg_id', '$kon_peg_nama', '$kon_peg_jk','$kon_peg_tgllahir', '$kon_peg_nip', '$kon_peg_nik', '$kon_peg_stapeg', '$kon_peg_org', '$kon_peg_orgunit', '$kon_tglswab', '$kon_tglhasil',  '$kon_starawat',  '$kon_staakhir', '$kon_ket', '$kon_tgl', '$kon_tglinput')";
                  mysqli_query($koneksi,$q);

              ?>
                <script type="text/javascript">
                  alert('Berhasil menambah data kondisi pegawai covid');
                  document.location.href="?menu=xkon_data&peg_id=<?php echo $kon_peg_id; ?>";
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