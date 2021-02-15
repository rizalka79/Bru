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
      <h3><span class="fa fa-database"></span>
        Pegawai Covid
    </h3>
    </div>
  </div>
  <section class="content">
      <div class="box box-default">
        <div class="box-header with-border">
          <h3 class="box-title">Cari Data Pegawai Pegawai</h3>
        </div>
        <div class="box-body">
          <div class="row">
            <div class="col-md-12">
              <form method="POST">

              <div class="form-group" >
                  <label>Nama Pegawai</label> <br>
                  <select  class="form-control myselect" name="kon_peg_nik" required="required" id="kon_peg_nik" onchange="otomatis()">
                    <option class="form-control select2"></option>
                    <?php
                      $sql = $koneksi->query("SELECT * FROM tb_peg");
                        while ($data=$sql->fetch_assoc()) {
                    ?>
                        <option class="form-control" value="<?php echo $data['peg_nik']; ?>"><?php echo $data['peg_nik']." - ".$data['peg_nama']; ?></option>
                    <?php 
                      } 
                    ?>
                  </select>
                </div>

           <div class="form-group">
                  <label>Jenis Kelamin</label>
                  <input class="form-control" name="peg_jk" required="required" id="peg_jk" disabled/>
                </div>

                <div class="form-group">
                  <label>NIK</label>
                  <input class="form-control" name="peg_nik" required="required" id="peg_nik" disabled/>
                </div>

                <div class="form-group">
                  <label>NIP</label>
                  <input class="form-control" name="peg_nip" required="required" id="peg_nip" disabled/>
                </div>

                <div class="form-group">
                  <label>Status Kepegawaian</label>
                  <input class="form-control" name="peg_stapeg" required="required" id="peg_stapeg" disabled/>
                </div> 

                <div class="form-group">
                  <label>Organisasi</label>
                  <input class="form-control" name="peg_org" required="required" id="peg_org" disabled/>
                </div>

                <div class="form-group">
                  <label>Unit Kerja</label>
                  <input class="form-control" name="peg_orgunit" required="required" id="peg_orgunit" disabled/>
                </div>
                      
<!-- /////////////////////////////////////////////////////////////////////////////////////////////   -->
                  <input name="fsimpan" type="submit"  class="btn btn-sm btn-primary" value="Cari">
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
                  
                  $kon_peg_stapeg      = $chosen['peg_stapeg'];
                  $kon_peg_org      = $chosen['peg_org'];
                  $kon_peg_orgunit      = $chosen['peg_orgunit'];

                  $kon_tglswab      = $_POST['kon_tglswab'];
                  $kon_tglhasil      = $_POST['kon_tglhasil'];
                  $kon_starawat      = $_POST['kon_starawat'];
                  $kon_staakhir      = $_POST['kon_staakhir'];
                  $kon_ket          = $_POST['kon_ket'];
                  $kon_tgl          = $_POST['kon_tgl'];
                  $kon_tglinput     = date('Y-m-d');
                             
