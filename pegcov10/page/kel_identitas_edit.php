<?php
  $peg_nik          = $_GET['peg_nik'];
  $query_peg        = mysqli_query($koneksi,"SELECT * FROM tb_peg WHERE peg_nik='$peg_nik' ");
  $data_peg         = mysqli_fetch_array($query_peg);
  $peg_nama         = $data_peg['peg_nama'];

  $kel_peg_id       = $data_peg['peg_id'];
  $kel_peg_nama     = $data_peg['peg_nama'];
  $kel_peg_nip      = $data_peg['peg_nip'];
  $kel_peg_nik      = $data_peg['peg_nik'];
  $kel_peg_org      = $data_peg['peg_org'];
  $kel_peg_orgsat   = $data_peg['peg_orgsat'];

  $kel_nik          = $_GET['kel_nik'];
  $query_kel        = mysqli_query($koneksi,"SELECT * FROM tb_kel WHERE kel_nik='$kel_nik'");
  $data_kel         = mysqli_fetch_array($query_kel);
?>

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
          <h3 class="box-title">Edit Identitas Keluarga Covid</h3>
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
                  <label>Nama Keluarga Covid</label><font color="red"> *</font>
                  <input class="form-control" name="kel_nama" required="required" value="<?php echo $data_kel['kel_nama']; ?>"/>
                </div>

                <div class="form-group">
                  <label>Jenis Kelamin</label><font color="red"> *</font>
                  <select name="kel_jk" class="form-control" required="required">
                    <option><?php echo $data_kel['kel_jk']; ?></option>
                    <option class="form-control">Laki-laki</option>
                    <option class="form-control">Perempuan</option>
                  </select>  
                </div>

                <div class="form-group">
                  <label>Hubungan</label><font color="red"> *</font>
                  <select name="kel_hubungan" class="form-control" required="required">
                    <option><?php echo $data_kel['kel_hubungan']; ?></option>
                    <option class="form-control">Suami/Istri</option>
                    <option class="form-control">Anak/Menantu</option>
                    <option class="form-control">Bapak/Ibu/Mertua</option>
                    <option class="form-control">Kakak/Adik</option>
                    <option class="form-control">Kakek/Nenek</option>
                    <option class="form-control">Cucu</option>
                    <option class="form-control">Paman/Bibi</option>
                    <option class="form-control">Sepupu</option>
                    <option class="form-control">Keponakan</option>
                    <option class="form-control">Teman</option>
                    <option class="form-control">Lainnya</option>
                  </select>  
                </div>

                <div class="form-group">
                  <label>Tanggal Lahir</label><font color="red"> *</font>
                  <input class="form-control" name="kel_tgllahir" type="date" required="required" value="<?php echo $data_kel['kel_tgllahir']; ?>"/>
                </div>

                <div class="form-group">
                  <label>NIK</label><font color="red"> *</font>
                  <input class="form-control" name="kel_nik" type="number" required="required"    value="<?php echo $data_kel['kel_nik']; ?>"/>
                </div>

                <div class="form-group">
                  <label>Status Pegawai</label><font color="red"> *</font>
                  <select name="kel_stapeg" class="form-control" required="required" value="<?php echo $data_kel['kel_stapeg']; ?>">
                    <option><?php echo $data_kel['kel_stapeg']; ?></option>
                    <option class="form-control">Non Kemenkes</option>
                    <option class="form-control">Kemenkes</option>
                  </select>  
                </div>

                <div class="form-group">
                  <label>NIP</label>
                  <input class="form-control" name="kel_nip" type="number" value="<?php echo $data_kel['kel_nip']; ?>"/>
                </div>                         
<!-- /////////////////////////////////////////////////////////////////////////////////////////////   -->                    
                <input name="fsimpan" type="submit"  class="btn btn-sm btn-primary" value="Simpan">
                <a class="btn btn-sm btn-danger" href="?menu=kel_identitas&peg_nik=<?php echo $peg_nik; ?>">Batal</a>
              </form>
              <?php 
                if (isset($_POST['fsimpan'])) {                 
                  $kel_nama         = $_POST['kel_nama'];
                  $kel_jk           = $_POST['kel_jk'];
                  $kel_hubungan     = $_POST['kel_hubungan'];
                  $kel_tgllahir     = $_POST['kel_tgllahir'];
                  $kel_nik2         = $_POST['kel_nik'];
                  $kel_stapeg       = $_POST['kel_stapeg'];
                  $kel_nip          = $_POST['kel_nip'];
//////////////////////////////////////////////////////////   					
          		    $sql = $koneksi->query("SELECT * FROM tb_kel WHERE kel_nik='$kel_nik' ");
          		    while ($data=$sql->fetch_assoc()) {					
                    $q ="UPDATE tb_kel SET 
                      kel_peg_id    = '$kel_peg_id', 
                      kel_peg_nama  = '$kel_peg_nama', 
                      kel_peg_nip   = '$kel_peg_nip', 
                      kel_peg_nik   = '$kel_peg_nik', 
                      kel_peg_org   = '$kel_peg_org', 
                      kel_peg_orgsat= '$kel_peg_orgsat', 
                      kel_nama      = '$kel_nama', 
                      kel_jk        = '$kel_jk', 
                      kel_hubungan  = '$kel_hubungan', 
                      kel_tgllahir  = '$kel_tgllahir', 
                      kel_nik       = '$kel_nik2', 
                      kel_stapeg    = '$kel_stapeg', 
                      kel_nip       = '$kel_nip' 
                      WHERE 
                      kel_nik       = '$kel_nik' ";
                    mysqli_query($koneksi,$q);
                  }
                  if ($profil['user_akses']!="Umum"){
              ?>
                  <script type="text/javascript">
                    alert('Berhasil merubah data identitas keluarga covid');
                    document.location.href="?menu=kel_identitas&peg_nik=<?php echo $peg_nik; ?>";
                  </script>
              <?php 
                  } else {
              ?>
                  <script type="text/javascript">
                    alert('Berhasil merubah data identitas keluarga covid');
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