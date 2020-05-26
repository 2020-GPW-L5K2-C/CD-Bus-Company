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
    $query  = "INSERT INTO back (id, c_id , s_id, b_id, t_id, m_id, star, end, date, cusidno, pay) "; 
    $query .= "VALUES ('$id', '$c_id ', '$s_id', '$b_id', '$t_id'. '$m_id', '$end', '$date', '$cusidno', '$pay') ";

    echo $query;

    $result = mysqli_query($connection, $query);
}

?>

<form action="ab.php" method="post">
The backend ID: <input type="int" name="id"> <br/>
   Customer ID: <input type="int" name="c_id "> <br/>
    Staff ID: <input type="int" name="s_id"> <br/>
    Bus ID: <input type="int" name="b_id"> <br/>
    Ticket ID: <input type="int" name="t_id"> <br/>
    Meal ID: <input type="int" name="m_id"> <br/>
    Bus departure: <input type="text" name="star"> <br/>
   Bus destination: <input type="text" name="end"> <br/>
   Departure date: <input type="date" name="date"> <br/>
    Customer identity card: <input type="int" name="cusidno"> <br/>
    Payment: <input type="text" name="pay"> <br/>
    <input type="submit" name="submit">
</form>
?>
