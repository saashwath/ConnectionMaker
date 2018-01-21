<?php session_start();?>
<html>
<head>
<title><?php echo $_SESSION['username'];?></title>
<link rel="icon" type="image/png" href="opb.png" />
<style>
body{background-color:black;color:white;font-family:lucida handwriting;font-size:30px;font-style:italic;align:center}
div{font-family:calibri;font-size:20px}
.head{background:white;color:black;border:8px solid white;border-left:20px solid red;align:center;font-family:lucida handwriting;font-size:60px;}
#c
{
padding:5px; 
border:8px solid white; 
background:white;
border-radius:10px;
font-size:17px;
height:50px;
width:150px;
}
#d
{ 
border:8px solid red; 
background:red;
border-radius:10px;
font-size:12px;
height:40px;
width:140px;
}
#d:hover{background:white;border:white;}
#e
{ 
border:3px solid white; 
background:white;
border-radius:20px;
font-size:13px;
height:30px;
width:100px;
}
div{overflow-x:auto;font-family:lucida handwriting;}
table
{
width:100%;
border:3px solid red;
border-spacing:6px;
}
th,td
{
text-align:center;
padding:8px;
vertical-align:center;
height:60px;
}
th
{
background:green;
color:white;
}
td
{
background:white;
color:black;
}
tr:hover td{height:70px;font-size:17px;background:red;}
</style>
</head>
<body>
<p align=center class="head">Connection Maker</p>
<?php
if(isset($_SESSION['username']))
echo "Welcome " . $_SESSION['username']." !<br>";
?>
<div align=right><script>document.write(Date());</script></div>
<form action=logout.php><p align=right><input id=c type=submit value="LOG OUT" /></p></form>
<?php
$conn=mysqli_connect('localhost','root','','phonebook') or die("UNABLE TO CONNECT");
$sql="SELECT * FROM detail where uid=$_SESSION[id] ORDER BY fname";
$result=mysqli_query($conn,$sql);
if(mysqli_num_rows($result)>0)
{
echo "<div><table><tr><th>FIRST NAME<th>LAST NAME<th>CONTACT NUMBER<th>DATE OF BIRTH<th>EMAIL</tr>";
while($row=mysqli_fetch_assoc($result))
{
echo "<tr><td>$row[fname]<td>$row[lname]<td>$row[pno]<td>$row[dob]<td>$row[email]</tr>";

}
echo "</table></div>";
}
?>
<a href=edit.php><button id=d>EDIT CONTACT</button></a>
<a href=del.php><button id=d>DELETE CONTACT</button></a>
<a href=add.html><div align=right><button id=d>ADD CONTACT</button></div></a>
</body>
</html>
