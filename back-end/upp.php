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
    $price = $_POST['price'];
    
    
    // 2. Do a query
    $query  = "UPDATE price SET "; 
    $query .= "id = '$id', "; 
    $query .= "li = '$li', "; 
    $query .= "s_id = '$s_id', "; 
    $query .= "r_id = '$r_id', "; 
    $query .= "price = '$price' "; 
    $query .= "WHERE id = $id";

    echo $query;
    
    $result = mysqli_query($connection, $query);
    
    die('stop');

}


$updateid = $_GET['id'];

// 2. Do a query
$query  = "SELECT id, li, s_id, r_id, price "; 
$query .= "FROM price ";
$query .= "WHERE id = $updateid";


$result = mysqli_query($connection, $query);

if (!$result) {
    die("query is wrong");
}

// 3. process data
$row = mysqli_fetch_array($result);

?>

<form action="upp.php" method="post">
  Price ID: <input type="int" name="id" value="<?php echo $row["id"]; ?>"><br/>
   Licence: <input type="text" name="li" value="<?php echo $row["li"]; ?>"> <br/>
    Staff ID: <input type="int" name="s_id" value="<?php echo $row["s_id"]; ?>"> <br/>
   Route ID: <input type="int" name="r_id" value="<?php echo $row["r_id"]; ?>"> <br/>
   Price: <input type="text" name="price" value="<?php echo $row["price"]; ?>"> <br/>
    
    <input type="submit" name="submit">
</form>

<?php

// 5. close db connection
mysqli_close($connection);

?>