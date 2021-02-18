<?php
  $peg_nik      = $profil['user_nik'];
  $query_peg    = mysqli_query($koneksi,"SELECT * FROM tb_peg WHERE peg_nik='$peg_nik'");
  $data_peg     = mysqli_fetch_array($query_peg);
?>

<!DOCTYPE html>
<html>
<head>
<title></title>
</head>
<body>

    <div class="row">
    <div class="col-xs-12 col-md-12">
      <h3><span class="fa fa-user"></span>
        Data Covid Individu
        <a  href="?menu=individu_data" 
          class="btn btn-sm btn-primary">
          <span class="fa fa-refresh">
        </a>
    </h3>
    </div>
  </div>

    <div class="box box-default">
        <div class="box-header with-border">
          <h3 class="box-title">Informasi Pegawai</h3>
        </div>
        <div class="box-body">
          <div class="row">
              <div class="col-md-9">
                <div class="col-md-8">
            <div class="panel-body">
              <table class="table" cellpadding="8" cellspacing="8">
                <tr><th>Nama Pegawai</th><td>:</td>   <td><?php echo $data_peg['peg_nama']; ?></td></tr>
                <tr><th>Jenis Kelamin </th><td>:</td>   <td><?php echo $data_peg['peg_jk']; ?></td></tr>
                <tr><th>Tanggal Lahir </th><td>:</td>   <td><?php echo $data_peg['peg_tgllahir']; ?></td></tr>  
                <tr><th>NIK </th><td>:</td>       <td><?php echo $data_peg['peg_nik']; ?></td></tr> 
                <tr><th>NIP </th><td>:</td>       <td><?php echo $data_peg['peg_nip']; ?></td></tr> 
                <tr><th>Status Pegawai </th><td>:</td>  <td><?php echo $data_peg['peg_stapeg']; ?></td>
                <tr><th>Organisasi </th><td>:</td>    <td><?php echo $data_peg['peg_org']; ?></td>
                <tr><th>Satuan Org. </th><td>:</td>   <td><?php echo $data_peg['peg_orgsat']; ?></td>
                </tr>                           
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>      
  </div>
<!-- ////////////////////////////////////////////// -->
    <div class="row">
    <div class="col-xs-12 col-md-12">
      <h3><span class="fa fa-file"></span>
        Data Kondisi Pegawai Covid
        <?php
          $qjumlah = mysqli_query($koneksi,"SELECT * FROM tb_kon WHERE kon_peg_nik='$peg_nik'");
          $jumlah = mysqli_num_rows($qjumlah);
        ?>
        <button class="btn btn-sm btn-default"><span class="badge"><?php echo $jumlah; ?></span></button>
        <a  href="?menu=kon_tambah&peg_nik=<?php echo $peg_nik;?>" 
          class="btn btn-sm btn-success">Tambah Kondisi 
          <span class="fa fa-plus">
        </a>
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
            <th>Status</th>
            <th>Ket.</th>
            <th>Tanggal Kondisi</th>
            <th>Tanggal Input</th>
            <th>Opsi</th>
                </tr>
              </thead>
              <tbody>
          <?php
              $no = 1;
              $sql_kon = $koneksi->query("SELECT * FROM tb_kon WHERE kon_peg_nik='$peg_nik' ORDER BY kon_id DESC");
              while ($data_kon=$sql_kon->fetch_assoc()) {
          ?>
            <tr>
                <td> <?php echo $no++; ?> </td>
                <td> <?php echo $data_kon['kon_tglswab']; ?></td>
                <td> <?php echo $data_kon['kon_tglhasil']; ?></td>
                <td> <?php echo $data_kon['kon_status']; ?></td>
                <td> <?php echo $data_kon['kon_ket']; ?></td>
                <td> <?php echo $data_kon['kon_tgl']; ?></td>
                <td> <?php echo $data_kon['kon_tglinput']; ?></td>                
                <td>
              <a  href="?menu=kon_edit&kon_id=<?php echo $data_kon['kon_id']; ?>" 
                class="btn btn-sm btn-success" 
                title="Edit <?php echo $data_kon['kon_peg_nama'];?>">
                <span class="fa fa-edit"></span>
              </a>
              <a  onclick="return confirm('Anda yakin menghapus data kondisi pegawai covid <?php echo $data_kon['kon_nama']; ?> ?')" 
                href="?menu=kon_hapus&peg_nik=<?php echo $data_kon['kon_peg_nik'];?>&kon_id=<?php echo $data_kon['kon_id'];?>" 
                class="btn btn-sm btn-danger" 
                title="Hapus <?php echo $data_kon['kon_peg_nama'];?>" >
                <span class="fa fa-trash"></span>
              </a>
                </td>
            </tr>
              <?php 
              } 
          ?>
              </tbody>
          </table>
      </div>
  </div>
