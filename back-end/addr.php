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
    $name = $_POST['name'];
    $gender = $_POST['gender'];
    $idno = $_POST['idno'];
    

    // 2. Do a query
    $query  = "INSERT INTO customer (id, name, gender, idno) "; 
    $query .= "VALUES ('$id', '$name', '$gender', '$idno') ";

    echo $query;

    $result = mysqli_query($connection, $query);
}

?>

<form action="ab.php" method="post">
Line ID: <input type="int" name="id"> <br/>
  Departure time: <input type="int" name="name"> <br/>
    Arrival time: <input type="int" name="gender"> <br/>
    Stop along the way: <input type="int" name="idno"> <br/>
   
    <input type="submit" name="submit">
</form>

