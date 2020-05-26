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
       $c_id = $_POST['c_id'];
       $s_id = $_POST['s_id'];
    $b_id = $_POST['b_id'];
    $t_id = $_POST['t_id'];
    $m_id = $_POST['m_id'];
    $star = $_POST['star'];
    $end = $_POST['end'];
       $date = $_POST['date'];
       $cusidno = $_POST['cusidno'];
       $pay = $_POST['pay'];
      
    
    
    // 2. Do a query
    $query  = "UPDATE back SET "; 
    $query .= "id = '$id' "; 
    $query .= "c_id = '$c_id' "; 
    $query .= "s_id = '$s_id' "; 
     $query .= "b_id = '$b_id' "; 
        $query .= "t_id = '$t_id' "; 
        $query .= "m_id = '$m_id' "; 
        $query .= "star = '$star' "; 
        $query .= "end = '$end' "; 
        $query .= "date = '$date' "; 
        $query .= "cusidno = '$cusidno' "; 
        $query .= "pay = '$pay' "; 
    $query .= "WHERE id = $id";

    echo $query;
    
    $result = mysqli_query($connection, $query);
    
    die('stop');

}


$updateid = $_GET['id'];

// 2. Do a query
$query  = "SELECT id, c_id, s_id, b_id, t_id, m_id, star, end, date, cusidno, pay "; 
$query .= "FROM back ";
$query .= "WHERE id = $updateid";

$result = mysqli_query($connection, $query);

if (!$result) {
    die("query is wrong");
}

// 3. process data
$row = mysqli_fetch_array($result);

?>

<form action="upb.php" method="post">
    The backend ID: <input type="int" name="id" value="<?php echo $row["id"]; ?>"> <br/>
    Customer ID: <input type="int" name="c_id" value="<?php echo $row["c_id"]; ?>"> <br/>
      Staff ID: <input type="int" name="s_id" value="<?php echo $row["s_id"]; ?>"> <br/>
     Bus ID: <input type="int" name="b_id" value="<?php echo $row["b_id"]; ?>"> <br/>
     Ticket ID: <input type="int" name="t_id" value="<?php echo $row["t_id"]; ?>"> <br/>
      Meal ID: <input type="int" name="m_id" value="<?php echo $row["m_id"]; ?>"> <br/>
     Bus departure: <input type="text" name="star" value="<?php echo $row["star"]; ?>"> <br/>
     Bus destination: <input type="text" name="end" value="<?php echo $row["end"]; ?>"> <br/>
     Departure date: <input type="date" name="date" value="<?php echo $row["date"]; ?>"> <br/>
    Customer identity card: <input type="int" name="cusidno" value="<?php echo $row["cusidno"]; ?>"> <br/>
     Payment: <input type="text" name="pay" value="<?php echo $row["pay"]; ?>"> <br/>
    <input type="submit" name="submit" class="submit" value="Submit" />
   
   
</form>

<?php

// 5. close db connection
mysqli_close($connection);


