<?php
    include 'functions.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP - Strong Password Generator 💪🏻</title>
</head>
<body>

    <form action="index.php" method="get">
        <label for="pw_length">Lunghezza password:</label>
        <input type="text" name="pw_length">
        <button type="submit">Invia</button>
    </form>

    <p><?php echo getPassword() ?></p>
</body>
</html>


