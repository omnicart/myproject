<?php
$con=mysql_connect("localhost","root","") or die(mysql_error());
$db=mysql_select_db("brand") or die(mysql_error());

$delete_record=$_GET['del'];

$que="DELETE FROM `brand` WHERE id='$delete_record'";

if(mysql_query($que))
{
	echo "<script>window.open('view.php','_self')</script>";
}
else
{
	echo "<h1>not deleted</h1>";
}
?>
