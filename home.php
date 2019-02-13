<?php
$con=mysql_connect("localhost","root","") or die(mysql_error());
$db=mysql_select_db("brand") or die(mysql_error());
if(isset($_POST["submit"]))
{
$a= $_POST["Name"];
$b= $_POST["Email"];
$c= $_POST["Comment"];
$que="INSERT INTO `brand`(`name`, `email`, `comment`) VALUES ('$a','$b','$c')";
if(mysql_query($que))
{
	echo "<Script>window.open('adminlogin.php','_self')</script>";
}
else
	echo "not saved";	
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>bootstrap tutorial</title>
<meta charset="utf-8">
<link rel="stylesheet" href="../bootstrap/animate.css">

 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
 <link rel="stylesheet" href="../bootstrap/css/lightbox.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script src="../bootstrap/js/lightbox.js"></script>
  <style type="text/css">
    body
	{
	font: 400 15px/1.8 Lato, sans-serif;
    color: #777;
	}
	.navbar
	{
	margin-bottom:0;
	font-family:Montserrat, sans-serif;
	background-color:#2d2d30;
	border:0;
	border-radius:0px;
	font-size:11px;
	letter-spacing:4px;
	opacity:0.9;
	}
 navbar li a, .navbar .navbar-brand
 { 
color:#d5d5d5;
}
.navbar-default .navbar-nav>li>a
{
color:#d5d5d5;
}
.navbar-default .navbar-nav>li>a:hover
{
color: #fff;
}
.navbar-default .navbar-toggle
{
border-color:transparent;
}
.dropdown
{
color:#fff;
}
.dropdown-menu>li>a
{
 color: #000;
}
.dropdown-menu>li>a:hover
{
background-color:red;
}
.navbar-default .navbar-nav>.active>a
{
 color: #fff !important;
  background-color: #29292c !important;
}
 .carousel-inner img {
      -webkit-filter: grayscale(90%);
      filter: grayscale(90%); /* make all photos black and white */ 
      width: 100%; /* Set width to 100% */
      margin: auto;
  }
  .carousel-caption h3 {
      color: #fff !important;
	  animation-name:animate;
	  animation-duration:5s;
	  animation-delay:2s;
	animation-iteration-count:5s;
	 -webkit-animation-duration:3s;
	 -webkit-animation-delay:5s;
	 -webkit-animation-iteration-count:5s;
  }
 h3, h4 {
      margin: 10px 0 30px 0;
      letter-spacing: 10px;      
      font-size: 20px;
      color: #111;
  }
 .container {
      padding: 80px 120px;
  }
  .person {
      border: 10px solid transparent;
      margin-bottom: 25px;
      width: 80%;
      height: 80%;
      opacity: 0.7;
	 margin-left:35px;
  }
  .person:hover {
      border-color: #f1f1f1;
  }
 .bg-1 {
      background: #2d2d30;
      color: #bdbdbd;
  }
  .bg-1 h3 {color: #fff;}
  .bg-1 p {font-style: italic;}
	.list-group-item:last-child
	{
	border-bottom-right-radius: 0px;
	border-bottom-left-radius: 0px;
	}
	 .list-group-item:first-child {
      border-top-right-radius: 0;
      border-top-left-radius: 0;
  }
  .thumbnail {
      padding: 0 0 15px 0;
      border: none;
      border-radius: 0;
  }
   .thumbnail p {
      margin-top: 15px;
      color: #555;
  }
   .thumbnail>img
  {
  margin-right:0px;
  margin-left:0px;
  }
  .btn
  {
  padding:10px 20px;
  background-color: #333;
  color: #f1f1f1;
  border-radius:0px;
   transition: .2s;
  }
  .btn:hover,.btn:focus
  {
  border:1px solid #333;
  background-color: #fff;
  color: #000;
  }
  .row
  {
  margin-left:120px;
  margin-right:120px;
  }
  .modal-header,h4,.close
  {
  text-align:center;
  color: #fff !important;
  background-color: #333;
   font-size: 30px;
  }
  .modal-header,.modal-body
  {
  padding:40px 50px;
  }
  .form-control
  {
  border-radius:0;
  }
  .col-md-6
  {
 width:50%;
  }
   textarea {
      resize: none;
  }
  .person
  {
	  
	  height:255px!important;
	  width:255px!important;
	      padding: 0 12px;
		  margin-left: 7px
  }
  </style>
  <script type="text/javascript">
 $(document).ready(function(){
 $("#img,#img1,#img2").mouseenter(function(){
	$(this).fadeTo(2000,0.2);
 });
 $("#img,#img1,#img2").mouseleave(function(){
	$(this).fadeTo(2000,1);
 });
 $('.carousel-caption').click(function(){
	 $(this).addClass('animated bounceOut');
 });	
  lightbox.option({
      'resizeDuration': 800,
      'wrapAround': true,
	  'showImageNumberLabel':false
    })
 });

 </script>

 <body data-spy="scroll" data-target=".navbar" data-offset="50">
	<nav class="navbar navbar-default navbar-fixed-top" href="#myPage">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#mycollapse">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
					<a class="navbar-brand"  href="#myPage">Logo</a>
			</div>
			<div class="collapse navbar-collapse" id="mycollapse">
				<ul class="nav navbar-nav navbar-right">
					<li class="active"><a href="#mycarousel">HOME</a></li>
					<li><a href="#band">BAND</a></li>
					<li><a href="#tour">TOUR</a></li>
					<li><a href="#contact">CONTACT</a></li>
					<li class="dropdown"><a href="#" data-toggle="dropdown" class="dropdown-toggle">MORE<span class="caret"></span></a>
						<ul class="dropdown-menu">
							<li><a href="javascript:void(0)">Merchandise</a></li>
							<li><a href="javascript:void(0)">Extras</a></li>
							<li><a href="javascript:void(0)">Media</a></li> 
						</ul>
					<li><a href=""><span class="glyphicon glyphicon-search"></span></a></li>
					</li>
				</ul>
			</div>
		</div>	
	</nav>
	
	<!-- Carousel Starts Here -->
	<div class="carousel slide" id="mycarousel" data-ride="carousel" >
		<ol class="carousel-indicators">
			<li data-target="#mycarousel" data-slide-to="0" class="active"></li>
			<li data-target="#mycarousel" data-slide-to="1"></li>
			<li data-target="#mycarousel" data-slide-to="2"></li>
		</ol>
		<div class="carousel-inner">
			<div class="item active">
				<img src="../bootstrap/image/1.png" width="100%">
				<div class="carousel-caption animated infinite bounceOut">
				  <h3>Mumbai</h3>
				  <p>Thank you, Chicago - A night we won't forget.</p>
				</div>
			</div>
			<div class="item">
				<img src="../bootstrap/image/2.png" width="100%">
				<div class="carousel-caption animated infinite bounceOut">
				  <h3>Banglore</h3>
				  <p>Thank you, Chicago - A night we won't forget.</p>
				</div>
			</div>
			<div class="item">
				<img src="../bootstrap/image/3.png" width="100%">
				<div class="carousel-caption animated infinite bounceOut ">
				  <h3>Delhi</h3>
				  <p>Thank you, Chicago - A night we won't forget.</p>
				</div>
			</div>
		</div>
	
	<!-- Left and Right Controller -->
	<a class="left carousel-control" data-slide="prev" href="#mycarousel">
		<span class="glyphicon glyphicon-chevron-left"></span>
		<span class="sr-only">previous</span>
	</a>
	<a class="right carousel-control" data-slide="next" href="#mycarousel">
		<span class="glyphicon glyphicon-chevron-right"></span>
		<span class="sr-only">previous</span>
	</a>
	</div>
	
	<div class="container text-center" id="band">
		 <h3>THE BAND</h3>
		<p><em>We love music!</em></p>
		<p>We have created a fictional band website. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
		<br>
	 <div class="row">
		<div class="col-md-4">
			<p class="text-center" style="padding-left:10px"><strong>Name</strong></p>
			<a  href="#demo" data-toggle="collapse">
				<img src="../bootstrap/image/01.png"  class="img-circle  person">
			</a>
			<div id="demo" class="collapse">
				<p>Drummer</p>
				<p>Loves drummin'</p>
				<p>Member since 1988</p>
			</div>
		</div>
		<div class="col-md-4">
			<p class="text-center"><strong>Name</strong></p>
				<a href="#demo2" data-toggle="collapse">
					<img src="../bootstrap/image/03 2.png"  class="img-circle person">
				</a>
				<div id="demo2" class="collapse">
				<p>Drummer</p>
				<p>Loves drummin'</p>
				<p>Member since 1988</p>
			</div>
		</div>
		<div class="col-md-4">
			<p class="text-center"><strong>Name</strong></p>
				<a href="#demo3" data-toggle="collapse">
					<img src="../bootstrap/image/04 2.png"  class="img-circle person">
				</a>
				<div id="demo3" class="collapse">
				<p>Drummer</p>
				<p>Loves drummin'</p>
				<p>Member since 1988</p>
			</div>
		</div>
	 </div>
	</div>
	
	<!-- Container -->
	<div id="tour" class="bg-1">
		<div class="container">
			<h3 class="text-center">Tour Dates</h3>
			<p class="text-center">Lorem ipsum we'll play you some music.<br> Remember to book your tickets!</p>
			<ul class="list-group">
				<li class="list-group-item">September<label class="label label-danger">SoldOut!</label></li>
				<li class="list-group-item">October <span class="label label-danger">Sold Out!</span></li>
				<li class="list-group-item">November<span class="badge">3</span></li>
			</ul>
		</div>
		
		<!-- Text Starts Here -->
		<div class="row text-center">
			<div class="col-md-4">
				<div class="thumbnail">
					<a href="../bootstrap/image/05 2.png" data-lightbox="roadtrip">
					<img src="../bootstrap/image/05 2.png" width="100%" height="300" id="img">
					</a>
					 <p><strong>Delhi</strong></p>
					<p>Friday 27 November 2017</p>
					<button class="btn" data-toggle="modal" data-target="#myModal">BooK!</button>
				</div>
			</div>
				<div class="col-md-4">
					<div class="thumbnail">
						<a href="../bootstrap/image/03 2.png" data-lightbox="roadtrip">
						<img src="../bootstrap/image/03 2.png" alt="New York" width="100%" height="300" id="img1">
						</a>
						<p><strong>Mumbai</strong></p>
						<p>Saturday 28 November 201</p>
						<button class="btn" data-toggle="modal" data-target="#myModal">Book!</button>
					</div>
				</div>
				
				<div class="col-md-4">
					<div class="thumbnail">
						<a href="../bootstrap/image/08 2.png" data-lightbox="roadtrip">
						<img src="../bootstrap/image/08 2.png" alt="New York" width="100%" height="300" id="img2">
						</a>
						<p><strong>Banglore</strong></p>
						<p>Saturday 28 November 2017</p>
						<button class="btn" data-toggle="modal" data-target="#myModal">Book!</button>
					</div>
				</div>
			</div>
			
			<!-- Modal -->
			<div class="modal fade" id="myModal">
				<div class="modal-dialog">
					<div class="modal-content">
						<div class="modal-header">
							<a href="#" class="close" data-dismiss="modal">&times;</a>
							<h4><span class="fa fa-hospital-o"></span>Appointment</h4>
						</div>
						<div class="modal-body">
							<form>
								<div class="form-group">
									<label class="control-label"><span class="fa fa-user-md"></span> Book Appointment</label>
									<input type="text" class="form-control" placeholder="Patient Name?">
								</div>
								 <div class="form-group">
									<label for="usrname"><span class="glyphicon glyphicon-user"></span> Send To</label>
									<input type="text" class="form-control" id="usrname" placeholder="Enter email">
								</div>
								<button type="submit" class="btn btn-block">Book <span class="fa fa-refresh fa-spin"></span></button>
							</form>
						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-danger pull-left" data-dismiss="modal">Cancel</button>
							<p>Need<a href="#"> help?</a></p>
						</div>
					</div>
				</div>
			</div>
	</div>
			
			<!-- Contact Section -->
		<div id="contact" class="container">
			<h3 class="text-center">Contact</h3>
			<p class="text-center"><em>We love our fans!</em></p>
			
			<div class="row">
				<div class="col-md-4">
					<p>Fan?Drop a note.</p>
					<p><span class="glyphicon glyphicon-map-marker"></span>Mumbai,INDIA</p>
					<p><span class="glyphicon glyphicon-phone"></span>Phone:8898488279</p>
					<p><span class="glyphicon glyphicon-envelope"></span>Email:mail@mail.com</p>
				</div>
				<form method="post" action="">
				<div class="col-md-8">
					<div class="col-sm-6 form-group">
						<input type="text" class="form-control required" id="Name" name="Name" placeholder="Name" required>
					</div>
					<div class="col-sm-6 form-group">
						<input type="text" class="form-control required" id="Email" name="Email" placeholder="Email" required>
					</div>
					<div class="col-md-12 form-group">
						<textarea class="form-control required" id="Comment" name="Comment" placeholder="Comment" rows="5" required></textarea>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12" style="padding-left:540px;">
						<button class="btn pull-right"  name="submit" id="send" >Send</button>
					</div>
				</div>
			</div>
			</form>
		</div>
		<br>
		<h3 class="text-center">From The Blog</h3>
		<div class="col-md-4 col-md-offset-4">
			<ul class="nav nav-tabs">
				<li class="active"><a href="#mike" data-toggle="tab">Mike</a></li>
				<li><a href="#john" data-toggle="tab">John</a></li>
				<li><a href="#ruther" data-toggle="tab">Ruthers</a></li>
			</ul>
			
			<div class="tab-content">
				<div class="tab-pane  fade in active" id="mike">
					 <h2>Mike Ross, Manager</h2>
					<p>Man, we've been on the road for some time now. Looking forward to lorem ipsum.</p>
				</div>
				<div class="tab-pane fade" id="john">
					 <h2>Mike Ross, Manager</h2>
					<p>Man, we've been on the road for some time now. Looking forward to lorem ipsum.</p>
				</div>
				<div class="tab-pane fade" id="ruther">
					 <h2>Ajinkya Pawar Mumbai</h2>
					<p>Man, we've been on the road for some time now. Looking forward to lorem ipsum.</p>
				</div>
			</div>
		</div>
		<br>
		<br>
		<br>
		<br>
		<br>
		<!-- Google map -->
		<div class="container-fluid" style="padding-left:0px;padding-right:0px;">
			<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d60326.597147465705!2d72.9042309659037!3d19.08955924237667!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7c7bc7c814b5d%3A0x6ad25b348f9b9dc6!2sVikhroli+East%2C+Mumbai%2C+Maharashtra!5e0!3m2!1sen!2sin!4v1488815670917" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
		</div>
		<footer class="text-center">
			<a href="#myPage" data-toggle="tooltip" class="up-arrow" title="TO TOP">
			<span class="glyphicon glyphicon-chevron-up"></span>
			</a>
		</footer>
		
 </body>
 
 </html>