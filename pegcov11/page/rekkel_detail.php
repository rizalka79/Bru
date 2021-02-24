<?php
  $kelbul_tahun    = $_GET['kelbul_tahun'];
  $kelbul_bulan    = $_GET['kelbul_bulan'];
  $bulan_nama = date("F", mktime(0, 0, 0, $data['kelbul_bulan'], 10));
?>

  <div class="row">
    <div class="col-xs-12 col-md-12">
      <h3><span class="fa fa-bar-chart"></span>
        Rekap Keluarga Covid (Tahun <?php echo $kelbul_tahun; ?>, Bulan <?php echo $bulan_nama; ?>) 
        <a href="?menu=kelming_data" class="btn btn-sm btn-primary"><span class="fa fa-refresh"></a>  
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
                  <th>Minggu</th>
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
              $sql = $koneksi->query("SELECT * FROM tb_kelming WHERE kelming_tahun = $kelbul_tahun AND kelming_bulan = $kelbul_bulan ORDER BY kelming_tahun ASC, kelming_bulan ASC, kelming_minggu ASC");
              while ($data=$sql->fetch_assoc()) {
          ?>
            <tr>
                <td> <?php echo $no++; ?> </td>
                <td> <?php echo "ke-".$data['kelming_minggu']; ?></td>
                <td> <?php echo $data['kelming_isman']; ?></td>
                <td> <?php echo $data['kelming_rujuk']; ?></td>
                <td> <?php echo $data['kelming_sembuh']; ?></td>
                <td> <?php echo $data['kelming_meninggal']; ?></td>      
                <td> <?php echo $data['kelming_total']; ?></td>
                <td>
                  <a href="?menu=rekkel_detail2&kelming_tahun=<?php echo $data['kelming_tahun']; ?>&kelming_bulan=<?php echo $data['kelming_bulan']; ?>&kelming_minggu=<?php echo $data['kelming_minggu']; ?>" 
                     class="btn btn-sm btn-primary" 
                     title="Rekap <?php echo $data['kelming_bulan']." ".$data['kelming_tahun'];?>">
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

<?php
  $mulai_dari1 = $kelbul_tahun."-".$kelbul_bulan."-"."1";
  $mulai_dari2 = strtotime($mulai_dari1);
  $mulai_dari3 = date('Y-m-d',$mulai_dari2);
  $sampai_dari1 = $kelbul_tahun."-".$kelbul_bulan."-"."31";
  $sampai_dari2 = strtotime($sampai_dari1);
  $sampai_dari3 = date('Y-m-d',$sampai_dari2);
?>

  <div class="row">
    <div class="col-xs-12 col-md-12">
      <h3><span class="fa fa-file"></span>
        Daftar Pegawai Covid (Tahun <?php echo $kelbul_tahun; ?>, Bulan <?php echo $bulan_nama; ?>) 
        <?php
          $qjumlah = mysqli_query($koneksi,"SELECT * FROM tb_kel WHERE kel_tgl BETWEEN '$mulai_dari3' AND '$sampai_dari3'");
          $jumlah = mysqli_num_rows($qjumlah);
        ?>
        <button class="btn btn-sm btn-default"><span class="badge"><?php echo $jumlah; ?></span></button>
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
                  <th>Nama Pegawai (NIK/NIP)</th>
                  <th>Nama Keluarga (JK/Lahir)</th>
                  <th>Hubungan</th>
                  <th>NIK</th>    
                  <th>Status Pegawai - NIP</th>        
                  <th>Tgl. Swab/ Hasil</th>
                  <th>Status Kondisi</th>
                  <th>Ket.</th>
                  <th>Tanggal Kondisi</th>
                  <th>Opsi</th>
                </tr>
              </thead>
              <tbody>
          <?php
              $no = 1;
              $sql = $koneksi->query("SELECT * FROM tb_kel WHERE kel_tgl BETWEEN '$mulai_dari3' AND '$sampai_dari3'");
              while ($data=$sql->fetch_assoc()) {
          ?>
            <tr>
                <td> <?php echo $no++; ?> </td>
                <td> <?php echo $data['kel_peg_nama']."<br>"."(".$data['kel_peg_nik']."/ ".$data['kel_peg_nip'].")"; ?></td>
                <td> <?php echo $data['kel_nama']."<br>"."(".$data['kel_jk']."/ ".$data['kel_tgllahir'].")"    ; ?></td>
                <td> <?php echo $data['kel_hubungan']; ?></td>
                <td> <?php echo $data['kel_nik']; ?></td>
                <td> <?php echo $data['kel_stapeg']."<br>".$data['kel_nik']; ?></td>
                <td> <?php echo $data['kel_tglswab']."/"."<br>".$data['kel_tglhasil']; ?></td>
                <td> <?php echo $data['kel_status']; ?></td>
                <td> <?php echo $data['kel_ket']; ?></td>
                <td> <?php echo $data['kel_tgl']; ?></td>                
                <td>
                  <a href="?menu=kel_edit&kel_id=<?php echo $data['kel_id']; ?>" 
                     class="btn btn-sm btn-success" 
                     title="Edit <?php echo $data['kel_peg_nama'];?>">
                     <span class="fa fa-edit"></span>
                  </a>
                  <a onclick="return confirm('Anda yakin menghapus data keldisi pegawai covid <?php echo $data['kel_nama']; ?> ?')" 
                     href="?menu=kel_hapus&kel_id=<?php echo $data['kel_id']; ?>" 
                     class="btn btn-sm btn-danger" 
                     title="Hapus <?php echo $data['kel_nama'];?>">
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
 