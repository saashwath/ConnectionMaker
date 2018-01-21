<html>
<head>
<title>LOG IN</title>
<link rel="icon" type="image/png" href="opb.png" />
<style>
body{background-color:black;color:white;font-family:lucida handwriting;font-size:30px;font-style:italic;}
</style>
</head>
<body>
<?php
$name=$_POST['name'];
$p=sha1($_POST['pass']);
$conn=mysqli_connect('localhost','root','','phonebook') or die("UNABLE TO CONNECT");
$sql="SELECT * FROM user WHERE uname='$name' AND pass='$p'";
$result=mysqli_query($conn,$sql);
if(mysqli_num_rows($result)>0)
{
$row=mysqli_fetch_assoc($result);
session_start();
$sqll="select id from user where uname='$name' and pass='$p'";
$res=mysqli_query($conn,$sqll);
$roww=mysqli_fetch_array($res,MYSQLI_ASSOC);
$cou=mysqli_num_rows($res);
if($cou==1)
{
	$_SESSION['id']=$row['id'];
}
$_SESSION['username'] = $name;
$_SESSION['pass'] = $p;
header("location:details.php");	
}
/*while($row = mysqli_fetch_assoc($result))
{
if(($row["uname"]==$name)&($row["pass"]==$p))
{
header("location:details.php");
}
else $c--;
}*/
else
{
echo("\nEnter the user name and password correctly.\n");
header("Refresh:1;url=http://localhost/saas/phonebook/index.html");
}
?>
</body>
</html>