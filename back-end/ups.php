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
    $p = $_POST['p'];
    
    // 2. Do a query
    $query  = "UPDATE staff SET "; 
    $query .= "id = '$id', "; 
    $query .= "name = '$name', "; 
    $query .= "gender = '$gender', "; 
    $query .= "p = '$p' "; 
    $query .= "WHERE id = $id";

     echo $query;
    
    $result = mysqli_query($connection, $query);
    
    die('stop');

}


$updateid = $_GET['id'];

// 2. Do a query
$query  = "SELECT id, name, gender, p "; 
$query .= "FROM staff ";
$query .= "WHERE id = $updateid";
 //echo $query;

$result = mysqli_query($connection, $query);

if (!$result) {
    die("query is wrong");
}

// 3. process data
$row = mysqli_fetch_array($result);

?>

<form action="ups.php" method="post">
    <input type="hidden" name="id" value="<?php echo $row["id"]; ?>">
   Name: <input type="text" name="name" value="<?php echo $row["name"]; ?>"> <br/>
    Gender: <input type="text" name="gender" value="<?php echo $row["gender"]; ?>"> <br/>
    Position: <input type="text" name="p" value="<?php echo $row["p"]; ?>"> <br/>
    
    <input type="submit" name="submit">
</form>

<?php

// 5. close db connection
mysqli_close($connection);

?>