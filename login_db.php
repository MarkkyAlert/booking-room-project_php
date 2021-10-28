<?php
include('config/functions.php');
session_start();

if (isset($_POST['submit'])) {  // ตรวจสอบว่ามีการกดปุ่มเข้ามาหรือไม่ ถ้ามีทำการเก็บค่าข้อมูลที่กรอกเข้ามาไว้ในตัวแปร
    $email = $_POST['email'];
    $password = $_POST['password'];

    $_SESSION['email'] = $email;    // เก็บข้อมูลเป็น session หากเรากรอกผิด จะให้ส่งตัวแปร session กลับไปใน input form เพื่อที่เราจะได้ไม่ต้องกรอกข้อมูลใหม่

    if (isEmailExist($email)) {     // ตรวจสอบว่ามีอีเมล์นี้ในระบบหรือไม่

        if (verifyPassword($password, $email)) {    // ตรวจสอบว่ารหัสผ่านที่กรอกเข้ามาตรงกับรหัสผ่านในระบบหรือไม่
            
            if (readRoleUser($email) == 'user') {   // ตรวจสอบว่าบทบาทของผู้ใช้งานคืออะไร เช่น ผู้ดูแลระบบ พนักงาน หรือ ผู้ใช้ทั่วไป และเก็บสถานะ login ของผู้ใช้ 
                $_SESSION['email'] = $email;
                redirect("index.php");
            }
            else if (readRoleUser($email) == 'admin') {
                $_SESSION['email'] = $email;
                redirect("index2.php");
            }
            else if (readRoleUser($email) == 'employee') {
                $_SESSION['email'] = $email;
                redirect("index3.php");
            }

            $_SESSION['is_logged_in'] = true;   // เก็บสถานะ login
        }
        else {
            $_SESSION['wrong_pw'] = "รหัสผ่านไม่ถูกต้อง";
            redirect("login.php");
        }
    }
    else {
        $_SESSION['no_email'] = "ไม่มีอีเมล์นี้ในระบบ";
        redirect("login.php");
    }
}
