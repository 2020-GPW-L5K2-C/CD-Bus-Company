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

?>

<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>CBC back-end</title>

  <!-- Custom fonts for this template -->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="css/sb-admin-2.min.css" rel="stylesheet">

  <!-- Custom styles for this page -->
  <link href="vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

</head>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
        <div class="sidebar-brand-icon rotate-n-15">
          <i class="fas fa-laugh-wink"></i>
        </div>
        <div class="sidebar-brand-text mx-3">CBC <sup></sup></div>
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <!-- Nav Item - Dashboard -->
      <li class="nav-item active">
        <a class="nav-link" href="index.php">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Homepage</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Heading -->
      

      <!-- Nav Item - Pages Collapse Menu -->

      <!-- Nav Item - Utilities Collapse Menu -->
      <!-- Divider -->
   <div class="sidebar-heading">
        Main
      </div>
        
        <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages" aria-expanded="true" aria-controls="collapsePages">
          <i class="fas fa-fw fa-table"></i>
          <span>Tables</span>
        </a>
        <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            
            <h6 class="collapse-header">Front-end:</h6>
            <a class="collapse-item" href="forder.php">Order</a>
            <div class="collapse-divider"></div>
            <h6 class="collapse-header">Back-end:</h6>
            <a class="collapse-item" href="back-end.php">Order</a>
            <a class="collapse-item" href="customer.php">Customer</a>
            <a class="collapse-item" href="staff.php">Staff</a>
            <a class="collapse-item" href="ticket.php">Ticket</a>
            <a class="collapse-item" href="meal.php">Meal</a>
            <a class="collapse-item" href="price.php">Price</a>  
            <a class="collapse-item" href="bus.php">Bus</a>
            <a class="collapse-item" href="route.php">Route</a>  
          </div>
        </div>
      </li>

         <!-- Nav Item - Charts -->
      <li class="nav-item">
        <a class="nav-link" href="charts.php">
          <i class="fas fa-fw fa-chart-area"></i>
          <span>Charts</span></a>
      </li>
        
        <div class="sidebar-heading">
        Extra
      </div>
        
         <!-- Nav Item - Charts -->
      <li class="nav-item">
        <a class="nav-link" href="login.php">
          <i class="fas fa-fw fa-cog"></i>
          <span>Login</span></a>
      </li>
      


    </ul>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- Topbar -->
        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

          <!-- Sidebar Toggle (Topbar) -->
          <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
            <i class="fa fa-bars"></i>
          </button>

          <!-- Topbar Search -->
          <form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
            <div class="input-group">
              <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
              <div class="input-group-append">
                <button class="btn btn-primary" type="button">
                  <i class="fas fa-search fa-sm"></i>
                </button>
              </div>
            </div>
          </form>

          <!-- Topbar Navbar -->
          <ul class="navbar-nav ml-auto">

            <!-- Nav Item - Search Dropdown (Visible Only XS) -->
            <li class="nav-item dropdown no-arrow d-sm-none">
              <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-search fa-fw"></i>
              </a>
              <!-- Dropdown - Messages -->
            
            <!-- Nav Item - Alerts -->
           
              <!-- Dropdown - Alerts -->
              
            <!-- Nav Item - Messages -->
           
              <!-- Dropdown - Messages -->
             

            <!-- Nav Item - User Information -->
            
              <!-- Dropdown - User Information -->
              <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                <a class="dropdown-item" href="#">
                  <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                  Profile
                </a>
                <a class="dropdown-item" href="#">
                  <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                  Settings
                </a>
                <a class="dropdown-item" href="#">
                  <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                  Activity Log
                </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                  <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                  Logout
                </a>
              </div>
            </li>

          </ul>

        </nav>
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <h1 class="h3 mb-2 text-gray-800">Back-end</h1>

          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Back-end Tables</h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                      
<?php    

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
    $query  = "INSERT INTO back (id, c_id, s_id, b_id, t_id, m_id, star, end, date, cusidno, pay) "; 
    $query .= "VALUES ('$id', '$c_id', '$s_id', '$b_id', '$t_id', '$m_id', '$star', '$end', '$date', '$cusidno', '$pay') ";

    echo $query;

    $result = mysqli_query($connection, $query);
}

?>

<form action="ab.php" method="post">
The backend ID: <input type="int" name="id"> <br/>
   Customer ID: <input type="int" name="c_id"> <br/>
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

