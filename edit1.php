<html>
<head>
<title>EDIT CONTACT</title>
<link rel="icon" type="image/png" href="opb.png" />
<style>
body{background:black;
color:white;
font-family:lucida handwriting;
font-size:30px;
font-style:italic;}
</style>
</head>
<body>
<?php session_start();
$n=$_POST['n'];
$fn=$_POST['fn'];
$ln=$_POST['ln'];
$pno=$_POST['pno'];
$dob=$_POST['dob'];
$email=$_POST['mail'];
$conn=mysqli_connect('localhost','root','','phonebook') or die("unable to connect");
$sql="UPDATE detail SET fname='$fn',lname='$ln',pno='$pno',dob='$dob',email='$email' WHERE fname='$n'";
$res=mysqli_query($conn,$sql);
if($res>0)
{
echo "Record updated !";
header("refresh:1;url=http://localhost/saas/phonebook/details.php");
}

else
{
mysqli_error($res);
echo "NO records matching your query were found .<br>";
header("refresh:1;url=http://localhost/saas/phonebook/edit.php");
}
?>
</body>
</html>