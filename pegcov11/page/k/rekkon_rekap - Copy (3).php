<?php
  $koneksi =mysqli_connect("localhost","root","","pegcov7");
  mysqli_query($koneksi,"DELETE FROM tb_rekkon");

  $query_kon_min  = mysqli_query($koneksi,"SELECT * FROM tb_kon ORDER BY kon_tgl ASC LIMIT 1");
  $data_kon_min   = mysqli_fetch_array($query_kon_min);
  $kon_tgl_min    = $data_kon_min['kon_tgl'];

  $query_kon_max  = mysqli_query($koneksi,"SELECT * FROM tb_kon ORDER BY kon_tgl DESC LIMIT 1");
  $data_kon_max   = mysqli_fetch_array($query_kon_max);
  $kon_tgl_max    = $data_kon_max['kon_tgl'];

  $min_tanggal    = date("d",strtotime($data_kon_min['kon_tgl']));
  $min_minggu     = floor(($min_tanggal/7)+1);
  $min_tanggal2   = 7*($min_minggu-1);
  $min_bulan      = date("m",strtotime($data_kon_min['kon_tgl']));
  $min_tahun      = date("Y",strtotime($data_kon_min['kon_tgl']));

  $max_tanggal    = date("d",strtotime($data_kon_max['kon_tgl']));
  $max_minggu     = floor(($max_tanggal/7)+1);
  $max_bulan      = date("m",strtotime($data_kon_max['kon_tgl']));
  $max_tahun      = date("Y",strtotime($data_kon_max['kon_tgl']));

  //$kon_tgl_start  = date ("Y-m-d", strtotime("1 day", strtotime($kon_tgl_min)));

  $kon_tgl_start  = date($min_tahun."-".$min_bulan."-".$min_tanggal2);



  //echo "Start: ".$kon_tgl_min." (".$min_minggu.")"."<br>";
  //echo "End : ".$kon_tgl_max." (".$min_minggu.")"."<br><br>";


  $b = $min_bulan;
  $c = $min_minggu;
  for ($i=$min_tahun;$i<=$max_tahun;$i++){
    for ($j=$b;$j<13;$j++){
      for ($k=$c;$k<5;$k++){
        $tanggal3 = (($k-1)*7)+1;
        //echo $i."-".$j."-".$tanggal3." (Minggu ke-".$k.")"."<br>";


        //$d1 = ($k*7)-6;
        //$first = $i."-".$j."-".$d1;

        //$first  = $i."-".$j."-".$tanggal3;
        //$first2 = strtotime($first);
        //$first3 = date('Y-m-d',$first2);
        //echo $first3;



        if ($k==1){
          $mulai_dari1 = $i."-".$j."-"."1";
          $mulai_dari2 = strtotime($mulai_dari1);
          $mulai_dari3 = date('Y-m-d',$mulai_dari2);
          $sampai_dari1 = $i."-".$j."-"."7";
          $sampai_dari2 = strtotime($sampai_dari1);
          $sampai_dari3 = date('Y-m-d',$sampai_dari2);
          //echo $mulai_dari3." - ".$sampai_dari3."<br>";
        }else if ($k==2){
          $mulai_dari1 = $i."-".$j."-"."8";
          $mulai_dari2 = strtotime($mulai_dari1);
          $mulai_dari3 = date('Y-m-d',$mulai_dari2);
          $sampai_dari1 = $i."-".$j."-"."14";
          $sampai_dari2 = strtotime($sampai_dari1);
          $sampai_dari3 = date('Y-m-d',$sampai_dari2);
          //echo $mulai_dari3." - ".$sampai_dari3."<br>";
        }else if ($k==3){
          $mulai_dari1 = $i."-".$j."-"."15";
          $mulai_dari2 = strtotime($mulai_dari1);
          $mulai_dari3 = date('Y-m-d',$mulai_dari2);
          $sampai_dari1 = $i."-".$j."-"."21";
          $sampai_dari2 = strtotime($sampai_dari1);
          $sampai_dari3 = date('Y-m-d',$sampai_dari2);
          //echo $mulai_dari3." - ".$sampai_dari3."<br>";
        }else if ($k==4){
          $mulai_dari1 = $i."-".$j."-"."22";
          $mulai_dari2 = strtotime($mulai_dari1);
          $mulai_dari3 = date('Y-m-d',$mulai_dari2);
          $sampai_dari1 = $i."-".$j."-"."31";
          $sampai_dari2 = strtotime($sampai_dari1);
          $sampai_dari3 = date('Y-m-d',$sampai_dari2);
          //echo $mulai_dari3." - ".$sampai_dari3."<br>";
        }

$query_isman      =     mysqli_query($koneksi,"SELECT * FROM tb_kon WHERE kon_status = 'Isman' AND kon_tgl BETWEEN '$mulai_dari3' AND '$sampai_dari3' ORDER BY kon_tgl ASC");
$jumlah_isman     = mysqli_num_rows($query_isman);
$query_rujuk      =     mysqli_query($koneksi,"SELECT * FROM tb_kon WHERE kon_status = 'Rujuk' AND kon_tgl BETWEEN '$mulai_dari3' AND '$sampai_dari3' ORDER BY kon_tgl ASC");
$jumlah_rujuk     = mysqli_num_rows($query_rujuk);
$query_sembuh     =    mysqli_query($koneksi,"SELECT * FROM tb_kon WHERE kon_status = 'Sembuh' AND kon_tgl BETWEEN '$mulai_dari3' AND '$sampai_dari3' ORDER BY kon_tgl ASC");
$jumlah_sembuh    = mysqli_num_rows($query_sembuh);
$query_meninggal  = mysqli_query($koneksi,"SELECT * FROM tb_kon WHERE kon_status = 'Meninggal' AND kon_tgl BETWEEN '$mulai_dari3' AND '$sampai_dari3' ORDER BY kon_tgl ASC");
$jumlah_meninggal = mysqli_num_rows($query_meninggal);
$query_total      = mysqli_query($koneksi,"SELECT * FROM tb_kon WHERE                              kon_tgl BETWEEN '$mulai_dari3' AND '$sampai_dari3' ORDER BY kon_tgl ASC");
$jumlah_total     = mysqli_num_rows($query_total);

        //echo $jumlah_isman."/".$jumlah_rujuk."/".$jumlah_sembuh."/".$jumlah_meninggal."/".$jumlah_total."<br>";



        mysqli_query($koneksi,"INSERT INTO tb_rekkon(
          rekkon_tahun, 
          rekkon_bulan, 
          rekkon_minggu, 
          rekkon_isman, 
          rekkon_rujuk, 
          rekkon_sembuh, 
          rekkon_meninggal, 
          rekkon_total
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

  



  //$sql_kon = $koneksi->query("SELECT * FROM tb_kon ORDER BY kon_tgl ASC");
  //while ($data_kon=$sql_kon->fetch_assoc()) {


  //$kon_tanggal    = date("d",strtotime($data_kon_min['kon_tgl']));
  //$kon_minggu     = floor(($kon_tanggal/7)+1);
  //$min_tanggal2   = 7*($min_minggu-1);
  //$kon_bulan      = date("m",strtotime($data_kon_min['kon_tgl']));
  //$kon_tahun      = date("Y",strtotime($data_kon_min['kon_tgl']));


  //}




?>