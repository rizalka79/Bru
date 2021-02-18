<!DOCTYPE html>
<html>
<head>
<title></title>
</head>
<body>
    <div class="row">
    <div class="col-xs-12 col-md-12">
      <h3><span class="fa fa-database"></span>
        Data Rekap Bulanan Keluarga Covid
        <?php
          $qjumlah = mysqli_query($koneksi,"SELECT * FROM tb_rekkel ");
          $jumlah = mysqli_num_rows($qjumlah);
        ?>
        <button class="btn btn-sm btn-default"><span class="badge"><?php echo $jumlah; ?></span></button>
        <a href="?menu=rekkel_data_refresh" class="btn btn-sm btn-primary"><span class="glyphicon glyphicon-refresh"></a>
        <a href="?menu=rekkel_data_refresh" class="btn btn-sm btn-primary">Rekap<span class="glyphicon glyphicon-refresh"></a>
        <!-- <a href="?menu=peg_tambah" class="btn btn-success">Tambah Pegawai <span class="glyphicon glyphicon-plus-sign"></a>        
        <a onclick="return confirm('Anda yakin menghapus semua data industri rumahan ?')" href="?menu=peg_hapus_semua" class="btn btn-danger">Hapus Semua Data <span class="glyphicon glyphicon-trash"></a>-->
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
            <th>Tahun</th>
            <th>Bulan</th>
            <th>Status Rawat : Isman</th>
            <th>Status Rawat : Rujuk</th>
            <th>Status Akhir : Dalam Proses</th>
            <th>Status Akhir : Sembuh</th>
            <th>Status Akhir : Meninggal</th>
            <th>Total</th>
            <th>Opsi</th>
                </tr>
              </thead>
              <tbody>
          <?php
              $no = 1;
              $sql = $koneksi->query("SELECT * FROM tb_rekkel ORDER BY rekkel_tahun DESC");
              while ($data=$sql->fetch_assoc()) {
          ?>
            <tr>
                <td> <?php echo $no++; ?> </td>
                <td> <?php echo $data['rekkel_tahun']; ?></td>
                <td> <?php echo $data['rekkel_bulan']; ?></td>
                <td> <?php echo $data['rekkel_srisman']; ?></td>
                <td> <?php echo $data['rekkel_srrujuk']; ?></td>
                <td> <?php echo $data['rekkel_saproses']; ?></td>        
                <td> <?php echo $data['rekkel_sasembuh']; ?></td>
                <td> <?php echo $data['rekkel_samati']; ?></td>      
                <td> <?php echo $data['rekkel_total']; ?></td>
                <!--             -->
                <td>
                  <a href="?menu=rekkel_detail&rekkel_id=<?php echo $data['rekkel_id']; ?>" class="btn btn-xs btn-primary" title="Rekap <?php echo $data['rekkel_bulan']." ".$data['rekkel_tahun'];?>">Detail Pegawai</a>
                  <a href="?menu=rekkel_detail_kel&rekkel_id=<?php echo $data['rekkel_id']; ?>" class="btn btn-xs btn-primary" title="Rekap <?php echo $data['rekkel_bulan']." ".$data['rekkel_tahun'];?>">Detail Keluarga</a>
                  <!-- <a href="?menu=peg_edit&peg_id=<?php echo $data['peg_id']; ?>" class="btn btn-xs btn-success" title="Edit <?php echo $data['peg_nama'];?>">Edit</a>
                  <a onclick="return confirm('Anda yakin menghapus data pegawai <?php echo $data['peg_nama']; ?> ?')" href="?menu=peg_hapus&peg_id=<?php echo $data['peg_id']; ?>" class="btn btn-xs btn-danger" title="Hapus <?php echo $data['peg_nama'];?>" >Hapus</a> -->              
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