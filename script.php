<?php

$paragraph = $_POST["paragraph"];

$badword = $_POST["badword"];

$new_paragraph = str_replace($badword, '***', $paragraph);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php badwords</title>
</head>

<body>
    <h3>Il paragrafo scritto è:</h3>
    <p>
        <?php echo $paragraph ?>
    </p>


    <h3>la parola censurata è:</h3>
    <span>
        <?php echo $badword ?>
    </span>


    <h3>il paragrafo senza la parola censurata:</h3>
    <p>
        <?php echo $new_paragraph ?>
    </p>

</body>

</html>