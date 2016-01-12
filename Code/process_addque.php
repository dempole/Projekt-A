<?php
include('header.html');

if(empty($_POST['frage']) ||
	(empty($_POST['richtige_antwort'])	||
	(empty($_POST['falsche_antwort1'])	||
	(empty($_POST['falsche_antwort2'])	||
	(empty($_POST['falsche_antwort3'])	
	{
		echo "Bitte alle felder ausfüllen";
		exit();
	}
	
//variablen erstellen
$frage = $_POST['frage'];
$richtige_antwort = $_POST['richtige_antwort'];
$falsche_antwort1 = $_POST['falsche_antwort1'];
$falsche_antwort2 = $_POST['falsche_antwort2'];
$falsche_antwort3 = $_POST['falsche_antwort3'];

//Mit der DB verbinden
require_once('includes/db_conn.php');
 
//Eingabeaufforderung erstellen
$query = "INSERT INTO questions
			-- (questionid, name, choice1, choice2, choice3, answer)
			 VALUES (NULL, '".$frage."','".$falsche_antwort1."','".$falsche_antwort2."','".$falsche_antwort3."','".$richtige_antwort."')";
 
$result = $dbc->query($query);
 
if($result){
    echo "Dein Quiz wurde gespeichert";
} else {
    echo '<h1>System Error</h1>';
}
$dbc->close();

include('footer.html');
?>