<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Użytkownicy</title>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
<h4> Użytkownicy</h4>
<table>
    <tr>
        <th>Imie</th>
        <th>Nazwisko</th>
        <th>Data urodzenia</th>
        <th>Miasto</th>
        <th>Województwo</th>
        <th>Państwo</th>
    </tr>

    <?php
    require_once "../scripts/connect2.php";
    $sql = "SELECT users.`firstName`, users.`lastName`, users.`birthday`, cities.`city`, states.`state`, countries.`country_name`
    FROM users 
        LEFT JOIN cities ON users.`city_id` = cities.`id` 
        LEFT JOIN states ON cities.`state_id` = states.`id` 
        LEFT JOIN countries ON countries.`id` = states.`country_id`;";
    $result = $conn->query($sql);
    while($user = $result->fetch_assoc()){ //heardog
        echo <<< TABLEUSERS
            <tr>
                <td>$user[firstName]</td>
                <td>$user[lastName]</td>
                <td>$user[birthday]</td>
                <td>$user[city]</td>
                <td>$user[state]</td>
                <td>$user[country_name]</td>
                <td><a href="../scripts/delete_user.php">Usuń</td>
            </tr>
TABLEUSERS;
    }
    echo "</table>";
    ?>
</body>
</html>