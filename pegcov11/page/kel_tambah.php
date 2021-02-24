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
          <h3 class="box-title">Tambah Data Kondisi Keluarga Covid (Baru)</h3>
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
                  <input class="form-control" name="kel_nama" required="required"/>
                </div>

                <div class="form-group">
                  <label>Jenis Kelamin</label><font color="red"> *</font>
                  <select name="kel_jk" class="form-control" required="required">
                    <option></option>
                    <option class="form-control">Laki-laki</option>
                    <option class="form-control">Perempuan</option>
                  </select>  
                </div>

                <div class="form-group">
                  <label>Hubungan</label><font color="red"> *</font>
                  <select name="kel_hubungan" class="form-control" required="required">
                    <option></option>
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
                  <input class="form-control" name="kel_tgllahir" type="date" required="required" />
                </div>

                <div class="form-group">
                  <label>NIK</label><font color="red"> *</font>
                  <input class="form-control" name="kel_nik" type="number" required="required"/>
                </div>

                <div class="form-group">
                  <label>Status Pegawai</label><font color="red"> *</font>
                  <select name="kel_stapeg" class="form-control" required="required">
                    <option></option>
                    <option class="form-control">Non Kemenkes</option>
                    <option class="form-control">Kemenkes</option>
                  </select>  
                </div>

                <div class="form-group">
                  <label>NIP</label>
                  <input class="form-control" name="kel_nip" type="number"/>
                </div>

                <div class="form-group">
                  <label>Tanggal Melakukan Swab</label>
                  <input class="form-control" name="kel_tglswab" type="date"  />
                </div>

                <div class="form-group">
                  <label>Tanggal Hasil Swab</label>
                  <input class="form-control" name="kel_tglhasil" type="date" />
                </div>

                <div class="form-group">
                  <label>Status Kondisi</label><font color="red"> *</font>
                  <select name="kel_status" class="form-control" required="required">
                    <option></option>
                    <option class="form-control">Isman</option>
                    <option class="form-control">Rujuk</option>
                    <option class="form-control">Sembuh</option>
                    <option class="form-control">Meninggal</option>
                  </select>  
                </div>  

                <div class="form-group">
                    <label>Keterangan</label><textarea class="form-control" name="kel_ket"> 
                    </textarea>
                </div>    

                <div class="form-group">
                  <label>Tanggal Kondisi</label><font color="red"> *</font>
                  <input class="form-control" name="kel_tgl" type="date" required="required" value="<?php echo date('Y-m-d'); ?>" readonly/>
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
                  $kel_nik          = $_POST['kel_nik'];
                  $kel_stapeg       = $_POST['kel_stapeg'];
                  $kel_nip          = $_POST['kel_nip'];
                  $kel_tglswab      = $_POST['kel_tglswab'];
                  $kel_tglhasil     = $_POST['kel_tglhasil'];
                  $kel_status       = $_POST['kel_status'];
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
                    kel_status,
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
                    '$kel_status',
                    '$kel_ket', 
                    '$kel_tgl', 
                    '$kel_tglinput')";
                  mysqli_query($koneksi,$q);
                  if ($profil['user_akses']!="Umum"){
              ?>
                      <script type="text/javascript">
                        alert('Berhasil menambah data kondisi keluarga covid');
                        document.location.href="?menu=kel_identitas&peg_nik=<?php echo $peg_nik; ?>";
                      </script>
              <?php 
                  } else{
              ?>
                <script type="text/javascript">
                        alert('Berhasil menambah data kondisi keluarga covid');
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

    <script type="text/javascript">
      $(".myselect").select2();
</script>