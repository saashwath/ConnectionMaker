<html>
<head>
<title>EDIT CONTACT</title>
<link rel="icon" type="image/png" href="opb.png" />
<style>
body{background:black;
background-image: url("connect1.jpg");
background-repeat: no-repeat;
background-position: right top;
margin-right:400px;
background-attachment: fixed;
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
<?php session_start();?>
<center><div id="p"><b>EDIT CONTACT</b></div></center><br>
<?php
$conn=mysqli_connect('localhost','root','','phonebook') or die("UNABLE TO CONNECT");
$sql="SELECT fname FROM detail where uid=$_SESSION[id]";
$res=mysqli_query($conn,$sql);
if(mysqli_num_rows($res)>0)
{
while($row=mysqli_fetch_assoc($res))
{
echo "$row[fname] , ";
}
echo "<br><br>";
}
echo"<form action=edit1.php method=post>
Give the First Name of the contact to be edited : <input type=text name=n required /><br><br><br>
Change with,<br><br>
First Name<sup>*</sup> : <input type=text name=fn  required /><br><br>
Last Name : <input type=text name=ln  /><br><br>
Contact Number<sup>*</sup> : <input type=number name=pno required /><br><br>
Date Of Birth : <input type=text name=dob /><br><br>
E-mail<sup>*</sup> : <input type=email name=mail required /><br><br>
<input id=c type=reset value=CLEAR /><input id=c type=submit value=UPDATE /></form>
";
?>
</body>
</html>