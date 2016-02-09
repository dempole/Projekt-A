<?php
include('header.html');
?>

<!-- Formular zur eingabe von neuen Fragen-->
<div class="row">
    <div class="col-md-offset-2 col-md-8">
        <h1>Add Quiz</h1>
        <form action="process_addque.php" method="post">
            <div class="form-group">
                <label for="frage">Deine Frage</label>
                <input type="text" class="form-control" id="frage" name="frage" placeholder="Deine Frage kommt hier hin">
            </div>
            <div class="form-group">
                <label for="richtige_antwort">Richtige Antwort</label>
                <input type="text" class="form-control" id="richtige_antwort" name="richtige_antwort" placeholder="Die richtige antwort kommt hier hin">
            </div>
            <div class="form-group">
                <label for="falsche_antwort1">1. falsche Antwort</label>
                <input type="text" class="form-control" id="falsche_antwort1" name="falsche_antwort1" placeholder="Eine falsche Antwort kommt hier hin(1)">
            </div>
            <div class="form-group">
                <label class="sr-only" for="falsche_antwort2">2. falsche Antwort</label>
                <input type="text" class="form-control" id="falsche_antwort2" name="falsche_antwort2" placeholder="Eine falsche Antwort kommt hier hin(2)">
            </div>
            <div class="form-group">
                <label class="sr-only" for="falsche_antwort3">3. falsche Antwort</label>
                <input type="text" class="form-control" id="falsche_antwort3" name="falsche_antwort3" placeholder="Eine falsche Antwort kommt hier hin(3)">
            </div>
            <button type="submit" class="btn btn-primary btn-large" value="submit" name="submit">Frage Hinzuf&uuml;gen</button>
 
        </form>
    </div>
     </div>
	 
	 
<?php 
include('footer.html') 
?>

<!--
=== Feedback Alpers, feb 9 ===

Leider ist das HTML4.01.

=== Feedback Alpers, Ende ===
-->