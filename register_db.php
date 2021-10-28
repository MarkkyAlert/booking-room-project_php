<?php

require_once('config/functions.php');
session_start();

if (isset($_POST['submit'])) {
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];
    $role = "user";

    if (checkPassword($password, $confirm_password)) {
        if (isEmailExist($email)) {
            $_SESSION['exist_email'] = "มีอีเมล์นี้ในระบบ";
            redirect("register.php");
        }
        else {
            if (createUser($firstname, $lastname, $email, $phone, $password, $role)) {
                redirect("index.php");
            }
            else {
                $_SESSION['err_create'] = "ไม่สามารถนำเข้าข้อมูลได้";
                redirect("register.php");
            }
        }
    }
    else {
        $_SESSION['err_pw'] = "รหัสผ่านไม่ตรงกัน";
        redirect("register.php");
    }
}