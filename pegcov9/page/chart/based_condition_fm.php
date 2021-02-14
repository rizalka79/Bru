<?php  
$connect = mysqli_connect("localhost", "root", "", "pegcovid2");  
$query = "SELECT kon_starawat, count(*) as number FROM tb_kon GROUP BY kon_starawat"; 
$query2 = "SELECT kon_starawat, count(*) as number FROM tb_kon GROUP BY kon_starawat";  
$result = mysqli_query($connect, $query);  
$result2 = mysqli_query($connect, $query2);  
//$result = 100;  
 ?>
<script src="https://code.highcharts.com/highcharts.js"></script>
<div class="box box-success" style="height: 320px !important;">
            <div class="box-header with-border">
              <h3 class="box-title">DALAM PERAWATAN</h3>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
              </div>
            </div>
            <div class="box-body">
              <div class="chart">
                <canvas id="kondisi_fm" width="800" height="450"></canvas>
              </div>
            </div>
</div>
<script>
 new Chart(document.getElementById("kondisi_fm"), {
  type: 'line',
  data: {
    labels: ["Januari", "Februari", "Maret"],
    datasets: [{ 
        data: [20,15,30],
        // label: false,
        borderColor: "#3e95cd",
        fill: false
      }
    ]
  },
  options: {
    title: {
      display: true,
      text: 'Dalam Perawatan (2020)'
    }
  }
});
</script>
