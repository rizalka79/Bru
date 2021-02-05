<?php
  $kel_nik0 = $_GET['kel_nik'];
  $query  = mysqli_query($koneksi,"SELECT * FROM tb_kel WHERE kel_nik='$kel_nik0'");
  $data   = mysqli_fetch_array($query);

  $zkel_peg_nik = $data['kel_peg_nik'];

  $zquery = mysqli_query($koneksi,"SELECT * FROM tb_peg WHERE peg_nik='$zkel_peg_nik' ");
  $zdata   = mysqli_fetch_array($zquery);
  $zpeg_nik = $zdata['peg_nik'];
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
      <h3><span class="fa fa-male"></span>
		Data Keluarga Covid (Edit Indentitas)
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


                <div class="form-group" >
                  <label>Nama Pegawai</label><font color="red"> *</font> <br>
                  <select  class="myselect" name="kel_peg_nik" required="required" style="width:1210px;">
                    <option class="form-control" value="<?php echo $data['kel_peg_nik']; ?>"><?php echo $data['kel_peg_nik']." - ".$data['kel_peg_nama']; ?></option>
                    <?php
                      $sqlp = $koneksi->query("SELECT * FROM tb_peg");
                        while ($datap=$sqlp->fetch_assoc()) {
                    ?>
                        <option class="form-control" value="<?php echo $datap['peg_nik']; ?>"><?php echo $datap['peg_nik']." - ".$datap['peg_nama']; ?></option>
                    <?php 
                      } 
                    ?>
                  </select>
                </div>

                <div class="form-group">
                  <label>Nama Keluarga Covid</label><font color="red"> *</font>
                  <input class="form-control" name="kel_nama" required="required" value="<?php echo $data['kel_nama']; ?>"/>
                </div>

                <div class="form-group">
                  <label>Jenis Kelamin</label><font color="red"> *</font>
                  <select name="kel_jk" class="form-control" required="required">
                    <option><?php echo $data['kel_jk']; ?></option>
                    <option class="form-control">Laki-laki</option>
                    <option class="form-control">Perempuan</option>
                  </select>  
                </div>

                <div class="form-group">
                  <label>Hubungan</label><font color="red"> *</font>
                  <select name="kel_hubungan" class="form-control" required="required">
                    <option><?php echo $data['kel_hubungan']; ?></option>
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
                  <input class="form-control" name="kel_tgllahir" type="date" required="required" value="<?php echo $data['kel_tgllahir']; ?>"/>
                </div>

                <div class="form-group">
                  <label>NIK</label><font color="red"> *</font>
                  <input class="form-control" name="kel_nik" type="number" required="required"    value="<?php echo $data['kel_nik']; ?>"/>
                </div>

                <div class="form-group">
                  <label>Status Pegawai</label><font color="red"> *</font>
                  <select name="kel_stapeg" class="form-control" required="required" value="<?php echo $data['kel_stapeg']; ?>">
                    <option><?php echo $data['kel_stapeg']; ?></option>
                    <option class="form-control">PNS</option>
                    <option class="form-control">Non PNS</option>
                  </select>  
                </div>

                <div class="form-group">
                  <label>Unit Kerja</label><font color="red"> *</font>
                  <input class="form-control" name="kel_unitkerja" required="required" value="<?php echo $data['kel_unitkerja']; ?>"/>
                </div>

                <div class="form-group">
                  <label>NIP</label><font color="red"> *</font>
                  <input class="form-control" name="kel_nip" type="number" required="required"    value="<?php echo $data['kel_nip']; ?>"/>
                </div>
                         
<!-- /////////////////////////////////////////////////////////////////////////////////////////////   -->
                    
                  <input name="fsimpan" type="submit"  class="btn btn-sm btn-primary" value="Simpan">
                  <a class="btn btn-sm btn-danger" href="?menu=zpeg_data2&zpeg_nik=<?php echo $zpeg_nik ;?>">Batal</a>
              </form>
              <?php 
                if (isset($_POST['fsimpan'])) {
                  $kel_chosen       = $_POST['kel_peg_nik'];
                  $query = mysqli_query($koneksi,"SELECT * FROM tb_peg WHERE peg_nik='$kel_chosen'");
                  $chosen = mysqli_fetch_array($query);


                  $kel_peg_id       = $chosen['peg_id'];
                  $kel_peg_nama     = $chosen['peg_nama'];
                  $kel_peg_nip      = $chosen['peg_nip'];
                  $kel_peg_nik      = $chosen['peg_nik'];

                  $kel_nama         = $_POST['kel_nama'];
                  $kel_jk           = $_POST['kel_jk'];
                  $kel_hubungan     = $_POST['kel_hubungan'];
                  $kel_tgllahir     = $_POST['kel_tgllahir'];
                  $kel_nik          = $_POST['kel_nik'];

                  $kel_stapeg      = $_POST['kel_stapeg'];
                  $kel_unitkerja      = $_POST['kel_unitkerja'];
                  $kel_nip          = $_POST['kel_nip'];
//////////////////////////////////////////////////////////   					
	
          		    $sql = $koneksi->query("SELECT * FROM tb_kel");
          		    while ($data=$sql->fetch_assoc()) {					
                    $q ="UPDATE tb_kel SET kel_peg_id='$kel_peg_id', kel_peg_nama='$kel_peg_nama', kel_peg_nip='$kel_peg_nip', kel_peg_nik='$kel_peg_nik', kel_nama='$kel_nama', kel_jk='$kel_jk', kel_hubungan='$kel_hubungan', kel_tgllahir='$kel_tgllahir', kel_nik='$kel_nik', kel_stapeg='$kel_stapeg', kel_unitkerja='$kel_unitkerja', kel_nip='$kel_nip' WHERE kel_nik='$kel_nik0' ";
                    mysqli_query($koneksi,$q);
                  }

              ?>
                <script type="text/javascript">
                  alert('Berhasil merubah data identitas keluarga covid');
                  document.location.href="?menu=zpeg_data2&zpeg_nik=<?php echo $zpeg_nik ;?>";
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