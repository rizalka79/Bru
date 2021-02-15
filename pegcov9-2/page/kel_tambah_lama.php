<?php
  $peg_nik        = $_GET['peg_nik'];
  $query_peg      = mysqli_query($koneksi,"SELECT * FROM tb_peg WHERE peg_nik='$peg_nik' ");
  $data_peg       = mysqli_fetch_array($query_peg);
  $peg_nama       = $data_peg['peg_nama'];

  $kel_peg_id     = $data_peg['peg_id'];
  $kel_peg_nama   = $data_peg['peg_nama'];
  $kel_peg_nip    = $data_peg['peg_nip'];
  $kel_peg_nik    = $data_peg['peg_nik'];
  $kel_peg_org    = $data_peg['peg_org'];
  $kel_peg_orgsat = $data_peg['peg_orgsat'];

  $kel_nik        = $_GET['kel_nik'];
  $query_kel      = mysqli_query($koneksi,"SELECT * FROM tb_kel WHERE kel_nik='$kel_nik'");
  $data_kel       = mysqli_fetch_array($query_kel);
  $kel_nama       = $data_kel['kel_nama'];

  $kel_nama       = $data_kel['kel_nama'];
  $kel_jk         = $data_kel['kel_jk'];
  $kel_hubungan   = $data_kel['kel_hubungan'];
  $kel_tgllahir   = $data_kel['kel_tgllahir'];
  $kel_nik        = $data_kel['kel_nik'];
  $kel_stapeg     = $data_kel['kel_stapeg'];
  $kel_nip        = $data_kel['kel_nip'];
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
  <div class="row">
    <div class="col-xs-12 col-md-8">
      <h3><span class="fa fa-database"></span>
        Data Kondisi Keluarga Covid
    </h3>
    </div>
  </div>
  <section class="content">
      <div class="box box-default">
        <div class="box-header with-border">
          <h3 class="box-title">Tambah Data Kondisi Keluarga Covid (Lama)</h3>
        </div>
        <div class="box-body">
          <div class="row">
            <div class="col-md-12">
              <form method="POST">

                <div class="form-group">
                  <label>NIK - Nama Pegawai</label><font color="red"> *</font><br>
                  <input class="form-control" name="kel_peg_nik" required="required" value="<?php echo $peg_nik." - ".$peg_nama  ;?>" readonly>
                </div>

                <div class="form-group">
                  <label>NIK - Nama Keluarga Covid</label><font color="red"> *</font><br>
                  <input class="form-control" name="kel_nik" required="required" value="<?php echo $kel_nik." - ".$kel_nama  ;?>" readonly>
                </div>

                <div class="form-group">
                  <label>Tanggal Melakukan Swab</label>
                  <input class="form-control" name="kel_tglswab" type="date"/>
                </div>

                <div class="form-group">
                  <label>Tanggal Hasil Swab</label>
                  <input class="form-control" name="kel_tglhasil" type="date" />
                </div>

                <div class="form-group">
                  <label>Status Rawat</label><font color="red"> *</font><br>
                  <select name="kel_starawat" class="form-control" required="required">
                    <option></option>
                    <option class="form-control">Isman</option>
                    <option class="form-control">Rujuk</option>
                  </select>  
                </div>

                <div class="form-group">
                  <label>Status Akhir</label><font color="red"> *</font><br>
                  <select name="kel_staakhir" class="form-control" required="required">
                    <option></option>
                    <option class="form-control">Dalam Proses</option>
                    <option class="form-control">Sembuh</option>
                    <option class="form-control">Meninggal</option>
                  </select>  
                </div>     

                <div class="form-group">
                    <label>Keterangan</label><textarea class="form-control" name="kel_ket"> 
                    </textarea>
                </div>    

                <div class="form-group">
                  <label>Tanggal Kondisi</label><font color="red"> *</font><br>
                  <input class="form-control" name="kel_tgl" type="date" required="required" value="<?php echo date('Y-m-d'); ?>" readonly/>
                </div>
<!-- /////////////////////////////////////////////////////////////////////////////////////////////   -->                   
                  <input name="fsimpan" type="submit"  class="btn btn-sm btn-primary" value="Simpan">
                  <a class="btn btn-sm btn-danger" href="?menu=kel_data&peg_nik=<?php echo $peg_nik; ?>&kel_nik=<?php echo $kel_nik; ?>">Batal</a>
              </form>
              <?php 
                if (isset($_POST['fsimpan'])) {
                  $kel_chosen       = $_POST['kel_peg_nik'];
                  $query            = mysqli_query($koneksi,"SELECT * FROM tb_peg WHERE peg_nik='$kel_chosen'");
                  $chosen           = mysqli_fetch_array($query);
                  $kel_chosenl      = $_POST['kel_nik'];
                  $queryl           = mysqli_query($koneksi,"SELECT * FROM tb_kel WHERE kel_nik='$kel_chosenl'");
                  $chosenl          = mysqli_fetch_array($queryl);

                  $kel_tglswab      = $_POST['kel_tglswab'];
                  $kel_tglhasil     = $_POST['kel_tglhasil'];
                  $kel_starawat     = $_POST['kel_starawat'];
                  $kel_staakhir     = $_POST['kel_staakhir'];
                  $kel_ket          = $_POST['kel_ket'];
                  $kel_tgl          = $_POST['kel_tgl'];
                  $kel_tglinput     = date('Y-m-d');                            
//////////////////////////////////////////////////////////   
                  $q ="INSERT INTO tb_kel (
                    kel_peg_id, 
                    kel_peg_nama, 
                    kel_peg_nip,
                    kel_peg_nik, 
                    kel_peg_org,
                    kel_peg_orgsat, 
                    kel_nama,
                    kel_jk,
                    kel_hubungan,
                    kel_tgllahir,
                    kel_nik,
                    kel_stapeg,
                    kel_nip,
                    kel_tglswab, 
                    kel_tglhasil, 
                    kel_starawat, 
                    kel_staakhir, 
                    kel_ket, 
                    kel_tgl, 
                    kel_tglinput
                  ) VALUES (
                    '$kel_peg_id', 
                    '$kel_peg_nama', 
                    '$kel_peg_nip', 
                    '$kel_peg_nik', 
                    '$kel_peg_org', 
                    '$kel_peg_orgsat', 
                    '$kel_nama', 
                    '$kel_jk', 
                    '$kel_hubungan', 
                    '$kel_tgllahir', 
                    '$kel_nik',
                    '$kel_stapeg',
                    '$kel_nip',
                    '$kel_tglswab', 
                    '$kel_tglhasil', 
                    '$kel_starawat', 
                    '$kel_staakhir', 
                    '$kel_ket', 
                    '$kel_tgl', 
                    '$kel_tglinput')";
                  mysqli_query($koneksi,$q);
              ?>
                <script type="text/javascript">
                  alert('Berhasil menambah data kondisi keluarga covid');
                  document.location.href="?menu=kel_data&peg_nik=<?php echo $peg_nik; ?>&kel_nik=<?php echo $kel_nik; ?>";
                </script>
              <?php } ?>
            </div>
          </div>
        </div>
      </div>
    </section>