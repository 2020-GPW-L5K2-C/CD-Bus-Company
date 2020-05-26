<?php

// 1. Open database connection
$dbhost="localhost";
$dbuser="root";
$dbpass="tan123456";
$dbname="EAD";

//connection to the database
$connection=mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);

//Test if connection is ok
if (mysqli_connect_errno()) {
    die("Database connection failed: " .
        mysqli_connect_error() .
        " (" . mysqli_connect_errno() . ")" 
    );
}

if ($_POST['submit']) {
    $id = $_POST['id'];
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $gender = $_POST['gender'];
    $vip = $_POST['vip'];

    // 2. Do a query
    $query  = "INSERT INTO patient (id, fname, lname, gender, vip) "; 
    $query .= "VALUES ('$id', '$fname', '$lname', '$gender', '$vip') ";

    echo $query;

    $result = mysqli_query($connection, $query);
}

?>

<form action="addp.php" method="post">
    ID: <input type="text" name="id"> <br/>
    First Name: <input type="text" name="fname"> <br/>
    Last Name: <input type="text" name="lname"> <br/>
    Gender: <input type="text" name="gender"> <br/>
    Vip: <input type="text" name="vip"> <br/>
    <input type="submit" name="submit">
</form>