<?php
//var_dump($_GET);
if(!empty($_GET["userIdDelete"])){
require_once "./connect2.php";
$sql = "DELETE FROM users WHERE `users`.`id` = $_GET[userIdDelete]";
//$sql = "DELETE FROM users WHERE `users`.`id` = 1";
$conn->query($sql);
    if ($conn->affected_rows ==0) {
        header ( "location: ../3_db.php?deleteUser=0");
    }
    else{
        header ( "location: ../3_db.php?deleteUser=$_GET[userIdDelete]");
    }



}
