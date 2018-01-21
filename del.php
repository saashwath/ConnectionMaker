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
input
{
padding:5px;  
background:white;
border:2px solid black;
border-radius:10px;
font-size:22px;
font style:italic;
height:35px;
width:250px;
}
#c
{
padding:5px; 
border:5px solid black; 
background:red;
border-radius:10px;
font-size:22px;
font style:italic;
height:50px;
width:200px;
}
#c:hover{background:white;border-color:white;}
#p{border:8px solid white;margin-right:300px;margin-left:300px;}
</style>
</head>
<body>
<?php session_start();
$conn=mysqli_connect('localhost','root','','phonebook')or die("UNABLE TO CONNECT");
$sql="SELECT fname FROM detail where uid=$_SESSION[id]";
$res=mysqli_query($conn,$sql);
if(mysqli_num_rows($res)>0)
{
while($row=mysqli_fetch_assoc($res))
{
echo "$row[fname] , ";
}
}
?>
<br>
<form action="del1.php" method=post><br>First Name of the contact to be deleted : <input type=text name=fn required />
<input id=c type=submit value=DELETE />
</form>
</body>
</html>