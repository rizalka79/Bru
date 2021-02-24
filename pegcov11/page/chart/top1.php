<div class="nav-tabs-custom">
            <div class="box-header with-border">
              <h3 class="box-title"><b>TOP ESELON 1</b></h3>
         
            </div>
            <div class="box-body">
              <div class="chart">
                <canvas id="top1" style="height:250px"></canvas>
              </div>
            </div>
</div>
<script>
    new Chart(document.getElementById("top1"), {
    type: 'horizontalBar',
    data: {
      labels: ["Sekjen", "Itjen", "Dirjen", "KKP"],
      datasets: [
        {
          label: "Population (millions)",
          backgroundColor: "#d17f36",
          data: [5,4,2,2]
        }
      ]
    },
    options: {
      legend: { display: false },
      title: {
        display: true,
        text: 'TOP ESELON 1'
      }
    }
});
</script>