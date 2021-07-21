
<html>
<head>
  <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
  <script type="text/javascript">
    google.charts.load("current", {packages:["calendar"]});
    google.charts.setOnLoadCallback(drawChart);

    function drawChart() {
     var dataTable = new google.visualization.DataTable();
     dataTable.addColumn({ type: 'date', id: 'Date' });
     dataTable.addColumn({ type: 'number', id: 'Won/Loss' });
  
     <?php 
     if(!empty($activity_calender))
     {

      foreach ($activity_calender as $data) {?>

        dataTable.addRows([
      
      [ new Date(parseInt("<?php echo $data['year'];?>"), parseInt("<?php echo $data['month'];?>")-1, parseInt("<?php echo $data['day'];?>")), parseInt("<?php echo $data['act_count'];?>") ]

      ]);
        <?php 
        
      }
    }

    ?>
    

    var chart = new google.visualization.Calendar(document.getElementById('calendar_basic'));

    var options = {
     title: "<?php if(!empty($activity_count)){echo $activity_count['total_act_count'];}?> contributions in the last year",
     height: 350,
      noDataPattern: {
           backgroundColor: '#76a7fa',
           color: '#a0c3ff'
         }
   };

   chart.draw(dataTable, options);
 }
</script>
</head>
<body>
  <div id="calendar_basic" style="width: 1000px; height: 350px;"></div>
</body>
</html>
