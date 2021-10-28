<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>หน้าแรก</title>
    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="node_modules/@fortawesome/fontawesome-free/css/all.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body class="login-background-blue">
    

<div class="flex-register-form">
        
        <h1 class="text-white mb-5">สมัครสมาชิก</h1>
        
        <form class="p-5 card register-card-custom" action="register_db.php" method="post">
            
            <!-- Email input -->
            <div class="form-outline mb-3">
                <label class="form-label" for="form1Example1">ชื่อ</label>
                <input type="text" name="firstname" id="form1Example1" class="form-control" />
            </div>
            <div class="form-outline mb-3">
                <label class="form-label" for="form1Example1">นามสกุล</label>
                <input type="text" name="lastname" id="form1Example1" class="form-control" />
            </div>
            <div class="form-outline mb-3">
                <label class="form-label" for="form1Example1">อีเมล์</label>
                <input type="email" name="email" id="form1Example1" class="form-control" />
            </div>
            <div class="form-outline mb-3">
                <label class="form-label" for="form1Example1">เบอร์ติดต่อ</label>
                <input type="text" name="phone" id="form1Example1" class="form-control" />
            </div>

            <!-- Password input -->
            <div class="form-outline mb-3">
                <label class="form-label" for="form1Example2">รหัสผ่าน</label>
                <input type="password" name="password" id="form1Example2" class="form-control" />
            </div>
            <div class="form-outline mb-3">
                <label class="form-label" for="form1Example2">ยืนยันรหัสผ่าน</label>
                <input type="password" name="confirm_password" id="form1Example2" class="form-control" />
            </div>

         
            
            <div class="row">
                <p class="text-center">เป็นสมาชิกอยู่แล้ว ? <a href="login.php">เข้าสู่ระบบ</a></p>
            </div>

            <!-- Submit button -->
            <button type="submit" class="btn register-btn-blue btn-block text-white" name="submit">สมัครสมาชิก</button>
        </form>
    </div>


    

    <script src="node_modules/jquery/dist/jquery.min.js"></script>
    <script src="node_modules/bootstrap/dist/js/bootstrap.bundle.js"></script>
    <script src="node_modules/sweetalert2/dist/sweetalert2.all.min.js"></script>
</body>

</html>