<?php
// get values passes from form in login.php file
$username=$_POST['user'];
$password=$_POST['pass'];


// connect to the server and select database
mysql_connect('localhost','root','');
mysql_select_db('loging');
// query the database for user
$result=mysql_query(
	"select * from users where username='$username'
	 and password ='$password' ") or die("failed to query database");
$row=mysql_fetch_array($result);
if($row['username'] === $username && $row['password'] === $password){
	echo "login success!! welcome" .$row['username'];
}else{
	echo "failed to login";
}




?>