<?php

require_once('config/functions.php');
session_start();

if (isset($_POST['submit'])) {  // ตรวจสอบว่ามีการกดปุ่มเข้ามาหรือไม่ ถ้ามีทำการเก็บค่าข้อมูลที่กรอกเข้ามาไว้ในตัวแปร
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];
    $role = "user";

    $_SESSION['firstname'] = $firstname;    // เก็บข้อมูลเป็น session หากเรากรอกผิด จะให้ส่งตัวแปร session กลับไปใน input form เพื่อที่เราจะได้ไม่ต้องกรอกข้อมูลใหม่
    $_SESSION['lastname'] = $lastname;
    $_SESSION['email'] = $email;
    $_SESSION['phone'] = $phone;

    if (checkPassword($password, $confirm_password)) {  // ตรวจสอบว่ารหัสผ่านตรงกันหรือไม่
        if (isEmailExist($email)) {         // ตรวจสอบว่ามีอีเมล์นี้ในระบบหรือไม่
            $_SESSION['exist_email'] = "มีอีเมล์นี้ในระบบ";
            redirect("register.php");
        }
        else {
            if (createUser($firstname, $lastname, $email, $phone, $password, $role)) {  //ถ้าไม่มีอะไรผิดพลาดให้สร้างชื่อผู้ใช้ และเก็บสถานะการ login และ email ของผู้ใช้เอาไว้ใช้ต่อ
                $_SESSION['is_logged_in'] = true;   // เก็บสถานะ login
                $_SESSION['email_login'] = $email;  // เก็บ email
                redirect("index.php");
            }
            else {
                $_SESSION['err_create'] = "ไม่สามารถนำเข้าข้อมูลได้"; // กรณีที่ไม่สามารถสมัครสมาชิกได้ ให้เก็บข้อความ error ไว้ใน session
                redirect("register.php");
            }
        }
    }
    else {
        $_SESSION['err_pw'] = "รหัสผ่านไม่ตรงกัน";
        redirect("register.php");
    }
}