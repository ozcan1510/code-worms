
<html>
<head>
<title>blood</title>

</head>
<body bgcolor="blue">

<center >
<h3>Blood management system</h3>

<form action="index.php" method="post">
  Name:  &nbsp &nbsp &nbsp &nbsp &nbsp <input type="text" name="name"/></br></br>
  Age:  &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp <input type="text" name="age"/></br></br>
 Blood group:   &nbsp <input  type="text" name="bloodgroup"/></br></br>
Address: &nbsp &nbsp &nbsp &nbsp <input  type="text" name="address"/></br></br>
    <button class="button"type="submit" name="submit" value="submit">Submit</button>
 
 </form>
 </center>
 
<?php 

if (isset($_POST['submit']))
{
$name= $_POST['name'];
$age= $_POST['age'];
$bloodgroup=$_POST['bloodgroup'];
$address= $_POST['address'];



$link = mysql_connect("localhost","root","");
mysql_select_db("blood",$link) /*or die('error1')*/;

if(mysql_query("insert into blood_record(name,age,bloodgroup,address) values('$name','$age','$bloodgroup','$address')"))
{

echo "<h3 align= 'center'>successfully inserted</h3>";
}


}
?>

</body>
</html>