<?php

$paragraph = $_POST["paragraph"];
$paragraph_length = strlen($paragraph);

$badword = $_POST["badword"];

$new_paragraph = str_replace($badword, '***', $paragraph);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php badwords</title>

    <!--bootstrap-css-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
</head>

<body class="p-5 bg-info">
    <h5>Il paragrafo scritto è:</h5>
    <p>
        <?php echo $paragraph ?>
    </p>
    <span>
        IL PRAGRAFO E' LUNGO:
        <?php echo $paragraph_length ?>
        LETTERE
    </span>


    <h5 class="mt-5">la parola censurata è:</h5>
    <span>
        <?php echo $badword ?>
    </span>


    <h5 class="mt-5">il paragrafo senza la parola censurata:</h5>
    <p>
        <?php echo $new_paragraph ?>
    </p>

    <a class="mt-5" href="index.php"><button class="bg-warning px-3">back</button></a>

</body>

</html>