<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Strong Password Generator</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <style>
        body {
            background-color: black;
        }

        h1,h3 {
            color: #FB2576;
        }

        label {
            color: #FB2576;
        }
    </style>
    
    <?php

        $charNumber = $_GET['charnumber'];

    ?>
</head>
<body>

    <!-- Title -->
    <div class="mx-auto my-5 w-50 text-center">
        <h1>Strong Password Generator</h1>
    </div>
    <!-- FORM -->
    <form class="mx-auto my-3 w-50 text-center">
        <label for="charnumber">Type your password length:</label>
        <input type="number" name="charnumber">
        <input type="submit" value="VALIDATE">
    </form>

    <?php
        function randomPswGen ($charNumber){
            $data = '1234567890ABCDEFGHIJKLMNOPQRSTUVWXYZabcefghijklmnopqrstuvwxyz./-_';
            return substr(str_shuffle($data), 0, $charNumber);
        }

        echo '<div class="mx-auto my-3 w-50 text-center">' 
        . '<h3>' 
        . 'Your new Password is:' . ' ' . randomPswGen($charNumber) 
        . '</h3>'
        . '</div>';

    ?>
</body>
</html>