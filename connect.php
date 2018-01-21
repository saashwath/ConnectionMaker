<html>
<head>
<title>CONNECT</title>
<link rel="icon" type="image/png" href="opb.png" />
<style>
body{background-color:black;color:white;font-family:lucida handwriting;font-size:30px;font-style:italic;}
</style>
</head>
<body>
<?php
$mail=$_POST['mail'];
$uname=$_POST['uname'];
$pass=sha1($_POST['pass']);
$pass1=sha1($_POST['pass1']);
$ques=$_POST['ques'];
$ans=$_POST['ans'];

$conn=mysqli_connect('localhost','root','','phonebook') or die("UNABLE TO CONNECT");
$sql="SELECT uname FROM user";
$result=mysqli_query($conn,$sql);
$c=0;
if(mysqli_num_rows($result)>0)
{
while($row=mysqli_fetch_assoc($result))
{
$c++;
if($row["uname"]==$uname)
{
break;
}
else $c--;
}
}
if($pass==$pass1)
{
if($c<=0)
{
if(mysqli_query($conn,"INSERT INTO user (mail,uname,pass,ques,ans) VALUES('$mail','$uname','$pass','$ques','$ans')"))
{
echo"Account created !<br>Now you can log in<br>";
mysqli_close($conn);
header("refresh:1;url=http://localhost/saas/phonebook/index.html");
}
else echo "Error creating table: " . mysqli_error($con);
}
else
{
echo("\nPlease enter another user name.This user name already exists.\n");
header("refresh:2.5;url=http://localhost/saas/phonebook/signup.html");
}
}
else
{
echo("\nRenter the password correctly\n");
header("Refresh:1;url=http://localhost/saas/phonebook/signup.html");
}
?>
</body>
</html>