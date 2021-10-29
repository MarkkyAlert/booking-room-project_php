<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../node_modules/bootstrap/dist/css/bootstrap.min.css">
</head>

<body>
    <?php if (isset($_SESSION['err_file'])) : ?>
        <div class="alert alert-danger alert-custom" role="alert">
            <strong><?php echo $_SESSION['err_file']; ?></strong>
        </div>
    <?php endif; ?>
    <form action="importcsv_db.php" method="post" enctype="multipart/form-data">
        <input type="file" name="file">
        <button type="submit" name="submit">dfsfd</button>
    </form>
</body>

</html>