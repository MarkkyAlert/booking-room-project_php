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
        <h2 class="mt-5 mb-5">รายละเอียดการจอง</h2>

        <div class="row">
            <div class="col-md-12">
                <div class="table-responsive">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th scope="col">รูป</th>
                                <th scope="col">รายการ</th>
                                <th scope="col">รายละเอียด</th>
                                <th scope="col">ประเภท</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">1</th>
                                <td>Mark</td>
                                <td>Otto</td>
                                <td>@mdo</td>
                            </tr>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="row mt-5">
            <div class="col-md-4">
                <div class="row">
                    <div class="col-md-12">
                        <div class="box" style="display:flex;">
                            <div style="flex-basis: 20%;">
                                <img src="../assets/img/location.png" class="w-50" alt="">
                            </div>
                            <div>
                                <h4>Location</h4>
                                <p>A108 Adam Street, New York, NY 535022</p>
                            </div>
                        </div>
                        <div class="box" style="display:flex;">
                            <div style="flex-basis: 20%;">
                                <img src="../assets/img/email.png" class="w-50" alt="">
                            </div>
                            <div>
                                <h4>Email</h4>
                                <p>A108 Adam Street, New York, NY 535022</p>
                            </div>
                        </div>
                        <div class="box" style="display:flex;">
                            <div style="flex-basis: 20%;">
                                <img src="../assets/img/call.png" class="w-50" alt="">
                            </div>
                            <div>
                                <h4>Tel</h4>
                                <p>A108 Adam Street, New York, NY 535022</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-8">
                <form action="my_booking.php">
                    <div class="row mb-4">
                        <div class="col-md-4">
                            <div class="form-outline">
                                <label class="form-label" for="form3Example1">ชื่อ</label>
                                <input type="text" id="form3Example1" class="form-control" />
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-outline">
                                <label class="form-label" for="form3Example1">เบอร์ติดต่อ</label>
                                <input type="text" id="form3Example1" class="form-control" />
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-outline">
                                <label class="form-label" for="form3Example2">อีเมล์</label>
                                <input type="text" id="form3Example2" class="form-control" />
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <p>ตั้งแต่</p>
                            <div class="form-outline mb-4">
                                <input type="date" id="form3Example3" class="form-control" />
                            </div>
                        </div>
                        <div class="col-md-6">
                            <p>สิ้นสุด</p>
                            <div class="form-outline mb-4">
                                <input type="date" id="form3Example3" class="form-control" />
                            </div>
                        </div>
                    </div>

                    <div class="form-outline mb-4">
                        <label class="form-label" for="textAreaExample">หมายเหตุ</label>
                        <textarea class="form-control" id="textAreaExample" rows="4"></textarea>
                    </div>
                    <div class="text-center">
                    <button type="submit" class="btn btn-info text-white mb-4">จอง</button>
                    </div>

                </form>
            </div>
        </div>
    </div>

    <?php include('../includes/footer.php'); ?>

    <script src="../node_modules/jquery/dist/jquery.min.js"></script>
    <script src="../node_modules/bootstrap/dist/js/bootstrap.bundle.js"></script>
    <script src="../node_modules/sweetalert2/dist/sweetalert2.all.min.js"></script>
</body>

</html>