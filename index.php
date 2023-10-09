<!-- 
Descrizione:
Creare un form PHP che permetta di inviare due campi: un paragrafo ed una parola da censurare.
Gestire il tutto con due file diversi.
index.php
script.php

Il primo file dovrà permettere all’utente di inserire i dati e inviare la richiesta al server tramite il form 
(occhio a quato detto stamattina sui form e gli attributi necessari).

Il secondo file riceverà la richiesta ed eseguirà queste operazioni:
stampare a schermo il paragrafo e la sua lunghezza
stampare di nuovo il paragrafo e la sua lunghezza, dopo aver sostituito con tre asterischi (***) tutte le occorrenze della parola da censurare
-->

<?php
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>badwords</title>
</head>
<body>
    <form action="script.php" method="POST">
        <div>
            <span>SCRIVI UN TESTO:</span>
            <input type="text" name="paragraph" id="paragraph">
        </div>
        <div>
            <span>SCRIVI LA PAROLA DA CENSURARE:</span>
            <input type="text" name="badword" id="badword">
        </div>
        <button>invia</button>
    </form>
</body>
</html>