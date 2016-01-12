<?php
//Mit der DB verbinden und fragen abrufen
require_once('includes/databaseconnect.php');
 
//Eine Abfrage(Query) erstellen um alle Fragen abzugreifen
$query = "select * from questions";
 
//Abfrage ausführen
$query_result = $dbc->query($query);
 
//Fragen aus der DB zählen
$num_questions_returned = $query_result->num_rows;
 
if ($num_questions_returned < 1){
    echo "There is no question in the database";
    exit();}
 
//Ein Array erstellen welches alle Fragen aufnimmt
$questionsArray = array();
 
//Alle Fragen aus dem Query ins Array übertragen
while ($row = $query_result->fetch_assoc()){
    $questionsArray[] = $row;
}
 
//Array mit den richtigen antworten erstellen
$correctAnswerArray = array();
foreach($questionsArray as  $question){
    $correctAnswerArray[$question['questionid']] = $question['answer'];
}
 
//Fragen Array bilden aus der "Fragen-Abfrage"
$questions = array();
foreach($questionsArray as $question) {
    $questions[$question['questionid']] = $question['name'];
 }
 
//Antworten Array bilden aus "Auswahl-Abfrage"
$choices = array();
foreach ($questionsArray as $row) {
    $choices[$row['questionid']] = array($row['choice1'], $row['choice2'], $row['choice3'], $row['answer']);
  }											
?>
