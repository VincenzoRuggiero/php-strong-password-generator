<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Functions</title>
</head>
<body>

<?php 
    function getPassword(){
        $length = intval($_GET['pw_length']);
        $chars = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890@#!?%&';
        for($i = 0; $i < $length; $i++){
            $randomPw = substr(str_shuffle($chars), 0, $length);
        }
        return $randomPw;
    }
?>
</body>
</html>