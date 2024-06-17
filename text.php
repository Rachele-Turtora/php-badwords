<?php
    $text = $_GET["text"];
    $bad_word = $_GET["badword"];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p> <?php echo $text ?></p>
    <p> <?php echo $bad_word ?></p>
</body>
</html>