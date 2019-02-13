<?php
session_start();
if(!$_SESSION['uname'])
{
	header("location:adminlogin.php");
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
</style>
</head>
<body>
	<div class="container">
		<div class="row" id="col1">
			<div class="col-md-8 col-md-offset-2">
				<table class="table table-bordered">
					<tr class="danger">
						<th colspan="5" class="text-center" style="color:green"><h4><strong>View Contacts Here!<i class="glyphicon glyphicon-book"></i></strong></h4></th>
					</tr>
					<tr class="text-center" style="color:red;text-shadow:1px 2px 5px green">
						<td>ID:<i class="fa fa-id-badge"></i></td>
						<td>NAME:<i class="glyphicon glyphicon-user"></i></td>
						<td>EMAIL:<i class="glyphicon glyphicon-envelope"></i></td>
						<td>COMMENT:<i class="glyphicon glyphicon-comment"></i></td>
						<td>DELETE:<i class="glyphicon glyphicon-trash"></i></td>
					</tr>
					
<?php
	$con=mysql_connect("localhost","root","") or die(mysql_error());
	$db=mysql_select_db("brand") or die(mysql_error());
	$que1="SELECT * FROM `brand`";
	$run=mysql_query($que1) or die(mysql_query());

	while($row=mysql_fetch_array($run))
	{
	$a=$row['id'];
	$b=$row['name'];
	$c=$row['email'];
	$d=$row['comment'];
?>
					<tr class="text-center">
						<td><?php echo $a; ?></td>
						<td><?php echo $b; ?></td>
						<td><?php echo $c; ?></td>
						<td><?php echo $d; ?></td>
						<td><a href="delete.php?del=<?php echo $a; ?>" class="btn btn-link">Delete</a></td>
					</tr>
					<?php }?>
				</table>
			</div>
		</div>
	</div>
</body>
</html>
  
  