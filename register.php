<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>สมัครสมาชิก</title>
    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="node_modules/@fortawesome/fontawesome-free/css/all.min.css">
    <link rel="stylesheet" href="assets/css/styles.css">
</head>

<body class="login-background-blue">

    <div class="flex-register-form">

        <h1 class="text-white mb-5">สมัครสมาชิก</h1>
        
        <!-- แจ้งเตือนหากมีข้อผิดพาด -->
        <?php if (isset($_SESSION['err_create'])) : ?>
            <div class="alert alert-danger alert-custom" role="alert">
                <strong><?php echo $_SESSION['err_create']; ?></strong>
            </div>
        <?php endif; ?>
        <?php if (isset($_SESSION['err_pw'])) : ?>
            <div class="alert alert-danger alert-custom" role="alert">
                <strong><?php echo $_SESSION['err_pw']; ?></strong>
            </div>
        <?php endif; ?>
        <?php if (isset($_SESSION['exist_email'])) : ?>
            <div class="alert alert-danger alert-custom" role="alert">
                <strong><?php echo $_SESSION['exist_email']; ?></strong>
            </div>
        <?php endif; ?>

        <form class="p-5 card register-card-custom" action="register_db.php" method="post">

            <div class="form-outline mb-3">
                <label class="form-label" for="form1Example1">ชื่อ</label>
                <input type="text" name="firstname" id="form1Example1" class="form-control" value="<?php if(isset($_SESSION['firstname'])) {echo $_SESSION['firstname'];} ?>" required />
            </div>

            <div class="form-outline mb-3">
                <label class="form-label" for="form1Example1">นามสกุล</label>
                <input type="text" name="lastname" id="form1Example1" class="form-control" value="<?php if(isset($_SESSION['lastname'])) {echo $_SESSION['lastname'];} ?>" required />
            </div>

            <div class="form-outline mb-3">
                <label class="form-label" for="form1Example1">อีเมล์</label>
                <input type="email" name="email" id="form1Example1" class="form-control" value="<?php if(isset($_SESSION['email'])) {echo $_SESSION['email'];} ?>" required />
            </div>

            <div class="form-outline mb-3">
                <label class="form-label" for="form1Example1">เบอร์ติดต่อ</label>
                <input type="text" name="phone" id="form1Example1" class="form-control" value="<?php if(isset($_SESSION['phone'])) {echo $_SESSION['phone'];} ?>" required />
            </div>

            <div class="form-outline mb-3">
                <label class="form-label" for="form1Example2">รหัสผ่าน</label>
                <input type="password" name="password" id="form1Example2" class="form-control" required />
            </div>

            <div class="form-outline mb-3">
                <label class="form-label" for="form1Example2">ยืนยันรหัสผ่าน</label>
                <input type="password" name="confirm_password" id="form1Example2" class="form-control" required />
            </div>

            <div class="row">
                <p class="text-center">เป็นสมาชิกอยู่แล้ว ? <a href="login.php">เข้าสู่ระบบ</a></p>
            </div>

            <button type="submit" class="btn register-btn-blue btn-block text-white" name="submit">สมัครสมาชิก</button>

        </form>
    </div>

    <script src="node_modules/jquery/dist/jquery.min.js"></script>
    <script src="node_modules/bootstrap/dist/js/bootstrap.bundle.js"></script>
    <script src="node_modules/sweetalert2/dist/sweetalert2.all.min.js"></script>

</body>

</html>

<?php
if (isset($_SESSION['err_create']) || isset($_SESSION['err_pw']) || isset($_SESSION['exist_email']) || isset($_SESSION['firstname']) || isset($_SESSION['lastname']) || isset($_SESSION['email']) || isset($_SESSION['phone'])){
    unset($_SESSION['err_create']);
    unset($_SESSION['err_pw']);
    unset($_SESSION['exist_email']);
    unset($_SESSION['firstname']);
    unset($_SESSION['lastname']);
    unset($_SESSION['email']);
    unset($_SESSION['phone']);
}
?>