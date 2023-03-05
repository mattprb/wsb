<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h4>Lista </h4>
    <ul>
        <li>Poznań</li>
        <li>Września</li>
        <li>Konin</li>
        <li>Drawski Młyn</li>
        <li>Gniezno</li>
    </ul>
    <?php
    $city = "Jarocin";
    echo <<< LIST
    <ul>
        <li>Poznań</li>
        <li>Września</li>
        <li>Konin</li>
        <li>$city</li>
    </ul>
LIST;


    ?>
</body>
</html>