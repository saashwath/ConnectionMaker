<html>
<head>
<title>FORGOT password</title>
<link rel="icon" type="image/png" href="opb.png" />
<style>
body{background-color:black;color:white;font-family:lucida handwriting;font-size:30px;font-style:italic;align:center}
</style>
<body>
<?php
$pass=sha1($_POST['p']);
$conn=mysqli_connect('localhost','root','','phonebook') or die("UNABLE TO CONNECT");
$gett="SELECT uname FROM user WHERE pass='$pass'";
$sql = "UPDATE user SET pass='$pass'";
if (mysqli_query($conn, $sql))
{
echo "Record updated successfully";
header("Refresh:1;url=http://localhost/saas/phonebook/index.html");
}
else
{
echo "Error updating record: " . mysqli_error($conn);
header("Refresh:2;url=http://localhost/saas/phonebook/forgot.html");
}
?>
</body>
</html>
