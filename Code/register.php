<?php
session_start();
if(isset($_SESSION['user'])!="")
{
	header("Location: index.php");
}
include_once 'databaseconnect.php';

if(isset($_POST['btn-signup']))
{
	$uname = mysql_real_escape_string($_POST['uname']);
	$email = mysql_real_escape_string($_POST['email']);
	$upass = md5(mysql_real_escape_string($_POST['pass']));
	
	if(mysql_query("INSERT INTO users(username,email,password) VALUES('$uname','$email','$upass')"))
	{
		?>
        <script>alert('Erfolgreich registriert ');</script>
        <?php
	}
	else
	{
		?>
        <script>alert('Es gab einen Fehler bei der Registrierung...');</script>
        <?php
	}
}
?>