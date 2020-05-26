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
    $li = $_POST['li'];
    $s_id = $_POST['s_id'];
    $r_id = $_POST['r_id'];
    

    // 2. Do a query
    $query  = "INSERT INTO price (id, li, s_id, r_id) "; 
    $query .= "VALUES ('$id', '$li', '$s_id', '$r_id') ";

    echo $query;

    $result = mysqli_query($connection, $query);
}

?>

<form action="ap.php" method="post">
Price ID: <input type="int" name="id"> <br/>
  Licence: <input type="text" name="li"> <br/>
  Staff ID: <input type="r_id" name="s_id"> <br/>
    Route ID: <input type="int" name="r_id"> <br/>
   
    <input type="submit" name="submit">
</form>

