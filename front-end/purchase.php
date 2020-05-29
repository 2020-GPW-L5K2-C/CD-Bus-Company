<?php

// 1. Open database connection
require('includes/db.php');

$connection = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

// Test if connection is ok
if (mysqli_connect_errno()) {
    die("Database connection failed: " .
        mysqli_connect_error() .
        " (" . mysqli_connect_errno() . ")" 
    );
}

if ($_POST['submit']) {
    $name = $_POST['name'];
    $idno = $_POST['idno'];
    $phone = $_POST['phone'];
    $start = $_POST['start'];
    $destination = $_POST['destination'];
    $date = $_POST['date'];
    $meal = $_POST['meal'];
    $ttype = $_POST['ttype'];
    $pay = $_POST['pay'];


    // 2. Do a query
    $query  = "INSERT INTO forder (name, idno, phone, start, destination, date, meal, ttype, pay ) "; 
    $query .= "VALUES ('$name', '$idno', '$phone', '$start', '$destination', '$date', '$meal', '$ttype',  '$pay') ";
    
    //echo $query;

    $result = mysqli_query($connection, $query);
    
    //header('Location: statables.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
<title>Contact</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- Custom Theme files -->
<link href="css/bootstrap.css" type="text/css" rel="stylesheet" media="all">
<link href="css/style.css" type="text/css" rel="stylesheet" media="all">  
<link href="css/font-awesome.css" rel="stylesheet">		<!-- font-awesome icons -->  
<!-- //Custom Theme files -->  
<!-- web-fonts -->   
<link href="http://fonts.googleapis.com/css?family=Oswald:200,300,400,500,600,700" rel="stylesheet">
<link href="http://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i" rel="stylesheet">
<!-- //web-fonts -->
</head>
<body>  
	<!-- banner -->
	<div class="agileits-banner">
		<div class="bnr-agileinfo"> 
			<!-- navigation -->
			<div class="top-nav w3-agiletop">
				<div class="container">
					<div class="navbar-header w3llogo">
						<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>  
						<h1><a href="index.html">CBC</a></h1> 
					</div>
					<!-- Collect the nav links, forms, and other content for toggling -->
					<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
						<div class="w3menu navbar-right">
							<ul class="nav navbar">
								<li><a href="index.html">Home</a></li>
								<li><a href="about.html" >About</a></li> 
								 
								<li><a href="purchase.php" class="active">Ticket Purchase</a></li>
                                
                            <li><a href="back-end/login.php">Login</a></li>
							</ul>
						</div> 
						<div class="clearfix"> </div>  
					</div>
				</div>	
			</div>	
			<!-- //navigation -->
			<!-- banner-text -->
			<div class="banner-text agileinfo about-bnrtext"> 
				<div class="container">
					<h2><a href="index.html">Home</a> / Contact</h2> 
				</div>
			</div>
			<!-- //banner-text -->   
		</div>
	</div>
	<!-- //banner --> 
	<!-- contact -->
	<div class="contact agileits">
		<div class="container">  
			<div class="agileits-title">
				<h3>Ticket Purchase</h3>
			</div>  
			<div class="contact-agileinfo">
				<div class="col-md-7 contact-form wthree">
					
    <form action="purchase.php" method="post">
           
    <div class="form-group">
    <input type="text" name="name" class="form-control" placeholder="name"> </div>

    <div class="form-group">
    <input type="text" name="idno" class="form-control" placeholder="ID"> </div>

    <div class="form-group">
    <input type="text" name="phone" class="form-control" placeholder="Phone"> </div>
    
    <div class="form-group">
    <input type="date" name="date" class="form-control" placeholder="date"> </div>
    
    <div class="form-group">
    <select id="type" name="start" onchange="change_country(this.value)" class="frm-field required">

            <option value="null">--Select Starting Station--</option>         
            <option value="chengdu">Chengdu</option>

            <option value="kangding">Kangding</option>
        
            <option value="guangan">Guangan</option>

            <option value="yaan">Yaan</option>
         
            <option value="neijiang">Neijiang</option>

            <option value="deyang">Deyang</option>
          
            <option value="zigong">Zigong</option>

            <option value="luzhou">Luzhou</option>

            <option value="meishan">Meishan</option>

            <option value="nanchong">Nanchong</option>
          
            <option value="yibin">Yibin</option>

            <option value="dujiangyan">Dujiangyan</option>
        
         </select></div>
    
    <div class="form-group">
    <select id="type" name="destination" onchange="change_country(this.value)" class="frm-field required">

           <option value="null">--Select Destination Station--</option>         
            <option value="chengdu">Chengdu</option>

            <option value="kangding">Kangding</option>

            <option value="guangan">Guangan</option>

            <option value="yaan">Yaan</option>
         
            <option value="neijiang">Neijiang</option>

            <option value="deyang">Deyang</option>
          
            <option value="zigong">Zigong</option>

            <option value="luzhou">Luzhou</option>

            <option value="meishan">Meishan</option>

            <option value="nanchong">Nanchong</option>
          
            <option value="yibin">Yibin</option>

            <option value="dujiangyan">Dujiangyan</option>
        
         </select></div>
    
    <div class="form-group">
    <select id="type" name="meal" onchange="change_country(this.value)" class="frm-field required">

            <option value="null">--Select Meal--</option>   
        
            <option value="bread">Bread</option>

            <option value="chinese set meal">Chinese set meal</option>

            <option value="Western set meal">Western set meal</option>

         </select></div>
    
    <div class="form-group">
    <select id="type" name="ttype" onchange="change_country(this.value)" class="frm-field required">

            <option value="null">--Select Ticket Type--</option>         
            <option value="economy">Economy</option>

            <option value="Business">Business</option>

         </select></div>
    
 <div class="form-group">
    <select id="type" name="pay" onchange="change_country(this.value)" class="frm-field required">

            <option value="null">--Select Payment Way--</option>         
            <option value="cash">Cash</option>

            <option value="bank card">Bank card</option>
        
            <option value="alipay">Alipay</option>
        
            <option value="wechat">WeChat</option>

         </select></div>
    
                        
    <input type="submit" value="Submit" name="submit" class="btn btn-primary">
					
                </form>
                    
				</div>
				<div class="col-md-4 contact-right wthree">
					<div class="contact-text w3-agileits">
						<h4>GET IN TOUCH :</h4>
						<p><i class="fa fa-map-marker"></i> Erxian bridge, Chengdu City, Sichuan</p>
						<p><i class="fa fa-phone"></i> Telephone : +00 111 222 3333</p>
						
						<p><i class="fa fa-envelope-o"></i> Email : <a href="mailto:chengdubus@mail.com">chengdubus@mail.com</a></p>
					</div> 
				</div> 
				<div class="clearfix"> </div>	
			</div>
		</div>
	</div>
	<!-- //contact -->  
	<!-- map -->

	<!-- //map -->   
	<!-- subscribe -->

	<!-- //subscribe -->
	<!-- features -->
	
	<!-- //features -->
	<!-- login modal -->
	
	<!-- //login modal -->	
	<!-- register modal -->
	
	<!-- //register modal -->	
	<!-- footer -->
	<div class="footer w3-w3layouts">
		<div class="container"> 
			<div class="footer-agileinfo">
				<div class="col-md-4 col-sm-4 footer-wthreegrid">
					<h3>About Us</h3> 
					<div class=" footerabt-w3text"> 
						<p>Chengdu Bus Company provides customers with a quality experience of buying tickets online. </p>
						<div class="social-w3licon">
							<a href="#" class="social-button twitter"><i class="fa fa-twitter"></i></a>
							<a href="#" class="social-button facebook"><i class="fa fa-facebook"></i></a> 
							<a href="#" class="social-button google"><i class="fa fa-google-plus"></i></a> 
							<a href="#" class="social-button dribbble"><i class="fa fa-dribbble"></i></a> 
						</div>  
					</div>
                    
					<div class="clearfix"> </div>
				</div>
				<div class="col-md-4 col-sm-4 footer-wthreegrid">
					<h3>Contact Us</h3>
					<ul>
						<p><i class="fa fa-map-marker"></i> Erxian bridge, Chengdu City, Sichuan</p><br/>
						<p><i class="fa fa-phone"></i> Telephone : +00 111 222 3333</p><br/>
						
						<p><i class="fa fa-envelope-o"></i> Email : <a href="mailto:chengdubus@mail.com">chengdubus@mail.com</a></p><br/> 
					</ul>
				</div>
				<div class="col-md-4 col-sm-4 footer-wthreegrid footer-tags">
					<h3>Tag Cloud</h3>
					<ul>
						<li><a href="index.html">Home</a></li>
						<li><a href="about.html">About</a></li>
						<li><a href="purchase.php">Purchase Ticket</a></li>
					</ul>
				</div> 
				<div class="clearfix"> </div>
			</div>  
		</div>
	</div>
	<!-- //footer -->   
	<!-- footer modal -->
	<div class="modal about-modal w3-agileits fade" id="myModal" tabindex="-1" role="dialog">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>						
				</div> 
				<div class="modal-body">
					<img src="images/img1.jpg" class="img-responsive" alt=""> 
					<h5>Cras rutrum iaculis enim</h5>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras rutrum iaculis enim, non convallis felis mattis at. Donec fringilla lacus eu pretium rutrum. Cras aliquet congue ullamcorper. Etiam mattis eros eu ullamcorper volutpat. Proin ut dui a urna efficitur varius. uisque molestie cursus mi et congue consectetur adipiscing elit cras rutrum iaculis enim, Lorem ipsum dolor sit amet, non convallis felis mattis at. Maecenas sodales tortor ac ligula ultrices dictum et quis urna. Etiam pulvinar metus neque, eget porttitor massa vulputate. </p>
				</div> 
			</div>
		</div>
	</div>
	<!-- //footer modal -->   
	<!-- js --> 
	<script src="js/jquery-2.2.3.min.js"></script> 
	<script src="js/SmoothScroll.min.js"></script>
	<script src="js/jarallax.js"></script> 
	<script type="text/javascript">
		/* init Jarallax */
		$('.jarallax').jarallax({
			speed: 0.5,
			imgWidth: 1366,
			imgHeight: 768
		})
	</script>  
	<!-- //js -->  
	<!-- start-smooth-scrolling --> 
	<script type="text/javascript" src="js/move-top.js"></script>
	<script type="text/javascript" src="js/easing.js"></script>	
	<script type="text/javascript">
			jQuery(document).ready(function($) {
				$(".scroll").click(function(event){		
					event.preventDefault();
			
			$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
				});
			});
	</script>
	<!-- //end-smooth-scrolling -->	 
	<!-- smooth-scrolling-of-move-up -->
	<script type="text/javascript">
		$(document).ready(function() {
			/*
			var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear' 
			};
			*/
			
			$().UItoTop({ easingType: 'easeOutQuart' });
			
		});
	</script>
	<!-- //smooth-scrolling-of-move-up -->  
	<!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="js/bootstrap.js"></script>
</body>
</html>