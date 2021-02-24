<!DOCTYPE html>
<html>
<head>
<title></title>
</head>
<body>
    <div class="row">
    <div class="col-xs-12 col-md-12">
      <h3><span class="fa fa-bar-chart"></span>
        Rekap Keluarga Covid
        <?php
          $qjumlah = mysqli_query($koneksi,"SELECT * FROM tb_kelbul ");
          $jumlah = mysqli_num_rows($qjumlah);
        ?>
        <button class="btn btn-sm btn-default"><span class="badge"><?php echo $jumlah; ?></span></button>
        <a href="?menu=rekkel_bulan" class="btn btn-sm btn-primary"><span class="fa fa-refresh"></a>
        <a href="?menu=rekkel_rekap" class="btn btn-sm btn-success">Rekap</a>
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
                  <th>Jumlah Isman</th>
                  <th>Jumlah Rujuk</th>
                  <th>Jumlah Sembuh</th>
                  <th>Jumlah Meninggal</th>
                  <th>Total</th>
                  <th>Opsi</th>
                </tr>
              </thead>
              <tbody>
          <?php
              $no = 1;
              $sql = $koneksi->query("SELECT * FROM tb_kelbul  ORDER BY kelbul_tahun DESC, kelbul_bulan DESC");
              while ($data=$sql->fetch_assoc()) {
          ?>
            <tr>
                <td> <?php echo $no++; ?> </td>
                <td> <?php echo $data['kelbul_tahun']; ?></td>                
                <td> <?php $bulan_nama = date("F", mktime(0, 0, 0, $data['kelbul_bulan'], 10)); ?> 
                     <?php echo $bulan_nama; ?></td>
                <td> <?php echo $data['kelbul_isman']; ?></td>
                <td> <?php echo $data['kelbul_rujuk']; ?></td>
                <td> <?php echo $data['kelbul_sembuh']; ?></td>
                <td> <?php echo $data['kelbul_meninggal']; ?></td>      
                <td> <?php echo $data['kelbul_total']; ?></td>
                <td>
                  <a href="?menu=rekkel_detail&kelbul_tahun=<?php echo $data['kelbul_tahun']; ?>&kelbul_bulan=<?php echo $data['kelbul_bulan']; ?>" 
                     class="btn btn-sm btn-primary" 
                     title="Rekap <?php echo $data['kelbul_bulan']." ".$data['kelbul_tahun'];?>">
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