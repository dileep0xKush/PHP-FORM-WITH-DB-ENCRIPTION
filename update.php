<?php

include 'db.php';

if (isset($_POST['submit'])) {
    $id = $_POST['id'];
    // var_dump($id);
    $email = $_POST['email'];
    $password = $_POST['password'];
    $sql = "UPDATE `data` SET `email` = '$email', `password` = '$password' WHERE `data`.`id` = $id";
    $result = mysqli_query($con, $sql);
    if ($result) {
        header("Location:table.php");
        exit;
    }
}
