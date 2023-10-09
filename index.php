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
    <title>php</title>

    <!--bootstrap-css-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
</head>

<body class="p-5 bg-info">
    <form action="script.php" method="post">
        <div class="mb-3"> 
            <span>SCRIVI UN TESTO:</span>
            <input name="paragraph">
        </div>
        <div class="mb-3">
            <span>SCRIVI LA PAROLA DA CENSURARE:</span>
            <input name="badword">
        </div>
        <button class="bg-success text-white border-0">invia</button>
    </form>
</body>

</html>