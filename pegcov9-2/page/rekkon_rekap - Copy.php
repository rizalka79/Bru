<?php
$koneksi =mysqli_connect("localhost","root","","pegcov5");
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


    $kon_tgl_start  = date ("Y-m-d", strtotime("+0 day", strtotime($kon_tgl_min)));





              ?>
                <script type="text/javascript">
                  alert('<?php echo $min_tanggal." ".$min_minggu;?>');
                </script>
              <?php








  // Set timezone
  date_default_timezone_set('UTC');

  // Start date
  //$date = '2009-12-06';
  // End date
  //$end_date = '2020-12-31';

  while (strtotime($kon_tgl_start) <= strtotime($kon_tgl_max)) {
                echo "$kon_tgl_start"."<br>"; 
                $kon_tgl_start = date ("Y-m-d", strtotime("+7 day", strtotime($kon_tgl_start)));
  }






function week_number( $date = '2021-01-30' ) 
{ 
    return ceil( date( 'j', strtotime( $date ) ) / 7 ); 
 
} 

$week_num = week_number();
 
$month = date("J", time());
 
echo "Today is the $week_num week of $month";








?>
