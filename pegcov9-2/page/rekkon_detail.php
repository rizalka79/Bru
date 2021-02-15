<?php
  $rekkon_id = $_GET['rekkon_id'];
  $query1  = mysqli_query($koneksi,"SELECT * FROM tb_rekkon WHERE rekkon_id='$rekkon_id'");
  $data1   = mysqli_fetch_array($query1);

  $rekkon_tahun = $data1['rekkon_tahun'];
  $rekkon_bulan0 = $data1['rekkon_bulan'];
  $rekkon_bulan  = date('m',strtotime($rekkon_bulan0));
?>
<!DOCTYPE html>
<html>
<head>
<title></title>
</head>
<body>
    <div class="row">
    <div class="col-xs-12 col-md-12">
      <h3><span class="fa fa-area-chart"></span>
        Rekap Pegawai Covid Bulan <?php echo $rekap_bulan0; ?> Tahun <?php echo $rekap_tahun; ?>
        <?php
          $qjumlah = mysqli_query($koneksi,"SELECT * FROM tb_kon WHERE YEAR(kon_tgl)='$rekkon_tahun'  AND  MONTH(kon_tgl)='$rekkon_bulan' ORDER BY kon_id DESC");
          $jumlah = mysqli_num_rows($qjumlah);
        ?>
        <button class="btn btn-sm btn-default"><span class="badge"><?php echo $jumlah; ?></span></button>
        <a href="?menu=rekkon_detail&rekkon_id=<?php echo $data['rekkon_id']; ?>" class="btn btn-sm btn-primary"><span class="fa fa-refresh"></a>
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
                  <th>Nama (JK/Lahir)</th>
                  <th>NIP</th>
                  <th>NIK</th>
                  <th>Sta. Peg.</th>    
                  <th>Org. (Unit)</th>        
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
              $sql = $koneksi->query("SELECT * FROM tb_kon WHERE YEAR(kon_tgl)='$rekkon_tahun'  AND  MONTH(kon_tgl)='$rekkon_bulan' ORDER BY kon_id DESC");
              while ($data=$sql->fetch_assoc()) {
          ?>
            <tr>
                <td> <?php echo $no++; ?> </td>
                <td> <?php echo $data['kon_peg_nama']; ?>
                  <br>
                <?php echo "(".$data['kon_peg_jk']." / ".$data['kon_peg_tgllahir'].")"    ; ?></td>
                <td> <?php echo $data['kon_peg_nip']; ?></td>
                <td> <?php echo $data['kon_peg_nik']; ?></td>
                <td> <?php echo $data['kon_peg_stapeg']; ?></td>
                <td> <?php echo $data['kon_peg_org']." (".$data['kon_peg_orgunit'].")"; ?></td>
                <td> <?php echo $data['kon_tglswab']."/"; ?>
                  <br>
              <?php echo $data['kon_tglhasil']; ?>
                </td>
                <td> <?php echo $data['kon_starawat']; ?>
                  <br>
              <?php echo "(".$data['kon_staakhir'].")"; ?>
                </td>
                <td> <?php echo $data['kon_ket']; ?></td>
                <td> <?php echo $data['kon_tgl']; ?></td>                
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
</body>
</html> 