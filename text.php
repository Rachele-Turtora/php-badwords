<?php
    $text = $_GET["text"];
    $bad_word = $_GET["badword"];

    $text_length1 = strlen($text);

    $text2 = str_replace($bad_word, "***", $text);
    $text_length2 = strlen($text2);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Il tuo testo:</h2>
    <p> <?php echo $text ?></p>
    <p>Lunghezza: <?php echo $text_length1 ?></p>

    <h2>Il tuo testo censurato:</h2>
    <p> <?php echo $text2 ?></p>
    <p>Lunghezza: <?php echo $text_length2 ?></p>
</body>
</html>