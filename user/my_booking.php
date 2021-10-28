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
        <div class="container">
            <h2 class="mt-5">รายละเอียดการจอง</h2>
            <div class="form-outline ms-md-auto w-100">
                <label class="form-label" for="myInput">ค้นหา</label>
                <input type="text" id="myInput" class="form-control" />
            </div>
            <div class="table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                            <th>รูป</th>
                            <th>ชื่อ</th>
                            <th>ติดต่อ</th>
                            <th>รายการ</th>
                            <th>วันที่จอง</th>
                            <th>สิ้นสุด</th>
                            <th>รายละเอียด</th>
                            <th>รายละเอียด</th>
                        </tr>
                    </thead>
                    <tbody id="myTable">
                        <tr>
                            <td>Homer</td>
                            <td>Homer</td>
                            <td>Simpson</td>
                            <td>Simpson</td>
                            <td>Simpson</td>
                            <td>Simpson</td>
                            <td>Homer@jQueryScript.Net</td>
                            <td>
                                <a class="btn btn-warning text-white mb-md-0 mb-2 link-responsive" data-bs-toggle="modal" data-bs-target="#exampleModal">รายละเอียด</a>
                                <a href="payment.php" class="btn btn-info text-white mb-md-0 mb-2 link-responsive">ชำระเงิน</a>
                                <a class="btn btn-danger mb-md-0 mb-2 link-responsive">ยกเลิก</a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" style="max-width: 800px;">
            <div class="modal-content">
                <div class="modal-header">

                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body" style="display:flex; justify-content:center;">
                    <img src="../assets/img/room1.jpg" width="200">
                </div>
                <div class="modal-body">
                    <p>รหัสรายการ</p>
                    <p>ชื่อรายการ</p>
                    <p>ประเภท</p>
                    <p>รายละเอียด</p>

                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>เลขที่การจอง</th>
                                    <th>ชื่อ-นามสกุล</th>
                                    <th>เบอร์ติดต่อ</th>
                                    <th>วันที่จอง</th>
                                    <th>วันที่สิ้นสุด</th>
                                </tr>
                            </thead>
                            <tbody id="myTable">
                                <tr>
                                    <td>Homer</td>
                                    <td>Homer</td>
                                    <td>Simpson</td>
                                    <td>Simpson</td>
                                    <td>Simpson</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    

    <?php include('../includes/footer.php'); ?>

    <script src="../node_modules/jquery/dist/jquery.min.js"></script>
    <script src="../node_modules/bootstrap/dist/js/bootstrap.bundle.js"></script>
    <script src="../node_modules/sweetalert2/dist/sweetalert2.all.min.js"></script>
    
    <script>
        $(document).ready(function() {
            $("#myInput").on("keyup", function() {
                var value = $(this).val().toLowerCase();
                $("#myTable tr").filter(function() {
                    $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
                });
            });
        });
    </script>
</body>

</html>