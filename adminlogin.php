<!-- PHP SESSION STARTS HERE -->
<?php
session_start();
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
</head>
<body style="background:silver">
	<div class="container">
		<div class="row" style="margin-top:160px">
			<div class="col-md-4 col-md-offset-4">
				<div class="panel panel-primary">
					<div class="panel-heading">
						<h4 class="panel-title text-center"><i class="glyphicon glyphicon-log-in"></i> Login!</h4>
					</div>
					<div class="panel-body">
						<form class="form-horizontal" method="post" id="form1">
								<div class="input-group">
									<span class="input-group-addon">UserName! <i class="fa fa-user"></i></span>
									<input type="text" class="form-control" name="uname" required>
								</div><br>
								<div class="input-group">
									<span class="input-group-addon">Password! <i class="glyphicon glyphicon-lock"></i></span>
									<input type="password" class="form-control"  name="password" required>
								</div>
							</form>
					</div>
					<div class="panel-footer text-center">
						<input type="submit" class="btn btn-success" name="login" value="login!" form="form1"></input>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>
</html>
<?php
$con=mysql_connect("localhost","root","") or die(mysql_error());
$db=mysql_select_db("brand") or die(mysql_error());

if(isset($_POST['login']))
{
$admin_name=$_SESSION['uname']=$_POST['uname'];
$admin_pwd=$_POST['password'];

$que="SELECT * FROM `login` WHERE uname='$admin_name' AND pwd='$admin_pwd'";

$run=mysql_query($que) or  die(mysql_error());

if(mysql_num_rows($run)>0)
{
echo "<script>window.open('view.php','_self')</script>";
}
else
{
echo "<script>alert('PLEASE USE THE ANOTHER PASSWORD ')</script>";
}
}

?>