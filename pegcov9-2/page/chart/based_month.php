<?php  
$connect = mysqli_connect("localhost", "root", "", "pegcovid2");  
$query = "SELECT * FROM tb_rekkon";  
$query2 = "SELECT * FROM tb_rekkon";  
$result = mysqli_query($connect, $query);  
$result2 = mysqli_query($connect, $query2);  
//$result = 100;  
 ?>
 <div class="box box-success" style="">
            <div class="box-header with-border">
              <h3 class="box-title">POSITIF COVID19</h3>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
              </div>
            </div>
            <div class="box-body">
              <div class="chart">
                <canvas id="month" style=""></canvas>
              </div>
            </div>
      </div>
<script>
new Chart(document.getElementById("month"), {
    type: 'bar',
    data: {
      labels: ["Januari", "Februari", "Maret", "April"],
      datasets: [
        {
          label: "",
          backgroundColor: ["#3e95cd", "#8e5ea2","#3cba9f","#e8c3b9","#c45850"],
          data: [400,250,240,300]
        }
      ]
    },
    options: {
      legend: { display: false },
      title: {
        display: true,
        text: 'Positif COVID19(2020)'
      }
    }
});
</script>