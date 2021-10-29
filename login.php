<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>เข้าสู่ระบบ</title>
  <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="node_modules/@fortawesome/fontawesome-free/css/all.min.css">
  <link rel="stylesheet" href="assets/css/styles.css">
  <link rel="shortcut icon" type="img/png" href="assets/img/logo.png">
</head>

<body class="login-background-blue">

  <div class="flex-login-form">

    <h1 class="text-white mb-5">เข้าสู่ระบบ</h1>

    <?php if (isset($_SESSION['wrong_pw'])) : ?>
      <div class="alert alert-danger alert-custom" role="alert">
        <strong><?php echo $_SESSION['wrong_pw']; ?></strong>
      </div>
    <?php endif; ?>
    <?php if (isset($_SESSION['no_email'])) : ?>
      <div class="alert alert-danger alert-custom" role="alert">
        <strong><?php echo $_SESSION['no_email']; ?></strong>
      </div>
    <?php endif; ?>

    <form class="p-5 card login-card-custom" method="post" action="login_db.php">
      <div class="form-outline mb-3">
        <label class="form-label" for="form1Example1">อีเมล์</label>
        <input type="text" name="email" id="form1Example1" class="form-control" value="<?php if(isset($_SESSION['email'])) {echo $_SESSION['email'];} ?>" required />
      </div>

      <div class="form-outline mb-3">
        <label class="form-label" for="form1Example2">รหัสผ่าน</label>
        <input type="password" name="password" id="form1Example2" class="form-control" required />
      </div>

      <button type="submit" name="submit" class="btn login-btn-blue btn-block text-white">เข้าสู่ระบบ</button>

    </form>
  </div>

  <script src="node_modules/jquery/dist/jquery.min.js"></script>
  <script src="node_modules/bootstrap/dist/js/bootstrap.bundle.js"></script>
  <script src="node_modules/sweetalert2/dist/sweetalert2.all.min.js"></script>

</body>

</html>

<?php
if (isset($_SESSION['wrong_pw']) || isset($_SESSION['no_email']) || isset($_SESSION['email'])){
    unset($_SESSION['wrong_pw']);
    unset($_SESSION['no_email']);
    unset($_SESSION['email']);
}
?>