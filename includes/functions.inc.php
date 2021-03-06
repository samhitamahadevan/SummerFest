<?php

function emptyInputSignup($name, $role, $college, $branch, $email, $pwd, $pwdrepeat) {
    $result; 
    if(empty($name) || empty($role) || empty($college) || empty($branch) || empty($email) || empty($pwd) || empty($pwdrepeat)) {
        $result = true; 
    }
    else {
        $result = false; 
    }

    return $result; 
}

function invalidEmail($email) {
    $result; 
    if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $result = true; 
    }
    else {
        $result =false; 
    }

    return $result;
}

function pwdDontMatch($pwd, $pwdrepeat) {
    $result; 
    if($pwd !== $pwdrepeat) {
        $result = true; 
    }
    else {
        $result = false; 
    }

    return $result; 
}

function emailRegistered($conn, $email) {
    $sql = "SELECT * FROM users WHERE usersEmail = ?;"; 
    $stmt = mysqli_stmt_init($conn); 

    if(!mysqli_stmt_prepare($stmt, $sql)) {
        header("location: ../signup.php?error=stmtfailed"); 
        exit(); 
    }

    mysqli_stmt_bind_param($stmt, "s", $email); 
    mysqli_stmt_execute($stmt); 

    $resultData = mysqli_stmt_get_result($stmt); 

    if($row = mysqli_fetch_assoc($resultData)) {
        return $row; 
    }

    else {
        $result = false; 
        return $result; 
    }

    mysqli_stmt_close($stmt); 

}

function createUser($conn, $name, $email, $role, $college, $branch, $pwd) {
    $sql = "INSERT INTO users (usersName, usersEmail, usersPwd, usersRole, usersCollege, usersBranch) VALUES (?, ?, ?, ?, ?, ?);"; 
    $stmt = mysqli_stmt_init($conn); 

    if(!mysqli_stmt_prepare($stmt, $sql)) {
        header("location: ../signup.php?error=stmtfailed"); 
        exit(); 
    }

    mysqli_stmt_bind_param($stmt, "ssssss", $name, $email, $pwd, $role, $college, $branch); 
    mysqli_stmt_execute($stmt); 

    mysqli_stmt_close($stmt); 

    header("location: ../signup.php?error=none"); 
    exit(); 

}

function emptyInputLogin($email, $pwd) {

    $result; 
    if(empty($email) || empty($pwd)) {
        $result = true; 
    }
    else {
        $result = false; 
    }

    return $result; 

}

function loginUser($conn, $email, $pwd) { 
    $emailExists = emailRegistered($conn, $email);
    
    if($emailExists == false) {
        header("location: ../login.php?error=invalidemail");
        exit(); 
    }

    if($pwd == $emailExists["usersPwd"]) {
        $checkPwd = true; 
    }
    else{
        $checkPwd = false; 
    }

    if($checkPwd == false) {
        header("location: ../login.php?error=wrongpwd"); 
        exit(); 
    }

    else if($checkPwd == true) {
        session_start(); 
        $_SESSION["userid"] = $emailExists["usersId"]; 
        $_SESSION["username"] = $emailExists["usersName"]; 
        $_SESSION["email"] = $emailExists["usersEmail"]; 

        header("location: ../index.php"); 
        exit(); 
    }
}