<?php 
include('../config/connection.php');
include('../config/functions.php');
session_start();

if (isset($_POST['submit'])) {
    $csvMimes = array('text/x-comma-separated-values', 'text/comma-separated-values', 'application/octet-stream', 'application/vnd.ms-excel', 'application/x-csv', 'text/x-csv', 'application/csv', 'application/excel', 'application/vnd.msexcel', 'text-plain');

    if (!empty($_FILES['file']['name']) && in_array($_FILES['file']['type'], $csvMimes)) {
        if (is_uploaded_file($_FILES['file']['tmp_name'])) {
            $csvFile = fopen($_FILES['file']['tmp_name'], 'r');
            fgetcsv($csvFile);
            
            while ($column = fgetcsv($csvFile)) {
                $product_id = $column[0];
                $product_name = $column[1];
                $price = $column[2];
                $status = $column[3];
            }
            $select_stmt = $db->prepare("SELECT COUNT(product_id) AS count_product_id FROM products WHERE product_id = :product_id");
            $select_stmt->bindParam(':product_id', $product_id);
            $select_stmt->execute();
            $row = $select_stmt->fetch(PDO::FETCH_ASSOC);

            if ($row['count_product_id'] > 0) {
                $update_stmt = $db->prepare("UPDATE products SET product_name = :product_name, price = :price, status = :status WHERE product_id = :product_id");
                $update_stmt->bindParam(':product_name', $product_name);
                $update_stmt->bindParam(':price', $price);
                $update_stmt->bindParam(':status', $status);
                $update_stmt->bindParam(':product_id', $product_id);
                $update_stmt->execute();
            }
            else {
                $insert_stmt = $db->prepare("INSERT INTO products (product_name, price, status) VALUES (:product_name, :price, :status)");
                $insert_stmt->bindParam(':product_name', $product_name);
                $insert_stmt->bindParam(':price', $price);
                $insert_stmt->bindParam(':status', $status);
                $insert_stmt->execute();
            }
        }
    }
    else {
        $_SESSION['err_file'] = "กรุณาเลือกไฟล์นามสกุล csv";
        redirect('importcsv_form.php');
    }
}
