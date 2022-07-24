<?php include "db.php"; ?>


<html>
<head>
  <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['line']});
      google.charts.setOnLoadCallback(drawChart);

    function drawChart() {

      var data = new google.visualization.DataTable();
      data.addColumn('number', 'PATIENTS REGISTERED');
      data.addColumn('number', 'TESTED');
     
     <?php  $query="select test_date('M'),count(payment_id)  from patient group by test_date('M') "; 
            $res=mysqli_query($conn,$query); 
            while($row=mysqli_fetch_array($res)){ 
			$month=$row[test_date('M')];
			$tests=$row['count(payment_id)'];
			}
?>
			
			[  '<?php echo $month; ?>',<?php echo $tests ; ?>],
			<?php 

						?>
	
      
      var options = {
        chart: {
          title: 'Tests vs months',
        
        },
        width: 50%,
        height: 500,
        axes: {
          x: {
            0: {side: 'top'}
          }
        }
      };

      var chart = new google.charts.Line(document.getElementById('line_top_x'));

      chart.draw(data, google.charts.Line.convertOptions(options));
    }
  </script>
</head>
<body>
  <div id="line_top_x"></div>
</body>
</html>

