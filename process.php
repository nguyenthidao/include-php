<?php
if($_SERVER['REQUEST_METHOD'] == "POST"){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];

    $flag = true;

    if(empty($name)){
        $nameErr = "Khong duoc de trong ten";
        $flag = false;
    }
    if(empty($email)){
        $emailErr = "Khong duoc de trong email";
        $flag = false;
    }
    if(empty($phone)){
        $phone = "khong duoc de trong phone";
        $flag = false;
    }
}
?>