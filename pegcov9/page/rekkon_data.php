<!DOCTYPE html>
<html>
<head>
<title></title>
</head>
<body>
    <div class="row">
    <div class="col-xs-12 col-md-12">
      <h3><span class="fa fa-area-chart"></span>
        Data Rekap Bulanan Pegawai Covid
        <?php
          $qjumlah = mysqli_query($koneksi,"SELECT * FROM tb_rekkon ");
          $jumlah = mysqli_num_rows($qjumlah);
        ?>
        <button class="btn btn-sm btn-default"><span class="badge"><?php echo $jumlah; ?></span></button>
        <a href="?menu=rekkon_data" class="btn btn-sm btn-primary"><span class="fa fa-refresh"></a>
        <a href="?menu=rekkon_rekap" class="btn btn-sm btn-success">Rekap</a>
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
                  <th>Minggu</th>
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
              $sql = $koneksi->query("SELECT * FROM tb_rekkon ORDER BY rekkon_tahun DESC, rekkon_bulan DESC");
              while ($data=$sql->fetch_assoc()) {
          ?>
            <tr>
                <td> <?php echo $no++; ?> </td>
                <td> <?php echo $data['rekkon_tahun']; ?></td>                
                <td> <?php $bulan_nama = date("F", mktime(0, 0, 0, $data['rekkon_bulan'], 10)); ?> 
                     <?php echo $bulan_nama; ?></td>
                <td> <?php echo $data['rekkon_minggu']; ?></td> 
                <td> <?php echo $data['rekkon_srisman']; ?></td>
                <td> <?php echo $data['rekkon_srrujuk']; ?></td>
                <td> <?php echo $data['rekkon_saproses']; ?></td>        
                <td> <?php echo $data['rekkon_sasembuh']; ?></td>
                <td> <?php echo $data['rekkon_samati']; ?></td>      
                <td> <?php echo $data['rekkon_total']; ?></td>
                <td>
                  <a href="?menu=rekkon_detail&rekkon_id=<?php echo $data['rekkon_id']; ?>" class="btn btn-sm btn-primary" title="Rekap <?php echo $data['rekkon_bulan']." ".$data['rekkon_tahun'];?>"><span class="fa fa-eye"></a></a>             
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