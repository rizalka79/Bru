<?php  
$connect = mysqli_connect("localhost", "root", "", "pegcov1");  
$query = "SELECT kon_peg_jk, count(*) as number FROM tb_kon GROUP BY kon_peg_jk"; 
$query2 = "SELECT kon_peg_jk, count(*) as number FROM tb_kon GROUP BY kon_peg_jk";  
$result = mysqli_query($connect, $query);  
$result2 = mysqli_query($connect, $query2);  
//$result = 100;  
 ?>
  <div class="box box-success" style="">
            <div class="box-header with-border">
              <h3 class="box-title">SEMBUH</h3>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
              </div>
            </div>
            <div class="box-body">
              <div class="chart">
                <canvas id="final"></canvas>
              </div>
            </div>
</div>
<script>
 new Chart(document.getElementById("final"), {
    type: 'bar',
    data: {
      labels: ["Januari", "Februari", "Desember"],
      datasets: [
        {
          label: "Sembuh",
          backgroundColor: "#3e95cd",
          data: [4,1,0]
        }, {
          label: "Meninggal",
          backgroundColor: "red",
          data: [2,0,0]
        }
      ]
    },
    options: {
      title: {
        display: true,
        text: 'SEMBUH(2020)'
      }
    }
});
</script>