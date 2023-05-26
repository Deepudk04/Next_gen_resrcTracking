<?php
$conn=mysqli_connect("localhost","root","12345","charts");
if($conn)
{
    echo "connected";
}
?>
<html>
  <head>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load("current", {packages:["corechart"]});
      google.charts.setOnLoadCallback(drawChart);
      function drawChart() 
      {
        var data = google.visualization.arrayToDataTable([
          ['student', 'contribution'],
          <?php
          $sql="SELECT * FROM contribution";
          $fire=mysqli_query($conn,$sql);
          while($result=mysqli_fetch_assoc($fire))
          {
            echo "['" .$result['student']."',".$result['contribution']."],";

          }
          ?>
        ]);
        var options = 
        {
          title: 'Students and contribution',
          is3D: true,
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart_3d'));
        chart.draw(data, options);
      }
    </script>
  </head>
  <body>
    <div id="piechart_3d" style="width: 900px; height: 500px;"></div>
  </body>
</html>