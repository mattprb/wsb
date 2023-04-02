<?php
//print_r($_POST);
foreach ($_POST as $key => $value){
    //echo "$key: $value<br>";
    if (empty($value)){
        //echo "$key<br>";
        //echo "error<br>";
        echo "<script>history.back();</script>";
        exit();
    }
}

require_once "./connect2.php";
$sql = "INSERT INTO `users` (`id`, `city_id`, `firstName`, `lastName`, `birthday`) VALUES (NULL, '$_POST[city_id]', '$_POST[firstName]', '$_POST[lastName]', '$_POST[birthday]');";
$conn->query($sql);

