
<?php 
$connect=mysql_connect("localhost","root","");
if(!$connect)
{
	die('Connection Failed:'.mysql_error());
}
mysql_select_db("kimoto",$connect);
$user_info="INSERT INTO name (Name,Age)VALUES('$_POST[Name]','$_POST[Age]')";
if(!mysql_query($user_info,$connect))
{
	die('Error:'.mysql_error());
}
echo"Yor informatoin was added to the database.";
mysql_close($connect);
?>
