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
    $licence = $_POST['licence'];
    $s_id = $_POST['s_id'];
    $r_id = $_POST['r_id'];
    
    
    
    // 2. Do a query
    $query  = "UPDATE bus SET "; 
    $query .= "id = '$id', "; 
    $query .= "licence = '$licence', "; 
    $query .= "s_id = '$s_id', "; 
    $query .= "r_id = '$r_id' "; 
    
    $query .= "WHERE id = $id";

    echo $query;
    
    $result = mysqli_query($connection, $query);
    
    die('stop');

}


$updateid = $_GET['id'];

// 2. Do a query
$query  = "SELECT id, licence, s_id, r_id "; 
$query .= "FROM bus ";
$query .= "WHERE id = $updateid";


$result = mysqli_query($connection, $query);

if (!$result) {
    die("query is wrong");
}

// 3. process data
$row = mysqli_fetch_array($result);

?>

<form action="ubus.php" method="post">
  Bus no.: <input type="int" name="id" value="<?php echo $row["id"]; ?>"><br/>
   License plate number: <input type="text" name="licence" value="<?php echo $row["licence"]; ?>"> <br/>
    Staff ID: <input type="int" name="s_id" value="<?php echo $row["s_id"]; ?>"> <br/>
   Route ID: <input type="int" name="r_id" value="<?php echo $row["r_id"]; ?>"> <br/>
  
    
    <input type="submit" name="submit">
</form>

<?php

// 5. close db connection
mysqli_close($connection);

?>