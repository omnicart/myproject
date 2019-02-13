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
	echo "<Script>alert('thank you to connect us')</script>";
}
else
	echo "not saved";	
}
?>