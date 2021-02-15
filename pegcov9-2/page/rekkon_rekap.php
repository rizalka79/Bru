<?php

  mysqli_query($koneksi,"DELETE FROM tb_rekkon");

  $query_kon_min  = mysqli_query($koneksi,"SELECT * FROM tb_kon ORDER BY kon_tgl ASC LIMIT 1");
  $data_kon_min   = mysqli_fetch_array($query_kon_min);
  $kon_tgl_min    = $data_kon_min['kon_tgl'];

  $query_kon_max  = mysqli_query($koneksi,"SELECT * FROM tb_kon ORDER BY kon_tgl DESC LIMIT 1");
  $data_kon_max   = mysqli_fetch_array($query_kon_max);
  $kon_tgl_max    = $data_kon_max['kon_tgl'];

  $min_tanggal    = date("d",strtotime($data_kon_min['kon_tgl']));
  $min_minggu     = floor(($min_tanggal/7)+1);
  $min_bulan      = date("m",strtotime($data_kon_min['kon_tgl']));
  $min_tahun      = date("Y",strtotime($data_kon_min['kon_tgl']));

  $max_tanggal    = date("d",strtotime($data_kon_max['kon_tgl']));
  $max_minggu     = floor(($max_tanggal/7)+1);
  $max_bulan      = date("m",strtotime($data_kon_max['kon_tgl']));
  $max_tahun      = date("Y",strtotime($data_kon_max['kon_tgl']));


/*
    for ($i=$min_tahun; $i<=$max_tahun; $i++){
      for ($j=1; $j<=12; $j++){

        if($i=$min_tahun&&$j<=$min_bulan||$i=$max_tahun&&$j<=$min_bulan){

            for ($k=1; $k<=4; $k++){

              if($k<=$min_minggu&&$j<=$min_bulan||$k>=$max_minggu&&$j>=$max_bulan){
                $rekkon_tahun   = $i;
                $rekkon_bulan   = $j;
                $rekkon_minggu  = $k;
                $q ="INSERT INTO tb_rekkon (
                  rekkon_tahun, 
                  rekkon_bulan, 
                  rekkon_minggu
                ) VALUES (
                  '$rekkon_tahun', 
                  '$rekkon_bulan', 
                  '$rekkon_minggu'
                )";
                mysqli_query($koneksi,$q);
              }

          }
        }
      }


    }
*/
for ($i=$min_tahun; $i<=$max_tahun; $i++){

//tahun min saja
  if ($i==$min_tahun){
    for ($j=$min_bulan; $j<=12; $j++){
      //tahun min, bulan min saja
      if ($j==$min_bulan&&$j==$max_bulan){
        for($k=$min_minggu; $k<=4; $k++){
          $rekkon_tahun   = $i;
          $rekkon_bulan   = $j;
          $rekkon_minggu  = $k;
          echo "$rekkon_tahun"."-";
          $q ="INSERT INTO tb_rekkon (rekkon_tahun, rekkon_bulan, rekkon_minggu) VALUES ('$rekkon_tahun', '$rekkon_bulan', '$rekkon_minggu')"; 
          mysqli_query($koneksi,$q);
        }
      }
      //tahun min, antara bulan min dan bulan max
      if($j>$min_bulan&&$j<$max_bulan){
        for($k=1; $k<=4; $k++){
          $rekkon_tahun   = $i;
          $rekkon_bulan   = $j;
          $rekkon_minggu  = $k;
          $q ="INSERT INTO tb_rekkon (rekkon_tahun, rekkon_bulan, rekkon_minggu) VALUES ('$rekkon_tahun', '$rekkon_bulan', '$rekkon_minggu')"; 
          mysqli_query($koneksi,$q);
        }
      }
      //tahun min, bulan max saja






    }
  }


























}








              ?>
                <script type="text/javascript">
                  alert('<?php echo $min_tanggal." ".$min_minggu;?>');
                </script>
              <?php
           
/*
  $sqla = $koneksi->query("SELECT * FROM tb_kon");
    while ($dataa=$sqla->fetch_assoc()) {

      $date           = ($dataa['kon_tgl']);
      $tgl            = explode('-',$date); 
      $bln            = $tgl[1];
      $thn            = $tgl[0]; 
      $ref_date       = strtotime( "$date" ); 
      $week_of_year   = date( 'W', $ref_date ); 
      $week_of_month  = $week_of_year - date( 'W', strtotime( "$bln/1/$thn" ) );

      $minggu       = $week_of_month;
      $bulan        = date("F",strtotime($dataa['kon_tgl']));
      $tahun        = date("Y",strtotime($dataa['kon_tgl']));
      $kon_starawat = $dataa['kon_starawat'];
      $kon_staakhir = $dataa['kon_staakhir'];
      $ada = 0;
      $sqlb = $koneksi->query("SELECT * FROM tb_rekkon WHERE rekkon_tahun='$tahun' AND rekkon_bulan='$bulan' AND rekkon_minggu='$minggu' ");
      while ($datab=$sqlb->fetch_assoc()) {
        $ada++;
      }
      if ($ada==0){
        $rekkon_total = 1;
        $q ="INSERT INTO tb_rekkon(rekkon_tahun, rekkon_bulan, rekkon_minggu, rekkon_total) VALUES ('$tahun', '$bulan', '$minggu', '$rekkon_total')";
        mysqli_query($koneksi,$q);    
      } else {
        $q ="UPDATE tb_rekkon SET rekkon_total=rekkon_total+1 WHERE rekkon_tahun='$tahun' AND rekkon_bulan='$bulan' AND rekkon_minggu='$minggu' ";
        mysqli_query($koneksi,$q);
      }

      if ($kon_starawat=="Isman"){
        $q ="UPDATE tb_rekkon SET rekkon_srisman=rekkon_srisman+1 WHERE rekkon_tahun='$tahun' AND rekkon_bulan='$bulan' AND rekkon_minggu='$minggu' ";
        mysqli_query($koneksi,$q);
      } else if ($kon_starawat=="Rujuk"){
        $q ="UPDATE tb_rekkon SET rekkon_srrujuk=rekkon_srrujuk+1 WHERE rekkon_tahun='$tahun' AND rekkon_bulan='$bulan' AND rekkon_minggu='$minggu' ";
        mysqli_query($koneksi,$q);
      } 

      if ($kon_staakhir=="Sembuh"){
        $q ="UPDATE tb_rekkon SET rekkon_sasembuh=rekkon_sasembuh+1 WHERE rekkon_tahun='$tahun' AND rekkon_bulan='$bulan' AND rekkon_minggu='$minggu' ";
        mysqli_query($koneksi,$q);
      } else if ($kon_staakhir=="Meninggal"){
        $q ="UPDATE tb_rekkon SET rekkon_samati  =rekkon_samati+1     WHERE rekkon_tahun='$tahun' AND rekkon_bulan='$bulan' AND rekkon_minggu='$minggu' ";
        mysqli_query($koneksi,$q);
      } else if ($kon_staakhir=="Dalam Proses"){
        $q ="UPDATE tb_rekkon SET rekkon_saproses=rekkon_saproses+1 WHERE rekkon_tahun='$tahun' AND rekkon_bulan='$bulan' AND rekkon_minggu='$minggu' ";
        mysqli_query($koneksi,$q);
      }
    }
*/











?>