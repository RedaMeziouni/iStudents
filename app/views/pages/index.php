<?php require APPROOT . '/views/inc/header.php'; ?>
<?php 
$male = 0;
$female = 0;
foreach($data2['student'] as $person){
  if($person->genre === 'Male'){
    $male++;
	} elseif($person->genre === 'Female'){
    $female++;
	}
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../public/css/style.css">
  <title><?php echo SITENAME; ?></title>
</head>
<body>
<!-- Main  -->
  <div class="jumbotron jumbotron-flud text-center">
    <div class="container">
    <h1 class="display-3"><?php echo $data['title']; ?></h1>
    <p class="lead"><?php echo $data['description']; ?></p>
    </div>
  </div> 

<!-- Charts -->
<div id="piechart"></div>
  
  <!-- GC API -->
  <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script> 
  <!-- GC Function Male and Female -->
  <script type="text/javascript">
// Load google charts
google.charts.load('current', {'packages':['corechart']});
google.charts.setOnLoadCallback(drawChart);

// Draw the chart and set the chart values
function drawChart() {
  var data = google.visualization.arrayToDataTable([
    ['genre', 'Hours per Day'],
    ['Males', <?php echo $male?>],
    ['Females', <?php echo $female?>]
  ]);
  
  // Optional; add a title and set the width and height of the chart
  var options = {'title':'iStudents', 'width':1000, 'height':500};
  
  // Display the chart inside the <div> element with id="piechart"
  var chart = new google.visualization.PieChart(document.getElementById('piechart'));
  chart.draw(data, options);
}
</script> 


<!-- Clock -->
<div id="MyClockDisplay" class="clock" onload="showTime()"></div>
  <!-- JS Code -->
  <script src="../public/js/main.js"></script>
</body>
</html>

  

<?php require APPROOT . '/views/inc/footer.php'; ?> 
