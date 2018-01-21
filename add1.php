<html>
<head>
<title>ADD CONTACT</title>
<link rel="icon" type="image/png" href="opb.png" />
<style>
body{background:black;color:white;font-family:lucida handwriting;font-size:30px;font-style:italic;}
</style>
</head>
<body>
<?php session_start();
extract($_POST);
$conn=mysqli_connect('localhost','root','','phonebook') or die("UNABLE TO CONNECT");
$sql=mysqli_query($conn,"INSERT INTO  detail(uid,fname,lname,pno,dob,email) VALUES('$_SESSION[id]','$_POST[fn]','$_POST[ln]','$_POST[pno]','$_POST[dob]','$_POST[mail]')");
if($sql)
{
echo "Contact added successfully !";
header("refresh:1;url=http://localhost/saas/phonebook/details.php");
}
else
{
mysql_error($sql);
echo "Contact not added!<br>Please enter the details";
header("refresh:2;url=http://localhost/saas/phonebook/add.php");
}
?>
</body>
</html>