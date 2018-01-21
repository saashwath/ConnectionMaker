<html>
<head>
<title>DELETE CONTACT</title>
<link rel="icon" type="image/png" href="opb.png" />
<style>
body{background:black;
color:white;
font-family:lucida handwriting;
font-size:30px;
font-style:italic;}
</style>
<?php
session_start();
$fn=$_POST['fn'];
$conn=mysqli_connect('localhost','root','','phonebook') or die("unable to connect");
$sql="DELETE FROM detail WHERE fname='$fn' and uid=$_SESSION[id]";
$res=mysqli_query($conn,$sql);
if($res>0)
{
	echo"Contact deleted !";
	header("refresh:1;url=http://localhost/saas/phonebook/details.php");
}
else
{
	echo "Contact not deleted !<br>Please try again .<br>";
	header("refresh:1;url=http://localhost/saas/phonebook/del.php");
}
?>