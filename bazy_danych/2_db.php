<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Użytkownicy</title>
</head>
<body>
<h4> Użytkownicy</h4>
<?php
    require_once "../scripts/connect2.php";
    $sql = "SELECT * FROM `users`;";
    $result = $conn->query($sql);
    while($user = $result->fetch_assoc()){
        echo $user ["firstName"];


    }
?>
</body>
</html>