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
  <?php
    $id = $_GET['user_id'];
    $query = mysqli_query($koneksi,"SELECT * FROM tb_user WHERE user_id='$id'");
    $data = mysqli_fetch_array($query);
  ?>

  <section class="content">
    <div class="box box-default">
      <div class="box-header with-border">
        <h3 class="box-title">Edit Data User</h3>
      </div>
      <div class="box-body">
        <div class="row">
          <div class="col-md-9">
            <form method="POST">
              <div class="form-group">
                  <label>Nama</label><font color="red"> *</font>
                  <input class="form-control" name="nama" required="required" 
                  value="<?php echo $data['user_nama']; ?>"/>
              </div>
              <div class="form-group">
                  <label>Email</label>
                  <input class="form-control" name="email" type="email" required="required" 
                  value="<?php echo $data['user_email']; ?>"/>
              </div>
              <div class="form-group">
                  <label>Telepon</label>
                  <input class="form-control" name="telp" 
                  value="<?php echo $data['user_telp']; ?>" type="text" />
              </div>
              <div class="form-group">
                  <label>Username</label>
                  <input class="form-control" name="user" required="required" 
                  value="<?php echo $data['user_name']; ?>"/>
              </div>
              <div class="form-group">
                  <label>Password</label><font color="red"> *ganti jika perlu atau lupa password</font><br>
                    <div class="box-header">
                        Password Baru
                        <input class="form-control" 
                        name="pass"   
                        type="password" />
                        Ketik Ulang Password
                        <input class="form-control" 
                        name="pass2"   
                        type="password" />
                    </div>
              </div>
              <div class="form-group">
                  <label>Akses</label>
                  <select name="akses" class="form-control" required="required" readonly >
                    <!-- <option <?php if ($data['akses']=="Umum")   { echo "selected"; } ?> class="form-control">Umum</option>-->
                    <option <?php if ($data['user_akses']=="Admin") { echo "selected"; } ?> class="form-control">Admin</option>
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
                  <option <?php if($data_org['org_nama']==$data['user_org']){ echo "selected";}?>
                  class="form-control" value="<?php echo $data_org['org_nama']; ?>"><?php echo $data_org['org_id']." - ".$data_org['org_nama']; ?></option>
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
                  <option <?php if($data_orgsat['orgsat_nama']==$data['user_orgsat']){ echo "selected";}?>
                  class="form-control" value="<?php echo $data_orgsat['orgsat_nama']; ?>"><?php echo $data_orgsat['orgsat_id']." - ".$data_orgsat['orgsat_nama']; ?></option>
                  <?php 
                    } 
                  ?>
                  </select> 
              </div>
<!--
              <div class="form-group">
                  <label>Unit Organisasi (Eselon 3)</label><font color="red"> *</font>
                  <select name="user_orgunit" class="form-control" required="required" >
                    <option class="form-control"></option>
                    <option <?php // if("AAA"==$data['user_orgunit']){ echo "selected";}?> class="form-control" value="AAA">AAA</option>
                    <option <?php // if("BBB"==$data['user_orgunit']){ echo "selected";}?> class="form-control" value="BBB">BBB</option>
                    <option <?php // if("CCC"==$data['user_orgunit']){ echo "selected";}?> class="form-control" value="CCC">CCC</option>
                  </select> 
              </div>
-->              
              <div class="form-group">
                  <label>NIK</label>
                  <input class="form-control" name="nip" 
                  value="<?php echo $data['user_nip']; ?>" type="text" />
              </div>
              <div class="form-group">
                  <label>NIP</label>
                  <input class="form-control" name="nik" 
                  value="<?php echo $data['user_nik']; ?>" type="text" />
              </div>
             <input name="fsimpan" type="submit"  class="btn btn-sm btn-primary" value="Simpan">
              <a class="btn btn-sm btn-danger" href="?menu=user_data">Batal</a>
            </form>

          <?php 
            if (isset($_POST['fsimpan'])) {
              $nama         = $_POST['nama'];
              $email        = $_POST['email'];
              $telp         = $_POST['telp'];
              $akses        = $_POST['akses'];
              $user_org     = $_POST['user_org'];
              $user_orgsat  = $_POST['user_orgsat'];
              //$user_orgunit = $_POST['user_orgunit'];
              $user         = $_POST['user'];
              $pass         = md5($_POST['pass']);
              $pass2        = md5($_POST['pass2']);
              $pw           = ($_POST['pass']);
              $nip          = $_POST['nip'];
              $nik          = $_POST['nik'];
              $tabel        = "admin";
              ////////////////include "_nama_sama.php";              
              if($pass!=$pass2){
                ?>
                  <script type="text/javascript">
                    alert('Password konfirmasi salah, silahkan coba lagi');
                    document.location.href="?menu=user_edit&user_id=<?php echo $data['user_id']; ?>";
                  </script>
                <?php 
                  newExit();
              }
              else if ($pw!=""){
                $q ="UPDATE tb_user SET 
                  user_nama     = '$nama', 
                  user_email    = '$email', 
                  user_telp     = '$telp', 
                  user_akses    = '$akses', 
                  user_org      = '$user_org', 
                  user_orgsat   = '$user_orgsat',
                  user_name     = '$user', 
                  user_pass     = '$pass', 
                  user_nip      = '$nip', 
                  user_nik      = '$nik' 
                  WHERE user_id = '$id'";
                mysqli_query($koneksi,$q);
                ?>
                  <script type="text/javascript">
                    alert('Berhasil merubah data user beserta password');
                    document.location.href="?menu=user_data";
                  </script>
                <?php 
              } 
              else {                  
                $q ="UPDATE tb_user SET 
                  user_nama     = '$nama', 
                  user_email    = '$email', 
                  user_telp     = '$telp', 
                  user_akses    = '$akses', 
                  user_org      = '$user_org', 
                  user_orgsat   = '$user_orgsat',
                  user_orgunit  = '$user_orgunit', 
                  user_name     = '$user', 
                  user_nip      = '$nip', 
                  user_nik      = '$nik'  
                  WHERE user_id = '$id'";
                mysqli_query($koneksi,$q);
                ?>
                  <script type="text/javascript">
                    alert('Berhasil merubah data user tanpa password');
                    document.location.href="?menu=user_data";
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