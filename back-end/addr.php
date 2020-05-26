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

if ($_POST['submit']) {
    $id = $_POST['id'];
    $star = $_POST['star'];
    $end = $_POST['end'];
    $sover = $_POST['sover'];
    

    // 2. Do a query
    $query  = "INSERT INTO route (id, star, end, sover) "; 
    $query .= "VALUES ('$id', '$star', '$end', '$sover') ";

    echo $query;

    $result = mysqli_query($connection, $query);
}

?>

<form action="addr.php" method="post">
Line ID: <input type="int" name="id"> <br/>
  Departure time: <input type="date" name="star"> <br/>
    Arrival time: <input type="date" name="end"> <br/>
    Stop along the way: <input type="text" name="sover"> <br/>
   
    <input type="submit" name="submit">
</form>

