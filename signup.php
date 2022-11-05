<?php

include "config.php";
if(isset($_POST['submit'])){
    $fullname = mysqli_real_escape_string($conn,$_POST['fullname']);
    $email = mysqli_real_escape_string($conn,$_POST['email']);
    $password = mysqli_real_escape_string($conn,md5($_POST['password']));
    $dob = $_POST['dateofbirth'];
    $gender = mysqli_real_escape_string($conn,$_POST['gender']);

    
    $sql = "INSERT INTO sign_up_form_data (Name, Email, Password, Dob, Gender)
    VALUES ('{$fullname}','{$email}','{$password}','{$dob}','{$gender}')";

    if( mysqli_query($conn, $sql)){
        header("Location: {$hostname}welcome.php");
    }
    else{
        header("Location: {$hostname}index.php");
    }
}
?>