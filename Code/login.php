<?php
session_start();
include_once 'databaseconnect.php';

if(isset($_SESSION['user'])!="")
{
	header("Location: quiz.php");
}

if(isset($_POST['btn-login']))																									//Folgendes passiert nach betätigen des "LogIn" Buttons
{
	$email = mysql_real_escape_string($_POST['email']);																			//Email wird eingelesen
	$upass = mysql_real_escape_string($_POST['pass']);																			//Passwort wird eingelesen
	$res=mysql_query("SELECT * FROM users WHERE email='$email'");																//Email uind Passwort werden mit der Datenbank abgeglichen
	$row=mysql_fetch_array($res);
	
	if($row['password']==md5($upass))																							//Sollten die Zugangsdaten stimmen wird man zum Quiz geleitet
	{
		$_SESSION['user'] = $row['user_id'];
		header("Location: quiz.php");
	}	
	else																														//Sollten die Zugangsdaten falsch sein wird ein fehler ausgeben
	{
		?>
        <script>alert('Falsche Zugangsdaten');</script>
        <?php
	}
	
}
?>