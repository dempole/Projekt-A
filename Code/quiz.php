<?php
session_start();
include_once 'databaseconnect.php';

if(!isset($_SESSION['user']))
{
	header("Location: index.php");																			//Wenn nicht eingeloggt wird man wieder zur "index.php" geleitet
}
$res=mysql_query("SELECT * FROM users WHERE user_id=".$_SESSION['user']);
$userRow=mysql_fetch_array($res);
																											/*Obiger Code stellt sicher dass das Quiz nur von Personen durchgeführt werden kann, 
																												die sich vorher auf der Seite registriert haben.
																											*/

$rightAnswer = 0;																							//Zähler für richtige Antworten
$wrongAnswer = 0;																							//Zähler für falsche Antworten
 
require_once('header.html');																				//Läd einen Header
require_once('quiz_app.php');																				//Läd das eigentliche Quiz
 
if (isset($_POST['submit'])){																				//Nach abgabe der ANtworten wird geschaut ob diese richtig oder falsch sind
  foreach($_POST['response'] as $key => $value){
      if($correctAnswerArray[$key] == $value){
          $rightAnswer++;
      } else {
          $wrongAnswer++;
      }
  }
}  
?>
