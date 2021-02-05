<!DOCTYPE html>
<html>
<head>
<title></title>
</head>
<body>
    <div class="row">
    <div class="col-xs-12 col-md-12">
      <h3><span class="fa fa-bar-chart"></span>
        Data Rekap Bulanan Keluarga Covid
        <?php
          $qjumlah = mysqli_query($koneksi,"SELECT * FROM tb_rekkel ");
          $jumlah = mysqli_num_rows($qjumlah);
        ?>
        <button class="btn btn-sm btn-default"><span class="badge"><?php echo $jumlah; ?></span></button>
        <a href="?menu=rekkel_data" class="btn btn-sm btn-primary"><span class="fa fa-refresh"></a>
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
                <td>
                  <a href="?menu=rekkel_detail&rekkel_id=<?php echo $data['rekkel_id']; ?>" class="btn btn-sm btn-default" title="Rekap <?php echo $data['rekkel_bulan']." ".$data['rekkel_tahun'];?>"><span class="fa fa-eye"></a></a>            
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