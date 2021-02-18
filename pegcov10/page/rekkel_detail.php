<?php
  $rekkel_id = $_GET['rekkel_id'];
  $query1  = mysqli_query($koneksi,"SELECT * FROM tb_rekkel WHERE rekkel_id='$rekkel_id'");
  $data1   = mysqli_fetch_array($query1);

  $rekkel_tahun = $data1['rekkel_tahun'];
  $rekkel_bulan0 = $data1['rekkel_bulan'];
  $rekkel_bulan  = date('m',strtotime($rekkel_bulan0));
?>

<!DOCTYPE html>
<html>
<head>
<title></title>
</head>
<body>
    <div class="row">
    <div class="col-xs-12 col-md-12">
      <h3><span class="fa fa-bar-chart"></span>
        Rekap Keluarga Covid Bulan <?php echo $rekap_bulan0; ?> Tahun <?php echo $rekap_tahun; ?>
        <?php
          $qjumlah = mysqli_query($koneksi,"SELECT * FROM tb_kel WHERE YEAR(kel_tgl)='$rekkel_tahun'  AND  MONTH(kel_tgl)='$rekkel_bulan' ORDER BY kel_id DESC");
          $jumlah = mysqli_num_rows($qjumlah);
        ?>
        <button class="btn btn-sm btn-default"><span class="badge"><?php echo $jumlah; ?></span></button>
        <a href="?menu=rekkel_detail&rekkel_id=<?php echo $rekkel_id; ?>" class="btn btn-sm btn-primary"><span class="fa fa-refresh"></a>
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
                  <th>Nama Pegawai (NIK/NIP)</th>
                  <th>Nama Keluarga (JK/Lahir)</th>
                  <th>Hubungan</th>
                  <th>NIK</th>
                  <th>Sta. Peg.</th>    
                  <th>NIP</th>   
                  <th>Tgl. Swab/ Hasil</th>
                  <th>Sta. Rawat (Sta. Akhir)</th>
                  <th>Ket.</th>
                  <th>Tanggal Kondisi</th>
                  <th>Opsi</th>
                </tr>
              </thead>
              <tbody>
          <?php
              $no = 1;
              $sql = $koneksi->query("SELECT * FROM tb_kel WHERE YEAR(kel_tgl)='$rekkel_tahun'  AND  MONTH(kel_tgl)='$rekkel_bulan' ORDER BY kel_id DESC");
              while ($data=$sql->fetch_assoc()) {
          ?>
            <tr>
                <td> <?php echo $no++; ?> </td>
                <td> <?php echo $data['kel_peg_nama']; ?>
                  <br>
                  <?php echo "(".$data['kel_peg_nip']." / ".$data['kel_peg_nik'].")"    ; ?></td>
                <td> <?php echo $data['kel_nama']; ?>
                  <br>
                <?php echo "(".$data['kel_jk']." / ".$data['kel_tgllahir'].")"    ; ?></td>
                <td> <?php echo $data['kel_hubungan']; ?></td>
                <td> <?php echo $data['kel_peg_nik']; ?></td>
                <td> <?php echo $data['kel_stapeg']; ?></td>
                <td> <?php echo $data['kel_peg_nip']; ?></td>
                <td> <?php echo $data['kel_tglswab']."/"; ?>
                  <br>
                  <?php echo $data['kel_tglhasil']; ?>
                </td>
                <td> <?php echo $data['kel_starawat']; ?>
                  <br>
                  <?php echo "(".$data['kel_staakhir'].")"; ?>
                </td>
                <td> <?php echo $data['kel_ket']; ?></td>
                <td> <?php echo $data['kel_tgl']; ?></td>                
                <td>
                  <a href="?menu=kel_edit&kel_id=<?php echo $data['kel_id']; ?>" class="btn btn-sm btn-success" title="Edit <?php echo $data['kel_peg_nama'];?>"><span class="fa fa-edit"></span></a>
                  <a onclick="return confirm('Anda yakin menghapus data kondisi pegawai covid <?php echo $data['kel_nama']; ?> ?')" href="?menu=kel_hapus&kel_id=<?php echo $data['kel_id']; ?>" class="btn btn-sm btn-danger" title="Hapus <?php echo $data['kel_nama'];?>" ><span class="fa fa-trash"></span> </a>
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