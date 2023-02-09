<html>
  <head>
</head>
    
 
  <body>
    <div id="piechart" style="width: 900px; height: 500px;"></div>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);
      <?php
                include 'connection.php';
                $sb="select  count(percentage) FROM percentage WHERE percentage>=90 AND percentage<=100";
                $sb1="select  count(percentage) FROM percentage WHERE percentage>=70 AND percentage<=80";
                $sb2="select  count(percentage) FROM percentage WHERE percentage>=60 AND percentage<=70";
                $sb3="select  count(percentage) FROM percentage WHERE percentage<=60";
                $selectquery = "select  count(percentage) FROM percentage WHERE percentage>=80 AND percentage<=90";
                $query1 = mysqli_query($conn, $sb);
                $query2= mysqli_query($conn, $sb1);
                $query3= mysqli_query($conn, $sb2);
                $query4 = mysqli_query($conn, $sb3);
                $query5 = mysqli_query($conn, $selectquery);
                $res = mysqli_fetch_array($query1);
                $res1 = mysqli_fetch_array($query2);
                $res2 = mysqli_fetch_array($query3);
                $res3 = mysqli_fetch_array($query4);
                $res4= mysqli_fetch_array($query5);
                ?>
                var above_90="<?php echo $res[0]?>"
               var above_80="<?php echo $res4[0]?>"
                 var above_70="<?php echo $res1[0]?>"
                 var above_60="<?php echo $res2[0]?>"
                 var below_60="<?php echo $res3[0]?>"
                
      function drawChart() {

        var data = google.visualization.arrayToDataTable([
          ['Marks range', 'No of Students'],
          ['above 90',parseInt(above_90) ],
          ['80 to 90',parseInt(above_80) ],
          ['70 to 80',parseInt(above_70) ],
          ['60 to 70',parseInt(above_60) ],
          ['below 60',parseInt(below_60) ],
          
        ]);

        var options = {
          title: 'Marks Distribution'
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart'));

        chart.draw(data, options);
      }
    </script>
  </body>
</html>

