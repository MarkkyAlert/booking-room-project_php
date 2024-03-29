<nav class="navbar navbar-expand-lg navbar-light bg-white shadow-sm">
    <div class="container">
        <a class="navbar-brand" href="#">
            <img src="../assets/img/logo.png" alt="" width="30"> MARKPRUET      <!-- ใส่ logo ตรงนี้ -->
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse d-block" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0  " style="line-height: 2.5;">
                <li class="nav-item border-custom">
                    <a class="me-4 link-custom text-decoration-none " href="#">หน้าหลัก</a>
                </li>
                <li class="nav-item border-custom">
                    <a class="me-4 link-custom text-decoration-none" href="#">บริการ</a>
                </li>
                <li class="nav-item border-custom">
                    <a class="me-4 link-custom text-decoration-none" href="#">ราคา</a>
                </li>
                <li class="nav-item border-custom">
                    <a class="me-4 link-custom text-decoration-none" href="#">ติดต่อ</a>
                </li>
                <li class="nav-item border-custom">
                    <a class="me-4 link-custom text-decoration-none" href="#">การจองของฉัน</a>
                </li>

                <?php if (isset($_SESSION['is_logged_in'])) : ?>    <!-- ตรวจสอบว่ามีสถานะ login หรือไม่ ถ้ามีให้แสดง email ในส่วนของ navbar -->
                <li class="nav-item dropdown">
                    <a class="link-custom dropdown-toggle text-decoration-none" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <?php echo $_SESSION['email_login']; ?>
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="../logout.php">ออกจากระบบ</a></li> 
                    </ul>
                </li>
                <?php endif; ?>
                <?php if (!isset($_SESSION['is_logged_in'])) : ?> <!-- ถ้าไม่มีสถานะ login ให้แสดงว่า เข้าสู่ระบบ ในส่วนของ navbar -->
                    <li class="nav-item border-custom">
                    <a class="me-4 link-custom text-decoration-none" href="#">เข้าสู่ระบบ</a>
                </li>
                <?php endif; ?>
            </ul>
        </div>
    </div>
</nav>