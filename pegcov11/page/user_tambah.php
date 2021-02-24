<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
    <div class="row">
      <div class="col-xs-12 col-md-8">
        <h3><span class="fa fa-users"></span>
          Data User     
      </h3>
      </div>
    </div>
    <section class="content">
      <div class="box box-default">
        <div class="box-header with-border">
          <h3 class="box-title">Tambah Data User</h3>
        </div>
        <div class="box-body">
          <div class="row">
            <div class="col-md-12">
              <form method="POST">
                <div class="form-group">
                  <label>Nama</label><font color="red"> *</font>
                  <input class="form-control" name="nama" required="required"/>
                </div>
                <div class="form-group">
                  <label>Email</label>
                  <input class="form-control" name="email" type="email" />
                </div>
                <div class="form-group">
                  <label>Telepon</label>
                  <input class="form-control" name="telp" type="number" />
                </div>
                <div class="form-group">
                    <label>Akses</label><font color="red"> * user dengan akses Super hanya dapat dihapus oleh penggunanya sendiri melalui profil </font>
                    <select name="akses" class="form-control" required="required" >
                      <option class="form-control"></option>
                      <option class="form-control">Umum</option>
                      <option class="form-control">Admin</option>
                      <option class="form-control">Super</option>
                    </select> 
                </div>

                <div class="form-group">
                    <label>Organisasi (Eselon 1)</label><font color="red"> *</font>
                    <select name="user_org" class="form-control" required="required" >
                    <option class="form-control"></option>
                    <?php
                      $sql_org = $koneksi->query("SELECT * FROM tb_org");
                        while ($data_org=$sql_org->fetch_assoc()) {
                    ?>
                    <option class="form-control" value="<?php echo $data_org['org_nama']; ?>"><?php echo $data_org['org_id']." ".$data_org['org_nama']; ?></option>
                    <?php 
                      } 
                    ?>
                    </select> 
                </div>

                <div class="form-group">
                    <label>Satuan Organisasi (Eselon 2)</label><font color="red"> *</font>
                    <select name="user_orgsat" class="form-control" required="required" >
                    <option class="form-control"></option>
                    <?php
                      $sql_orgsat = $koneksi->query("SELECT * FROM tb_orgsat");
                        while ($data_orgsat=$sql_orgsat->fetch_assoc()) {
                    ?>
                    <option class="form-control" value="<?php echo $data_orgsat['orgsat_nama']; ?>"><?php echo $data_orgsat['orgsat_id']." ".$data_orgsat['orgsat_nama']; ?></option>
                    <?php 
                      } 
                    ?>
                    </select> 
                </div>

                <div class="form-group">
                  <label>Username</label><font color="red"> *</font>
                  <input class="form-control" name="user" required="required"/>
                </div>
                <div class="form-group">
                  <label>Password</label><font color="red"> *</font>
                  <input class="form-control" name="pass" type="password" required="required"/>
                </div>
                <div class="form-group">
                  <label>Ketik Ulang Password</label><font color="red"> *</font>
                  <input class="form-control" name="pass2" type="password" required="required"/>
                </div>
                <div class="form-group">
                  <label>NIK</label><font color="red"> *</font>
                  <input class="form-control" name="nik" type="number" required="required" />
                </div>                
                <div class="form-group">
                  <label>NIP</label><font color="red"> *</font>
                  <input class="form-control" name="nip" type="number" required="required" />
                </div>
                <input name="fsimpan" type="submit"  class="btn btn-sm btn-primary" value="Simpan">
                <a class="btn btn-sm btn-danger" href="?menu=data_admin">Batal</a>
              </form>
              <?php 
                if (isset($_POST['fsimpan'])) {
                  $nama           = $_POST['nama'];
                  $email          = $_POST['email'];
                  $telp           = $_POST['telp'];
                  $akses          = $_POST['akses'];
                  $user_org       = $_POST['user_org'];
                  $user_orgsat    = $_POST['user_orgsat'];
                  $user           = $_POST['user'];
                  $pass           = md5($_POST['pass']);
                  $pass2          = md5($_POST['pass2']);
                  $nip            = $_POST['nip'];
                  $nik            = $_POST['nik'];
////////////////////////////////////////////////////////// user ganda
                  $sqlx = $koneksi->query("select * from tb_user");
                  while ($datax=$sqlx->fetch_assoc()) {
                    if($user==$datax['user_name']){
                      ?>
                      <script type="text/javascript">
                          alert('Username yang dipilih sudah ada, silahkan coba lagi');
                          document.location.href="?menu=tambah_admin";
                      </script>
                      <?php newExit();
                    }
                  }
////////////////////////////////////////////////////////// pass konfirmasi salah
                    if($pass!=$pass2){
                      ?>
                      <script type="text/javascript">
                          alert('Password konfirmasi salah, silahkan coba lagi');
                          document.location.href="?menu=tambah_admin";
                      </script>
                      <?php newExit();
                    }else{
//////////////////////////////////////////////////////////                      
                  $q ="INSERT INTO tb_user(
                    user_nama, 
                    user_email, 
                    user_telp, 
                    user_akses, 
                    user_org, 
                    user_orgsat, 
                    user_name, 
                    user_pass, 
                    user_nip, 
                    user_nik
                  ) VALUES (
                    '$nama', 
                    '$email', 
                    '$telp', 
                    '$akses', 
                    '$user_org', 
                    '$user_orgsat', 
                    '$user', 
                    '$pass', 
                    '$nip',
                    '$nik') ";
                  mysqli_query($koneksi,$q);
                ?>
                <script type="text/javascript">
                  alert('Berhasil menambah user');
                  document.location.href="?menu=user_data";
                </script>
              <?php }} ?>
            </div>
          </div>
        </div>
      </div>
</section>

