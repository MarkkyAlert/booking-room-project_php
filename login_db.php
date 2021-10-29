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
                $_SESSION['email_login'] = $email;
                echo '
                    <script>
                    setTimeout(function() {
                        swal({
                            title: "เข้าสู่ระบบสำเร็จ",
                            text: "คุณได้เข้าสู่ระบบ",
                            type: "success"
                        }, function() {
                            window.location = "index.php";
                        })
                    }, 1000);
                    </script>
                ';
            } else if (readRoleUser($email) == 'admin') {
                $_SESSION['email_login'] = $email;
                echo '
                    <script>
                    setTimeout(function() {
                        swal({
                            title: "เข้าสู่ระบบสำเร็จ",
                            text: "คุณได้เข้าสู่ระบบ",
                            type: "success"
                        }, function() {
                            window.location = "admin/index.php";
                        })
                        
                    }, 1000);
                    </script>
                ';
            } else if (readRoleUser($email) == 'employee') {
                $_SESSION['email_login'] = $email;
                echo '
                    <script>
                    setTimeout(function() {
                        swal({
                            title: "เข้าสู่ระบบสำเร็จ",
                            text: "คุณได้เข้าสู่ระบบ",
                            type: "success"
                        }, function() {
                            window.location = "index.php";
                        })
                    }, 1000);
                    </script>
                ';
            }

            $_SESSION['is_logged_in'] = true;   // เก็บสถานะ login
        } else {
            $_SESSION['wrong_pw'] = "รหัสผ่านไม่ถูกต้อง";
            redirect("login.php");
        }
    } else {
        $_SESSION['no_email'] = "ไม่มีอีเมล์นี้ในระบบ";
        redirect("login.php");
    }
}
?>
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert-dev.min.js" integrity="sha512-t89+ZHqiI+cJO2EZ1zy846TMzc7K0VH22insNeb32hMoVymAMd0aYeLzmNF4WuRLDUXPVo6dzbZ1zI7MBWlqlQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.css" integrity="sha512-gOQQLjHRpD3/SEOtalVq50iDn4opLVup2TF8c4QPI3/NmUPNZOk2FG0ihi8oCU/qYEsw4P6nuEZT2lAG0UNYaw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
