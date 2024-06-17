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
            <h1>Censura il tuo testo</h1>
            <form action="text.php" method="GET">
                <textarea name="text"></textarea>
                <div class="input-container">
                    <label for="badword">Censura: </label>
                    <input type="text" name="badword" placeholder="Scrivi una parola" id="badword">
                </div>
                <button type="submit">Invia</button>
            </form>
        </div>
    </div>
</body>
</html>