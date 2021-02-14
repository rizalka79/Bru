<div class="nav-tabs-custom">
            <div class="box-header with-border">
              <h3 class="box-title"><b>TOP UNIT KERJA</b></h3>            
            </div>
            <div class="box-body">
              <div class="chart">
                <canvas id="top2" style="height:250px"></canvas>
              </div>
</div>
<script>
    new Chart(document.getElementById("top2"), {
    type: 'horizontalBar',
    data: {
      labels: ["Sekjen", "Itjen", "Dirjen", "KKP"],
      datasets: [
        {
          label: "Population (millions)",
          backgroundColor: "#d17f36",
          data: [780,400,389,250]
        }
      ]
    },
    options: {
      legend: { display: false },
      title: {
        display: true,
        text: 'TOP UNIT KERJA'
      }
    }
});
</script>