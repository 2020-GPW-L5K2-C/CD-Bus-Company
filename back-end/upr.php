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
    $query  = "UPDATE route SET "; 
    $query .= "id = '$id', "; 
    $query .= "star = '$star', "; 
    $query .= "end = '$end', "; 
    $query .= "sover = '$sover' "; 
    $query .= "WHERE id = $id";

    echo $query;
    
    $result = mysqli_query($connection, $query);
    
    die('stop');

}


$updateid = $_GET['id'];

// 2. Do a query
$query  = "SELECT id, star, end, sover "; 
$query .= "FROM route ";
$query .= "WHERE id = $updateid";


$result = mysqli_query($connection, $query);

if (!$result) {
    die("query is wrong");
}

// 3. process data
$row = mysqli_fetch_array($result);

?>

<form action="upr.php" method="post">
  Price ID: <input type="int" name="id" value="<?php echo $row["id"]; ?>"><br/>
  Departure time: <input type="date" name="star" value="<?php echo $row["star"]; ?>"> <br/>
  Arrival time: <input type="date" name="end" value="<?php echo $row["end"]; ?>"> <br/>
  Stop along the way: <input type="text" name="sover" value="<?php echo $row["sover"]; ?>"> <br/>
    
    <input type="submit" name="submit">
</form>

<?php

// 5. close db connection
mysqli_close($connection);

?>