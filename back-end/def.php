<?php

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


$deleteid = $_GET['id'];

// 2. Do a query
$query  = "DELETE FROM forder "; 
$query .= "WHERE id = $deleteid";

//echo $query;
$result = mysqli_query($connection, $query);

header('Location: forder.php');

if (!$result) {
    die("query is wrong");
}

//Echo "vehicle deleted";

// 5. close db connection
mysqli_close($connection);

?>