<?php
  $kelming_tahun    = $_GET['kelming_tahun'];
  $kelming_bulan    = $_GET['kelming_bulan'];
  $kelming_minggu   = $_GET['kelming_minggu'];
  $bulan_nama = date("F", mktime(0, 0, 0, $data['kelming_bulan'], 10));

  $tgl_awal   = ($kelming_minggu*7)-6;
  $tgl_akhir  = ($kelming_minggu*7);
  if ($tgl_akhir==28){
    $tgl_akhir==31;
  }


  $mulai_dari1 = $kelming_tahun."-".$kelming_bulan."-".$tgl_awal;
  $mulai_dari2 = strtotime($mulai_dari1);
  $mulai_dari3 = date('Y-m-d',$mulai_dari2);
  $sampai_dari1 = $kelming_tahun."-".$kelming_bulan."-".$tgl_akhir;
  $sampai_dari2 = strtotime($sampai_dari1);
  $sampai_dari3 = date('Y-m-d',$sampai_dari2);
?>

  <div class="row">
    <div class="col-xs-12 col-md-12">
      <h3><span class="fa fa-file"></span>
        Daftar Pegawai Covid (Tahun <?php echo $kelming_tahun; ?>, Bulan <?php echo $bulan_nama; ?>, Minggu ke-<?php echo $kelming_minggu; ?>) 
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
 