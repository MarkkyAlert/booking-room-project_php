<?php
    include('../config/functions.php');
    session_start();
    
    if (!isset($_SESSION['is_logged_in'])) {
        redirect("../login.php");
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>หน้าแรก</title>
    <link rel="stylesheet" href="../node_modules/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../node_modules/@fortawesome/fontawesome-free/css/all.min.css">
    <link rel="stylesheet" href="../assets/css/styles.css">
</head>

<body>
    <?php include('../includes/navbar.php'); ?>

    <div class="container">
        <h2 class="mt-5 mb-5">เลือกหมวดหมู่ห้องพัก</h2>

        <div class="row">
            <div class="col-md-3">
                <div class="card">
                    <div class="card shadow-sm" style="width: 100%;">
                        <a href="booking2.php">
                            <img src="../assets/img/room1.jpg" class="card-img-top" alt="...">
                        </a>
                        <div class="card-body">
                            <h5 class="card-title text-center">หมวดหมู่ 1</h5>

                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card">
                    <div class="card shadow-sm" style="width: 100%;">
                        <img src="../assets/img/room1.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title text-center">หมวดหมู่ 1</h5>

                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card">
                    <div class="card shadow-sm" style="width: 100%;">
                        <img src="../assets/img/room1.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title text-center">หมวดหมู่ 1</h5>

                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card">
                    <div class="card shadow-sm" style="width: 100%;">
                        <img src="../assets/img/room1.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title text-center">หมวดหมู่ 1</h5>

                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row mt-5">
            <div class="col-md-3">
                <div class="card">
                    <div class="card shadow-sm" style="width: 100%;">
                        <img src="../assets/img/room1.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title text-center">หมวดหมู่ 1</h5>

                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card">
                    <div class="card shadow-sm" style="width: 100%;">
                        <img src="../assets/img/room1.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title text-center">หมวดหมู่ 1</h5>

                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card">
                    <div class="card shadow-sm" style="width: 100%;">
                        <img src="../assets/img/room1.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title text-center">หมวดหมู่ 1</h5>

                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card">
                    <div class="card shadow-sm" style="width: 100%;">
                        <img src="../assets/img/room1.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title text-center">หมวดหมู่ 1</h5>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php include('../includes/footer.php'); ?>

    <script src="../node_modules/jquery/dist/jquery.min.js"></script>
    <script src="../node_modules/bootstrap/dist/js/bootstrap.bundle.js"></script>
    <script src="../node_modules/sweetalert2/dist/sweetalert2.all.min.js"></script>
</body>

</html>