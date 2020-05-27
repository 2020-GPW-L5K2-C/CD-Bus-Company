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
    $idno = $_POST['idno'];
    $phone = $_POST['phone'];
    $date = $_POST['date'];
    $start = $_POST['start'];
    $destination = $_POST['destination'];
    $meal = $_POST['meal'];
    $ttype = $_POST['ttype'];
    $pay = $_POST['pay'];
    
    // 2. Do a query
    $query  = "UPDATE forder SET "; 
    $query .= "id = '$id', "; 
    $query .= "name = '$name', "; 
    $query .= "idno = '$idno', "; 
    $query .= "phone = '$phone', "; 
    $query .= "date = '$date', "; 
    $query .= "start = '$start', "; 
    $query .= "destination = '$destination', "; 
    $query .= "meal = '$meal', "; 
    $query .= "ttype = '$ttype', "; 
    $query .= "pay = '$pay' "; 
    $query .= "WHERE id = $id";

    echo $query;
    
    $result = mysqli_query($connection, $query);
    
    die('stop');

}


$updateid = $_GET['id'];

// 2. Do a query
$query  = "SELECT id, name, idno, phone, date, start, destination, meal, ttype, pay "; 
$query .= "FROM forder ";
$query .= "WHERE id = $updateid";


$result = mysqli_query($connection, $query);

if (!$result) {
    die("query is wrong");
}

// 3. process data
$row = mysqli_fetch_array($result);

?>

<form action="upf.php" method="post">
   ID <input type="int" name="id" value="<?php echo $row["id"]; ?>"><br/>
    Name: <input type="varchar" name="name" value="<?php echo $row["name"]; ?>"> <br/>
    Gender: <input type="text" name="idno" value="<?php echo $row["idno"]; ?>"> <br/>
   Phone : <input type="text" name="phone" value="<?php echo $row["phone"]; ?>"> <br/>
   Date : <input type="date" name="date" value="<?php echo $row["date"]; ?>"> <br/>
    Start: <input type="varchar" name="start" value="<?php echo $row["start"]; ?>"> <br/>
    Destination: <input type="varchar" name="destination" value="<?php echo $row["destination"]; ?>"> <br/>
    meal: <input type="varchar" name="meal" value="<?php echo $row["meal"]; ?>"> <br/>
    type: <input type="varchar" name="ttype" value="<?php echo $row["ttype"]; ?>"> <br/>
   Payment : <input type="varchar" name="pay" value="<?php echo $row["pay"]; ?>"> <br/>
    
    <input type="submit" name="submit">
</form>

<?php

// 5. close db connection
mysqli_close($connection);

?>