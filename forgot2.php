<html>
<head>
<title>FORGOT password</title>
<style>
body{background-color:black;color:white;font-family:lucida handwriting;font-size:30px;font-style:italic;align:center}
</style>
</head>
<body>
<?php
$ans=$_POST['ans'];
$conn=mysqli_connect('localhost','root','','phonebook');
$sql="SELECT uname,ques,ans FROM user";
$result=mysqli_query($conn,$sql);
$c=0;
if(mysqli_num_rows($result)>0)
{$c++;
while($row=mysqli_fetch_assoc($result))
{
if($row["ans"]==$ans)
{
mysqli_close($conn);
header("location:forgot3.html");
}
else $c--;
}
}
if($c<=0)
{
echo("\nEnter everything properly and correctly.\n");
header("Refresh:1;url=http://localhost/saas/project/forgot.html");
}
?>
</body>
</html>