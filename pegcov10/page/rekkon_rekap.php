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



  echo "Start: ".$kon_tgl_min." (".$min_minggu.")"."<br>";
  echo "End : ".$kon_tgl_max." (".$min_minggu.")"."<br><br>";


  $b = $min_bulan;
  $c = $min_minggu;
  for ($i=$min_tahun;$i<=$max_tahun;$i++){
    for ($j=$b;$j<13;$j++){
      for ($k=$c;$k<5;$k++){
        $tanggal3 = (($k-1)*7)+1;
        echo $i."-".$j."-".$tanggal3." (Minggu ke-".$k.")"."<br>";
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

  






  ?>
    <script type="text/javascript">
      alert('<?php echo $kon_tgl_min." ".$kon_tgl_start;?>');
    </script>
  <?php



?>