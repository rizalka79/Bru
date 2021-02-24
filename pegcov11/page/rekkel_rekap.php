<?php
  $koneksi =mysqli_connect("localhost","root","","pegcov8");
  mysqli_query($koneksi,"DELETE FROM tb_kelming");
  mysqli_query($koneksi,"DELETE FROM tb_kelbul");

  $query_kel_min  = mysqli_query($koneksi,"SELECT * FROM tb_kel ORDER BY kel_tgl ASC LIMIT 1");
  $data_kel_min   = mysqli_fetch_array($query_kel_min);
  $kel_tgl_min    = $data_kel_min['kel_tgl'];

  $query_kel_max  = mysqli_query($koneksi,"SELECT * FROM tb_kel ORDER BY kel_tgl DESC LIMIT 1");
  $data_kel_max   = mysqli_fetch_array($query_kel_max);
  $kel_tgl_max    = $data_kel_max['kel_tgl'];

  $min_tanggal    = date("d",strtotime($data_kel_min['kel_tgl']));
  $min_minggu     = floor(($min_tanggal/7)+1);
  $min_tanggal2   = 7*($min_minggu-1);
  $min_bulan      = date("m",strtotime($data_kel_min['kel_tgl']));
  $min_tahun      = date("Y",strtotime($data_kel_min['kel_tgl']));

  $max_tanggal    = date("d",strtotime($data_kel_max['kel_tgl']));
  $max_minggu     = floor(($max_tanggal/7)+1);
  $max_bulan      = date("m",strtotime($data_kel_max['kel_tgl']));
  $max_tahun      = date("Y",strtotime($data_kel_max['kel_tgl']));

  $b = $min_bulan;
  $c = $min_minggu;
  for ($i=$min_tahun;$i<=$max_tahun;$i++){
    for ($j=$b;$j<13;$j++){
      for ($k=$c;$k<5;$k++){
        $tanggal3 = (($k-1)*7)+1;

        if ($k==1){
          $mulai_dari1 = $i."-".$j."-"."1";
          $mulai_dari2 = strtotime($mulai_dari1);
          $mulai_dari3 = date('Y-m-d',$mulai_dari2);
          $sampai_dari1 = $i."-".$j."-"."7";
          $sampai_dari2 = strtotime($sampai_dari1);
          $sampai_dari3 = date('Y-m-d',$sampai_dari2);
        }else if ($k==2){
          $mulai_dari1 = $i."-".$j."-"."8";
          $mulai_dari2 = strtotime($mulai_dari1);
          $mulai_dari3 = date('Y-m-d',$mulai_dari2);
          $sampai_dari1 = $i."-".$j."-"."14";
          $sampai_dari2 = strtotime($sampai_dari1);
          $sampai_dari3 = date('Y-m-d',$sampai_dari2);
        }else if ($k==3){
          $mulai_dari1 = $i."-".$j."-"."15";
          $mulai_dari2 = strtotime($mulai_dari1);
          $mulai_dari3 = date('Y-m-d',$mulai_dari2);
          $sampai_dari1 = $i."-".$j."-"."21";
          $sampai_dari2 = strtotime($sampai_dari1);
          $sampai_dari3 = date('Y-m-d',$sampai_dari2);
        }else if ($k==4){
          $mulai_dari1 = $i."-".$j."-"."22";
          $mulai_dari2 = strtotime($mulai_dari1);
          $mulai_dari3 = date('Y-m-d',$mulai_dari2);
          $sampai_dari1 = $i."-".$j."-"."31";
          $sampai_dari2 = strtotime($sampai_dari1);
          $sampai_dari3 = date('Y-m-d',$sampai_dari2);
        }

          $query_isman    = mysqli_query($koneksi,"SELECT * FROM tb_kel WHERE kel_status = 'Isman' AND kel_tgl BETWEEN '$mulai_dari3' AND '$sampai_dari3' ORDER BY kel_tgl ASC");
          $jumlah_isman   = mysqli_num_rows($query_isman);
          $query_rujuk    = mysqli_query($koneksi,"SELECT * FROM tb_kel WHERE kel_status = 'Rujuk' AND kel_tgl BETWEEN '$mulai_dari3' AND '$sampai_dari3' ORDER BY kel_tgl ASC");
          $jumlah_rujuk   = mysqli_num_rows($query_rujuk);
          $query_sembuh   = mysqli_query($koneksi,"SELECT * FROM tb_kel WHERE kel_status = 'Sembuh' AND kel_tgl BETWEEN '$mulai_dari3' AND '$sampai_dari3' ORDER BY kel_tgl ASC");
          $jumlah_sembuh  = mysqli_num_rows($query_sembuh);
          $query_meninggal= mysqli_query($koneksi,"SELECT * FROM tb_kel WHERE kel_status = 'Meninggal' AND kel_tgl BETWEEN '$mulai_dari3' AND '$sampai_dari3' ORDER BY kel_tgl ASC");
          $jumlah_meninggal=mysqli_num_rows($query_meninggal);
          $query_total    = mysqli_query($koneksi,"SELECT * FROM tb_kel WHERE kel_tgl BETWEEN '$mulai_dari3' AND '$sampai_dari3' ORDER BY kel_tgl ASC");
          $jumlah_total   = mysqli_num_rows($query_total);

        mysqli_query($koneksi,"INSERT INTO tb_kelming(
          kelming_tahun, 
          kelming_bulan, 
          kelming_minggu, 
          kelming_isman, 
          kelming_rujuk, 
          kelming_sembuh, 
          kelming_meninggal, 
          kelming_total
        ) VALUES (
          '$i', 
          '$j', 
          '$k', 
          '$jumlah_isman', 
          '$jumlah_rujuk', 
          '$jumlah_sembuh', 
          '$jumlah_meninggal', 
          '$jumlah_total')");   

        if ($k==4){
          $c=1;
        }
        if ($i==$max_tahun&&$j==$max_bulan&&$k==$max_minggu){
          $k=5;
        }
      }
      if ($j==12){
        $b=1;
      }
      if ($i==$max_tahun&&$j==$max_bulan){
        $c=5;
      }
    }      
  }

  $sql_ming = $koneksi->query("SELECT DISTINCT kelming_tahun, kelming_bulan FROM tb_kelming ORDER BY kelming_tahun ASC, kelming_bulan ASC, kelming_minggu ASC");
  while ($data_ming=$sql_ming->fetch_assoc()) {
    $kelming_tahun    = $data_ming['kelming_tahun'];
    $kelming_bulan    = $data_ming['kelming_bulan'];
    $kelbul_isman     = 0;
    $kelbul_rujuk     = 0;
    $kelbul_sembuh    = 0;
    $kelbul_meninggal = 0;

    $sql_ming2 = $koneksi->query("SELECT * FROM tb_kelming WHERE kelming_tahun ='$kelming_tahun' AND  kelming_bulan ='$kelming_bulan' ORDER BY kelming_tahun DESC, kelming_bulan DESC, kelming_minggu DESC");
    while ($data_ming2=$sql_ming2->fetch_assoc()) {
      $kelbul_isman   = $kelbul_isman + $data_ming2['kelming_isman'];
      $kelbul_rujuk   = $kelbul_rujuk + $data_ming2['kelming_rujuk'];
      $kelbul_sembuh   = $kelbul_sembuh + $data_ming2['kelming_sembuh'];
      $kelbul_meninggal   = $kelbul_meninggal + $data_ming2['kelming_meninggal'];
    }
    $kelbul_total   = $kelbul_isman+$kelbul_rujuk+$kelbul_sembuh+$kelbul_meninggal;

    mysqli_query($koneksi,"INSERT INTO tb_kelbul(
      kelbul_tahun, 
      kelbul_bulan,
      kelbul_isman,
      kelbul_rujuk,
      kelbul_sembuh,
      kelbul_meninggal,
      kelbul_total
    ) VALUES (
      '$kelming_tahun', 
      '$kelming_bulan', 
      '$kelbul_isman', 
      '$kelbul_rujuk', 
      '$kelbul_sembuh', 
      '$kelbul_meninggal', 
      '$kelbul_total')");   
  }

?>