<?php
    
    $charNumber = $_GET['charnumber'];

    function randomPswGen ($charNumber){
        $data = '1234567890ABCDEFGHIJKLMNOPQRSTUVWXYZabcefghijklmnopqrstuvwxyz.-_';
        return substr(str_shuffle($data), 0, $charNumber);
    }
