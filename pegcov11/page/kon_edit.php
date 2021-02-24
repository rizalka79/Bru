<?php
  $kon_id       = $_GET['kon_id'];
  $query_kon    = mysqli_query($koneksi,"SELECT * FROM tb_kon WHERE kon_id='$kon_id'");
  $data_kon     = mysqli_fetch_array($query_kon);
  $kon_peg_nik  = $data_kon['kon_peg_nik'];
  $kon_peg_nama = $data_kon['kon_peg_nama'];
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
                  <input class="form-control" name="kon_peg_nik" required="required" value="<?php echo $kon_peg_nik." - ".$kon_peg_nama  ;?>" readonly>
                </div>

                <div class="form-group">
                  <label>Tanggal Melakukan Swab</label>
                  <input class="form-control" name="kon_tglswab" type="date" value="<?php echo $data_kon['kon_tglswab']; ?>"/>
                </div>

                <div class="form-group">
                  <label>Tanggal Hasil Swab</label>
                  <input class="form-control" name="kon_tglhasil" type="date" value="<?php echo $data_kon['kon_tglhasil']; ?>"/>
                </div>

                <div class="form-group">
                  <label>Status Kondisi</label><font color="red"> *</font>
                  <select name="kon_status" class="form-control" required="required">
                    <option><?php echo $data_kon['kon_status']; ?></option>
                    <option class="form-control">Isman</option>
                    <option class="form-control">Rujuk</option>
                    <option class="form-control">Sembuh</option>
                    <option class="form-control">Meninggal</option>
                  </select>  
                </div>              

                <div class="form-group">
                    <label>Keterangan</label>
                    <textarea class="form-control" name="kon_ket"><?php echo $data_kon['kon_ket']; ?></textarea>
                </div>    

                <div class="form-group">
                  <label>Tanggal Kondisi</label><font color="red"> *</font>
                  <input class="form-control" name="kon_tgl" type="date" required="required" value="<?php echo $data_kon['kon_tgl']; ?>" readonly/>
                </div>                           
<!-- /////////////////////////////////////////////////////////////////////////////////////////////   -->
                  <input name="fsimpan" type="submit"  class="btn btn-sm btn-primary" value="Simpan">
                  <a  class="btn btn-sm btn-danger" 
                      href="?menu=kon_data&peg_nik=<?php echo $kon_peg_nik;?>">Batal
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
                  $q ="UPDATE tb_kon SET 
                    kon_tglswab     = '$kon_tglswab', 
                    kon_tglhasil    = '$kon_tglhasil', 
                    kon_status      = '$kon_status', 
                    kon_ket         = '$kon_ket', 
                    kon_tgl         = '$kon_tgl' , 
                    kon_tglinput    = '$kon_tglinput' 
                    WHERE 
                    kon_id='$kon_id'";
                  mysqli_query($koneksi,$q);
                  if ($profil['user_akses']!="Umum"){
              ?>
                      <script type="text/javascript">
                        alert('Berhasil merubah data kondisi pegawai covid');
                        document.location.href="?menu=kon_data&peg_nik=<?php echo $kon_peg_nik;?>";
                      </script>
              <?php 
                  } else{
              ?>
                      <script type="text/javascript">
                        alert('Berhasil merubah data kondisi pegawai covid');
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