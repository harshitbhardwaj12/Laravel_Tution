<?php

session_start ();

$user = @$_SESSION['username'];

if ($user)
{
//user is logged in
if (@$_POST['submit'])
{
//check fields
$oldpassword =md5(@$_POST['oldpassword']);
$newpassword = md5(@$_POST['newpassword']);
$repeatnewpassword =md5(@$_POST['repeatnewpassword']);
//check password against db

//connect to db
$connect = mysql_connect ("localhost","root","") or die();
mysql_select_db("tester")or die();

$queryget = mysql_query ("SELECT password FROM dropdown WHERE username='$user'")or die ("Query didnt work");
$row = mysql_fetch_assoc($queryget);

$oldpassworddb = $row ['password'];


//check passwords
if($oldpassword==$oldpassworddb)
{
//check the new password
if ($newpassword==$repeatnewpassword)
{
//succes
//change password in db
$querychange = mysql_query ("
UPTADE dropdown SET password='$password' WHERE username='$user'
");
session_destroy();
die ("Your password has been changed.<a href='index.php'>Return </a>to the main page");

}
else 
 die ("New password dont match!");
}
else 
 die("Old password doesnt match!");
}
else
{
echo("
<form action ='changepassword.php' method='POST'>
 Old password: <input type ='text' name ='oldpassword'><p>
 New password: <input type='password' name='newpassword'><br>
 Repeat new password <input type='password' name='repeatnewpassword'><p>
 <input type='submit' name='submit' value='Change password'>
</form>
");
}

}
else
   die ("You must be logged in to change your password");
?>