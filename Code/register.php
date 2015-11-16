<?php
session_start();																															/*Der Browser speichert alle Handlungen in einer Session,
																																				damit man sich nicht jedes mal nach wechsel der Seite wieder einloggen muss! */
if(isset($_SESSION['user'])!="")
{
	header("Location: quiz.php");																											//Kopf der Seite "quiz.php" wird geladen(Benutzer ist angemeldet)
}
include_once 'databaseconnect.php';																											//Verbinden mit der Datenbank
if(isset($_POST['btn-signup']))																												//Wird ausgeführ wenn der Registrieren Knopf betätigt wird
{
	$uname = mysql_real_escape_string($_POST['uname']);																						//Benutzername
	$email = mysql_real_escape_string($_POST['email']);																						//Email
	$upass = md5(mysql_real_escape_string($_POST['pass']));																					//Passwort
	
	if(mysql_query("INSERT INTO users(username,email,password) VALUES('$uname','$email','$upass')"))										//Übermittlung der Nutzerdaten an die Datenbank, {if} wenn es keine Probleme gab, {else} wenn es Probleme gab.
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