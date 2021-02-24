<?php
  $konming_tahun    = $_GET['konming_tahun'];
  $konming_bulan    = $_GET['konming_bulan'];
  $konming_minggu   = $_GET['konming_minggu'];
  $bulan_nama = date("F", mktime(0, 0, 0, $data['konming_bulan'], 10));

  $tgl_awal   = ($kelming_minggu*7)-6;
  $tgl_akhir  = ($kelming_minggu*7);
  if ($tgl_akhir==28){
    $tgl_akhir==31;
  }


  $mulai_dari1 = $konming_tahun."-".$konming_bulan."-".$tgl_awal;
  $mulai_dari2 = strtotime($mulai_dari1);
  $mulai_dari3 = date('Y-m-d',$mulai_dari2);
  $sampai_dari1 = $konming_tahun."-".$konming_bulan."-".$tgl_akhir;
  $sampai_dari2 = strtotime($sampai_dari1);
  $sampai_dari3 = date('Y-m-d',$sampai_dari2);
?>

  <div class="row">
    <div class="col-xs-12 col-md-12">
      <h3><span class="fa fa-file"></span>
        Daftar Pegawai Covid (Tahun <?php echo $konming_tahun; ?>, Bulan <?php echo $bulan_nama; ?>, Minggu ke-<?php echo $konming_minggu; ?>) 
        <?php
          $qjumlah = mysqli_query($koneksi,"SELECT * FROM tb_kon WHERE kon_tgl BETWEEN '$mulai_dari3' AND '$sampai_dari3'");
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
                  <th>Nama (JK/Lahir)</th>
                  <th>NIP</th>
                  <th>NIK</th>
                  <th>Sta. Peg.</th>    
                  <th>Org. (Satuan)</th>        
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
              $sql = $koneksi->query("SELECT * FROM tb_kon WHERE kon_tgl BETWEEN '$mulai_dari3' AND '$sampai_dari3'");
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
                <td> <?php echo $data['kon_peg_org']." -<br>".$data['kon_peg_orgsat']; ?></td>
                <td> <?php echo $data['kon_tglswab']." /"; ?>
                  <br>
              <?php echo $data['kon_tglhasil']; ?>
                </td>
                <td> <?php echo $data['kon_status']; ?></td>
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
 