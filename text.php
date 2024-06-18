<?php
$text = $_GET["text"];
$bad_word = $_GET["badword"];

$text_length1 = strlen($text);

$text2 = str_ireplace($bad_word, "***", $text);
$text_length2 = strlen($text2);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css">
    <title>Document</title>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="section">
                <div class="col-70">
                    <h2>Il tuo testo:</h2>
                    <p class="text"> <?php echo $text; ?></p>
                </div>
                <div class="col-30">
                    <p><strong>Lunghezza:</strong> <?php echo $text_length1; ?></p>
                </div>
            </div>

            <div class="section">
                <div class="col-70">
                    <h2>Il tuo testo censurato:</h2>
                    <p class="text"> <?php echo $text2; ?></p>
                </div>
                <div class="col-30">
                    <p><strong>Lunghezza:</strong> <?php echo $text_length2; ?></p>
                </div>
            </div>
        </div>
    </div>
</body>

</html>