<?php
  $peg_nik    = $_GET['peg_nik'];
  $query_peg  = mysqli_query($koneksi,"SELECT * FROM tb_peg WHERE peg_nik='$peg_nik' ");
  $data_peg   = mysqli_fetch_array($query_peg);
  $peg_nama   = $data_peg['peg_nama'];

  $kon_peg_id       = $data_peg['peg_id'];
  $kon_peg_nama     = $data_peg['peg_nama'];
  $kon_peg_jk       = $data_peg['peg_jk'];
  $kon_peg_tgllahir = $data_peg['peg_tgllahir'];
  $kon_peg_nip      = $data_peg['peg_nip'];
  $kon_peg_nik      = $data_peg['peg_nik'];
  $kon_peg_stapeg   = $data_peg['peg_stapeg'];
  $kon_peg_org      = $data_peg['peg_org'];
  $kon_peg_orgsat   = $data_peg['peg_orgsat'];
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
          <h3 class="box-title">Edit Data Kondisi Pegawai Covid</h3>
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
                  <label>Tanggal Melakukan Swab</label>
                  <input class="form-control" name="kon_tglswab" type="date"/>
                </div>

                <div class="form-group">
                  <label>Tanggal Hasil Swab</label>
                  <input class="form-control" name="kon_tglhasil" type="date"/>
                </div>

                <div class="form-group">
                  <label>Status Kondisi</label><font color="red"> *</font><br>
                  <select name="kon_status" class="form-control" required="required">
                    <option></option>
                    <option class="form-control">Isman</option>
                    <option class="form-control">Rujuk</option>
                    <option class="form-control">Sembuh</option>
                    <option class="form-control">Meninggal</option>
                  </select>  
                </div>  

                <div class="form-group">
                    <label>Keterangan</label><textarea class="form-control" name="kon_ket"> 
                    </textarea>
                </div>    

                <div class="form-group">
                  <label>Tanggal Kondisi</label><font color="red"> *</font><br>
                  <input class="form-control" name="kon_tgl" type="date" required="required" value="<?php echo date('Y-m-d'); ?>" readonly/>
                </div>
<!-- /////////////////////////////////////////////////////////////////////////////////////////////   -->                  
                  <input name="fsimpan" type="submit"  class="btn btn-sm btn-primary" value="Simpan">
                  <a  class="btn btn-sm btn-danger" 
                      href="?menu=kon_data&peg_nik=<?php echo $peg_nik;?>">Batal
                  </a>
              </form>
              <?php 
                if (isset($_POST['fsimpan'])) {
                  $kon_tglswab      = $_POST['kon_tglswab'];
                  $kon_tglhasil     = $_POST['kon_tglhasil'];
                  $kon_status       = $_POST['kon_status'];
                  $kon_ket          = $_POST['kon_ket'];
                  $kon_tgl          = $_POST['kon_tgl'];
                  $kon_tglinput     = date('Y-m-d');                             
//////////////////////////////////////////////////////////   
                  $q ="INSERT INTO tb_kon (
                    kon_peg_id, 
                    kon_peg_nama, 
                    kon_peg_jk, 
                    kon_peg_tgllahir, 
                    kon_peg_nip, 
                    kon_peg_nik, 
                    kon_peg_stapeg, 
                    kon_peg_org, 
                    kon_peg_orgsat, 
                    kon_tglswab, 
                    kon_tglhasil, 
                    kon_status, 
                    kon_ket, 
                    kon_tgl, 
                    kon_tglinput
                  ) VALUES (
                    '$kon_peg_id', 
                    '$kon_peg_nama', 
                    '$kon_peg_jk',
                    '$kon_peg_tgllahir', 
                    '$kon_peg_nip', 
                    '$kon_peg_nik', 
                    '$kon_peg_stapeg', 
                    '$kon_peg_org', 
                    '$kon_peg_orgsat', 
                    '$kon_tglswab', 
                    '$kon_tglhasil', 
                    '$kon_status', 
                    '$kon_ket', 
                    '$kon_tgl', 
                    '$kon_tglinput'
                  )";
                  mysqli_query($koneksi,$q);
                  if ($profil['user_akses']!="Umum"){
              ?>
                      <script type="text/javascript">
                        alert('Berhasil menambah data kondisi pegawai covid');
                        document.location.href="?menu=kon_data&peg_nik=<?php echo $peg_nik;?>";
                      </script>
              <?php 
                  } else{
              ?>
                      <script type="text/javascript">
                        alert('Berhasil menambah data kondisi pegawai covid');
                        document.location.href="?menu=individu_data";
                      </script>
              <?php 
                  }
                } 
              ?>
            </div>
          </div>
        </div>
      </div>
    </section>