</body>
</html>          

<!DOCTYPE html>
<html>
<head>
<title></title>
</head>
<body>
    <div class="row">
    <div class="col-xs-12 col-md-12">
      <h3><span class="fa fa-file-o"></span>
        Data Keluarga Pegawai Covid
        <?php
            $qjumlah = mysqli_query($koneksi,"SELECT DISTINCT kel_peg_nik, kel_nik FROM tb_kel WHERE kel_peg_nik='$peg_nik' ");
            $jumlah = mysqli_num_rows($qjumlah);
        ?>
        <button class="btn btn-sm btn-default">
          <span class="badge"><?php echo $jumlah; ?></span>
        </button>
        <a  href="?menu=kel_tambah&peg_nik=<?php echo $peg_nik; ?>" 
          class="btn btn-sm btn-success">Tambah Keluarga Covid (Baru)
          <span class="fa fa-plus">
        </a>
    </h3>
    </div>
  </div>

<!-- ////////////////////////////////////////////// -->
  <div class="box">
        <div class="box-body">
            <table id="example2" class="table table-bordered table-striped">
              <thead>
                <tr>
            <th>No</th>
            <th>Nama Keluarga</th>
            <th>Jenis Kelamin</th>
            <th>Hubungan</th>
            <th>Tanggal Lahir</th>
            <th>NIK</th>
            <th>Status Pegawai</th>
            <th>NIP</th>
            <th>Opsi</th>
                </tr>
              </thead>
              <tbody>
          <?php
              $no = 1;
              $sql = $koneksi->query("SELECT DISTINCT kel_nama, kel_jk, kel_hubungan, kel_tgllahir, kel_nik, kel_stapeg, kel_nip FROM tb_kel WHERE kel_peg_nik='$peg_nik' ");
              while ($data=$sql->fetch_assoc()) {
          ?>
            <tr>
                <td> <?php echo $no++; ?> </td>
                <td> <?php echo $data['kel_nama']; ?></td>
                <td> <?php echo $data['kel_jk']; ?></td>
                <td> <?php echo $data['kel_hubungan']; ?></td>
                <td> <?php echo $data['kel_tgllahir']; ?></td>
                <td> <?php echo $data['kel_nik']; ?></td>
                <td> <?php echo $data['kel_stapeg']; ?></td>
                <td> <?php echo $data['kel_nip']; ?></td>
                <td>
              <a  href="?menu=kel_identitas_edit&peg_nik=<?php echo $peg_nik; ?>&kel_nik=<?php echo $data['kel_nik']; ?>" 
                class="btn btn-sm btn-success" 
                title="Edit <?php echo $data['kel_nama'];?>">
                <span class="fa fa-edit">
              </a>
              <a  onclick="return confirm('Anda yakin menghapus data Keluarga Covid <?php echo $data['kel_nama']; ?> ?')" 
                href="?menu=kel_identitas_hapus&peg_nik=<?php echo $peg_nik; ?>&kel_nik=<?php echo $data['kel_nik']; ?>" 
                class="btn btn-sm btn-danger" 
                title="Hapus <?php echo $data['kel_nama'];?>" >
                <span class="fa fa-trash">
              </a>
              <a  href="?menu=kel_data&peg_nik=<?php echo $peg_nik; ?>&kel_nik=<?php echo $data['kel_nik']; ?>" 
                class="btn btn-sm btn-default" 
                title="Detail Kondisi <?php echo $data['kel_nama'];?>">
                <span class="fa fa-eye"></a>
              </a>
                </td>
            </tr>
              <?php 
              } 
          ?>
              </tbody>
          </table>
      </div>
  </div>
</body>
</html>          