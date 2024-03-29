<?php

// helper function

function redirect($location) {
    header("location: $location");
}


// Register function
function checkPassword($password, $confirm_password) {
    if ($password != $confirm_password) {
        return false;
    }
    else {
        return true;
    }
}

function isEmailExist($email) {
    include('connection.php');
    $select_stmt = $db->prepare("SELECT COUNT(email) AS count_email FROM users WHERE email = :email");
    $select_stmt->bindParam(':email', $email);
    $select_stmt->execute();
    $row = $select_stmt->fetch(PDO::FETCH_ASSOC);
    if ($row['count_email'] != 0) {
        return $row['count_email'];
    }
    else {
        return $row['count_email'];
    }
}

function encryptPassword($password) {
    $password = password_hash($password, PASSWORD_DEFAULT);
    return $password;
}

function createUser($firstname, $lastname, $email, $phone, $password, $role) {
    include('connection.php');
    $insert_stmt = $db->prepare("INSERT INTO users (firstname, lastname, email, phone, password, role) VALUES (:firstname, :lastname, :email, :phone, :password, :role)");
    $insert_stmt->bindParam(':firstname', $firstname);
    $insert_stmt->bindParam('lastname', $lastname);
    $insert_stmt->bindParam(':email', $email);
    $insert_stmt->bindParam(':phone', $phone);
    $insert_stmt->bindParam(':password', encryptPassword($password));
    $insert_stmt->bindParam(':role', $role);
    $insert_stmt->execute();

    if (!$insert_stmt) {
        return false;
    }
    else {
        return true;
    }
}


// Login function
function readUserPassword($email) {
    include('connection.php');
    $select_stmt = $db->prepare("SELECT password FROM users WHERE email = :email");
    $select_stmt->bindParam(':email', $email);
    $select_stmt->execute();
    $row = $select_stmt->fetch(PDO::FETCH_ASSOC);
    return $row['password'];
}

function readRoleUser($email) {
    include('connection.php');
    $select_stmt = $db->prepare("SELECT role FROM users WHERE email = :email");
    $select_stmt->bindParam(':email', $email);
    $select_stmt->execute();
    $row = $select_stmt->fetch(PDO::FETCH_ASSOC);
    return $row['role'];
}

function verifyPassword($password, $email) {
    
    if (password_verify($password, readUserPassword($email))) {
        return true;
    }
    else {
        return false;
    }
}


