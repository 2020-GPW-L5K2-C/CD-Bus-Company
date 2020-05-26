<?php

  //1. Open database connection
$dbhost="localhost";
$dbuser="384b42c3dfd9";
$dbpass="72362cd8cff8bd36";
$dbname="l5k2c";
$connection = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

  // Test if connection is ok
  if  (mysqli_connect_errno()) {
       die("Database connection failed: " .
           mysqli_connect_error() . 
           " (" . mysqli_connect_error() . ")"
      );
  }

$query  = " SELECT name, amount ";
$query .= " from pie ";
$query .= " order by id ";


//echo $query;

$result = mysqli_query($connection, $query);


if (!$result) {
    die("query is wrong");
}

while ($row = mysqli_fetch_array($result)) {

        $labels1 .= '"' . $row['name'] . '", ';
        $data1 .= $row['amount'] . ', ';


}

?>

// Set new default font family and font color to mimic Bootstrap's default styling
Chart.defaults.global.defaultFontFamily = 'Nunito', '-apple-system,system-ui,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif';
Chart.defaults.global.defaultFontColor = '#858796';

// Pie Chart Example
var ctx = document.getElementById("myPieChart");
var myPieChart = new Chart(ctx, {
  type: 'doughnut',
  data: {
    labels: [<?php echo $labels1; ?>],
    datasets: [{
      data: [<?php echo $data1; ?>],
      backgroundColor: ['#4e73df', '#1cc88a', '#36b9cc', '#B4CDCD'],
      hoverBackgroundColor: ['#2e59d9', '#17a673', '#2c9faf', '#B4CDCD'],
      hoverBorderColor: "rgba(234, 236, 244, 1)",
    }],
  },
  options: {
    maintainAspectRatio: false,
    tooltips: {
      backgroundColor: "rgb(255,255,255,255)",
      bodyFontColor: "#858796",
      borderColor: '#dddfeb',
      borderWidth: 1,
      xPadding: 15,
      yPadding: 15,
      displayColors: false,
      caretPadding: 10,
    },
    legend: {
      display: false
    },
    cutoutPercentage: 80,
  },
});
