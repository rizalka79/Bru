<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
  <div class="row">
    <div class="col-xs-12 col-md-8">
      <h3><span class="fa fa-table"></span>
        Data Pegawai
    </h3>
    </div>
  </div>
  <section class="content">
      <div class="box box-default">
        <div class="box-header with-border">
          <h3 class="box-title">Tambah Data Pegawai</h3>
        </div>
        <div class="box-body">
          <div class="row">
            <div class="col-md-12">
              <form method="POST">
                <div class="form-group">
                  <label>Nama Pegawai</label><font color="red"> *</font>
                  <input class="form-control" name="peg_nama" required="required"/>
                </div>

                <div class="form-group">
                  <label>Jenis Kelamin</label><font color="red"> *</font>
                  <select name="peg_jk" class="form-control" required="required">
                    <option></option>
                    <option class="form-control">Laki-laki</option>
                    <option class="form-control">Perempuan</option>
                  </select>  
                </div>

                <div class="form-group">
                  <label>Tanggal Lahir</label><font color="red"> *</font>
                  <input class="form-control" name="peg_tgllahir" type="date" required="required" />
                </div>

                <div class="form-group">
                  <label>NIP</label><font color="red"> *</font>
                  <input class="form-control" name="peg_nip" type="number" required="required"/>
                </div>

                <div class="form-group">
                  <label>NIK</label><font color="red"> *</font>
                  <input class="form-control" name="peg_nik" type="number" required="required"/>
                </div>

                <div class="form-group">
                  <label>Status Pegawai</label><font color="red"> *</font>
                  <select name="peg_stapeg" class="form-control" required="required">
                    <option></option>
                    <option class="form-control">PNS</option>
                    <option class="form-control">Non PNS</option>
                  </select>  
                </div>

                <div class="form-group">
                  <label>Organisasi (Eselon 1)</label><font color="red"> *</font>
                  <select name="peg_org" class="form-control" required="required">
                    <option></option>
                      <?php
                          $sql_org = $koneksi->query("SELECT * FROM tb_org ORDER BY org_id ASC");
                          while ($data_org=$sql_org->fetch_assoc()) {
                      ?>
                    <option class="form-control" value="<?php echo $data_org['org_id']; ?>">
                      <?php echo $data_org['org_id']." - ".$data_org['org_nama']; ?>
                    </option>
                    <?php 
                        } 
                    ?>                   
                  </select>  
                </div>

                <div class="form-group">
                  <label>Satuan Organisasi (Eselon 2)</label><font color="red"> *</font>
                  <select name="peg_orgsat" class="form-control" required="required">
                    <option></option>
                      <?php
                          $sql_orgsat = $koneksi->query("SELECT * FROM tb_orgsat ORDER BY orgsat_id ASC");
                          while ($data_orgsat=$sql_orgsat->fetch_assoc()) {
                      ?>
                    <option class="form-control" value="<?php echo $data_orgsat['orgsat_id']; ?>">
                      <?php echo $data_orgsat['orgsat_id']." - ".$data_orgsat['orgsat_nama']; ?>
                    </option>
                    <?php 
                        } 
                    ?>                   
                  </select>  
                </div>


                <div class="form-group">
                    <label>Unit Organisasi (Eselon 3)</label><font color="red"> *</font>
                    <select name="peg_orgunit" class="form-control" required="required" >
                      <option class="form-control"></option>
                      <option class="form-control" value="AAA">AAA</option>
                      <option class="form-control" value="BBB">BBB</option>
                      <option class="form-control" value="CCC">CCC</option>
                    </select> 
                </div>                               
<!-- /////////////////////////////////////////////////////////////////////////////////////////////   -->              
                <input name="fsimpan" type="submit"  class="btn btn-sm btn-primary" value="Simpan">
                <a class="btn btn-sm btn-danger" href="?menu=peg_data">Batal</a>              
              </form>
              <?php 
                if (isset($_POST['fsimpan'])) {
                  $peg_nama       = $_POST['peg_nama'];
                  $peg_jk         = $_POST['peg_jk'];
                  $peg_tgllahir   = $_POST['peg_tgllahir'];
                  $peg_nip        = $_POST['peg_nip'];
                  $peg_nik        = $_POST['peg_nik'];
                  $peg_stapeg     = $_POST['peg_stapeg'];
                  $peg_org        = $_POST['peg_org'];
                  $peg_orgsat     = $_POST['peg_orgsat'];
                  $peg_orgunit    = $_POST['peg_orgunit'];                  
//////////////////////////////////////////////////////////   
                  $q ="INSERT INTO tb_peg(
                    peg_nama, 
                    peg_jk, 
                    peg_tgllahir, 
                    peg_nip, 
                    peg_nik, 
                    peg_stapeg, 
                    peg_org, 
                    peg_orgsat,
                    peg_orgunit
                  ) VALUES (
                    '$peg_nama', 
                    '$peg_jk',
                    '$peg_tgllahir', 
                    '$peg_nip', 
                    '$peg_nik', 
                    '$peg_stapeg',
                    '$peg_org',
                    '$peg_orgsat',
                    '$peg_orgunit'
                  )";
                  mysqli_query($koneksi,$q);
              ?>
                <script type="text/javascript">
                  alert('Berhasil menambah data pegawai');
                  document.location.href="?menu=peg_data";
                </script>
              <?php } ?>
            </div>
          </div>
        </div>
      </div>
    </section>