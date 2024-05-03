<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Badwords</title>
    <style>
        body {
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        form {
            margin: 12px;
            text-align: right;
        }

        input {
            margin-bottom: 6px;
        }

        button {
            margin: 24px 50%;
        }
    </style>

</head>

<body>
    <h1>PHP Badwords</h1>
    <form action="./server.php" method="get">
        <label for="paragrafo">Inserisci un paragrafo</label>
        <input type="text" name="paragrafo" id="paragrafo">

        <br>

        <label for="censurata">Parola censurata</label>
        <input type="password" name="censurata" id="censurata">

        <br>

        <button class="btn" type="submit">invia</button>
    </form>
</body>

</html>