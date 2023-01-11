<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Strong Password Generator</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">

    <?php

        $charNumber = $_GET['charnumber'];

        var_dump($charNumber);
    ?>
</head>
<body>
    <!-- FORM -->
    <form>
        <label for="charnumber">Type your password length:</label>
        <input type="number" name="charnumber">
        <input type="submit" value="VALIDATE">
    </form>

    <?php
        function randomPswGen ($charNumber){
            $data = '1234567890ABCDEFGHIJKLMNOPQRSTUVWXYZabcefghijklmnopqrstuvwxyz./-_';
            return substr(str_shuffle($data), 0, $charNumber);
        }

        echo randomPswGen($charNumber);

        // var_dump(strlen(randomPswGen($charNumber)))
    ?>
</body>
</html>