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
						<h1><a href="index.html">Passengers</a></h1> 
					</div>
					<!-- Collect the nav links, forms, and other content for toggling -->
					<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
						<div class="w3menu navbar-right">
							<ul class="nav navbar">
								<li><a href="index.html">Home</a></li>
								<li><a href="about.html">About</a></li> 
								<li><a href="gallery.html">Gallery</a></li>
								<li><a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span data-letters="Pages">Pages</span><span class="caret"></span></a>
									<ul class="dropdown-menu"> 
										<li><a href="icons.html">Web Icons</a></li>
										<li><a href="codes.html">Short Codes</a></li>
									</ul>
								</li>  
								<li><a href="contact.html" class="active">Contact</a></li>
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
				<h3>Contact Us</h3>
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

         </select></div>
    
    <div class="form-group">
    <select id="type" name="destination" onchange="change_country(this.value)" class="frm-field required">

           <option value="null">--Select Destination Station--</option>         
            <option value="chengdu">Chengdu</option>

            <option value="kangding">Kangding</option>

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
						<p><i class="fa fa-map-marker"></i> Broome St, NY 10002, Canada. </p>
						<p><i class="fa fa-phone"></i> Telephone : +00 111 222 3333</p>
						<p><i class="fa fa-fax"></i> FAX : +1 888 888 4444</p>
						<p><i class="fa fa-envelope-o"></i> Email : <a href="mailto:example@mail.com">mail@example.com</a></p> 
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
	<div class="subscribe jarallax">
		<div class="container">
			<div class="agileits-title title2">
				<h3>Subscribe</h3>
			</div>   
			<p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur adipisci velit sed quia non numquam eius.</p>
			<form>
				<input type="email" name="email" placeholder="Email Address" class="user" required="">
				<input type="submit" value="Subscribe">
			</form>
			<p class="spam">We never share your information or use it to spam you</p>
		</div>
	</div>
	<!-- //subscribe -->
	<!-- features -->
	<div class="features">
		<div class="container">   
			<div class="wthree-features-row">
				<div class="col-md-6 features-w3grid">  
					<div class="features-row2"> 
						<div class="features-w3lleft">  
							<h4>New User</h4>
							<p>Register here to become a member</p>
						</div>
						<div class="features-w3lright">
							<a href="#" class="w3ls-login" data-toggle="modal" data-target="#myModal2">Register</a>
						</div>
						<div class="clearfix"> </div>
					</div>
				</div>
				<div class="col-md-6 features-w3grid">  
					<div class="features-row2"> 
						<div class="features-w3lleft">  
							<h4>Already a Member </h4>
							<p>Please sign in here</p>
						</div>
						<div class="features-w3lright">
							<a href="#" class="w3ls-login" data-toggle="modal" data-target="#myModal1">Login</a>
						</div>
						<div class="clearfix"> </div>
					</div> 
				</div> 
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
	<!-- //features -->
	<!-- login modal -->
	<div class="modal fade" id="myModal1" tabindex="-1" role="dialog" aria-labelledby="myModal1" aria-hidden="true">
		<div class="modal-dialog modal-lg">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true"> &times;</button>
					<img src="images/img5.png" class="img-responsive login-img" alt=""/>
					<h4 class="modal-title">Don't Wait, Login now!</h4>
				</div>
				<div class="modal-body modal-body-sub"> 
					<h3>Login to your account</h3>
					<div class="register">
						<form action="#" method="post">			
							<input name="Email" placeholder="Email Address" type="text" required="">						
							<input name="Password" placeholder="Password" type="password" required="">										
							<div class="sign-up">
								<input type="submit" value="Login"/>
							</div>
						</form>
					</div>  
				</div>
			</div>
		</div>
	</div> 
	<!-- //login modal -->	
	<!-- register modal -->
	<div class="modal fade" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="myModal2" aria-hidden="true">
		<div class="modal-dialog modal-lg">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true"> &times;</button>
					<img src="images/img5.png" class="img-responsive login-img" alt=""/>
					<h4 class="modal-title">Don't Wait, Register now!</h4>
				</div>
				<div class="modal-body modal-body-sub"> 
					<div class="modal_body_left modal_body_left1"> 
						<h3>Register to your account</h3>
						<div class="register">
							<form action="#" method="post">			
								<input placeholder="Name" name="Name" type="text" required="">
								<input placeholder="Email Address" name="Email" type="email" required="">	
								<input placeholder="Password" name="Password" type="password" required="">	
								<input placeholder="Confirm Password" name="Password" type="password" required="">
								<div class="sign-up">
									<input type="submit" value="Register"/>
								</div>
							</form>
						</div> 		 
					</div>  
				</div>
			</div>
		</div>
	</div> 
	<!-- //register modal -->	
	<!-- footer -->
	<div class="footer w3-w3layouts">
		<div class="container"> 
			<div class="footer-agileinfo">
				<div class="col-md-4 col-sm-4 footer-wthreegrid">
					<h3>About Me</h3> 
					<div class=" footerabt-w3text"> 
						<p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Morbi non nibh nec enim sollicitudin interdum. </p>
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
					<h3>Recent Posts</h3>
					<ul>
						<li><a href="#myModal" data-toggle="modal"><i class="fa fa-angle-right"></i>Vestibulum felis</a></li>
						<li><a href="#myModal" data-toggle="modal"><i class="fa fa-angle-right"></i>Mauris at tellus</a></li>
						<li><a href="#myModal" data-toggle="modal"><i class="fa fa-angle-right"></i>Donec ut lectus</a></li>
						<li><a href="#myModal" data-toggle="modal"><i class="fa fa-angle-right"></i>Vitae interdum</a></li>
					</ul>
				</div>
				<div class="col-md-4 col-sm-4 footer-wthreegrid footer-tags">
					<h3>Tag Cloud</h3>
					<ul>
						<li><a href="index.html">Home</a></li>
						<li><a href="about.html">About</a></li>
						<li><a href="codes.html">Codes</a></li>
						<li><a href="gallery.html">Gallery</a></li>
						<li><a href="contact.html">Contact Us</a></li>
					</ul>
				</div> 
				<div class="clearfix"> </div>
			</div>  
		</div>
	</div>
	<div class="copy-right"> 
		<div class="container">
			<p>Copyright &copy; 2017.Company name All rights reserved.<a target="_blank" href="http://sc.chinaz.com/moban/">&#x7F51;&#x9875;&#x6A21;&#x677F;</a></p>
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