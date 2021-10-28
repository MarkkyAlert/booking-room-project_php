<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>หน้าแรก</title>
    <link rel="stylesheet" href="../node_modules/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../node_modules/@fortawesome/fontawesome-free/css/all.min.css">
    <link rel="stylesheet" href="../assets/css/style.css">
</head>

<body>
    <?php include('../includes/navbar.php'); ?>

    <div class="container">
        <h2 class="mt-5 mb-5">รายละเอียดการชำระเงิน</h2>

        <div class="row">
            <div class="col-md-12">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">รูป</th>
                            <th scope="col">รายการ</th>
                            <th scope="col">รายละเอียด</th>
                            <th scope="col">ประเภท</th>
                            <th scope="col">ราคา</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">1</th>
                            <td>Mark</td>
                            <td>Otto</td>
                            <td>@mdo</td>
                            <td>@mdo</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

        <div class="row mt-5">
            <div class="col-md-4 text-center">
                <img class="img-fluid" src="https://scontent.xx.fbcdn.net/v/t1.15752-9/p280x280/183927437_470955094182824_2391033797441580820_n.jpg?_nc_cat=102&ccb=1-5&_nc_sid=ae9488&_nc_ohc=BvijJusPc2UAX8DKuBC&_nc_ad=z-m&_nc_cid=0&_nc_ht=scontent.xx&oh=647805319d6f544aa6de08a5270699fe&oe=619F7C90"  alt="">
            </div>
            <div class="col-md-8 mt-md-0 mt-5">
                <form action="">
                    <label class="form-label" for="customFile">หลักฐานการชำระเงิน</label>
                    <input type="file" class="form-control" id="customFile" />
                    <div class="text-center">
                        <button type="submit" class="btn btn-info text-white mb-4 mt-4">ชำระเงิน</button>
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