<?php
  $konbul_tahun    = $_GET['konbul_tahun'];
  $konbul_bulan    = $_GET['konbul_bulan'];
  $bulan_nama = date("F", mktime(0, 0, 0, $data['konbul_bulan'], 10));
?>

  <div class="row">
    <div class="col-xs-12 col-md-12">
      <h3><span class="fa fa-area-chart"></span>
        Rekap Pegawai Covid (Tahun <?php echo $konbul_tahun; ?>, Bulan <?php echo $bulan_nama; ?>) 
        <a href="?menu=konming_data" class="btn btn-sm btn-primary"><span class="fa fa-refresh"></a>  
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
              $sql = $koneksi->query("SELECT * FROM tb_konming WHERE konming_tahun = $konbul_tahun AND konming_bulan = $konbul_bulan ORDER BY konming_tahun ASC, konming_bulan ASC, konming_minggu ASC");
              while ($data=$sql->fetch_assoc()) {
          ?>
            <tr>
                <td> <?php echo $no++; ?> </td>
                <td> <?php echo "ke-".$data['konming_minggu']; ?></td>
                <td> <?php echo $data['konming_isman']; ?></td>
                <td> <?php echo $data['konming_rujuk']; ?></td>
                <td> <?php echo $data['konming_sembuh']; ?></td>
                <td> <?php echo $data['konming_meninggal']; ?></td>      
                <td> <?php echo $data['konming_total']; ?></td>
                <td>
                  <a href="?menu=rekkon_detail2&konming_tahun=<?php echo $data['konming_tahun']; ?>&konming_bulan=<?php echo $data['konming_bulan']; ?>&konming_minggu=<?php echo $data['konming_minggu']; ?>" 
                     class="btn btn-sm btn-primary" 
                     title="Rekap <?php echo $data['konming_bulan']." ".$data['konming_tahun'];?>">
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
  $mulai_dari1 = $konbul_tahun."-".$konbul_bulan."-"."1";
  $mulai_dari2 = strtotime($mulai_dari1);
  $mulai_dari3 = date('Y-m-d',$mulai_dari2);
  $sampai_dari1 = $konbul_tahun."-".$konbul_bulan."-"."31";
  $sampai_dari2 = strtotime($sampai_dari1);
  $sampai_dari3 = date('Y-m-d',$sampai_dari2);
?>

  <div class="row">
    <div class="col-xs-12 col-md-12">
      <h3><span class="fa fa-file"></span>
        Daftar Pegawai Covid (Tahun <?php echo $konbul_tahun; ?>, Bulan <?php echo $bulan_nama; ?>) 
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
                  <th>Org. - Satuan</th>        
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
                  <a href="?menu=kon_edit&kon_id=<?php echo $data['kon_id']; ?>" 
                     class="btn btn-sm btn-success" 
                     title="Edit <?php echo $data['kon_peg_nama'];?>">
                     <span class="fa fa-edit"></span>
                  </a>
                  <a onclick="return confirm('Anda yakin menghapus data kondisi pegawai covid <?php echo $data['kon_nama']; ?> ?')" 
                     href="?menu=kon_hapus&kon_id=<?php echo $data['kon_id']; ?>" 
                     class="btn btn-sm btn-danger" 
                     title="Hapus <?php echo $data['kon_nama'];?>">
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
 