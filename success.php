<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New Password Created</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <style>
        body {
            background-color: black;
        }

        h3 {
            color: black;
        }

        label {
            color: #FB2576;
        }

        div {
            background-color: #FB2576;
        }
    </style>

    <?php
        
        session_start();

        $newPsw = $_SESSION['newPsw'];
    ?>
</head>
<body>
    <h1>
        <?php

            echo '<div class="mx-auto my-5 w-50 text-center rounded-end p-4">' 
            . '<h3>' 
            . 'Your new Password is:' . ' ' . $newPsw 
            . '</h3>'
            . '</div>';
        ?>
    </h1>
</body>
</html>