//////////////////////////////////////////////////////////   

                  //$q ="INSERT INTO tb_kon (kon_peg_id, kon_peg_nama, kon_peg_jk, kon_peg_tgllahir, kon_peg_nip, kon_peg_nik, kon_peg_stapeg, kon_peg_org, kon_peg_orgunit,            kon_tglswab, kon_tglhasil, kon_starawat, kon_staakhir, kon_ket, kon_tgl, kon_tglinput) VALUES ('$kon_peg_id', '$kon_peg_nama', '$kon_peg_jk','$kon_peg_tgllahir', '$kon_peg_nip', '$kon_peg_nik', '$kon_peg_stapeg', '$kon_peg_org', '$kon_peg_orgunit', '$kon_tglswab', '$kon_tglhasil',  '$kon_starawat',  '$kon_staakhir', '$kon_ket', '$kon_tgl', '$kon_tglinput')";
                  //mysqli_query($koneksi,$q);

              ?>
                <script type="text/javascript">
                  document.location.href="?menu=kon_data&peg_id=<?php echo $kon_peg_id; ?>";
                </script>
              <?php } ?>
            </div>
          </div>
        </div>
      </div>

    <div class="row">
    <div class="col-xs-12 col-md-12">
      <h3><span class="fa fa-male"></span>
        Data Kondisi Pegawai Covid
        <?php
          $qjumlah = mysqli_query($koneksi,"SELECT * FROM tb_kon WHERE kon_peg_id='$peg_idx'");
          $jumlah = mysqli_num_rows($qjumlah);
        ?>
        <button class="btn btn-sm btn-default"><span class="badge"><?php echo $jumlah; ?></span></button>
        <a href="?menu=kon_data&peg_id=<?php echo $peg_idx; ?>" class="btn btn-sm btn-primary"><span class="fa fa-refresh"></a>
        <a href="?menu=kon_tambah&peg_id=<?php echo $peg_id;?>" class="btn btn-sm btn-success">Tambah Kondisi <span class="fa fa-plus"></a>
    </h3>
    </div>
  </div>
<!-- ////////////////////////////////////////////// -->
  <div class="box">
        <div class="box-body">
            <table id="example1" class="table table-bordered table-striped">
              <thead>
                <tr>
            <th>No</th>           
            <th>Tanggal Swab</th>
            <th>Tanggal Hasil</th>
            <th>Status Rawat</th>
            <th>Status Akhir</th>
            <th>Ket.</th>
            <th>Tanggal Kondisi</th>
            <th>Tanggal Input</th>
            <th>Opsi</th>
                </tr>
              </thead>
              <tbody>
          <?php
              $no = 1;
              $sql = $koneksi->query("SELECT * FROM tb_kon WHERE kon_peg_id='$peg_idx' ORDER BY kon_id DESC");
              while ($data=$sql->fetch_assoc()) {
          ?>
            <tr>
                <td> <?php echo $no++; ?> </td>
                <td> <?php echo $data['kon_tglswab']; ?></td>
                <td> <?php echo $data['kon_tglhasil']; ?></td>
                <td> <?php echo $data['kon_starawat']; ?></td>
                <td> <?php echo $data['kon_staakhir']; ?></td>
                <td> <?php echo $data['kon_ket']; ?></td>
                <td> <?php echo $data['kon_tgl']; ?></td>
                <td> <?php echo $data['kon_tglinput']; ?></td>
                
                <td>
              <a href="?menu=kon_edit&kon_id=<?php echo $data['kon_id']; ?>" class="btn btn-sm btn-success" title="Edit <?php echo $data['kon_peg_nama'];?>"><span class="fa fa-edit"></span></a>

              <a onclick="return confirm('Anda yakin menghapus data kondisi pegawai covid <?php echo $data['kon_nama']; ?> ?')" href="?menu=kon_hapus&kon_id=<?php echo $data['kon_id']; ?>" class="btn btn-sm btn-danger" title="Hapus <?php echo $data['kon_nama'];?>" ><span class="fa fa-trash"></span> </a>
                </td>
            </tr>
              <?php 
              } 
          ?>
              </tbody>
          </table>
      </div>
  </div>























    </section>
<script type="text/javascript">
            function otomatis(){
                var kon_peg_nik = $("#kon_peg_nik").val();
                $.ajax({
                    url: 'otomatis.php',
                    data:"kon_peg_nik="+kon_peg_nik ,
                }).success(function (data) {
                    var json = data,
                    obj = JSON.parse(json);
                    $('#peg_jk').val(obj.peg_jk);
                    $('#peg_tgllahir').val(obj.peg_tgllahir);
                    $('#peg_nip').val(obj.peg_nip);
                    $('#peg_nik').val(obj.peg_nik);
                    $('#peg_stapeg').val(obj.peg_stapeg);
                    $('#peg_org').val(obj.peg_org);
                    $('#peg_orgunit').val(obj.peg_orgunit);
               });
            }
        </script>
<script type="text/javascript">
      $(".myselect").select2();
</script>